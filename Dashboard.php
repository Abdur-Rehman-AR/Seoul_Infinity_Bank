<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="icon" href="SIB logo.png">

    <style>
        body {
            background-image: url('w2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        #heading {
            font-size: 70px;
            color: white;
            text-align: center;
            margin: 50px 0 50px 0;
            font-family: 'Times New Roman';
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
            padding: 40px;
            max-width: 1200px;
            margin: 50px 0 20% 0;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 0 12px rgba(255, 255, 255, 0.2);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }

        .card button {
            margin-top: 15px;
            padding: 10px 20px;
            font-size: 20px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .card button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <?php include 'Navigation_bar_2.php'; ?>

    <h1 id="heading">Welcome to your Dashboard</h1>

    <div class="grid-container">

        <div class="card">
            <img src="view account.jfif" alt="View Account">
            <a href="View_Account.php" target="_blank"><button>View Account</button></a>
        </div>

        <div class="card">
            <img src="deposit.jfif" alt="Deposit Money">
            <a href="Deposit_Money.php" target="_blank"><button>Deposit Money</button></a>
        </div>

        <div class="card">
            <img src="withdrawal.jfif" alt="Withdraw Money">
            <a href="Withdraw_Money.php" target="_blank"><button>Withdraw Money</button></a>
        </div>

        <div class="card">
            <img src="transfer money.jfif" alt="Transfer Money">
            <a href="Transfer_Money.php" target="_blank"><button>Transfer Money</button></a>
        </div>

        <div class="card">
            <img src="tranaction history.jfif" alt="Transaction History">
            <a href="Transaction_History.php" target="_blank"><button>Transaction History</button></a>
        </div>

        <div class="card">
            <img src="change password.jfif" alt="Change Password">
            <a href="Change_password.php" target="_blank"><button>Change Password</button></a>
        </div>

        <div class="card">
            <img src="user feedback.jfif" alt="Feedback">
            <a href="Feedback.php" target="_blank"><button>Feedback</button></a>
        </div>

    </div>

    <?php include 'Footer.php'; ?>
</body>

</html>