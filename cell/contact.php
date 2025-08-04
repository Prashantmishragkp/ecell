<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - E-Cell BIT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Google Fonts + Bootstrap + Font Awesome -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      color: #fff;
      position: relative;
      overflow-x: hidden;
      background: #0d0d2b;
    }

    /* Starry background */
    #stars {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      background: black;
    }

    canvas {
      display: block;
    }

    .contact-section {
      padding: 80px 15px;
      z-index: 2;
    }

    .contact-heading {
      font-weight: 700;
      font-size: 2.5rem;
      color: #00ffff;
    }

    .contact-section p.lead {
      color: #ccc;
    }

    .bg-glass {
      background: rgba(0, 0, 0, 0.6);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 0 20px rgba(0, 255, 255, 0.2);
    }

    .icon {
      font-size: 1.3rem;
      color: #00ffff;
      margin-right: 10px;
    }

    .social-icons a {
      font-size: 1.5rem;
      margin-right: 15px;
      color: #fff;
      transition: 0.3s;
    }

    .social-icons a:hover {
      color: #00ffff;
    }

    .btn-primary {
      background-color: #00ffff;
      border: none;
      color: #000;
    }

    .btn-primary:hover {
      background-color: #00cccc;
    }
  </style>
</head>
<body>

<!-- Star Background -->
<canvas id="stars"></canvas>

<section class="contact-section container">
  <div class="text-center mb-5">
    <h1 class="contact-heading">📞 Contact Us</h1>
    <p class="lead">Let’s Build Something Amazing Together</p>
    <p>Are you a student with a game-changing idea? An investor or incubator looking to collaborate? A mentor who wants to guide young innovators? We’re always open for a conversation.</p>
  </div>

  <div class="row gy-4">
    <div class="col-md-6">
      <div class="bg-glass">
        <h5><i class="fas fa-map-marker-alt icon"></i>Office Address:</h5>
        <p>
          <strong>Entrepreneurship Cell</strong><br>
          Buddha Institute of Technology<br>
          GIDA, Gorakhpur, Uttar Pradesh<br>
          [City, State, Pin Code]
        </p>

        <h5><i class="fas fa-envelope icon"></i>Email:</h5>
        <ul class="list-unstyled">
          <li><strong>General Queries:</strong> ecell@[yourdomain].in</li>
          <li><strong>Mentorship & Incubation:</strong> support@yourcollege.edu</li>
          <li><strong>Event Collaborations:</strong> events.ecell@[yourdomain].in</li>
        </ul>

        <h5><i class="fas fa-phone icon"></i>Phone:</h5>
        <ul class="list-unstyled">
          <li><strong>Raj Singh (Coordinator):</strong> +91-XXXXXXXXXX</li>
          <li><strong>Pratish Kanaujiya (Manager):</strong> +91-XXXXXXXXXX</li>
        </ul>

        <h5><i class="fas fa-share-alt icon"></i>Connect With Us:</h5>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-square"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fas fa-globe"></i></a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="bg-glass">
        <h5><i class="fas fa-paper-plane icon"></i>Send Us a Message</h5>
        <form action="contact_submit.php" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" required />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" name="email" required />
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Star Animation Script -->
<script>
const canvas = document.getElementById("stars");
const ctx = canvas.getContext("2d");
let stars = [];

function resizeCanvas() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
}
resizeCanvas();
window.addEventListener("resize", resizeCanvas);

function createStars(count) {
  stars = [];
  for (let i = 0; i < count; i++) {
    stars.push({
      x: Math.random() * canvas.width,
      y: Math.random() * canvas.height,
      radius: Math.random() * 1.5,
      speed: Math.random() * 0.5 + 0.1
    });
  }
}
createStars(150);

function animateStars() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  ctx.fillStyle = "#00ffff";
  for (let star of stars) {
    ctx.beginPath();
    ctx.arc(star.x, star.y, star.radius, 0, Math.PI * 2);
    ctx.fill();

    star.y += star.speed;
    if (star.y > canvas.height) {
      star.y = 0;
      star.x = Math.random() * canvas.width;
    }
  }
  requestAnimationFrame(animateStars);
}
animateStars();
</script>

</body>
</html>
