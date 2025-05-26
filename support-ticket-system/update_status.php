<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ticket_id = $_POST['ticket_id'];
    $status = $_POST['status'];

    $stmt = $conn->prepare("UPDATE tickets SET status=? WHERE id=?");
    $stmt->bind_param("si", $status, $ticket_id);
    $stmt->execute();

    header("Location: admin.php");
    exit;
}
?>
