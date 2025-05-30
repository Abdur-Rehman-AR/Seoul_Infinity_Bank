<?php
include 'DB_Connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $email = $_POST['email'];

    $check = $conn->prepare("SELECT * FROM user_account_table WHERE ID = ? AND Email_Address = ?");
    $check->bind_param("is", $id, $email);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $password = $user['Password']; 

        $checkAdmin = $conn->prepare("SELECT * FROM admin_login_table WHERE Email = ?");
        $checkAdmin->bind_param("s", $email);
        $checkAdmin->execute();
        $adminResult = $checkAdmin->get_result();

        if ($adminResult->num_rows > 0) {
            echo "<script>
                alert('This user is already an admin.');
                window.location.href = 'Assign_Role.php';
            </script>";
        } else {
     
            $insert = $conn->prepare("INSERT INTO admin_login_table (Email, Password) VALUES (?, ?)");
            $insert->bind_param("ss", $email, $password);
            $insert->execute();

            echo "<script>
                alert('User has been assigned as Admin successfully!');
                window.location.href = 'Admin_Dashboard.php';
            </script>";
        }
    } else {
        echo "<script>
            alert('Invalid User ID or Email Address!');
            window.location.href = 'Assign_Role.php';
        </script>";
    }
}
?>