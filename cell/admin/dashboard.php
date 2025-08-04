<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include 'config.php';
$result = $conn->query("SELECT * FROM events ORDER BY event_date DESC");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
  <div class="d-flex justify-content-between mb-3">
    <h3>All Events</h3>
    <div>
      <a href="add_event.php" class="btn btn-success">+ Add Event</a>
      <a href="view_registrations.php" class="btn btn-info">View Registrations</a>
      <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
  </div>
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>Title</th>
        <th>Date</th>
        <th>Location</th>
        <th>Image</th>
        <th>Register Link</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= htmlspecialchars($row['title']) ?></td>
        <td><?= $row['event_date'] ?></td>
        <td><?= htmlspecialchars($row['location']) ?></td>
        <td>
          <?php if ($row['image']): ?>
            <img src="uploads/<?= $row['image'] ?>" width="80">
          <?php endif; ?>
        </td>
        <td>
          <?php if ($row['register_link']): ?>
            <a href="<?= $row['register_link'] ?>" target="_blank">Link</a>
          <?php endif; ?>
        </td>
        <td>
          <a href="delete_event.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this event?')">Delete</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
</body>
</html>
