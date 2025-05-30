<?php

session_start(); 

include 'DB_Connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user_account_table WHERE Email_Address='$email' AND Password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); 
    $_SESSION['User_ID'] = $row['ID']; 

    echo "<script>
        alert('Login successful'); 
        window.location.href='Dashboard.php';
    </script>";
} 
else {
    echo "<script>
        alert('Invalid Email or Password!'); 
        window.location.href='User_Login.php';
    </script>";
}

?>