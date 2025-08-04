<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $location = $_POST['location'];
    $date = $_POST['event_date'];
    $register_link = $_POST['register_link'];

    $image = '';
    if ($_FILES['image']['name']) {
        $image = time() . '_' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "uploads/" . $image);
    }

    $stmt = $conn->prepare("INSERT INTO events (title, description, event_date, location, image, register_link) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $title, $desc, $date, $location, $image, $register_link);
    $stmt->execute();
    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Event</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h3>Add New Event</h3>
  <form method="POST" enctype="multipart/form-data">
    <input type="text" name="title" class="form-control mb-3" placeholder="Event Title" required>
    <textarea name="description" class="form-control mb-3" placeholder="Event Description" required></textarea>
    <input type="text" name="location" class="form-control mb-3" placeholder="Location" required>
    <input type="date" name="event_date" class="form-control mb-3" required>
    <input type="file" name="image" class="form-control mb-3">
    <input type="url" name="register_link" class="form-control mb-3" placeholder="Registration Link (Google Form, etc)">
    <button class="btn btn-primary">Add Event</button>
    <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>
</body>
</html>
