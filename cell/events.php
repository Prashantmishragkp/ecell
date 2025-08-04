<?php
require 'config.php'; // DB connection

// Fetch events
$result = $conn->query("SELECT * FROM events ORDER BY event_date DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Upcoming E-Cell Events</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap, Google Fonts, Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <style>
    body {
      margin: 0;
      padding-top: 60px;
      font-family: 'Poppins', sans-serif;
      background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
      background-attachment: fixed;
      background-size: cover;
      color: #f0f0f0;
      position: relative;
    }

    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 300%;
      height: 300%;
      background: transparent url('https://www.transparenttextures.com/patterns/stardust.png') repeat;
      animation: starScroll 100s linear infinite;
      z-index: 0;
      opacity: 0.3;
    }

    @keyframes starScroll {
      0% { transform: translate(0, 0); }
      100% { transform: translate(-500px, -500px); }
    }

    .section-title {
      font-weight: 700;
      color: #fff;
      text-align: center;
      margin-bottom: 50px;
      font-size: 2.5rem;
      position: relative;
      z-index: 1;
      text-shadow: 0 0 10px #6f42c1;
    }

    .event-card {
      background-color: #1f1f2e;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
      transition: all 0.4s ease;
      opacity: 0;
      transform: translateY(30px);
      animation: fadeInUp 0.6s forwards;
      z-index: 1;
    }

    .event-card:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 15px 40px rgba(114, 9, 183, 0.4);
    }

    .event-image {
      height: 220px;
      object-fit: cover;
      width: 100%;
    }

    .card-title {
      font-weight: 600;
      color: #fff;
    }

    .card-text {
      font-size: 14px;
      color: #ccc;
    }

    .btn-register {
      background: linear-gradient(to right, #7209b7, #3a0ca3);
      color: #fff;
      border-radius: 30px;
      font-weight: 600;
      transition: 0.3s;
      box-shadow: 0 0 10px #7209b7;
    }

    .btn-register:hover {
      transform: scale(1.05);
      box-shadow: 0 0 20px #3a0ca3;
    }

    .no-link {
      background-color: #6c757d;
      color: #fff;
      border-radius: 30px;
      cursor: not-allowed;
    }

    .icon-text i {
      color: #f72585;
      margin-right: 6px;
    }

    @keyframes fadeInUp {
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .container {
      position: relative;
      z-index: 2;
    }
  </style>
</head>
<body>

<div class="container">
  <h2 class="section-title"><i class="fas fa-bolt"></i> Upcoming Events</h2>

  <div class="row g-4">
    <?php
    $delay = 0.1;
    while ($row = $result->fetch_assoc()):
    ?>
      <div class="col-md-6 col-lg-4" style="animation-delay: <?= $delay ?>s;">
        <div class="card event-card h-100">
          <?php if (!empty($row['image'])): ?>
            <img src="<?= htmlspecialchars($row['image']) ?>" class="event-image" alt="Event Image">
          <?php endif; ?>

          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?= htmlspecialchars($row['title']) ?></h5>

            <p class="card-text icon-text"><i class="fas fa-calendar-day"></i>
              <?= date('F d, Y h:i A', strtotime($row['event_date'])) ?></p>

            <p class="card-text icon-text"><i class="fas fa-map-marker-alt"></i>
              <?= htmlspecialchars($row['location']) ?></p>

            <p class="card-text mb-3"><?= nl2br(htmlspecialchars($row['description'])) ?></p>

            <?php if (!empty($row['registration_link'])): ?>
              <a href="<?= htmlspecialchars($row['registration_link']) ?>" target="_blank" class="btn btn-register mt-auto d-flex justify-content-center align-items-center gap-2">
                <i class="fas fa-sign-in-alt"></i> Register Now
              </a>
            <?php else: ?>
              <button class="btn no-link mt-auto" disabled>No Registration Link</button>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php
      $delay += 0.1;
    endwhile;
    ?>
  </div>
</div>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
