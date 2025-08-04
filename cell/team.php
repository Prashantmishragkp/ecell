<?php
// Team members array
$team = [
  [
    "name" => "Prashant Mishra",
    "role" => "Team Lead",
    "image" => "images/prashant.jpg",
    "linkedin" => "#",
    "github" => "#",
    "instagram" => "#"
  ],
  [
    "name" => "Aarav Sharma",
    "role" => "Backend Developer",
    "image" => "images/aarav.jpg",
    "linkedin" => "#",
    "github" => "#",
    "instagram" => "#"
  ],
  [
    "name" => "Sneha Verma",
    "role" => "UI/UX Designer",
    "image" => "images/sneha.jpg",
    "linkedin" => "#",
    "github" => "#",
    "instagram" => "#"
  ],
  // Add more members here as needed...
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Meet the Team | E-Cell BIT</title>
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
      color: #f0f0f0;
      overflow-x: hidden;
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
      text-shadow: 0 0 15px #f72585;
    }

    .team-card {
      background: linear-gradient(to bottom right, #2e294e, #1e1e2f);
      border-radius: 20px;
      padding: 30px 20px;
      box-shadow: 0 12px 40px rgba(114, 9, 183, 0.2);
      text-align: center;
      transition: all 0.4s ease;
      transform: translateY(30px);
      animation: fadeInUp 0.6s forwards;
      opacity: 0;
    }

    .team-card:hover {
      transform: translateY(-10px) scale(1.03);
      box-shadow: 0 20px 60px rgba(250, 0, 255, 0.3);
    }

    .profile-img {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #7209b7;
      transition: 0.4s ease;
      box-shadow: 0 0 15px #7209b7;
    }

    .team-card:hover .profile-img {
      transform: scale(1.05);
      box-shadow: 0 0 25px #f72585;
    }

    .team-name {
      font-size: 1.2rem;
      font-weight: 600;
      color: #fff;
      margin-top: 15px;
    }

    .team-role {
      font-size: 0.95rem;
      color: #ccc;
      margin-bottom: 15px;
    }

    .social-icons a {
      color: #bbb;
      margin: 0 8px;
      font-size: 1.2rem;
      transition: 0.3s;
    }

    .social-icons a:hover {
      color: #f72585;
      transform: scale(1.2);
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
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
  <h2 class="section-title"><i class="fas fa-users"></i> Meet the Team</h2>

  <div class="row g-4">
    <?php
    $delay = 0.1;
    foreach ($team as $member):
    ?>
    <div class="col-md-6 col-lg-4" style="animation-delay: <?= $delay ?>s;">
      <div class="team-card">
        <img src="<?= htmlspecialchars($member['image']) ?>" alt="<?= htmlspecialchars($member['name']) ?>" class="profile-img">
        <div class="team-name"><?= htmlspecialchars($member['name']) ?></div>
        <div class="team-role"><i class="fas fa-user-tag"></i> <?= htmlspecialchars($member['role']) ?></div>
        <div class="social-icons">
          <?php if ($member['linkedin']): ?>
            <a href="<?= $member['linkedin'] ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
          <?php endif; ?>
          <?php if ($member['github']): ?>
            <a href="<?= $member['github'] ?>" target="_blank"><i class="fab fa-github"></i></a>
          <?php endif; ?>
          <?php if ($member['instagram']): ?>
            <a href="<?= $member['instagram'] ?>" target="_blank"><i class="fab fa-instagram"></i></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php
    $delay += 0.1;
    endforeach;
    ?>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
