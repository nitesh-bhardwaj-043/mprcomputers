<section class="business-form-section py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Text Section -->
      <div class="col-lg-6 mb-4 mb-lg-0 text-white">
        <span class="fw-bold mb-3 fs-3">Dealership</span>
        <p class="lead mb-4">
          Partner with us and grow your business with reliable distribution and trust.
          Fill out the form to register your firm details, and our team will get in touch with you soon.
        </p>
        <ul class="list-unstyled">
          <li>✅ Trusted distributor connections</li>
          <li>✅ Fast onboarding process</li>
          <li>✅ Dedicated support team</li>
        </ul>
      </div>

      <!-- Right Form Section -->
      <div class="col-lg-6">
        <form class="p-4 p-md-5 rounded-4 bg-white shadow-lg">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Firm Name</label>
              <input type="text" class="form-control" placeholder="Enter firm name" >
            </div>
            <div class="col-md-6">
              <label class="form-label">Proprietor / Partnership</label>
              <input type="text" class="form-control" placeholder="Enter proprietor or partnership" >
            </div>
            <div class="col-12">
              <label class="form-label">Address</label>
              <textarea class="form-control" rows="2" placeholder="Enter address" ></textarea>
            </div>
            <div class="col-md-6">
              <label class="form-label">Pincode</label>
              <input type="text" class="form-control" maxlength="6" placeholder="Enter pincode" >
            </div>
            <div class="col-md-6">
              <label class="form-label">Mobile Number</label>
              <input type="tel" class="form-control" maxlength="10" placeholder="Enter mobile number" >
            </div>
            <div class="col-md-6">
              <label class="form-label">PAN Number</label>
              <input type="text" class="form-control" placeholder="Enter PAN number" >
            </div>
            <div class="col-md-6">
              <label class="form-label">GST Number</label>
              <input type="text" class="form-control" placeholder="Enter GST number" >
            </div>
          </div>
          <div class="text-center mt-4">
            <button type="submit" class="btn-submit">Submit Details</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<style>
  :root {
    --primary: #14213d;
    --secondary: #fca311;
  }

  .business-form-section {
    background: linear-gradient(rgba(20, 33, 61, 0.8), rgba(20, 33, 61, 0.8)),
                url('<?= base_url() ?>assets/images/about/about.avif')
                center/cover no-repeat;
    color: #fff;
  }


  .business-form-section p {
    color: #e0e0e0;
  }

  .form-control {
    border-radius: 8px;
    border: 1px solid #ddd;
    padding: 10px;
  }

  .form-control:focus {
    border-color: var(--secondary);
    box-shadow: 0 0 6px rgba(252, 163, 17, 0.3);
  }

  .btn-submit {
    background: var(--secondary);
    border: none;
    color: #fff;
    padding: 10px 30px;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .btn-submit:hover {
    background: #e08e00;
  }

  @media (max-width: 768px) {
    .business-form-section {
      text-align: center;
    }
  }
</style>
