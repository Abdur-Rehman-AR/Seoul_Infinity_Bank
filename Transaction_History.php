<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="icon" href="SIB logo.png">
    <style>
        body {
            background-image: url('w2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .container {
            width: 98%;
            margin: 80px auto;
            padding: 10px;
            background: linear-gradient(to right, navy, rgb(255, 0, 187));
            border-radius: 10px;
        }

        .form-title {
            text-align: center;
            font-size: 50px;
            color: white;
            padding-bottom: 0px;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            margin: 0 auto 50px auto;
        }

        table, th, td {
            border: 3px solid white;
            text-align: left;
        }

        th, td {
            padding: 10px ;
            font-size: 20px;
            color: white;
        }

        th {
            background-color: #4b6cb7;
        }

        tr:hover {
            background-color:rgb(17, 17, 90);
        }
    </style>
</head>

<body>

    <?php include 'Navigation_bar_2.php'; ?>

    <div class="container">
        <h2 class="form-title">
            Transaction History
        </h2>

        <table>
            <thead>
                <tr>
                    <th>Transaction ID</th>
                    <th>Transaction Type</th>
                    <th>Amount</th>
                    <th>Receiver ID</th>
                    <th>Transaction Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="transaction_history">
            <?php include 'Transaction_History_Process.php'; ?>
            </tbody>
        </table>
    </div>

    <?php include 'Footer.php'; ?>

</body>

</html>