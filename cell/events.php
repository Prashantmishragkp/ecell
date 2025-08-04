<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Events | E-Cell BIT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap & Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #f0f4ff, #ffffff);
      margin: 0;
      padding: 0;
    }

    .hero {
      background: linear-gradient(to right, #005bea, #00c6fb);
      color: white;
      padding: 60px 20px 30px;
      text-align: center;
      border-bottom-left-radius: 50px;
      border-bottom-right-radius: 50px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: bold;
      animation: fadeInDown 1s ease;
    }

    .section-title {
      font-weight: 700;
      text-align: center;
      margin: 40px 0 20px;
      color: #333;
    }

    .event-card {
      border: none;
      border-radius: 15px;
      transition: 0.4s ease-in-out;
      background-color: #ffffff;
      box-shadow: 0 6px 20px rgba(0,0,0,0.05);
      overflow: hidden;
    }

    .event-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
    }

    .event-img {
      height: 200px;
      object-fit: cover;
      transition: 0.4s ease;
    }

    .event-meta {
      font-size: 0.9rem;
      color: #6c757d;
    }

    .event-meta i {
      margin-right: 5px;
      color: #ffc107;
    }

    .btn-warning {
      background-color: #ffc107;
      border: none;
    }

    .no-events {
      text-align: center;
      margin-top: 50px;
      font-size: 1.2rem;
      color: #777;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>

<!-- Hero Header -->
<div class="hero">
  <h1 class="animate__animated animate__fadeInDown">Upcoming Events</h1>
  <p class="animate__animated animate__fadeInUp">Stay updated with all the latest happenings at E-Cell BIT</p>
</div>

<!-- Events Section -->
<div class="container my-5">
  <div class="row g-4">
    <?php
    $result = $conn->query("SELECT * FROM events ORDER BY event_date DESC");
    if ($result->num_rows > 0):
      $delay = 0;
      while ($row = $result->fetch_assoc()):
    ?>
    <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp" style="animation-delay: <?= $delay ?>s;">
      <div class="card event-card h-100">
        <?php if (!empty($row['image'])): ?>
        <img src="<?= htmlspecialchars($row['image']) ?>" class="event-img card-img-top" alt="<?= htmlspecialchars($row['title']) ?>">
        <?php endif; ?>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title"><?= htmlspecialchars($row['title']) ?></h5>
          <p class="event-meta mb-2">
            <i class="fa-regular fa-calendar-days"></i>
            <?= date('d M Y, h:i A', strtotime($row['event_date'])) ?>
          </p>
          <p class="event-meta mb-2">
            <i class="fa-solid fa-location-dot"></i>
            <?= htmlspecialchars($row['location']) ?>
          </p>
          <p class="card-text"><?= htmlspecialchars($row['description']) ?></p>
          <?php if (!empty($row['registration_link'])): ?>
          <a href="<?= htmlspecialchars($row['registration_link']) ?>" class="btn btn-warning mt-auto" target="_blank">Register Now</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php
      $delay += 0.1;
      endwhile;
    else:
    ?>
      <p class="no-events">No events available at the moment. Please check back later.</p>
    <?php endif; ?>
  </div>
</div>

</body>
</html>
