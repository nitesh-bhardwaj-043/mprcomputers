<!-- Navigation -->
<nav class="navbar navbar-expand-lg shadow-sm sticky-top">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand d-flex align-items-center" href="<?= site_url('') ?>">
      <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="MPR Computers" height="50" loading="lazy" class="logo-img" />
    </a>

    <!-- Toggler -->
    <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= site_url('') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('our-branches') ?>">City</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Styles -->
<style>
  :root {
    --primary: #000;
    --secondary: #18cb96;
    --text-light: #f5f5f5;
  }

  /* Navbar Base */
  .navbar {
    background-color: var(--primary);
    padding: 0.8rem 0;
    transition: all 0.3s ease-in-out;
  }

  .navbar-brand img {
    margin-left: 60px;
    transition: transform 0.3s ease;
  }

  .navbar-brand img:hover {
    transform: scale(1.05);
  }

  /* Nav Links */
  .navbar .nav-link {
    color: var(--text-light);
    font-weight: 500;
    margin-left: 1.2rem;
    position: relative;
    transition: color 0.3s ease;
  }

  .navbar .nav-link::after {
    content: "";
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 0;
    height: 2px;
    background-color: var(--secondary);
    transition: width 0.3s ease;
  }

  .navbar .nav-link:hover::after,
  .navbar .nav-link.active::after {
    width: 100%;
    color: var(--secondary);
  }

  .navbar .nav-link:hover {
    color: var(--secondary);
  }

  /* Toggler for Mobile */
  .navbar-toggler {
    background-color: var(--secondary);
    border: none;
  }

  .navbar-toggler:focus {
    box-shadow: none;
  }

  /* Adjust for small screens */
  @media (max-width: 991px) {
    .navbar-brand img {
      margin-left: 0;
    }
    .navbar-nav {
      text-align: center;
      margin-top: 1rem;
    }
    .navbar .nav-link {
      margin-left: 0;
      display: inline-block;
      margin-bottom: 0.5rem;
    }
  }
</style>
