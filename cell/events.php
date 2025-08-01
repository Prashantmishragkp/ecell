<?php
// Database connection
$host = "localhost";
$user = "root";
$password = "";
$dbname = "ecell"; // 🔁 Replace with your actual DB name

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch events in reverse chronological order
$sql = "SELECT * FROM events ORDER BY event_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Cell Events | BIT GIDA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f9fc;
        }
        .event-card {
            transition: transform 0.2s ease;
        }
        .event-card:hover {
            transform: scale(1.02);
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <h2 class="text-center mb-5 text-primary">Upcoming Events</h2>

    <div class="row">
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="col-md-4 mb-4">
                    <div class="card event-card shadow-sm h-100">
                        <?php if (!empty($row['image_path'])): ?>
                            <img src="<?php echo htmlspecialchars($row['image_path']); ?>" class="card-img-top" alt="Event Image">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
                            <p class="card-text"><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
                        </div>
                        <div class="card-footer bg-white">
                            <p class="mb-1"><strong>Date & Time:</strong><br> <?php echo date("d M Y, h:i A", strtotime($row['event_date'])); ?></p>
                            <p class="mb-0"><strong>Location:</strong> <?php echo htmlspecialchars($row['location']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="col-12">
                <p class="text-center text-muted">No events found.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Bootstrap JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
