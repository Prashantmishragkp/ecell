<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - E-Cell BIT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f8f9fa;
    }
    .contact-section {
      padding: 60px 0;
    }
    .contact-heading {
      font-weight: 700;
    }
    .icon {
      font-size: 1.2rem;
      color: #0d6efd;
      margin-right: 10px;
    }
    .social-icons a {
      font-size: 1.5rem;
      margin-right: 15px;
      color: #212529;
      transition: 0.3s;
    }
    .social-icons a:hover {
      color: #0d6efd;
    }
  </style>
  <!-- Font Awesome for icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

<section class="contact-section container">
  <div class="text-center mb-5">
    <h1 class="contact-heading">📞 Contact Us</h1>
    <p class="lead">Let’s Build Something Amazing Together</p>
    <p>Are you a student with a game-changing idea? An investor or incubator looking to collaborate? A mentor who wants to guide young innovators? We’re always open for a conversation.</p>
  </div>

  <div class="row gy-4">
    <div class="col-md-6">
      <div class="p-4 bg-white shadow rounded">
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
          <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
          <a href="http://www.[yourdomain].in/ecell" target="_blank"><i class="fas fa-globe"></i></a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="p-4 bg-white shadow rounded">
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

</body>
</html>
