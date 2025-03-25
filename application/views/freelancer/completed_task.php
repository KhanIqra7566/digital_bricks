<?php $this->load->view('includes/header-link'); ?>
<?php $this->load->view('includes/freelancer_header'); ?>

<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
	<h6 class="card-title pb-4">Recent transaction</h6>
	<ul class="row g-3 list-unstyled">
		<li class="col-xl-3 col-lg-6">
			<div class="card text-center">
				<div class="card-body d-flex flex-column align-items-center ps-0 pe-0">
					<div class="avatar rounded no-thumbnail mb-2"><i class="fa fa-tasks"></i></div>
					<h5 class="fw-normal theme-text-color1 mb-1">Total Tasks Completed</h5>
					<p class="fw-bold text-primary">120 Tasks</p>
					<p class="text-muted small">Last updated: 24 March 2025</p>
				</div>
			</div>
		</li>

		<li class="col-xl-3 col-lg-6">
			<div class="card text-center">
				<div class="card-body d-flex flex-column align-items-center ps-0 pe-0">
					<div class="avatar rounded no-thumbnail mb-2"><i class="fa fa-check-circle"></i></div>
					<h5 class="fw-normal theme-text-color2 mb-1">Approved Payments</h5>
					<p class="fw-bold text-success">+ ₹1,200.00</p>
					<p class="text-muted small">Last Payment: 15 March 2025</p>
				</div>
			</div>
		</li>


		<li class="col-xl-3 col-lg-6">
			<div class="card text-center">
				<div class="card-body d-flex flex-column align-items-center ps-0 pe-0">
					<div class="avatar rounded no-thumbnail mb-2"><i class="fa fa-hourglass-half"></i></div>
					<h5 class="fw-normal theme-text-color3 mb-1">Pending Task Payments</h5>
					<p class="fw-bold text-warning">₹250.00</p>
					<p class="text-muted small">Approval Pending</p>
				</div>
			</div>
		</li>

		<li class="col-xl-3 col-lg-6">
			<div class="card text-center">
				<div class="card-body d-flex flex-column align-items-center ps-0 pe-0">
					<div class="avatar rounded no-thumbnail mb-2"><i class="fa fa-trophy"></i></div>
					<h5 class="fw-normal theme-text-color4 mb-1">Performance Incentive</h5>
					<p class="fw-bold text-success">+ ₹100.00</p>
					<p class="text-muted small">Reward for Outstanding Work</p>
				</div>
			</div>
		</li>



		<li class="col-12">
			<table class="table align-middle table-hover dataTable" style="width: 100%;">
				<thead>
					<tr class="small text-muted text-uppercase">
						<th>
							<div class="form-check" style="font-size: 16px;">
								<input class="form-check-input select-all" type="checkbox" value="">
							</div>
						</th>
						<th>Product Description</th>
						<th>Status</th>
						<th>Price</th>
						<th>Order No.</th>
						<th>Order Total</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>


					<tr>
						<td>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="">
							</div>
						</td>
						<td class="fs-6">Electricity Bill</td>
						<td class="text-primary">Your order is successful</td>
						<td>₹122.00</td>
						<td>
							B-123123
							<div class="small text-muted">22 5:08 pm</div>
						</td>
						<td>₹122.00</td>
						<td>
							<a href="<?= base_url() ?>view_posted">
								<button class="btn btn-success btn-sm btn-view">View</button>
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</li>
	</ul>

</div>

<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php') ?>