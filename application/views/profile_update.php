<?php include('includes/header.php') ?>
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
	<div class="card border-0">
		<div class="card-header bg-card pb-3">
			<h6 class="card-title mb-0">My Profile</h6>
			<div class="dropdown card-action">
				<a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full Screen">
					<svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
						<path d="M3 16m0 1a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1z"></path>
						<path d="M4 12v-6a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-6"></path>
						<path d="M12 8h4v4"></path>
						<path d="M16 8l-5 5"></path>
					</svg>
				</a>
				<a href="#" class="dropdown-toggle after-none" data-bs-toggle="dropdown" aria-expanded="false" title="More Action">
					<svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"> </path>
						<path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
						<path d="M8 12l0 .01"></path>
						<path d="M12 12l0 .01"></path>
						<path d="M16 12l0 .01"></path>
					</svg>
				</a>
				<div class="dropdown-menu dropdown-menu-end shadow rounded-4 p-2">
					<a href="javascript:void(0)" class="dropdown-item rounded-pill"><i class="me-2 fa fa-share"></i>Share</a>
					<a href="javascript:void(0)" class="dropdown-item rounded-pill"><i class="me-2 fa fa-pencil"></i>Rename</a>
					<div class="dropdown-divider"></div>
					<a href="javascript:void(0)" class="dropdown-item rounded-pill"><i class="me-2 fa fa-link"></i>Copy Link Address</a>
					<a href="javascript:void(0)" class="dropdown-item rounded-pill"><i class="me-2 fa fa-folder"></i>Move to</a>
					<a href="javascript:void(0)" class="dropdown-item rounded-pill"><i class="me-2 fa fa-copy"></i>Copy to</a>
					<a href="javascript:void(0)" class="dropdown-item rounded-pill"><i class="me-2 fa fa-edit"></i>Make Private</a>
					<a href="javascript:void(0)" class="dropdown-item rounded-pill"><i class="me-2 fa fa-download"></i>Download</a>
					<div class="dropdown-divider"></div>
					<a href="javascript:void(0)" class="dropdown-item rounded-pill card-options-remove" data-toggle="card-remove"><i class="me-2 fa fa-trash"></i>Delete</a>
				</div>
			</div>

			<div class="d-flex align-items-md-start align-items-center flex-column flex-md-row mt-4 w-100">
				<img src="assets/images/profile_av.png" alt="" class="rounded-4">
				<div class="media-body ms-md-5 m-0 mt-4 mt-md-0 text-md-start text-center">
					<h4 class="mb-1">Michelle Hughes</h4>
					<p>brian-hughes@bvite.com</p>
					<span class="text-muted">Looking for a sleek and modern admin template for your next project? Check out our brand new bootstrap admin template! 🚀</span>

					<!-- New Content Section -->
					<div class="my-3">
						<button class="btn btn-primary">Follow</button>
						<button class="btn btn-dark">Message</button>
						<button class="btn btn-success">Connect</button> <!-- New Button -->
					</div>

					<div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
						<div class="bg-body rounded-2 py-2 px-3 me-1 mt-1">
							<small class="text-muted">City</small>
							<div class="fs-5">New York</div>
						</div>
						<div class="bg-body rounded-2 py-2 px-3 me-1 mt-1">
							<small class="text-muted">Awards</small>
							<div class="fs-5">13</div>
						</div>
						<div class="bg-body rounded-2 py-2 px-3 me-1 mt-1">
							<small class="text-muted">Experience</small>
							<div class="fs-5">10+</div>
						</div>
						<div class="bg-body rounded-2 py-2 px-3 me-1 mt-1">
							<small class="text-muted">Total Earnings</small>
							<div class="fs-5">$8,705</div>
						</div>
						<div class="bg-body rounded-2 py-2 px-3 me-1 mt-1">
							<small class="text-muted">Followers</small> <!-- New Content -->
							<div class="fs-5">1.2K</div>
						</div>
						<div class="bg-body rounded-2 py-2 px-3 me-1 mt-1">
							<small class="text-muted">Projects Completed</small> <!-- New Content -->
							<div class="fs-5">48</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card-body border-top">
			<div class="row g-4">
				<div class="col-xl-8 col-lg-7">
					<h4 class="card-title mb-0">Edit Profile</h4>
					<div class="row g-3 my-3">
						<div class="col-md-5">
							<label class="form-label small text-muted">Company</label>
							<input type="text" class="form-control" disabled="" placeholder="Company" value="bvite">
						</div>
						<div class="col-sm-6 col-md-3">
							<label class="form-label small text-muted">Username</label>
							<input type="text" class="form-control" placeholder="Username" value="Michelle1212">
						</div>
						<div class="col-sm-6 col-md-4">
							<label class="form-label small text-muted">Email address</label>
							<input type="email" class="form-control" placeholder="Email">
						</div>
						<div class="col-sm-6 col-md-6">
							<label class="form-label small text-muted">First Name</label>
							<input type="text" class="form-control" placeholder="Company" value="Jane">
						</div>
						<div class="col-sm-6 col-md-6">
							<label class="form-label small text-muted">Last Name</label>
							<input type="text" class="form-control" placeholder="Last Name" value="Pearson">
						</div>
						<div class="col-md-12">
							<label class="form-label small text-muted">Address</label>
							<input type="text" class="form-control" placeholder="Home Address" value="455 S. Airport St. Moncks Corner">
						</div>
						<div class="col-sm-6 col-md-4">
							<label class="form-label small text-muted">City</label>
							<input type="text" class="form-control" placeholder="City" value="New York">
						</div>
						<div class="col-sm-6 col-md-3">
							<label class="form-label small text-muted">Postal Code</label>
							<input type="number" class="form-control" placeholder="ZIP Code">
						</div>
						<div class="col-md-5">
							<label class="form-label small text-muted">Country</label>
							<select class="form-control custom-select">
								<option value="">USA</option>
							</select>
						</div>
						<div class="col-md-12">
							<label class="form-label small text-muted">About Me</label>
							<textarea rows="5" class="form-control" placeholder="Here can be your description">Oh so, your weak rhyme You doubt I'll bother, reading into it I'll probably won't, left to my own devices But that's the difference in our opinions.</textarea>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Update Profile</button>
				</div>
			</div> <!--[ .row end ]-->
		</div>
	</div>

</div>


<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php') ?>