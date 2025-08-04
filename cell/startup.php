<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Startups | E-Cell BIT</title>
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
      position: relative;
      z-index: 1;
      text-shadow: 0 0 15px #f72585;
    }

    .startup-card {
      background: linear-gradient(to bottom right, #2e294e, #1e1e2f);
      border-radius: 18px;
      padding: 25px;
      box-shadow: 0 12px 40px rgba(114, 9, 183, 0.2);
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
      z-index: 1;
      border: 1px solid rgba(255, 255, 255, 0.1);
      opacity: 0;
      transform: translateY(30px);
      animation: fadeInUp 0.6s forwards;
    }

    .startup-card:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 20px 60px rgba(250, 0, 255, 0.3);
    }

    .startup-card h4 {
      color: #ffffff;
      font-weight: 600;
    }

    .startup-card p {
      color: #d1d1d1;
      font-size: 15px;
    }

    .startup-icon {
      font-size: 2rem;
      color: #f72585;
      margin-bottom: 10px;
    }

    .highlight-list {
      background: rgba(255, 255, 255, 0.05);
      padding: 20px;
      border-radius: 15px;
      margin-top: 40px;
      backdrop-filter: blur(8px);
    }

    .highlight-list ul {
      padding-left: 20px;
    }

    .highlight-list li {
      margin-bottom: 10px;
      color: #ddd;
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
  <h2 class="section-title"><i class="fas fa-rocket"></i> Startups</h2>

  <p class="text-center mb-5 fs-5">🚀 Where Ideas Get a Launchpad</p>
  <p class="text-center mb-5">We support entrepreneurs from ideation to scaling. These are some of the startups born from our E-Cell ecosystem.</p>

  <div class="row g-4">
    <!-- Startup 1 -->
    <div class="col-md-6">
      <div class="startup-card">
        <div class="startup-icon"><i class="fas fa-prescription-bottle-alt"></i></div>
        <h4>Healkart – Instant Medicine Delivery for Semi-Urban India</h4>
        <p>Healkart is a smart logistics and pharmacy platform ensuring 15–20 minute medicine delivery in Tier-2 and Tier-3 cities. Real-time inventory sync and GPS tracking make it possible where giants can't reach.</p>
      </div>
    </div>

    <!-- Startup 2 -->
    <div class="col-md-6">
      <div class="startup-card">
        <div class="startup-icon"><i class="fas fa-dog"></i></div>
        <h4>PashuPath – Virtual Fence for Livestock</h4>
        <p>An IoT-enabled smart collar using geofencing and health monitoring to notify farmers of anomalies via SMS. Reduces cattle loss and boosts productivity.</p>
      </div>
    </div>

    <!-- Startup 3 -->
    <div class="col-md-6">
      <div class="startup-card">
        <div class="startup-icon"><i class="fas fa-leaf"></i></div>
        <h4>EcoTrek – Sustainable Outdoor Gear</h4>
        <p>EcoTrek builds eco-friendly travel gear from upcycled plastic. A hit among youth, it promotes zero-waste living and conscious consumption.</p>
      </div>
    </div>

    <!-- Startup 4 -->
    <div class="col-md-6">
      <div class="startup-card">
        <div class="startup-icon"><i class="fas fa-tools"></i></div>
        <h4>QuickFix IT – Repair Solutions at Your Doorstep</h4>
        <p>Founded by engineering students, QuickFix IT offers affordable electronics repair. Now serving over 500+ monthly requests from local campuses.</p>
      </div>
    </div>
  </div>

  <!-- Why Startups Succeed Section -->
  <div class="highlight-list mt-5">
    <h4 class="text-white mb-3"><i class="fas fa-lightbulb"></i> Why Our Startups Succeed:</h4>
    <ul>
      <li>Pre-incubation mentoring from our in-house experts</li>
      <li>MVP and UI/UX development assistance</li>
      <li>Legal & IP guidance in collaboration with startup cells</li>
      <li>Access to funding and pitch competitions</li>
      <li>Strong support from alumni and faculty advisors</li>
    </ul>
    <p class="mt-3"><strong>We don’t just talk entrepreneurship — we make it happen.</strong></p>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
