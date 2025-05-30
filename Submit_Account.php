<?php

include 'DB_Connect.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$password = $_POST['password'];

$sql = "insert INTO user_account_table
        (First_Name, Last_Name, Date_of_Birth, Email_Address, Phone_Number, Gender, Home_Address, Password)  
        VALUES('$fname', '$lname', '$dob', '$email', '$phone', '$gender', '$address', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Account Created Successfully!');
            window.location.href = 'User_Login.php';
        </script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>