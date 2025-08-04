<?php
$eventId = $_GET['event_id'] ?? 0;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register for Event</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container my-5">
    <h2 class="mb-4">Register for Event #<?= htmlspecialchars($eventId) ?></h2>
    <form method="post" action="submit_registration.php" class="card p-4 shadow-sm bg-white">
      <input type="hidden" name="event_id" value="<?= htmlspecialchars($eventId) ?>">
      <div class="mb-3">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit Registration</button>
    </form>
  </div>
</body>
</html>
