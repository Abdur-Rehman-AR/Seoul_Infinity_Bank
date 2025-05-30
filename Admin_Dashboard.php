<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="SIB logo.png">

    <style>
        body {
            background-image: url('w2.jpg');
            background-size: cover;
            background-attachment: fixed;
            color: white;
        }

        h1 {
            font-family: 'Georgia';
            text-align: center;
            font-size: 70px;
            margin: 5% 0 8%;
            color: white;
            text-shadow: 2px 2px 4px black;
        }

        .section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 10%;
            background-color: rgba(255, 0, 0, 0.42);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
        }

        .section:nth-child(even) {
            flex-direction: row-reverse;
        }

        .section img {
            width: 30%;
            height: 300px;
            object-fit: cover;
        }

        .section-content {
            width: 50%;
            text-align: center;
            padding: 10px;
        }

        .section-content h2 {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .section-content a {
            display: inline-block;
            padding: 12px 25px;
            background-color: #007bff;
            color: white;
            font-size: 20px;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .section-content a:hover {
            background-color:rgb(255, 0, 0);
        }
    </style>
</head>

<body>

    <?php include 'Admin_Navigation_bar.php'; ?>

    <h1>Welcome Back, Admin!</h1>

    <div class="section">
        <img src="system overview.jfif" alt="System Overview">
        <div class="section-content">
            <h2>System Overview</h2>
            <a href="System_Overview.php" target="_blank">Go to Overview</a>
        </div>
    </div>

    <div class="section">
        <img src="view user.jfif" alt="View User">
        <div class="section-content">
            <h2>View Users</h2>
            <a href="View_User.php" target="_blank">Go to Users</a>
        </div>
    </div>

    <div class="section">
        <img src="assign role.jfif" alt="Assign Role">
        <div class="section-content">
            <h2>Assign Roles</h2>
            <a href="Assign_Role.php" target="_blank">Assign Now</a>
        </div>
    </div>

    <div class="section">
        <img src="delete account.jfif" alt="Delete Account">
        <div class="section-content">
            <h2>Delete Account</h2>
            <a href="Delete_Account.php" target="_blank">Delete Now</a>
        </div>
    </div>

    <?php include 'Footer.php'; ?>

</body>

</html>