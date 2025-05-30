<?php
session_start();
include 'DB_Connect.php';

$userID = $_SESSION['User_ID'];
$withdrawAmount = $_POST['withdraw'];

if (!is_numeric($withdrawAmount) || $withdrawAmount <= 0) {
    echo "<script>
        alert('Invalid withdrawal amount. Please enter a positive number.');
        window.location.href = 'Withdraw_Money.php';
    </script>";
    exit();
}

$conn->begin_transaction();

try {
    $checkBalanceSql = "SELECT Balance FROM user_account_table WHERE ID = ?";
    $checkBalanceStmt = $conn->prepare($checkBalanceSql);
    $checkBalanceStmt->bind_param('i', $userID);
    $checkBalanceStmt->execute();
    $checkBalanceStmt->store_result();
    $checkBalanceStmt->bind_result($currentBalance);
    $checkBalanceStmt->fetch();
    $checkBalanceStmt->close();

    if ($withdrawAmount > $currentBalance) {
        echo "<script>
            alert('Insufficient balance.');
            window.location.href = 'Withdraw_Money.php';
        </script>";
        exit();
    }

    $sql = "INSERT INTO transaction_table (User_ID, Transaction_Type, Amount, Status) 
            VALUES (?, 'Withdrawal', ?, 'Success')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('id', $userID, $withdrawAmount);
    $stmt->execute();

    $updateSql = "UPDATE user_account_table SET Balance = Balance - ? WHERE ID = ?";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bind_param('di', $withdrawAmount, $userID);
    $updateStmt->execute();

    $conn->commit();

    echo "<script>
        alert('Withdrawal Successful!');
        window.location.href = 'Dashboard.php';
    </script>";
} catch (Exception $e) {
    $conn->rollback();
    echo "<script>
        alert('Withdrawal Failed. Try again.');
        window.location.href = 'Withdraw_Money.php';
    </script>";
}

$stmt->close();
$updateStmt->close();
$conn->close();
?>