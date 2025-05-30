<?php
session_start();
include 'DB_Connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM Admin_Login_Table WHERE Email = ? AND Password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $_SESSION['Admin_ID'] = $row['ID'];

        echo "<script>
            alert('Login successful');
            window.location.href = 'Admin_Dashboard.php';
        </script>";
    } else {
        echo "<script>
            alert('Invalid Email or Password!');
            window.location.href = 'Admin_Login.php';
        </script>";
    }
}
?>