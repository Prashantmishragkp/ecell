<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include 'config.php';

$registrations = $conn->query("
  SELECT r.*, e.title FROM registrations r
  JOIN events e ON r.event_id = e.id
  ORDER BY r.registered_at DESC
");
?>
<!DOCTYPE html>
<html>
<head>
  <title>View Registrations</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
  <h3>All Event Registrations</h3>
  <a href="dashboard.php" class="btn btn-secondary mb-3">← Back to Dashboard</a>
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Event</th>
        <th>Registered At</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = $registrations->fetch_assoc()): ?>
      <tr>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= htmlspecialchars($row['phone']) ?></td>
        <td><?= htmlspecialchars($row['title']) ?></td>
        <td><?= $row['registered_at'] ?></td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
</body>
</html>
