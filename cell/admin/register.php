<?php
include 'config.php';

$events = $conn->query("SELECT * FROM events ORDER BY event_date DESC");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $event_id = $_POST['event_id'];
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];

    $stmt = $conn->prepare("INSERT INTO registrations (event_id, name, email, phone) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $event_id, $name, $email, $phone);
    $stmt->execute();

    $success = "Registration successful!";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Register for Event</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <h3>Register for an Event</h3>
  <?php if (isset($success)) echo "<div class='alert alert-success'>$success</div>"; ?>
  <form method="POST">
    <select name="event_id" class="form-select mb-3" required>
      <option value="">Select Event</option>
      <?php while ($event = $events->fetch_assoc()): ?>
        <option value="<?= $event['id'] ?>"><?= htmlspecialchars($event['title']) ?> (<?= $event['event_date'] ?>)</option>
      <?php endwhile; ?>
    </select>
    <input type="text" name="name" class="form-control mb-3" placeholder="Your Name" required>
    <input type="email" name="email" class="form-control mb-3" placeholder="Your Email" required>
    <input type="text" name="phone" class="form-control mb-3" placeholder="Phone Number" required>
    <button class="btn btn-primary">Submit Registration</button>
  </form>
</div>
</body>
</html>
