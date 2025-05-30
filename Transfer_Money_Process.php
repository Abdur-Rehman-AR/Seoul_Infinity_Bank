<?php
session_start();
include 'DB_Connect.php';

$userID = $_SESSION['User_ID'];
$transferAmount = $_POST['transfer'];
$recipientID = $_POST['rec_id'];

if (!is_numeric($transferAmount) || $transferAmount <= 0) {
    echo "<script>
        alert('Invalid Transfer Amount. Please enter a positive number.');
        window.location.href = 'Transfer_Money.php';
    </script>";
    exit();
}

if (!is_numeric($recipientID) || $recipientID <= 0) {
    echo "<script>
        alert('Invalid Recipient User ID.');
        window.location.href = 'Transfer_Money.php';
    </script>";
    exit();
}

$conn->begin_transaction();

try {
    $checkBalanceSql = "SELECT Balance FROM user_account_table WHERE ID = ?";
    $checkBalanceStmt = $conn->prepare($checkBalanceSql);
    $checkBalanceStmt->bind_param('i', $userID);
    $checkBalanceStmt->execute();
    $checkBalanceStmt->bind_result($currentBalance);
    $checkBalanceStmt->fetch();
    $checkBalanceStmt->close();

    if ($transferAmount > $currentBalance) {
        echo "<script>
            alert('Insufficient balance.');
            window.location.href = 'Transfer_Money.php';
        </script>";
        exit();
    }

    $checkRecipientSql = "SELECT ID FROM user_account_table WHERE ID = ?";
    $checkRecipientStmt = $conn->prepare($checkRecipientSql);
    $checkRecipientStmt->bind_param('i', $recipientID);
    $checkRecipientStmt->execute();
    $checkRecipientStmt->store_result();

    if ($checkRecipientStmt->num_rows === 0) {
        echo "<script>
            alert('Recipient does not exist.');
            window.location.href = 'Transfer_Money.php';
        </script>";
        exit();
    }
    $checkRecipientStmt->close();

    $transactionSql = "INSERT INTO transaction_table (User_ID, Transaction_Type, Amount, Status, Receiver_ID) 
                       VALUES (?, 'Transfer', ?, 'Success', ?)";
    $transactionStmt = $conn->prepare($transactionSql);
    $transactionStmt->bind_param('idi', $userID, $transferAmount, $recipientID);
    $transactionStmt->execute();

    $updateSenderSql = "UPDATE user_account_table SET Balance = Balance - ? WHERE ID = ?";
    $updateSenderStmt = $conn->prepare($updateSenderSql);
    $updateSenderStmt->bind_param('di', $transferAmount, $userID);
    $updateSenderStmt->execute();

    $updateRecipientSql = "UPDATE user_account_table SET Balance = Balance + ? WHERE ID = ?";
    $updateRecipientStmt = $conn->prepare($updateRecipientSql);
    $updateRecipientStmt->bind_param('di', $transferAmount, $recipientID);
    $updateRecipientStmt->execute();

    $conn->commit();

    echo "<script>
        alert('Transfer Successful!');
        window.location.href = 'Dashboard.php';
    </script>";
} catch (Exception $e) {
    $conn->rollback();
    echo "<script>
        alert('Transfer Failed. Try again.');
        window.location.href = 'Transfer_Money.php';
    </script>";
}

$transactionStmt->close();
$updateSenderStmt->close();
$updateRecipientStmt->close();
$conn->close();
?>