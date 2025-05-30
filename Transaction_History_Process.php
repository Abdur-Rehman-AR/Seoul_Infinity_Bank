<?php
session_start();
if (!isset($_SESSION['User_ID'])) {
    header("Location: User_Login.php");
    exit();
}

include 'DB_Connect.php';

$user_id = $_SESSION['User_ID'];

$sql = "SELECT Transaction_ID, Transaction_Type, Amount, Receiver_ID, Transaction_Date, Status
        FROM transaction_table 
        WHERE User_ID = ?
        ORDER BY Transaction_Date DESC";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['Transaction_ID']}</td>
                <td>{$row['Transaction_Type']}</td>
                <td>{$row['Amount']}</td>
                <td>{$row['Receiver_ID']}</td>
                <td>{$row['Transaction_Date']}</td>
                <td>{$row['Status']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No transactions found.</td></tr>";
}

$conn->close();
?>