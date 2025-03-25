<?php include('includes/header.php') ?>
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
	<div class="card border-0">
		<div class="card-body p-md-4">
			<div class="col-md-12 p-3">
				<div class="text-center text-md-center mb-4">
					<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Icon" class="rounded-circle" width="120">
					<h4 class="mt-3" style="color: #127e8f;">Rajesh Verma</h4>
					<p>rajesh.verma@indianclient.com</p>
					<div class="d-flex flex-wrap justify-content-center justify-content-md-center">
						<div class="rounded-2 py-2 px-3 me-2 mt-2 text-center" style="background: #00b8d65e">
							<small>Experience</small>
							<div class="fs-5">5+</div>
						</div>
						<div class="rounded-2 py-2 px-3 me-2 mt-2 text-center" style="background: #00b8d65e">
							<small>Total Earnings</small>
							<div class="fs-5">₹6,50,000</div>
						</div>
						<div class="rounded-2 py-2 px-3 me-2 mt-2 text-center" style="background: #00b8d65e">
							<small>Projects Completed</small>
							<div class="fs-5">35</div>
						</div>
					</div>
				</div>

				<div class="p-3">
					<h4 class="mb-3 edit-profile">Bricks Creation (Task Creation)</h4>
					<div class="row">
						<div class="col-12">
							<label class="form-label small text-muted">About Us</label>
							<textarea class="form-control editor" rows="5"></textarea>
						</div>
						<div class="col-12 mt-3">
							<label class="form-label small text-muted">Mission</label>
							<textarea class="form-control" rows="3" placeholder="Enter detailed mission"></textarea>
						</div>
						<div class="col-12 mt-3">
							<label class="form-label small text-muted">Vision</label>
							<textarea class="form-control" rows="3" placeholder="Enter detailed vision"></textarea>
						</div>


						<div class="col-6 mt-3">
							<label class="form-label small text-muted">Company Valuation</label>
							<input type="text" class="form-control" placeholder="Enter valuation">
						</div>
						<div class="col-6 mt-3">
							<label class="form-label small text-muted">Equity Dilution</label>
							<input type="text" class="form-control" placeholder="Enter dilution percentage">
						</div>
					</div>
					<button type="submit" class="btn btn-primary mt-3">Save Changes</button>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php') ?>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
	// Apply CKEditor to textareas
	document.addEventListener("DOMContentLoaded", function() {
		CKEDITOR.replaceAll('editor');
	});
</script>