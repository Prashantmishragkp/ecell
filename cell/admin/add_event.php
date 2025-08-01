<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: ../login.php");
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $desc = $conn->real_escape_string($_POST['description']);
    $date = $_POST['event_date'];
    $location = $conn->real_escape_string($_POST['location']);
    $image = "";

    if (!empty($_FILES['image']['name'])) {
        $image = "uploads/" . time() . '_' . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], "../$image");
    }

    $conn->query("INSERT INTO events (title, description, event_date, location, image)
                  VALUES ('$title', '$desc', '$date', '$location', '$image')");
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Event</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h3>Add New Event</h3>
    <form method="POST" enctype="multipart/form-data">
        <input name="title" class="form-control mb-2" placeholder="Event Title" required>
        <textarea name="description" class="form-control mb-2" placeholder="Event Description" required></textarea>
        <input type="datetime-local" name="event_date" class="form-control mb-2" required>
        <input name="location" class="form-control mb-2" placeholder="Location">
        <input type="file" name="image" class="form-control mb-2">
        <button class="btn btn-success">Add Event</button>
        <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
