<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $res = $conn->query("SELECT image FROM events WHERE id = $id");
    $row = $res->fetch_assoc();
    if ($row['image']) {
        unlink("uploads/" . $row['image']);
    }
    $conn->query("DELETE FROM events WHERE id = $id");
}
header("Location: dashboard.php");
