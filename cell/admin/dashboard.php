<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: ../login.php");

require '../config.php';
$events = $conn->query("SELECT * FROM events ORDER BY event_date DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-4">
    <h3>Admin Panel - Events</h3>
    <a href="add_event.php" class="btn btn-success mb-3">Add New Event</a>
    <a href="../logout.php" class="btn btn-secondary mb-3">Logout</a>

    <table class="table table-bordered bg-white">
        <thead>
            <tr>
                <th>Title</th><th>Date</th><th>Location</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $events->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['title']) ?></td>
                <td><?= $row['event_date'] ?></td>
                <td><?= htmlspecialchars($row['location']) ?></td>
                <td>
                    <a href="edit_event.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="delete_event.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this event?')" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</div>
</body>
</html>
