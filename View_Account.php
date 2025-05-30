<?php
session_start();
if (!isset($_SESSION['User_ID'])) {
    header("Location: User_Login.php");
    exit();
}

include 'DB_Connect.php';

$user_id = $_SESSION['User_ID'];
$sql = "SELECT ID, First_Name, Last_Name, Date_of_Birth, Email_Address, Phone_Number, Gender, Home_Address, Balance 
FROM user_account_table WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$full_name = $user_id = $dob = $phone = $gender = $balance = $email = $address = "";

if ($row = $result->fetch_assoc()) {
    $full_name = $row['First_Name'] . ' ' . $row['Last_Name'];
    $user_id = $row['ID'];
    $dob = $row['Date_of_Birth'];
    $phone = $row['Phone_Number'];
    $gender = $row['Gender'];
    $balance = $row['Balance'];
    $email = $row['Email_Address'];
    $address = $row['Home_Address'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Your Account</title>
    <link rel="icon" href="SIB logo.png">
    <style>
        body {
            background-image: url('w2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        form {
            background: linear-gradient(to right, navy, rgb(255, 0, 187));
            color: white;
            padding: 60px;
            margin: 5% auto 10%;
            width: 90%;
            min-height: 110px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
        }

        .form-title {
            text-align: center;
            color: white;
            padding-bottom: 30px;
            font-size: 50px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 100px;
            margin-bottom: 50px;
        }

        .field-group {
            flex: 1;
            min-width: 200px;
        }

        label {
            font-size: 20px;
            font-weight: bold;
            color: white;
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            border: 2px solid #00f0ff;
            border-radius: 6px;
            background-color: white;
            color: black;
            font-family: 'Segoe UI', sans-serif;
        }
    </style>
</head>
<body>

    <?php include 'Navigation_bar_2.php'; ?>

    <form>
        <h2 class="form-title">Your Personal Information</h2>

        <div class="row">
            <div class="field-group">
                <label for="full_name">Full Name</label>
                <input type="text" id="full_name" value="<?php echo htmlspecialchars($full_name); ?>" readonly>
            </div>
            <div class="field-group">
                <label for="user_id">User ID</label>
                <input type="text" id="user_id" value="<?php echo htmlspecialchars($user_id); ?>" readonly>
            </div>
            <div class="field-group">
                <label for="dob">Date of Birth</label>
                <input type="text" id="dob" value="<?php echo htmlspecialchars($dob); ?>" readonly>
            </div>
        </div>

        <div class="row">
            <div class="field-group">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" value="<?php echo htmlspecialchars($phone); ?>" readonly>
            </div>
            <div class="field-group">
                <label for="gender">Gender</label>
                <input type="text" id="gender" value="<?php echo htmlspecialchars($gender); ?>" readonly>
            </div>
            <div class="field-group">
                <label for="balance">Account Balance</label>
                <input type="text" id="balance" value="<?php echo htmlspecialchars($balance); ?>" readonly>
            </div>
        </div>

        <div class="row">
            <div class="field-group">
                <label for="email">Email Address</label>
                <input type="text" id="email" value="<?php echo htmlspecialchars($email); ?>" readonly>
            </div>
            <div class="field-group">
                <label for="address">Home Address</label>
                <input type="text" id="address" value="<?php echo htmlspecialchars($address); ?>" readonly>
            </div>
        </div>
    </form>

    <?php include 'Footer.php'; ?>
</body>
</html>