<?php $this->load->view('includes/header'); ?>

<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">

    <!-- Breadcrumb Section -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark p-3 rounded-3">
            <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-white">Dashboard</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Manage Tasks</li>
        </ol>
    </nav>

    <!-- Manage Tasks Section -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0">My Tasks</h4>
            <div class="card-action">
                <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Full Screen">
                    <i class="fas fa-expand"></i>
                </a>
                <a href="#" class="dropdown-toggle after-none" data-bs-toggle="dropdown" aria-expanded="false" title="More Action">
                    <i class="fas fa-ellipsis-h"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end shadow rounded-4 p-2">
                    <a href="#" class="dropdown-item rounded-pill"><i class="me-2 fa fa-share"></i>Share</a>
                    <a href="#" class="dropdown-item rounded-pill"><i class="me-2 fa fa-pencil"></i>Rename</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item rounded-pill"><i class="me-2 fa fa-link"></i>Copy Link</a>
                    <a href="#" class="dropdown-item rounded-pill"><i class="me-2 fa fa-folder"></i>Move to</a>
                    <a href="#" class="dropdown-item rounded-pill"><i class="me-2 fa fa-download"></i>Download</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item rounded-pill text-danger"><i class="me-2 fa fa-trash"></i>Delete</a>
                </div>
            </div>
        </div>

        <!-- Task 1 -->
        <div class="task-container d-flex justify-content-between align-items-center py-4">
            <div>
                <h5 class="task-title">Design a Landing Page <span class="badge badge-expiring">Expiring</span></h5>
                <p class="task-time"><i class="fas fa-clock"></i> 23 hours left</p>
                <button class="btn btn-primary"><i class="fas fa-users"></i> Manage Bidders <span class="badge bg-light text-dark">3</span></button>
            </div>
            <div class="info-box d-flex gap-4">
                <div>
                    <span class="value">3</span>
                    <p>Bids</p>
                </div>
                <div>
                    <span class="value">$22</span>
                    <p>Avg. Bid</p>
                </div>
                <div>
                    <span class="value">$15 - $30</span>
                    <p>Hourly Rate</p>
                </div>
            </div>
        </div>

        <hr>

        <!-- Task 2 -->
        <div class="task-container d-flex justify-content-between align-items-center py-4">
            <div>
                <h5 class="task-title">Food Delivery Mobile Application</h5>
                <p class="task-time"><i class="fas fa-clock"></i> 6 days, 23 hours left</p>
                <button class="btn btn-primary"><i class="fas fa-users"></i> Manage Bidders <span class="badge bg-light text-dark">3</span></button>
            </div>
            <div class="info-box d-flex gap-4">
                <div>
                    <span class="value">3</span>
                    <p>Bids</p>
                </div>
                <div>
                    <span class="value">$3,200</span>
                    <p>Avg. Bid</p>
                </div>
                <div>
                    <span class="value">$2,500 - $4,500</span>
                    <p>Fixed Price</p>
                </div>
            </div>
        </div>
    </div>

</div>





<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/footer-link'); ?>