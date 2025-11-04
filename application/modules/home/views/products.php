<!-- Our Products Section -->




<div class="container py-5">
  <div class="row g-4">
    <span class="fw-bold heading">Our Products</span>
    <!-- Product 1 -->
    <div class="col-md-4">
      <div class="card shadow border-0 h-100">
        <div class="row g-0">
          <div class="col-5">
            <img src="<?= base_url() ?>assets/images/products/Fan.jpeg" class="img-fluid rounded-start" alt="fan" loading="lazy">
          </div>
          <div class="col-7">
            <div class="card-body">
              <span class="card-title fs-2">Fan</span>
              <!-- <span class="text-muted text-uppercase d-block fw-bold" style="font-size: 12px;">by studio and friends</span> -->
              <p class="card-text small text-muted">A stylish and efficient fan to keep you cool during hot days.</p>
              <!-- <div class="d-flex justify-content-between align-items-center">
                <p class="mb-0 fw-bold fs-5">$78</p>
                <button class="btn btn-success btn-sm rounded-pill px-3">Buy Now</button>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-4">
      <div class="card shadow border-0 h-100">
        <div class="row g-0">
          <div class="col-5">
            <img src="<?= base_url() ?>assets/images/products/Heater.webp" class="img-fluid rounded-start" alt="Heater" loading="lazy">
          </div>
          <div class="col-7">
            <div class="card-body">
              <span class="card-title fs-2">Room Heaters</span>
              <!-- <span class="text-muted text-uppercase d-block fw-bold" style="font-size: 12px;">by light & co.</span> -->
              <p class="card-text small text-muted">Elegant heater designed for maximum comfort — warm up your space effortlessly.</p>
              <!-- <div class="d-flex justify-content-between align-items-center">
                <p class="mb-0 fw-bold fs-5">$52</p>
                <button class="btn btn-success btn-sm rounded-pill px-3">Buy Now</button>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-4">
      <div class="card shadow border-0 h-100">
        <div class="row g-0">
          <div class="col-5">
            <img src="<?= base_url() ?>assets/images/products/hot water.jpeg" class="img-fluid rounded-start" alt="Geyser" loading="lazy">
          </div>
          <div class="col-7">
            <div class="card-body">
              <span class="card-title fs-2">Geyser</span>
              <!-- <span class="text-muted text-uppercase d-block fw-bold" style="font-size: 12px;">by craft studio</span> -->
              <p class="card-text small text-muted">Efficient geyser for instant hot water — perfect for your bathroom.</p>
              <!-- <div class="d-flex justify-content-between align-items-center">
                <p class="mb-0 fw-bold fs-5">$34</p>
                <button class="btn btn-success btn-sm rounded-pill px-3">Buy Now</button>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-4">
      <div class="card shadow border-0 h-100">
        <div class="row g-0">
          <div class="col-5">
            <img src="<?= base_url() ?>assets/images/products/cool.webp" class="img-fluid rounded-start" alt="Coolers" loading="lazy">
          </div>
          <div class="col-7">
            <div class="card-body">
              <span class="card-title fs-2">Coolers</span>
              <!-- <span class="text-muted text-uppercase d-block fw-bold" style="font-size: 12px;">by craft studio</span> -->
              <p class="card-text small text-muted">Efficient coolers for instant relief — perfect for your home.</p>
              <!-- <div class="d-flex justify-content-between align-items-center">
                <p class="mb-0 fw-bold fs-5">$34</p>
                <button class="btn btn-success btn-sm rounded-pill px-3">Buy Now</button>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-4">
      <div class="card shadow border-0 h-100">
        <div class="row g-0">
          <div class="col-5">
            <img src="<?= base_url() ?>assets/images/products/Gas Stove.jpeg" class="img-fluid rounded-start" alt="Gas Stove" loading="lazy">
          </div>
          <div class="col-7">
            <div class="card-body">
              <span class="card-title fs-2">Gas Stove</span>
              <!-- <span class="text-muted text-uppercase d-block fw-bold" style="font-size: 12px;">by craft studio</span> -->
              <p class="card-text small text-muted">Efficient gas stove for quick cooking — perfect for your kitchen.</p>
              <!-- <div class="d-flex justify-content-between align-items-center">
                <p class="mb-0 fw-bold fs-5">$34</p>
                <button class="btn btn-success btn-sm rounded-pill px-3">Buy Now</button>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-4">
      <div class="card shadow border-0 h-100">
        <div class="row g-0">
          <div class="col-5">
            <img src="<?= base_url() ?>assets/images/products/Chimney.webp" class="img-fluid rounded-start" alt="Chimney" loading="lazy">
          </div>
          <div class="col-7">
            <div class="card-body">
              <span class="card-title fs-2">Chimney</span>
              <!-- <span class="text-muted text-uppercase d-block fw-bold" style="font-size: 12px;">by craft studio</span> -->
              <p class="card-text small text-muted">Efficient chimney for improved ventilation — perfect for your kitchen.</p>
              <!-- <div class="d-flex justify-content-between align-items-center">
                <p class="mb-0 fw-bold fs-5">$34</p>
                <button class="btn btn-success btn-sm rounded-pill px-3">Buy Now</button>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<style>
    .heading {
  position: relative;
  display: inline-block;
  font-size: 2rem;
  color: #14213d;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding-bottom: 0.5rem;
}

.heading::after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: 0;
  width: 80px;
  height: 4px;
  background-color: #fca311; /* golden accent */
  transform: translateX(-50%);
  border-radius: 2px;
}
</style>