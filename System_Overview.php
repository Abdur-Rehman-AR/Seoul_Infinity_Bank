<?php
session_start();
if (!isset($_SESSION['Admin_ID'])) {
    header("Location: Admin_Login.php");
    exit();
}

include 'DB_Connect.php';

$sql = "SELECT 
    (SELECT COUNT(*) FROM user_account_table) AS total_users,
    (SELECT COUNT(DISTINCT ID) FROM user_account_table) AS total_accounts,
    (SELECT SUM(Amount) FROM transaction_table WHERE Transaction_Type = 'Deposit' AND Status = 'Success') AS total_deposit,
    (SELECT SUM(Amount) FROM transaction_table WHERE Transaction_Type = 'Withdrawal' AND Status = 'Success') AS total_withdrawal,
    (SELECT SUM(Amount) FROM transaction_table WHERE Transaction_Type = 'Transfer' AND Status = 'Success') AS total_transfer,
    (SELECT SUM(Balance) FROM user_account_table) AS total_balance,
    (SELECT COUNT(*) FROM transaction_table WHERE Status = 'Success') AS total_transactions,
    (SELECT COUNT(*) FROM user_account_table WHERE Gender = 'Male') AS total_males,
    (SELECT COUNT(*) FROM user_account_table WHERE Gender = 'Female') AS total_females";

$result = $conn->query($sql);
$stats = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin System Overview</title>
    <link rel="icon" href="SIB logo.png">
    <style>
        body {
            background: url('w2.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        form {
            background: linear-gradient(to right, navy, deeppink);
            color: white;
            padding: 60px;
            margin: 5% auto;
            width: 90%;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
        }

        .form-title {
            text-align: center;
            font-size: 60px;
            margin-bottom: 70px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            margin-bottom: 50px;
        }

        .field-group {
            flex: 1;
            min-width: 250px;
        }

        label {
            font-size: 20px;
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            border: 2px solid #00f0ff;
            border-radius: 6px;
            background-color: white;
            color: black;
        }
    </style>
</head>

<body>

    <?php include 'Navigation_bar_2.php'; ?>

    <form>
        <h2 class="form-title">Admin System Overview</h2>
        <div class="row">
            <div class="field-group">
                <label>Total Users</label>
                <input type="text" value="<?= $stats['total_users'] ?? 0 ?>" readonly>
            </div>
            <div class="field-group">
                <label>Total Accounts</label>
                <input type="text" value="<?= $stats['total_accounts'] ?? 0 ?>" readonly>
            </div>
            <div class="field-group">
                <label>Total Deposited Amount</label>
                <input type="text" value="<?= $stats['total_deposit'] ?? 0 ?>" readonly>
            </div>
        </div>
        <div class="row">
            <div class="field-group">
                <label>Total Withdrawn Amount</label>
                <input type="text" value="<?= $stats['total_withdrawal'] ?? 0 ?>" readonly>
            </div>
            <div class="field-group">
                <label>Total Transferred Amount</label>
                <input type="text" value="<?= $stats['total_transfer'] ?? 0 ?>" readonly>
            </div>
            <div class="field-group">
                <label>Total Balance in All Accounts</label>
                <input type="text" value="<?= $stats['total_balance'] ?? 0 ?>" readonly>
            </div>
        </div>
        <div class="row">
            <div class="field-group">
                <label>Total Transactions</label>
                <input type="text" value="<?= $stats['total_transactions'] ?? 0 ?>" readonly>
            </div>
            <div class="field-group">
                <label>Total Male Users</label>
                <input type="text" value="<?= $stats['total_males'] ?? 0 ?>" readonly>
            </div>
            <div class="field-group">
                <label>Total Female Users</label>
                <input type="text" value="<?= $stats['total_females'] ?? 0 ?>" readonly>
            </div>
        </div>
    </form>

    <?php require_once 'Footer.php'; ?>

</body>

</html>