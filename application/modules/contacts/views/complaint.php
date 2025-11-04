<section class="complaint-form-section py-2" class="modal fade" id="complaintModal" tabindex="-1" aria-labelledby="qteModalLabel" aria-hidden="true">
  <div class="container">
    <div class="form-wrapper mx-auto shadow-lg bg-white rounded-4 p-4 p-md-5">
      <span class="text-center fw-bold mb-4 text-dark fs-4">Complaint Registration</span>

      <form id="complaintForm" class="row g-3">
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder="Customer Name *" >
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder="Product *" >
        </div>
        <div class="col-md-4">
          <input type="number" class="form-control" placeholder="Quantity *" >
        </div>

        <div class="col-md-4">
          <input type="text" class="form-control" placeholder="Complaint Number *" >
        </div>
        <div class="col-md-4">
          <input type="date" class="form-control" >
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder="Firm Name *" >
        </div>

        <div class="col-md-12">
          <input type="text" class="form-control" placeholder="City *" >
        </div>

        <div class="col-12 text-center mt-3">
          <button type="submit" class="btn btn-success px-4 py-2 rounded-pill me-2">Submit</button>
          <button type="reset" class="btn btn-outline-secondary px-4 py-2 rounded-pill">Clear</button>
        </div>
      </form>
    </div>
  </div>
</section>

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