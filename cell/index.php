<?php include ('includes/header.php'); ?>

<style>
/* General Reset & Fonts */
body {
    font-family: 'Segoe UI', sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.6;
    background-color: #f9f9f9;
}
.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

/* Hero Section */
.hero {
    position: relative;
    width: 100%;
    height: 80vh;
    overflow: hidden;
}
.hero img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.hero-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    text-align: center;
    background: rgba(0,0,0,0.4);
    padding: 20px 40px;
    border-radius: 12px;
}
.hero-content h1 {
    font-size: 48px;
    margin-bottom: 10px;
}
.hero-content p {
    font-size: 20px;
}

/* Section Styles */
.section-light {
    background-color: #fff;
    padding: 60px 0;
    text-align: center;
}
.section-dark {
    background-color: #1a1a1a;
    color: #fff;
    padding: 60px 0;
    text-align: center;
}

/* Startup Slider */
.startup-slider {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    margin-top: 40px;
}
.startup-card {
    background-color: #f0f0f0;
    border-radius: 12px;
    padding: 20px;
    width: 180px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}
.startup-card:hover {
    transform: translateY(-8px);
}
.startup-card img {
    width: 100%;
    height: 100px;
    object-fit: contain;
    margin-bottom: 10px;
}
.startup-card p {
    margin: 0;
}

/* Image Banner */
.image-banner {
    margin-top: 40px;
}
.image-banner img {
    width: 100%;
    max-height: 400px;
    object-fit: cover;
    border-radius: 8px;
}
.image-banner .caption {
    margin-top: 10px;
    font-weight: bold;
}

/* Pitch Section */
.pitch-section {
    padding: 60px 0;
    background: #f5f5f5;
}
.pitch-grid {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 40px;
}
.pitch-grid .illustration {
    flex: 1 1 45%;
}
.pitch-grid .illustration img {
    width: 100%;
    max-height: 400px;
    object-fit: contain;
}
.pitch-grid .pitch-text {
    flex: 1 1 45%;
}
.pitch-grid .pitch-text h2 {
    font-size: 32px;
    margin-bottom: 20px;
}
.pitch-grid .pitch-text p {
    font-size: 18px;
    margin-bottom: 30px;
}
.button {
    background: #007BFF;
    color: #fff;
    padding: 12px 28px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: background 0.3s ease;
}
.button:hover {
    background: #0056b3;
}

/* Call to Action */
.cta {
    background: linear-gradient(135deg, #007BFF, #6610f2);
    color: #fff;
    text-align: center;
    padding: 60px 20px;
}
.cta h2 {
    font-size: 36px;
    margin-bottom: 20px;
}
.cta .button {
    background-color: #fff;
    color: #007BFF;
    font-size: 18px;
}
.cta .button:hover {
    background-color: #f8f9fa;
    color: #0056b3;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-content h1 {
        font-size: 36px;
    }
    .pitch-grid {
        flex-direction: column;
    }
    .startup-card {
        width: 100%;
        max-width: 220px;
    }
}
</style>

<section class="hero">
    <img src="images/hero.jpg" alt="Hero Section">
    <div class="hero-content">
        <h1>E-CELL</h1>
        <p>Buddha Institute of Technology Gorakhpur</p>
    </div>
</section>

<section class="section-light">
    <div class="container">
        <h2>BIT: Fueling the Next Wave of Innovation.</h2>
        <p>Our college has a rich history of fostering innovation and entrepreneurship, as evidenced by the success of several notable startups founded by our alumni.</p>
        <div class="startup-slider">
            <div class="startup-card"><img src="images/skillvertex.png"><p>SkillVertex<br><small>Founded by XYZ</small></p></div>
            <div class="startup-card"><img src="images/tracklytix.png"><p>Tracklytix Innovation<br><small>Founded by XYZ</small></p></div>
            <div class="startup-card"><img src="images/liftify.png"><p>Liftify Innovation<br><small>Founded by XYZ</small></p></div>
            <div class="startup-card"><img src="images/hydro.png"><p>Hydrorakshak<br><small>Founded by XYZ</small></p></div>
            <div class="startup-card"><img src="images/symptomwise.png"><p>Symptomwise<br><small>Founded by XYZ</small></p></div>
        </div>
    </div>
</section>

<section class="section-dark">
    <div class="container">
        <h2>Our Initiatives and Programs</h2>
        <p>We believe in the power of entrepreneurship to transform lives and communities. Our programs and initiatives provide the necessary support, resources, and mentorship to help aspiring entrepreneurs turn their dreams into reality, fostering innovation and driving economic growth.</p>
        <div class="image-banner">
            <img src="images/i-love-buddha.jpg" alt="I Love Buddha">
            <p class="caption">BUDDHA INSTITUTE OF TECHNOLOGY</p>
        </div>
    </div>
</section>

<section class="pitch-section">
    <div class="container pitch-grid">
        <div class="illustration">
            <img src="images/illustration.png" alt="Pitch Illustration">
        </div>
        <div class="pitch-text">
            <h2>Make it happen!</h2>
            <p>Got a fantastic business idea? Do you want to make it happen? Join us for a pitch event where you may share your concept with a group of industry professionals and receive input, counsel, and assistance. Don’t let this chance to make it happen pass you by!</p>
            <a href="#" class="button">Pitch Your Idea</a>
        </div>
    </div>
</section>

<section class="cta">
    <h2>Embrace Innovation, Achieve Extraordinary</h2>
    <a href="#" class="button">Let's Connect</a>
</section>

<?php include 'includes/footer.php'; ?>
