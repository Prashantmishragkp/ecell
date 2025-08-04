<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>E-Cell | Buddha Institute of Technology</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- AOS (Animate on Scroll) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      AOS.init();
    });
  </script>

  <!-- Custom Styles -->
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #000;
      color: white;
    }

    nav {
      background-color: black;
    }

    nav a {
      color: white;
      margin: 0 15px;
      text-transform: uppercase;
      font-weight: bold;
      text-decoration: none;
    }

    nav a:hover {
      color: #8e2de2;
      transition: 0.3s;
    }

    .hero {
      position: relative;
      height: 100vh;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .bg-video {
      position: absolute;
      top: 50%;
      left: 50%;
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      z-index: -1;
      transform: translate(-50%, -50%);
      object-fit: cover;
    }

    .hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background-color: rgba(0, 0, 0, 0.6);
      z-index: 0;
    }

    .hero-content {
      position: relative;
      z-index: 1;
      color: white;
    }

    .carousel-item img {
      width: 100%;
      border-radius: 15px;
    }

    .section-title {
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .gradient-bg {
      background: linear-gradient(to top, #8e2de2, #4a00e0);
    }

    .startup-card {
      background-color: #111;
      border-radius: 10px;
      padding: 15px;
      margin: 10px;
      width: 180px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s ease;
    }

    .startup-card:hover {
      transform: scale(1.05);
    }

    .startup-card img {
      width: 100%;
      height: 100px;
      object-fit: contain;
      margin-bottom: 10px;
    }

    .footer {
      background-color: black;
      color: white;
      padding: 20px 0;
      text-align: center;
    }

    .social-icons i {
      font-size: 24px;
      margin: 0 10px;
      color: white;
    }

    @media (max-width: 768px) {
      .hero-content h1 {
        font-size: 2.5rem;
      }
    }
  </style>
</head>
<body>

<!-- Hero Section -->
<section class="hero">
  <video autoplay muted loop playsinline class="bg-video">
    <source src="images/main.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <div class="hero-content">
    <h1 class="display-4 fw-bold" data-aos="zoom-in">Welcome to E-Cell</h1>
    <p class="lead" data-aos="fade-up">Buddha Institute of Technology</p>
  </div>
</section>

<!-- Startup Section -->
<div class="container text-center py-5">
  <h2 class="section-title" data-aos="fade-up">BIT: Fueling the Next Wave of Innovation</h2>
  <p data-aos="fade-up" data-aos-delay="100">Our college fosters entrepreneurship through mentorship, workshops, and startup showcases.</p>
  <div class="d-flex overflow-auto justify-content-center mt-4 flex-wrap">
    <?php
      $startups = [
        ["SkillVertex", "sv.jpg"],
        ["TrackLytix Innovation Private Limited", "txi.jpg"],
        ["Liftfiy Innovation Private Limited", "ly.jpg"],
        ["Hydrorakshak Tech Private Limited", "ht.jpg"],
        ["Symptomwise Private Limited", "spl.png"]
      ];
      foreach ($startups as $s) {
        echo '<div class="startup-card text-white text-center m-2" data-aos="zoom-in">';
        echo '<img src="images/'.$s[1].'" alt="'.$s[0].'">';
        echo '<strong>'.$s[0].'</strong><br><small>Founded by: XYZ</small>';
        echo '</div>';
      }
    ?>
  </div>
</div>

<!-- Initiatives Carousel -->
<section class="py-5 gradient-bg text-white text-center">
  <div class="container">
    <h2 class="mb-4 fw-bold" data-aos="fade-up">Our Initiatives and Programs</h2>
    <p class="mb-5" data-aos="fade-up" data-aos-delay="100">We believe in the power of entrepreneurship to transform lives. Explore how we support aspiring innovators through resources, mentorship, and community.</p>

    <div id="initiativeCarousel" class="carousel slide mx-auto" data-bs-ride="carousel" style="max-width: 960px;" data-aos="fade-up" data-aos-delay="200">
      <div class="carousel-inner rounded-4 shadow">
        <div class="carousel-item active">
          <img src="images/buddha.jpg" class="d-block w-100" alt="Initiative 1">
        </div>
        <div class="carousel-item">
          <img src="images/initiative2.jpg" class="d-block w-100" alt="Initiative 2">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#initiativeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#initiativeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>

<!-- Make it Happen -->
<section class="py-5 text-white" style="background-color: #000;">
  <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between">
    <div class="mb-4 mb-lg-0" data-aos="fade-right">
      <video autoplay muted loop playsinline class="img-fluid rounded-4 shadow" style="max-width: 400px;">
        <source src="images/vid1.mp4" type="video/mp4">
      </video>
    </div>
    <div class="ms-lg-5" data-aos="fade-left">
      <h2 class="fw-bold mb-3">Make it happen!</h2>
      <p class="mb-4">Got a business idea? Join our pitch event to showcase your concept, gain feedback, attract investors, and make it real.</p>
      <a href="pitch.php" class="btn btn-primary px-4 py-2" style="background: linear-gradient(135deg, #8e2de2, #4a00e0); border: none;">Pitch Your Idea</a>
    </div>
  </div>
</section>

<?php include('includes/footer.php'); ?>
