<?php $this->load->view('includes/header'); ?>


<div class="card-header manage-task border-bottom pb-0 m-3">
    <h3 class="card-title mb-0">Manage Bidders</h3>

    <div class="container w-100 pt-4 shadow-lg bg-white p-4 mt-4" style="border-radius: 12px;">
        <p class="mb-3">Bids for <span style="color:rgb(34, 200, 255);">Food Delivery Mobile Application</span></p>
        <hr>

        <!-- Bidder List Start -->
        <div class="bidder-list">
            <ul class="list-unstyled">
                <!-- Single Bidder -->
                <li class="row g-lg-4 g-2 align-items-center py-3">
                    <div class="col-md-6 col-12 d-flex align-items-center">
                        <img class="avatar lg rounded-circle border border-3 me-3" src="assets/images/profile_av.png" alt="avatar">
                        <div>
                            <h5 class="mb-1 text-gradient title-font">Poornima Pandey</h5>
                            <span class="text-muted small">Poornima Pandey.@gmail.com</span>
                            <div class="mt-3 d-flex gap-2">
                                <button class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i> Accept Offer</button>
                                <button class="btn btn-dark btn-sm"><i class="fa-solid fa-envelope"></i> Send Message</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 text-md-end text-start mt-3 mt-md-0">
                        <div class="d-flex justify-content-md-end justify-content-start gap-4">
                            <div>
                                <h5 class="mb-0">$3,200</h5>
                                <p class="text-muted mb-0">Fixed Price</p>
                            </div>
                            <div class="border-start ps-3">
                                <h5 class="mb-0">14 Days</h5>
                                <p class="text-muted mb-0">Delivery Time</p>
                            </div>
                        </div>
                    </div>
                </li>
                <hr>

                <!-- Duplicate Bidder Entries (You can loop this dynamically) -->
                <li class="row g-lg-4 g-2 align-items-center py-3">
                    <div class="col-md-6 col-12 d-flex align-items-center">
                        <img class="avatar lg rounded-circle border border-3 me-3" src="assets/images/profile_av.png" alt="avatar">
                        <div>
                            <h5 class="mb-1 text-gradient title-font">Poornima Pandey</h5>
                            <span class="text-muted small">Poornima Pandey.@gmail.com</span>
                            <div class="mt-3 d-flex gap-2">
                                <button class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i> Accept Offer</button>
                                <button class="btn btn-dark btn-sm"><i class="fa-solid fa-envelope"></i> Send Message</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 text-md-end text-start mt-3 mt-md-0">
                        <div class="d-flex justify-content-md-end justify-content-start gap-4">
                            <div>
                                <h5 class="mb-0">$3,200</h5>
                                <p class="text-muted mb-0">Fixed Price</p>
                            </div>
                            <div class="border-start ps-3">
                                <h5 class="mb-0">14 Days</h5>
                                <p class="text-muted mb-0">Delivery Time</p>
                            </div>
                        </div>
                    </div>
                </li>
                <hr>

            </ul>
        </div>
    </div>
</div>




<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/footer-link'); ?>