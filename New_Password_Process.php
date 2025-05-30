<?php

include 'DB_Connect.php';

$Current_password = $_POST['Current_password'];
$New_password = $_POST['New_password'];

$sql = "UPDATE user_account_table SET Password = '$New_password' WHERE Password = '$Current_password'";
$result = $conn->query($sql);

if ($conn->affected_rows > 0) {
    echo "<script>
        alert('Password Changed Successfully'); 
        window.location.href='Dashboard.php';
    </script>";
} 
else {
    echo "<script>
        alert('Invalid Current Password!'); 
        window.location.href='Change_password.php';
    </script>";
}

?>