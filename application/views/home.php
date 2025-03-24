<?php include('includes/header.php') ?>
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">

	<ul class="row g-3 list-unstyled">
		<li class="col-xl-3 col-lg-6">
			<div class="card text-center">
				<div class="card-body">
					<div class="py-4 m-0 text-center h2"><span data-purecounter-start="0" data-purecounter-separator="," data-purecounter-currency="$" data-purecounter-end="6245" class="purecounter">0</span></div>
					<h5 class="fw-normal text-success">Completed ✅</h5>
				</div>
			</div>
		</li>

		<li class="col-xl-3 col-lg-6">
			<div class="card text-center">
				<div class="card-body">
					<div class="py-4 m-0 text-center h2"><span data-purecounter-start="0" data-purecounter-separator="," data-purecounter-currency="$" data-purecounter-end="2145" class="purecounter">0</span></div>

					<h5 class="fw-normal text-warning">In Progress 🔄</h5>
				</div>
			</div>
		</li>

		<li class="col-xl-3 col-lg-6">
			<div class="card text-center">
				<div class="card-body">
					<div class="py-4 m-0 text-center h2"><span data-purecounter-start="0" data-purecounter-separator="," data-purecounter-currency="$" data-purecounter-end="2145" class="purecounter">0</span></div>
					<h5 class="fw-normal text-info">Pending ⏳</h5>
				</div>
			</div>
		</li>

		<li class="col-xl-3 col-lg-6">
			<div class="card text-center">
				<div class="card-body">
					<div class="py-4 m-0 text-center h2"><span data-purecounter-start="0" data-purecounter-separator="," data-purecounter-currency="$" data-purecounter-end="2145" class="purecounter">0</span></div>
					<h5 class="fw-normal text-info">Not Started 🚧</h5>
				</div>
			</div>
		</li>

	</ul>

	<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">

		<table class="table table-hover custom-table mb-0 dataTable" style="width: 100%;">
			<thead>
				<tr>
					<th class="fw-normal small text-muted text-uppercase" scope="col">Task Name</th>
					<th class="fw-normal small text-muted text-uppercase" scope="col">Bidder Name</th>
					<th class="fw-normal small text-muted text-uppercase" scope="col">Bidder Price</th>
					<th class="fw-normal small text-muted text-uppercase" scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Web Developer</td>
					<td>Sagar Thakur</td>
					<td>6</td>
					<td>
						<a href="<?= base_url() ?>view_posted"><button class="btn btn-success btn-sm btn-view">View</button></a>
					</td>
				</tr>
				<tr>
					<td>Web Developer</td>
					<td>Sagar Thakur</td>
					<td>6</td>
					<td>
						<a href="<?= base_url() ?>view_posted"><button class="btn btn-success btn-sm btn-view">View</button></a>
					</td>
				</tr>
				<tr>
					<td>Web Developer</td>
					<td>Sagar Thakur</td>
					<td>6</td>
					<td>
						<a href="<?= base_url() ?>view_posted"><button class="btn btn-success btn-sm btn-view">View</button></a>
					</td>
				</tr>
			</tbody>
		</table>

	</div>


</div>
</div>


<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/footer-link'); ?>