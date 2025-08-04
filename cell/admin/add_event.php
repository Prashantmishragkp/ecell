<?php
include 'config.php';

if (isset($_POST['submit'])) {
    // Fetch form inputs
    $title = $_POST['title'];
    $event_date = $_POST['event_date'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $registration_link = $_POST['registration_link'];

    // Upload image
    $imagePath = '';
    if (!empty($_FILES['image']['name'])) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        $imagePath = $targetDir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath);
    }

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO events (title, event_date, location, description, image, registration_link) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $title, $event_date, $location, $description, $imagePath, $registration_link);

    if ($stmt->execute()) {
        echo "<script>alert('Event added successfully!'); window.location.href = 'events.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Event | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Add New Event</h2>
    <form action="add_event.php" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm bg-white">

        <div class="mb-3">
            <label for="title" class="form-label">Event Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="event_date" class="form-label">Event Date & Time:</label>
            <input type="datetime-local" class="form-control" id="event_date" name="event_date" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location:</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Event Image:</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="registration_link" class="form-label">Registration Link (Google Form or any):</label>
            <input type="url" class="form-control" id="registration_link" name="registration_link" placeholder="https://example.com/form">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Add Event</button>
    </form>
</div>
</body>
</html>
