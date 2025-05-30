<?php

session_start();
include 'DB_Connect.php';

$userID = $_SESSION['User_ID'];
$feedback = $_POST['feedback'];

if (!empty($feedback)) {
    $stmt = $conn->prepare("INSERT INTO feedback_table (feedback_text, user_id) VALUES (?, ?)");
    $stmt->bind_param("si", $feedback, $userID);

    if ($stmt->execute()) {
        echo "<script>alert('Feedback submitted successfully!'); 
        window.location.href='Dashboard.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Feedback cannot be empty.";
}

$conn->close();
?>