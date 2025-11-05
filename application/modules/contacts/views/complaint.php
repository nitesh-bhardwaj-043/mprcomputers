<section id="slider" class="position-relative">
  <!-- Background image with overlay -->
  <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 1;">
    <img src="<?= base_url('assets/images/breadcrumb/breadcrumb.jpg') ?>" alt="Background"
      class="w-100 h-100 object-fit-cover" style="opacity: 0.5;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50" loading="lazy"></div>
  </div>

  <!-- Swiper Slider Content -->
  <div class="swiper-container position-relative" style="z-index: 2;">
    <div class="swiper-wrapper">
      <div class="swiper-slide text-center py-5">
        <div class="container py-5">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-white">
              <h1 class="fw-bold display-5 mb-3">Feedback Form</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center bg-transparent p-0">
                  <li class="breadcrumb-item">
                    <a href="<?= site_url() ?>" class="text-white text-decoration-none">Home</a>
                  </li>
                  <li class="breadcrumb-item active text-white" aria-current="page">Feedback Form</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="complaint-form-section py-2" class="modal fade" id="complaintModal" tabindex="-1" aria-labelledby="qteModalLabel" aria-hidden="true">
  <div class="container">
    <div class="form-wrapper mx-auto shadow-lg bg-white rounded-4 p-4 p-md-5">
      <span class="text-center fw-bold mb-4 text-dark fs-4">Complaint Registration</span>

      <form id="complaintForm" class="row g-3" method="post" onsubmit="return false">
        <div class="col-md-4">
          <input type="text" name="c_name" class="form-control" placeholder="Customer Name">
        </div>
        <div class="col-md-4">
          <input type="text" name="f_name" class="form-control" placeholder="Firm Name">
        </div>
        <div class="col-md-4">
          <input type="text" name="product" class="form-control" placeholder="Product">
        </div>
        <div class="col-md-4">
          <input type="number" name="qty" class="form-control" placeholder="Quantity">
        </div>
        <div class="col-md-4">
          <input type="text" name="c_no" class="form-control" placeholder="Complaint Number">
        </div>
        <div class="col-md-4">
          <input type="date" name="c_date" class="form-control">
        </div>


        <div class="col-md-12">
          <input type="text" name="city" class="form-control" placeholder="City">
        </div>

        <div id="resultcomplaintform"></div>

        <div class="col-12 text-center mt-3">
          <button type="submit" id="submitbtncomplaintForm" class="btn btn-success px-4 py-2 rounded-pill me-2">Submit</button>
          <button type="reset" class="btn btn-outline-secondary px-4 py-2 rounded-pill">Clear</button>
        </div>
      </form>
    </div>
  </div>
</section>

<script type="text/javascript">
  $(function() {
    $('#submitbtncomplaintForm').click(function(e) {
      e.preventDefault();

      $.ajax({
        type: "POST",
        url: "<?php echo site_url('contacts/complaintform') ?>",
        data: $("#complaintForm").serialize(),
        beforeSend: function() {
          $('#resultcomplaintform').html('<p style="color:green;">Please wait...</p>');
        },
        success: function(data) {
          $('#resultcomplaintform').empty();
          if (data == "1") {
            data = "<div class='alert alert-success'><p style='color:green;'>Thank you! Your quote request successfully submitted. We'll respond soon.</p></div>";
            $("#complaintForm").trigger('reset');
          }
          $('#resultcomplaintform').html(data);
          setTimeout(function() {
            $('#resultcomplaintform').fadeOut('slow');
          }, 4000);
        },
        error: function(xhr, status, error) {
          let errorMsg = `
          <div class="alert alert-danger">
            <strong>Request Failed!</strong><br>
            Status: ${status}<br>
            Error: ${error}<br>
            Response: ${xhr.responseText}
          </div>
  `;
          $('#resultcomplaintform').html(errorMsg);
        }
      });
    });
  });
</script>

<style>
  .complaint-form-section {
    background: linear-gradient(135deg, #f8fff8, #eafbea);
  }

  .form-wrapper {
    max-width: 1100px;
  }

  .form-control {
    border: 1px solid #ccc;
    border-radius: 10px;
    height: 50px;
    font-size: 15px;
    transition: 0.3s;
  }

  .form-control:focus {
    border-color: #14213d;
    box-shadow: 0 0 6px rgba(25, 135, 84, 0.3);
  }

  .btn-success {
    background-color: #14213d;
    border: none;
    font-weight: 600;
  }

  .btn-success:hover {
    background-color: #14213d;
  }

  .btn-outline-secondary {
    font-weight: 600;
    border-width: 2px;
  }

  @media (max-width: 768px) {
    .form-wrapper {
      padding: 2rem;
    }
  }
</style>