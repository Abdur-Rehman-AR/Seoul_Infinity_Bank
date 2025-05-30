<?php
session_start();
include 'DB_Connect.php';

$userID = $_SESSION['User_ID'];
$depositAmount = $_POST['deposit'];

if (!is_numeric($depositAmount) || $depositAmount <= 0) {
    echo "<script>
        alert('Invalid deposit amount. Please enter a positive number.');
        window.location.href = 'Deposit_Money.php';
    </script>";
    exit();
}

$conn->begin_transaction();

try {
    $sql = "INSERT INTO transaction_table (User_ID, Transaction_Type, Amount, Status) 
            VALUES (?, 'Deposit', ?, 'Success')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('id', $userID, $depositAmount);
    $stmt->execute();

    $updateSql = "UPDATE user_account_table SET Balance = Balance + ? WHERE ID = ?";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bind_param('di', $depositAmount, $userID);
    $updateStmt->execute();

    $conn->commit();

    echo "<script>
        alert('Deposit Successful!');
        window.location.href = 'Dashboard.php';
    </script>";
} catch (Exception $e) {
    $conn->rollback();
    echo "<script>
        alert('Deposit Failed. Try again.');
        window.location.href = 'Deposit_Money.php';
    </script>";
}

$stmt->close();
$updateStmt->close();
$conn->close();
?>