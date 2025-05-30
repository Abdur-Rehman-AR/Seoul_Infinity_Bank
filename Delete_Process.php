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
        $deleteTransactions = $conn->prepare("DELETE FROM transaction_table WHERE User_ID = ? OR Receiver_ID = ?");
        $deleteTransactions->bind_param("ii", $id, $id);
        $deleteTransactions->execute();

        // Step 3: Delete user account
        $deleteUser = $conn->prepare("DELETE FROM user_account_table WHERE ID = ? AND Email_Address = ?");
        $deleteUser->bind_param("is", $id, $email);
        $deleteUser->execute();

        echo "<script>
            alert('User account and all related transactions deleted successfully!');
            window.location.href = 'Admin_Dashboard.php';
        </script>";
    } else {
        echo "<script>
            alert('Invalid User ID or Email Address!');
            window.location.href = 'Delete_Account.php';
        </script>";
    }
}
?>