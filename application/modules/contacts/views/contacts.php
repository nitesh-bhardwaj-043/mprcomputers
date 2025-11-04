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
              <h1 class="fw-bold display-5 mb-3">Feedback</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center bg-transparent p-0">
                  <li class="breadcrumb-item">
                    <a href="<?= site_url() ?>" class="text-white text-decoration-none">Home</a>
                  </li>
                  <li class="breadcrumb-item active text-white" aria-current="page">Feedback</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="customer-support-section py-5">
  <div class="container">
    <div class="row align-items-center">

      <!-- top Side: Complaints Info -->
      <div class="col-md-12 mb-4 mb-md-0">
        <h2 class="fw-bold text-dark mb-3">Customer Support & Assistance</h2>
        <p class="text-muted">
          We value our customers and are dedicated to resolving your queries promptly.
          For any <strong>product complaints, service requests, or support assistance</strong>, please contact the
          respective brand helplines listed below.
        </p>

        <div class="support-table-wrapper mt-4">
          <span class="mb-3 text-dark fs-4">Brand Complaint & Service Helplines</span>
          <table class="table table-bordered text-center align-middle shadow-sm">
            <thead class="table-light">
              <tr>
                <th>Brand</th>
                <th>Customer Care Details</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Havells</strong></td>
                <td>
                  <span class="text-secondary fw-semibold">Toll-Free:</span>
                  <span class="text-dark">1800-110-303 / 0804-577-1313</span>
                </td>
              </tr>
              <tr>
                <td><strong>Intex</strong></td>
                <td>
                  <span class="text-secondary fw-semibold">Toll-Free:</span>
                  <span class="text-dark">0120-489-5555</span>
                </td>
              </tr>
              <tr>
                <td><strong>Singer</strong></td>
                <td>
                  <span class="text-secondary fw-semibold">Toll-Free:</span>
                  <span class="text-dark">1800-103-3474</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <style>
        .support-table-wrapper table {
          background-color: #fff;
          border-radius: 8px;
          overflow: hidden;
        }

        .support-table-wrapper thead th {
          background-color: #fca311 !important;
          /* warm golden tone */
          color: #14213d;
          font-weight: 600;
        }

        .support-table-wrapper tbody td {
          font-size: 15px;
        }

        .support-table-wrapper tr:hover {
          background-color: #fff8ec;
        }
      </style>


      <!-- bottom Side: WhatsApp / Login Info -->
      <section class="demo-support-section py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="p-4 shadow-sm rounded bg-light">
          
          <span class="fw-bold mb-3 text-dark fs-4">
            Demo, Installation & Repair Assistance
          </span>

          <p class="text-muted">
            For <strong>login support, demo scheduling, installation, or repair services</strong>, 
            our partner brands provide direct help through their <strong>official WhatsApp helplines</strong>.  
            Please share your details in the given format to receive prompt assistance.
          </p>

          <!-- Support Numbers Table -->
          <div class="support-table-wrapper mt-4">
            <table class="table table-bordered text-center align-middle">
              <thead class="table-success">
                <tr>
                  <th>Brand</th>
                  <th>WhatsApp Support</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Diasun</strong></td>
                  <td>+91 99900 76011</td>
                  <td>
                    <a href="https://wa.me/919990076011?text=Hello%20Diasun%20Team!%0AHere%20are%20my%20details:%0AName:%0AAddress:%0APin%20Code:%0APhone%20Number:%0AProduct%20Serial%20No.%20Photo:%0AInvoice%20Photo:"
                      target="_blank" class="btn btn-success btn-sm">
                      <i class="fa-brands fa-whatsapp"></i> Message
                    </a>
                  </td>
                </tr>

                <tr>
                  <td><strong>Goodflame</strong></td>
                  <td>+91 72900 87231</td>
                  <td>
                    <a href="https://wa.me/917290087231?text=Hello%20Goodflame%20Team!%0AHere%20are%20my%20details:%0AName:%0AAddress:%0APin%20Code:%0APhone%20Number:%0AProduct%20Serial%20No.%20Photo:%0AInvoice%20Photo:"
                      target="_blank" class="btn btn-success btn-sm">
                      <i class="fa-brands fa-whatsapp"></i> Message
                    </a>
                  </td>
                </tr>

                <tr>
                  <td><strong>PHX</strong></td>
                  <td>+91 99101 22513</td>
                  <td>
                    <a href="https://wa.me/919910122513?text=Hello%20PHX%20Team!%0AHere%20are%20my%20details:%0AName:%0AAddress:%0APin%20Code:%0APhone%20Number:%0AProduct%20Serial%20No.%20Photo:%0AInvoice%20Photo:"
                      target="_blank" class="btn btn-success btn-sm">
                      <i class="fa-brands fa-whatsapp"></i> Message
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Message Format -->
          <div class="bg-white p-3 rounded border mt-4">
            <pre class="mb-0" style="white-space: pre-line; font-family: 'Segoe UI', sans-serif;">
<b>Message Format:</b>
Name:
Address:
Pin Code:
Phone Number:
Product Serial Number (Photo):
Product Invoice (Photo):
            </pre>
          </div>

          <p class="mt-3 text-muted small">
            <i class="fa-solid fa-check me-2"></i>Please make sure all information is accurate and photos are clear to help our team serve you efficiently.
          </p>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- 🌿 Styling -->
<style>
.demo-support-section {
  background-color: #f8f9fa;
}

.support-table-wrapper table {
  background-color: #fff;
  border-radius: 8px;
  overflow: hidden;
}

.support-table-wrapper thead th {
  background-color: #14213d !important;
  color: #fff;
  font-weight: 600;
}

.support-table-wrapper tr:hover {
  background-color: #f4fff4;
}

.btn-success {
  background-color: #25D366;
  border: none;
  font-weight: 600;
}

.btn-success:hover {
  background-color: #1ebe57;
}

pre {
  background: #f9f9f9;
  border-left: 4px solid #25D366;
  padding: 10px 15px;
  font-size: 15px;
  color: #333;
  border-radius: 4px;
}
</style>


    </div>
  </div>
</section>

<!-- Optional Styling -->
<style>
  .customer-support-section {
    background: linear-gradient(135deg, #f8fbff, #eef5ff);
    font-family: 'Segoe UI', system-ui, sans-serif;
  }

  .customer-support-section table {
    background: white;
    border-radius: 8px;
    overflow: hidden;
  }

  .customer-support-section th {
    background-color: #e9f3ff;
  }
</style>