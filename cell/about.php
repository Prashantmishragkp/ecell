<?php include('includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us | E-Cell BIT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Animate On Scroll -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

  <style>
    /* Starry Background */
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #000;
      color: #fff;
      position: relative;
      overflow-x: hidden;
    }

    body::before {
      content: "";
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      
      z-index: -2;
      opacity: 0.2;
    }

    .frosted-card {
      background: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-radius: 15px;
      padding: 30px;
      color: #fff;
      box-shadow: 0 0 30px rgba(255, 255, 255, 0.05);
      margin-bottom: 40px;
    }

    .section-title {
      text-align: center;
      margin: 60px 0 30px;
    }

    .section-title h2 {
      font-weight: bold;
      font-size: 2rem;
      color: #00d9ff;
    }

    ul.list-unstyled li::before {
      content: "✔ ";
      color: #0d6efd;
    }

    footer {
      background-color: #111;
      color: #ccc;
      text-align: center;
      padding: 40px 10px;
    }

    footer h4 {
      color: #fff;
    }

    footer a {
      color: #0d6efd;
      text-decoration: none;
    }

    @media (max-width: 768px) {
      .section-title h2 {
        font-size: 1.6rem;
      }
    }
  </style>
</head>
<body>

<!-- Hero Section -->
<div class="container text-center py-5" data-aos="fade-down">
  <h1 class="display-5 fw-bold text-light">About E-Cell, Buddha Institute of Technology</h1>
  <p class="lead text-muted">"Where Ideas Spark Innovation & Innovation Builds the Future"</p>
</div>

<div class="container">
  <!-- Who We Are -->
  <div class="frosted-card" data-aos="fade-up">
    <div class="section-title">
      <h2><i class="fas fa-info-circle me-2"></i>Who We Are</h2>
    </div>
    <p class="fs-5">
      The <strong>Entrepreneurship Cell (E-Cell)</strong> at Buddha Institute of Technology is a dynamic student-led organization fostering entrepreneurial talent and startup culture on campus. We aim to convert ideas into impactful ventures through innovation, mentorship, and hands-on experience.
    </p>
    <p class="fs-5">
      We believe entrepreneurship isn't just about business—it's about solving real problems with creative solutions and bold thinking.
    </p>
  </div>

  <!-- Vision & Mission -->
  <div class="row">
    <div class="col-md-6">
      <div class="frosted-card" data-aos="fade-right">
        <h4 class="text-info"><i class="fas fa-eye me-2"></i>Vision</h4>
        <p>To be recognized as a national leader in fostering student innovation and startup excellence by creating a vibrant entrepreneurial ecosystem.</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="frosted-card" data-aos="fade-left">
        <h4 class="text-success"><i class="fas fa-bullseye me-2"></i>Mission</h4>
        <ul class="list-unstyled fs-5">
          <li>Encourage creative problem-solving & critical thinking.</li>
          <li>Enable students to convert ideas into viable startups.</li>
          <li>Build strong ties with VCs, incubators & industry experts.</li>
          <li>Conduct workshops, mentorships, and pitch sessions.</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Team -->
  <div class="frosted-card" data-aos="zoom-in">
    <div class="section-title">
      <h2><i class="fas fa-users me-2"></i>Our Structure</h2>
    </div>
    <ul class="fs-5">
      <li><strong>Chief Patron:</strong> Prof. (Dr.) Roop Ranjan (Director, BIT)</li>
      <li><strong>Incubation Head:</strong> Mr. Ankur Kumar</li>
      <li><strong>Incubation Manager:</strong> Mr. Pratish Kanaujiya</li>
      <li><strong>Student Coordinators:</strong> Raj Singh & Virat</li>
      <li><strong>Core Committee:</strong> Prashant Mishra</li>
    </ul>
  </div>

  <!-- CTA Quote -->
  <div class="frosted-card text-center" data-aos="fade-up">
    <blockquote class="blockquote fs-5">
      “Join us in building the future. Whether you're an innovator, builder, or dreamer — E-Cell is your launchpad.”
    </blockquote>
  </div>
</div>

<!-- Footer -->
<footer>
  <h4>🚀 Ready to start your journey?</h4>
  <p>Become a part of E-Cell BIT and ignite your entrepreneurial spirit.</p>
  <a href="contact.php" class="btn btn-primary mt-2">Join Us</a>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({ once: true, duration: 1200 });
</script>

</body>
</html>

<?php include('includes/footer.php'); ?>
