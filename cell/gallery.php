<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gallery | E-Cell</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Fonts + Bootstrap + Font Awesome -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!-- Animate on Scroll -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
  
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      color: #fff;
      background: #0e011e;
      overflow-x: hidden;
      position: relative;
    }

    /* Star background animation */
    #stars, #stars2, #stars3 {
      position: absolute;
      width: 100%;
      height: 100%;
      background: transparent url('https://raw.githubusercontent.com/PrashantOpenSource/StarrySky/main/stars.png') repeat;
      animation: moveStars 100s linear infinite;
      z-index: -1;
    }

    @keyframes moveStars {
      from { background-position: 0 0; }
      to { background-position: -10000px 5000px; }
    }

    .gallery-section {
      padding: 80px 20px;
      text-align: center;
    }

    .gallery-section h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 40px;
      color: #00f5ff;
      text-shadow: 0 0 10px #00f5ff88;
    }

    .gallery-card {
      background-color: rgba(255, 255, 255, 0.03);
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 0 15px #00f5ff33;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .gallery-card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 25px #00f5ff77;
    }

    .gallery-img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      transition: all 0.3s ease-in-out;
    }

    .gallery-img:hover {
      filter: brightness(1.1);
    }

    .card-caption {
      padding: 15px;
      font-size: 1.1rem;
      font-weight: 500;
    }

    @media (max-width: 768px) {
      .gallery-img {
        height: 200px;
      }
    }

  </style>
</head>
<body>
  <!-- Animated Star Background -->
  <div id="stars"></div>
  <div id="stars2"></div>
  <div id="stars3"></div>

  <section class="gallery-section" data-aos="fade-up">
    <h1>📸 Our Gallery</h1>
    <div class="container">
      <div class="row g-4">

        <?php
        // 🔁 Update gallery images here
        $gallery = [
          ["image" => "uploads/event1.jpg", "caption" => "Startup Bootcamp 2024"],
          ["image" => "uploads/event2.jpg", "caption" => "Hackathon Winners"],
          ["image" => "uploads/event3.jpg", "caption" => "Guest Talk by CEO"],
          ["image" => "uploads/event4.jpg", "caption" => "Team Retreat"],
          ["image" => "uploads/event5.jpg", "caption" => "Pitch Day Highlights"],
          ["image" => "uploads/event6.jpg", "caption" => "Innovation Fair 2024"],
        ];

        foreach ($gallery as $item) {
          echo '
          <div class="col-sm-6 col-md-4 col-lg-3" data-aos="zoom-in">
            <div class="gallery-card">
              <img src="' . $item["image"] . '" alt="Gallery Image" class="gallery-img">
              <div class="card-caption">' . $item["caption"] . '</div>
            </div>
          </div>';
        }
        ?>

      </div>
    </div>
  </section>

  <!-- AOS & Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init({ duration: 1200 });
  </script>
</body>
</html>
