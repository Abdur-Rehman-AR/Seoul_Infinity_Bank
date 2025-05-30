<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Withdraw Money</title>
    <link rel="icon" href="SIB logo.png">

    <style>

        body {
            background-image: url('w2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        #title {
            color: white;
            font-family: 'Georgia', serif;
            font-size: 50px;
            font-weight: bold;
            text-align: center;
            margin: 80px 0px;
        }

        form {
            background: linear-gradient(to right, navy, rgb(255, 0, 187));
            color: white;
            padding: 80px;
            margin: 0 auto 20%;
            width: 50%;
            border-radius: 10px;
        }

        label {
            font-size: 25px;
            display: block;
            margin: 30px 0px 10px;
            transition: color 0.4s ease;
        }

        label:hover {
            color: rgb(125, 162, 201);
        }

        input {
            font-size: 18px;
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 3px solid rgb(0, 225, 255);
            border-radius: 5px;
            font-family: Arial, sans-serif;
        }

        input[type="submit"] {
            background-color: rgb(144, 130, 72);
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            width: 107.5%;
            border-radius: 5px;
            font-size: 20px;
        }

        input[type="submit"]:hover {
            background-color: rgb(255, 3, 234);
        }

        .form-container {
            width: 70%;
            margin: 0% auto;
        }

    </style>
</head>

<body>

    <?php include 'Navigation_bar_2.php'; ?>

    <h1 id="title">
        Withdraw Money From Here
    </h1>

    <div class="form-container">
        <form action="Withdraw_Process.php" method="POST">

            <label for="withdraw">Enter the Amount: </label>
            <input type="text" id="withdraw" name="withdraw" required>

            <input type="submit" value="Withdraw">

        </form>
    </div>

    <?php include 'Footer.php'; ?>
</body>

</html>