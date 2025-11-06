
<section class="pro-hero-section">
  <div class="container">
    <div class="hero-content-wrapper text-center">
      <h1 class="hero-main-heading"><span class="main">MPR</span> Computers</h1>
      <p class="hero-subheading">We build trust that grows brands</p>
      <a href="<?= site_url('contact-us') ?>" class=" btn btn-slider"><span>Feedback</span></a>
      <a href="<?= site_url('complaint') ?>" class="btn btn-slider" >
  <span>Feedback Form</span>
</a>
      <div class="form-assurance assurance-row">
        <!-- Add CTA buttons or store links here if needed -->
      </div>
    </div>
  </div>
</section>

<style>
  .main {
    color: #fca311;
  }
  .btn-slider {
    display: inline-block;
    color: #fca311;
    border: 2px solid #fca311;
    /* background: transparent; */
    padding: 12px 35px;
    font-weight: 600;
    text-decoration: none;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    border-radius: 4px;
  }

  .btn-slider span {
    position: relative;
    z-index: 2;
  }

  .btn-slider::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0%;
    height: 100%;
    background: #fca311;
    transition: width 0.3s ease;
    z-index: 1;
  }

  .btn-slider:hover::after {
    width: 100%;
  }

  .btn-slider:hover {
    color: #000;
  }
  .pro-hero-section {
    background: linear-gradient(to bottom, rgb(0 0 0 / 75%), rgb(0 0 0 / 56%)),
      url('<?= base_url() ?>assets/images/slider/slider.png') center/cover no-repeat;
    padding: 6rem 0 5rem; /* increased height */
    color: #fff;
    font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
  }

  .hero-content-wrapper {
    max-width: 800px;
    margin: 0 auto;
  }

  .hero-main-heading {
    font-size: 3rem; /* bigger heading */
    font-weight: 700;
    line-height: 1.3;
  }

  .hero-subheading {
    font-size: 1.3rem; /* slightly larger text */
    margin-top: 1rem;
    opacity: 0.9;
  }

  .assurance-row,
  .google-rating i {
    align-items: center;
    display: flex;
  }

  .assurance-row {
    justify-content: center;
    gap: 12px;
    flex-wrap: nowrap;
    margin-bottom: 20px;
  }

  .play-btn {
    height: 50px;
  }

  .google-rating i {
    gap: 6px;
    font-size: 14px;
    color: gold !important;
    white-space: nowrap;
  }

  .google-logo {
    height: 28px;
    width: auto;
  }

  .stars {
    display: flex;
    gap: 2px;
  }

  .rating-text {
    color: #f8f9fa;
    font-weight: 500;
  }

  .form-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
  }

  .form-group label {
    font-weight: 700;
    margin-bottom: 5px;
    display: block;
  }

  .form-input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 6px;
  }

  .pro-submit-btn {
    background: #015c8e;
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 6px;
    display: flex;
    align-items: center;
    gap: 5px;
    font-weight: 700;
    cursor: pointer;
  }

  .pro-submit-btn:hover {
    background: #1ea6f6;
  }

  .form-assurance {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 15px;
    justify-content: center;
  }

  .assurance-item {
    display: flex;
    align-items: center;
    gap: 6px;
  }

  @media (max-width: 768px) {
    .pro-hero-section {
      padding: 4rem 0 3rem; /* smaller but still tall on mobile */
    }

    .hero-main-heading {
      font-size: 2.2rem;
    }

    .hero-subheading {
      font-size: 1.1rem;
    }
  }
</style>
