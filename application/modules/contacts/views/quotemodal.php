<!-- Custom CSS (put in your stylesheet) -->
<style>
    /* Theme button equivalent to your orange button */
    .theme-btn-primary {
        background-color: #1CD5B5;
        border: none;
        color: #fff;
    }

    .theme-btn-primary:hover {
        background-color: #fff;
        color: #1CD5B5;
        filter: brightness(0.95);
    }

    .theme-btn-clear {
        background-color: #fff;
        border: 1px solid #d1d1d1;
        color: #A0A0A0;
    }

    .theme-btn-clear:hover {
        background-color: #f7f7f7;
    }

    .form-icon {
        position: relative;
    }

    .form-icon i {
        position: absolute;
        top: 50%;
        left: 12px;
        transform: translateY(-50%);
        pointer-events: none;
        color: #6c757d;
    }

    .form-icon .form-control {
        padding-left: 2.5rem;
    }

    /* Optional: make the close button red like original intent */
    .btn-close.custom-close {
        filter: brightness(1);
    }

    .btn-close.custom-close::after {
        background-color: transparent;
    }
</style>

<!-- Quote Modal -->
<div class="modal fade" id="qteModal" tabindex="-1" aria-labelledby="qteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="qteModalLabel">Get a free quote</h5>
                <button type="button" class="btn-close custom-close" data-bs-dismiss="modal" aria-label="Close"
                    onclick="setClose()"></button>
            </div>
            <div class="modal-body">
                <form method="post" id="quotemodal" onsubmit="return false">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-icon">
                                    <i class="fa-solid fa-user"></i>
                                    <input type="text" class="form-control" name="name" placeholder="Your Name"
                                        aria-label="Your Name">
                                    <div class="invalid-feedback">Please enter your name.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-icon">
                                    <i class="fa-solid fa-phone"></i>
                                    <input type="tel" class="form-control" name="phone" placeholder="Mobile Number"
                                        aria-label="Mobile Number" pattern="[\d\s\-\+\(\)]{7,}">
                                    <div class="invalid-feedback">Please enter a valid phone number.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="form-icon">
                                    <i class="fa-solid fa-envelope"></i>
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        aria-label="Your Email">
                                    <div class="invalid-feedback">Please enter a valid email.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <input type="text" class="form-control" name="mfrom" placeholder="From"
                                        aria-label="From">
                                    <div class="invalid-feedback">Please specify origin.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-icon">
                                    <i class="fa-solid fa-thumbtack"></i>
                                    <input type="text" class="form-control" name="mto" placeholder="To" aria-label="To">
                                    <div class="invalid-feedback">Please specify destination.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="form-group">
                            <div class="form-icon">
                                <!-- <i class="fa-solid fa-message"></i> -->
                                <textarea name="message" cols="30" rows="5" class="form-control"
                                    placeholder="Write Your Message" aria-label="Message"></textarea>
                            </div>
                        </div>
                    </div>

                    <div id="resultquotemodal" class="my-2" aria-live="polite"></div>

                    <div class="text-center mt-3 d-flex gap-2 justify-content-center flex-wrap">
                        <button id="submitbtnquotemodal" type="submit" class="btn theme-btn-primary">
                            Submit <i class="far fa-paper-plane ms-1"></i>
                        </button>
                        <button type="reset" class="btn theme-btn-clear" id="clearQuoteBtn">
                            Clear <i class="far fa-trash-alt ms-1"></i>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript (requires jQuery and Bootstrap JS) -->
<script type="text/javascript">
    $(function () {
        $('#submitbtnquotemodal').click(function (e) {
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('contacts/bookings') ?>",
                data: $("#quotemodal").serialize(),
                beforeSend: function () {
                    $('#resultquotemodal').html('<p style="color:green;">Please wait...</p>');
                },
                success: function (data) {
                    $('#resultquotemodal').empty();
                    if (data == '1') {
                        data = "<div class='alert alert-success'><p style='color:green;'>Thank you! Your quote request successfully submitted. We'll respond soon.</p></div>";
                        $("#quotemodal").trigger('reset');
                    }
                    $('#resultquotemodal').html(data);
                    setTimeout(function() {
                        $('#resultquotemodal').fadeOut('slow');
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
                    $('#resultquotemodal').html(errorMsg);
                }
            });
        });
    });
</script>