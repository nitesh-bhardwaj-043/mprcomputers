<section class="brand-section py-5">
  <div class="container mb-4">
    <span class="fw-bold heading">Our Trusted Brands</span>
  </div>

  <div class="brand-slider">
    <div class="brand-track">
      <!-- Repeat your brand logos here -->
      <img src="assets/images/brands/havells.png" alt="Havells">
      <img src="assets/images/brands/intex.png" alt="Intex">
      <img src="assets/images/brands/diasun.png" alt="Diasun">
      <img src="assets/images/brands/goodflame.png" alt="Goodflame">
      <img src="assets/images/brands/singer.png" alt="Singer">
      <img src="assets/images/brands/phx.png" alt="Phoenix">
      <!-- duplicate once for infinite loop effect -->
      <img src="assets/images/brands/havells.png" alt="Havells">
      <img src="assets/images/brands/intex.png" alt="Intex">
      <img src="assets/images/brands/diasun.png" alt="Diasun">
      <img src="assets/images/brands/goodflame.png" alt="Goodflame">
      <img src="assets/images/brands/singer.png" alt="Singer">
      <img src="assets/images/brands/phx.png" alt="Phoenix">
    </div>
  </div>
</section>

<style>
:root {
  --primary: #14213d;
  --secondary: #fca311;
}

/* Section */
.brand-section {
  background-color: #fff;
  position: relative;
  overflow: hidden;
}

.heading {
  font-size: 1rem;
  color: var(--primary);
  position: relative;
  display: inline-block;
  padding-bottom: 0.5rem;
}
.heading::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0%;
  transform: translateX(-50%);
  width: 80px;
  height: 4px;
  background-color: var(--secondary);
  border-radius: 2px;
}

/* Slider */
.brand-slider {
  overflow: hidden;
  white-space: nowrap;
  position: relative;
}
.brand-track {
  display: flex;
  animation: scroll 25s linear infinite;
  width: max-content;
  gap: 60px;
}
.brand-track img {
  height: 60px;
  object-fit: contain;
  filter: grayscale(100%);
  transition: 0.3s ease;
}
.brand-track img:hover {
  filter: grayscale(0%);
  transform: scale(1.05);
}

/* Infinite scroll keyframes */
@keyframes scroll {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(-50%);
  }
}

@media (max-width: 768px) {
  .brand-track {
    gap: 30px;
    animation-duration: 20s;
  }
  .brand-track img {
    height: 45px;
  }
}
</style>
