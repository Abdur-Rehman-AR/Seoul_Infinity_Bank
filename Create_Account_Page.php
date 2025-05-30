<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Account - Seoul Infinity Bank</title>
    <link rel="icon" href="SIB logo.png">

    <style>
        body {
            background-image: url('w3.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        #title {
            color: white;
            font-family: 'Georgia', serif;
            font-size: 50px;
            font-weight: bold;
            text-align: center;
            margin: 80px 0;
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
            font-size: 20px;
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
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid rgb(0, 225, 255);
            border-radius: 5px;
            font-family: Arial, sans-serif;
        }

        input[type="submit"] {
            background-color: rgb(144, 130, 72);
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            width: 107%;
            border-radius: 5px;
            font-size: 20px;
        }

        input[type="submit"]:hover {
            background-color: rgb(255, 3, 234);
        }

        .form-container {
            width: 80%;
            margin: 10% auto;
        }

        input[type="radio"] {
            margin-right: 20%;
            transform: scale(1.5);
        }

        .gender-option {
            width: 100%;
            display: flex;
            gap: 15px;
            padding: 5px 15px;
            border-radius: 5px;
            margin-bottom: 10% auto;
            color: black;
            background-color: white;
            border: 3px solid rgb(0, 225, 255);
            border-radius: 5px;
            font-family: Arial, sans-serif;
        }

        textarea#address {
            width: 100%;
            padding: 15px;
            font-size: 18px;
            border: 3px solid rgb(0, 225, 255);
            border-radius: 5px;
            resize: vertical;
            font-family: Arial, sans-serif;
            background-color: white;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        div#address {
            margin: 10% auto;
        }

        .toggle {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
        }

        .toggle input[type="checkbox"] {
            margin: 0;
            width: auto;
        }
    </style>
</head>

<body>

    <?php include 'Navigation_bar.php'; ?>

    <script>
        function togglePassword() {
            const pwd = document.getElementById("password");
            const confirm = document.getElementById("confirm");

            const type = pwd.type === "password" ? "text" : "password";

            pwd.type = type;
            confirm.type = type;
        }
    </script>

    <h1 id="title">
        Seoul Infinity Bank – Where South Korea’s Power Meets Your Secure
        Financial Future.
        <br><br>
        Create Your Account Now
    </h1>

    <div class="form-container">
        <form action="Submit_Account.php" method="POST" autocomplete="off">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" required>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" required>

            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" required>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" autocomplete="email" required>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="gender">Choose Gender</label>

            <div class="gender-option">

                <label for="male">Male</label>
                <input type="radio" id="male" name="gender" value="Male" required>

                <label for="female">Female</label>
                <input type="radio" id="female" name="gender" value="Female">

                <label for="other">Other</label>
                <input type="radio" id="other" name="gender" value="Other">

            </div>

            <div id="address">

                <label for="address">Home Address</label>
                <textarea id="address" name="address" rows="1" required></textarea>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm">Confirm Password:</label>
                <input type="password" id="confirm" name="confirm" required>

                <div class="toggle">
                    <input type="checkbox" id="show" onclick="togglePassword()">
                    <label for="show">Show Password</label>
                </div>

                <div class="toggle">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">I agree to the <a href="Terms_&_Conditions_Page.php" target="_blank" style="color: yellow;">Terms and Conditions</a></label>
                </div>

                <input type="submit" value="Create Account">

        </form>
    </div>

</body>

</html>