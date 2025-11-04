<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand" href="<?= site_url('') ?>">
      <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="mprcomputers" height="50" loading="lazy"
        style="margin-left: 60px;" />
    </a>

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= site_url('') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('contact-us') ?>">Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('complaint') ?>">Complaint</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
  :root {
    --primary: #14213d;
    --secondary: #fca311;
  }

  .navbar {
    background-color: #fff;
    padding: 0.2rem 0;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
  }

  .navbar-brand img {
    transition: transform 0.3s ease;
  }

  .navbar-brand img:hover {
    transform: scale(1.05);
  }

  .nav-link {
    color: var(--primary);
    font-weight: 500;
    margin: 0 12px;
    position: relative;
    transition: color 0.3s ease;
  }

  .nav-link::after {
    content: "";
    position: absolute;
    bottom: -4px;
    left: 0;
    width: 0%;
    height: 2px;
    background-color: var(--secondary);
    transition: width 0.3s ease;
  }

  .nav-link:hover,
  .nav-link.active {
    color: var(--secondary);
  }

  .nav-link:hover::after,
  .nav-link.active::after {
    width: 100%;
  }

  .navbar-toggler {
    border: 2px solid var(--secondary);
    border-radius: 5px;
    padding: 5px 8px;
  }

  .navbar-toggler-icon {
    background-image: none;
    width: 24px;
    height: 2px;
    background-color: var(--secondary);
    position: relative;
  }

  .navbar-toggler-icon::before,
  .navbar-toggler-icon::after {
    content: '';
    position: absolute;
    left: 0;
    width: 24px;
    height: 2px;
    background-color: var(--secondary);
    transition: all 0.3s;
  }

  .navbar-toggler-icon::before {
    top: -7px;
  }

  .navbar-toggler-icon::after {
    top: 7px;
  }
</style>
