<!-- Contact Form -->
<div class="contact-form bg-white shadow rounded-4 mt-4 p-4 p-md-5">
  <div class="contact-form-header mb-3 text-center">
    <h5 class="fw-bold mb-2">Request a <span class="text-brand2">Free Quote</span> Today!</h5>
  </div>
  <form method="post" id="quoteform" onsubmit="return false">
    <div class="row g-3">
      <div class="col-12">
        <div class="form-floating position-relative">
          <input type="text" class="form-control ps-5 py-2" name="name" id="name" placeholder="Your Name">
          <label for="name"><i class="fa-solid fa-user me-2 text-brand"></i>Your Name</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating position-relative">
          <input type="tel" class="form-control ps-5 py-2" name="phone" id="phone" placeholder="Mobile Number">
          <label for="phone"><i class="fa-solid fa-phone me-2 text-brand"></i>Mobile Number</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating position-relative">
          <input type="email" class="form-control ps-5 py-2" name="email" id="email" placeholder="Your Email">
          <label for="email"><i class="fa-solid fa-envelope me-2 text-brand"></i>Your Email</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating position-relative">
          <input type="text" class="form-control ps-5 py-2" name="mfrom" id="mfrom" placeholder="From">
          <label for="mfrom"><i class="fa-solid fa-location-dot me-2 text-brand"></i>From</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating position-relative">
          <input type="text" class="form-control ps-5 py-2" name="mto" id="mto" placeholder="To">
          <label for="mto"><i class="fa-solid fa-thumbtack me-2 text-brand"></i>To</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating position-relative">
          <textarea name="message" id="msg" class="form-control ps-5 py-2" placeholder="Write Your Message"
            style="height: 100px;"></textarea>
          <label for="msg"><i class="fa-solid fa-message me-2 text-brand"></i>Write Your Message</label>
        </div>
      </div>
    </div>

    <div id="resultquotefrom" class="mt-3"></div>

    <div class="mt-3">
      <button id="submitbtnquoteform" type="submit" class="btn w-100 py-2 theme-btn">
        Submit <i class="far fa-paper-plane ms-2"></i>
      </button>
    </div>
  </form>
</div>

<!-- Internal CSS -->
<style>
  .contact-form {
    max-width: 700px;
    margin: auto;
  }

  .form-control {
    font-size: 0.95rem;
    border-radius: 10px;
    background-color: #f8f8f8;
    border: 1px solid #ddd;
  }

  .form-control:hover,
  .form-control:focus {
    border-color: #1CD5B5;
    background-color: #fff;
    box-shadow: 0 0 0 0.15rem rgba(28, 213, 181, 0.25);
  }

  label {
    font-size: 0.9rem;
    color: #777;
  }

  textarea.form-control {
    resize: none;
  }

  .theme-btn {
    background-color: var(--primary-color, #1CD5B5);
    color: white;
    font-weight: 600;
    border-radius: 8px;
    transition: 0.3s;
  }

  .theme-btn:hover {
    background-color: var(--primary-color-dark, #16a98f);
    color: white;
  }

  @media (max-width: 768px) {
    .form-control {
      font-size: 0.9rem;
    }

    .theme-btn {
      font-size: 0.95rem;
    }
  }
</style>

<script type="text/javascript">
  $(function () {
    $('#submitbtnquoteform').click(function (e) {
      e.preventDefault();

      $.ajax({
        type: "POST",
        url: "<?php echo site_url('contacts/bookings') ?>",
        data: $("#quoteform").serialize(),
        beforeSend: function () {
          $('#resultquotefrom').html('<p style="color:green;">Please wait...</p>');
        },
        success: function (data) {
          $('#resultquotefrom').empty();
          if (data == '1') {
            data = "<div class='alert alert-success'><p style='color:green;'>Thank you! Your quote request successfully submitted. We'll respond soon.</p></div>";
            $("#quoteform").trigger('reset');
          }
          $('#resultquotefrom').html(data);
          setTimeout(function() {
           $('#resultquotefrom').fadeOut('slow');
          }, 4000);
        },
        error: function (xhr, status, error) {
          let errorMsg = `
          <div class="alert alert-danger">
            <strong>Request Failed!</strong><br>
            Status: ${status}<br>
            Error: ${error}<br>
            Response: ${xhr.responseText}
          </div>
  `;
          $('#resultquotefrom').html(errorMsg);
        }
      });
    });
  });
</script>