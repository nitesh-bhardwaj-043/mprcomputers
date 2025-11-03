<section class="hero d-flex align-items-center" id="home">
  <div class="container text-center text-lg-start">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <h1 class="hero-title">MPR Computers –</h1>
        <p class="hero-subtitle">
          We build trust that grows.
        </p>
        <a href="#contact" class="btn btn-glow mt-3">Feedback</a>
      </div>
      <div class="col-lg-6 text-center">
        <img src="<?= base_url() ?>assets/images/slider/slider1.png" alt="MPR Computers" class="img-fluid hero-img">
      </div>
    </div>
  </div>
</section>


<!-- Styles -->
<style>
  :root {
    --primary: #000;
    --secondary: #18cb96;
    --secondary-light: #94d2bd;
    --text-light: #f5f5f5;
  }

  .hero {
    position: relative;
    background: linear-gradient(135deg, var(--primary), #111);
    min-height: 80vh;
    color: var(--text-light);
    overflow: hidden;
  }

  .hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top left, rgba(24, 203, 150, 0.25), transparent 60%),
                radial-gradient(circle at bottom right, rgba(148, 210, 189, 0.2), transparent 70%);
    z-index: 0;
  }

  .hero .container {
    position: relative;
    z-index: 2;
  }

  .hero-title {
    font-weight: 700;
    font-size: 3rem;
    color: var(--secondary);
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
  }

  .hero-subtitle {
    font-size: 1.25rem;
    max-width: 700px;
    color: var(--secondary-light);
    margin-bottom: 1.5rem;
  }

  .btn-glow {
    background: var(--secondary);
    color: #000;
    font-weight: 600;
    border: none;
    border-radius: 50px;
    padding: 0.75rem 2rem;
    box-shadow: 0 0 15px rgba(24, 203, 150, 0.6);
    transition: all 0.3s ease-in-out;
  }

  .btn-glow:hover {
    background: var(--secondary-light);
    box-shadow: 0 0 25px rgba(24, 203, 150, 0.9);
    transform: translateY(-2px);
  }

  .hero-img {
    max-width: 90%;
    filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.2));
    animation: float 3s ease-in-out infinite;
  }

  @keyframes float {
    0%, 100% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-10px);
    }
  }
</style>
