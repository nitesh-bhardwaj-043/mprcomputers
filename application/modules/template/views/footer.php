<!-- Footer -->
<footer class="footer-section text-white pt-5">
  <div class="container">
    <div class="row">
      <!-- Brand Info -->
      <div class="col-lg-6 mb-4">
        <span class="footer-brand mb-3 fs-4">MPR Computers</span>
        <p class="footer-text">
          We bring technology closer to you with reliable distribution, genuine service, and a promise of lasting trust.
        </p>
        <div class="mt-3 d-flex gap-3">
          <a href="https://facebook.com/" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
          <a href="https://instagram.com/" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
          <a href="https://linkedin.com/" target="_blank" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-lg-6 col-md-6 mb-4">
        <span class="footer-heading mb-3 fs-4">Contact Us</span>
        <ul class="list-unstyled footer-list">
          <li class="mb-2"><i class="fas fa-map-marker-alt me-2 text-secondary"></i>City Plaza , opposite zudio , Payel more , Sevoke Road ,Siliguri -734001</li>
          <li class="mb-2"><i class="fas fa-phone me-2 text-secondary"></i><a href="tel:+919800043390" class="text-secondary">+91 9800044390</a></li>
          <li class="mb-2"><i class="fas fa-envelope me-2 text-secondary"></i><a href="mailto:bhanwarlaal@gmail.com" class="text-secondary">bhanwarlaal@gmail.com</a></li>
        </ul>
      </div>
    </div>

    <hr class="footer-divider">

    <!-- Bottom Section -->
    <div class="text-center pb-3">
      <p class="mb-0">&copy; 2025 techelevatr. All Rights Reserved.</p>
    </div>
  </div>
</footer>

<!-- Footer Styling -->
<style>
  :root {
    --primary: #14213d;
    --secondary: #fca311;
    --secondary-light: #000;
    --primary-light: #ffff;
  }

  .footer-section {
    background: linear-gradient(135deg, var(--primary), #111);
    color: var(--text-light);
    position: relative;
    overflow: hidden;
  }

  .footer-section::before,
  .footer-section::after {
    content: '';
    position: absolute;
    border-radius: 50%;
    background: rgba(24, 203, 150, 0.05);
    z-index: 0;
  }

  .footer-section::before {
    width: 350px;
    height: 350px;
    bottom: -100px;
    left: -100px;
  }

  .footer-section::after {
    width: 250px;
    height: 250px;
    top: -80px;
    right: -80px;
  }

  .footer-section .container {
    position: relative;
    z-index: 2;
  }

  .footer-brand {
    color: var(--secondary);
    font-weight: 700;
    letter-spacing: 0.5px;
  }

  .footer-text {
    color: #fff;
    max-width: 500px;
  }

  .footer-heading {
    color: var(--secondary);
    font-weight: 600;
  }

  .footer-list li {
    color: #ccc;
    font-size: 0.95rem;
  }

  .footer-list i {
    color: var(--secondary);
  }

  .footer-divider {
    border-color: rgba(255, 255, 255, 0.1);
    margin: 1.5rem 0;
  }

  .social-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(24, 203, 150, 0.1);
    color: var(--secondary);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    transition: all 0.3s ease;
  }

  .social-icon:hover {
    background: var(--secondary);
    color: #000;
    transform: translateY(-3px);
    box-shadow: 0 0 15px rgba(24, 203, 150, 0.6);
  }

  @media (max-width: 768px) {
    .footer-text {
      max-width: 100%;
    }
    .footer-brand, .footer-heading {
      text-align: center;
    }
    .footer-list {
      text-align: center;
    }
    .social-icon {
      margin: 0 auto;
    }
  }
</style>
