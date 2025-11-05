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
        <form class="p-4 p-md-5 rounded-4 bg-white shadow-lg" method="post" id="dealershipform" onsubmit="return false">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Firm Name</label>
              <input type="text" name="f_name" class="form-control" placeholder="Enter firm name">
            </div>
            <div class="col-md-6">
              <label class="form-label">Proprietor / Partnership</label>
              <input type="text" name="p_name" class="form-control" placeholder="Enter proprietor or partnership">
            </div>
            <div class="col-12">
              <label class="form-label">Address</label>
              <textarea class="form-control" name="address" rows="2" placeholder="Enter address"></textarea>
            </div>
            <div class="col-md-6">
              <label class="form-label">Pincode</label>
              <input type="text" name="pincode" class="form-control" maxlength="6" placeholder="Enter pincode">
            </div>
            <div class="col-md-6">
              <label class="form-label">Mobile Number</label>
              <input type="tel" name="p_no" class="form-control" maxlength="10" placeholder="Enter mobile number">
            </div>
            <div class="col-md-6">
              <label class="form-label">PAN Number</label>
              <input type="text" name="pan" class="form-control" placeholder="Enter PAN number">
            </div>
            <div class="col-md-6">
              <label class="form-label">GST Number</label>
              <input type="text" name="gst" class="form-control" placeholder="Enter GST number">
            </div>
          </div>
          <div id="resultsdealership"></div>
          <div class="text-center mt-4">
            <button id="submitbtndealership" type="submit" class="btn-submit">Submit Details</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
  $(function() {
    $('#submitbtndealership').click(function(e) {
      e.preventDefault();

      $('#resultsdealership').show().empty();
      $('#submitbtndealership').prop('disabled', true);

      $.ajax({
        type: "POST",
        url: "<?php echo site_url('home/dealership') ?>",
        data: $("#dealershipform").serialize(),
        beforeSend: function() {
          $('#resultsdealership').html('<div class="alert alert-info">Please wait...</div>');
        },
        success: function(data) {
          $('#resultcomplaintform').empty();
          if (data == "1") {
            data = "<div class='alert alert-success'><p style='color:green;'>Thank you! Your quote request successfully submitted. We'll respond soon.</p></div>";
            $("#dealershipform").trigger('reset');
          }
          $('#resultsdealership').html(data);

          $('#submitbtndealership').prop('disabled', false);

          setTimeout(function() {
            $('#resultsdealership').fadeOut('slow', function() {
              $(this).show().empty();
            });
          }, 4000);

        },
        error: function(xhr, status, error) {
          let errorMsg = `
                        <div class="alert alert-danger">
                        <strong>Request Failed!</strong><br>
                        Status: ${status}<br>
                        Error: ${error}<br>
                        Response: ${xhr.responseText}
                        </div>`;
          $('#resultsdealership').html(errorMsg);
          $('#submitbtndealership').prop('disabled', false); // Re-enable on error too
        }
      });
    });
  });
</script>

<style>
  :root {
    --primary: #14213d;
    --secondary: #fca311;
  }

  .business-form-section {
    background: linear-gradient(rgba(20, 33, 61, 0.8), rgba(20, 33, 61, 0.8)),
      url('<?= base_url() ?>assets/images/about/about.avif') center/cover no-repeat;
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

  /* Validation Error Styling */
  .validation-error {
    background-color: #fff2f2;
    border-left: 4px solid #dc3545;
    margin: 20px 0;
    padding: 15px;
  }

  .validation-error strong {
    color: #dc3545;
    display: block;
    margin-bottom: 5px;
    font-size: 1rem;
  }

  .validation-error ul {
    color: #555;
    list-style-type: none;
    padding-left: 0;
    margin-bottom: 0;
  }

  .validation-error ul li {
    margin: 5px 0;
    padding-left: 20px;
    position: relative;
  }

  .validation-error ul li:before {
    content: "•";
    color: #dc3545;
    position: absolute;
    left: 5px;
  }

  /* Alert Styling */
  .alert {
    border-radius: 8px;
    margin: 15px 0;
  }

  .alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
  }

  .alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
  }

  .alert-info {
    color: #0c5460;
    background-color: #d1ecf1;
    border-color: #bee5eb;
  }
</style>