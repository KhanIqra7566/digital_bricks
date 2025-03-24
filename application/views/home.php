<?php include('includes/header.php') ?>
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <div class="row g-3">
    <div class="tab-pane fade" id="pills_tasks" role="tabpanel">
								<ul class="row g-1 list-unstyled li_animate">
									<li class="col-12 text-uppercase text-muted">
										<div class="d-flex justify-content-between small">
											<span>Assigned Tasks</span>
											<a href="#" title="view all task">View All</a>
										</div>
									</li>
									<li class="col-6">
										<div class="card border-0">
											<div class="card-body p-3">
												<div class="fs-5 fw-bold"><span data-purecounter-start="0" data-purecounter-separator="," data-purecounter-end="37" class="purecounter">0</span></div>
												<span class="text-muted">Pending</span>
											</div>
										</div>
									</li>
									<li class="col-6">
										<div class="card border-0">
											<div class="card-body p-3">
												<div class="fs-5 fw-bold"><span data-purecounter-start="0" data-purecounter-separator="," data-purecounter-end="18" class="purecounter">0</span></div>
												<span class="text-muted">Completed</span>
											</div>
										</div>
									</li>
									<li class="col-6">
										<div class="card border-0">
											<div class="card-body p-3">
												<div class="fs-5 fw-bold"><span data-purecounter-start="0" data-purecounter-separator="," data-purecounter-end="23" class="purecounter">0</span></div>
												<span class="text-muted">On Hold</span>
											</div>
										</div>
									</li>
									<li class="col-6">
										<div class="card border-0">
											<div class="card-body p-3">
												<div class="fs-5 fw-bold"><span data-purecounter-start="0" data-purecounter-separator="," data-purecounter-end="12" class="purecounter">0</span></div>
												<span class="text-muted">In Progress</span>
											</div>
										</div>
									</li>
									<li class="col-12">
										<div class="card border-0">
											<div class="card-header">
												<h6 class="card-title mb-0">Tasks Analysis</h6>
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
															<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
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
											</div>
											<div class="card-body pt-0">
												<div id="Apex_TaskAssignin"></div>
												<a href="#" title="view all task" class="btn btn-dark w-100">View My Task</a>
											</div>
										</div>
									</li>
								</ul>
							</div>

        <div class="ps-md-4 pe-md-3 px-2 py-3 page-body">

            <table class="table table-hover custom-table mb-0 dataTable" style="width: 100%;">
                <thead>
                    <tr>
                        <th class="fw-normal small text-muted text-uppercase" scope="col">Project Name</th>
                        <th class="fw-normal small text-muted text-uppercase" scope="col">Assign</th>
                        <th class="fw-normal small text-muted text-uppercase" scope="col">Start Date</th>
                        <th class="fw-normal small text-muted text-uppercase" scope="col">Deadline</th>
                        <th class="fw-normal small text-muted text-uppercase" scope="col">Task</th>
                        <th class="fw-normal small text-muted text-uppercase" scope="col">Progress</th>
                        <th class="fw-normal small text-muted text-uppercase" scope="col">Status</th>
                        <th class="fw-normal small text-muted text-uppercase" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="project-details.html">Project Doughnut Dungeon</a></td>
                        <td>
                            <div class="avatar-list avatar-list-stacked d-flex ps-2">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar5.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar6.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" title="Avatar">
                            </div>
                        </td>
                        <td>11 Jan 2023</td>
                        <td>10 Feb 2023</td>
                        <td>12</td>
                        <td>
                            <small class="text-muted">50 / 50</small>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>
                            <span class="badge text-success">COMPLETED</span>
                        </td>
                        <td>
                            <a href="#" class="dropdown-toggle after-none" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-opacity="1" d="M4 9.5C3.60218 9.5 3.22064 9.34196 2.93934 9.06066C2.65804 8.77936 2.5 8.39782 2.5 8C2.5 7.60218 2.65804 7.22064 2.93934 6.93934C3.22064 6.65804 3.60218 6.5 4 6.5C4.39782 6.5 4.77936 6.65804 5.06066 6.93934C5.34196 7.22064 5.5 7.60218 5.5 8C5.5 8.39782 5.34196 8.77936 5.06066 9.06066C4.77936 9.34196 4.39782 9.5 4 9.5ZM8 9.5C7.60218 9.5 7.22064 9.34196 6.93934 9.06066C6.65804 8.77936 6.5 8.39782 6.5 8C6.5 7.60218 6.65804 7.22064 6.93934 6.93934C7.22064 6.65804 7.60218 6.5 8 6.5C8.39782 6.5 8.77936 6.65804 9.06066 6.93934C9.34196 7.22064 9.5 7.60218 9.5 8C9.5 8.39782 9.34196 8.77936 9.06066 9.06066C8.77936 9.34196 8.39782 9.5 8 9.5ZM12 9.5C11.6022 9.5 11.2206 9.34196 10.9393 9.06066C10.658 8.77936 10.5 8.39782 10.5 8C10.5 7.60218 10.658 7.22064 10.9393 6.93934C11.2206 6.65804 11.6022 6.5 12 6.5C12.3978 6.5 12.7794 6.65804 13.0607 6.93934C13.342 7.22064 13.5 7.60218 13.5 8C13.5 8.39782 13.342 8.77936 13.0607 9.06066C12.7794 9.34196 12.3978 9.5 12 9.5Z" />
                                    <path fill-opacity="0.3" d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V14C15 14.2652 14.8946 14.5196 14.7071 14.7071C14.5196 14.8946 14.2652 15 14 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L2 0Z" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 p-2 rounded-4">
                                <li><a class="dropdown-item rounded-pill" href="#">File Info</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Copy to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Move to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Rename</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Block</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Delete</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="project-details.html">Eleifend sodales donec congue fringilla</a></td>
                        <td>
                            <div class="avatar-list avatar-list-stacked d-flex ps-2">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip" title="Avatar">
                            </div>
                        </td>
                        <td>15 Jan 2023</td>
                        <td>10 Feb 2023</td>
                        <td>45</td>
                        <td>
                            <small class="text-muted">50 / 50</small>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>
                            <span class="badge text-warning">INACTIVE</span>
                        </td>
                        <td>
                            <a href="#" class="dropdown-toggle after-none" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-opacity="1" d="M4 9.5C3.60218 9.5 3.22064 9.34196 2.93934 9.06066C2.65804 8.77936 2.5 8.39782 2.5 8C2.5 7.60218 2.65804 7.22064 2.93934 6.93934C3.22064 6.65804 3.60218 6.5 4 6.5C4.39782 6.5 4.77936 6.65804 5.06066 6.93934C5.34196 7.22064 5.5 7.60218 5.5 8C5.5 8.39782 5.34196 8.77936 5.06066 9.06066C4.77936 9.34196 4.39782 9.5 4 9.5ZM8 9.5C7.60218 9.5 7.22064 9.34196 6.93934 9.06066C6.65804 8.77936 6.5 8.39782 6.5 8C6.5 7.60218 6.65804 7.22064 6.93934 6.93934C7.22064 6.65804 7.60218 6.5 8 6.5C8.39782 6.5 8.77936 6.65804 9.06066 6.93934C9.34196 7.22064 9.5 7.60218 9.5 8C9.5 8.39782 9.34196 8.77936 9.06066 9.06066C8.77936 9.34196 8.39782 9.5 8 9.5ZM12 9.5C11.6022 9.5 11.2206 9.34196 10.9393 9.06066C10.658 8.77936 10.5 8.39782 10.5 8C10.5 7.60218 10.658 7.22064 10.9393 6.93934C11.2206 6.65804 11.6022 6.5 12 6.5C12.3978 6.5 12.7794 6.65804 13.0607 6.93934C13.342 7.22064 13.5 7.60218 13.5 8C13.5 8.39782 13.342 8.77936 13.0607 9.06066C12.7794 9.34196 12.3978 9.5 12 9.5Z" />
                                    <path fill-opacity="0.3" d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V14C15 14.2652 14.8946 14.5196 14.7071 14.7071C14.5196 14.8946 14.2652 15 14 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L2 0Z" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 p-2 rounded-4">
                                <li><a class="dropdown-item rounded-pill" href="#">File Info</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Copy to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Move to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Rename</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Block</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Delete</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="project-details.html">Aliquam amet ullamcorper mus tincidunt</a></td>
                        <td>
                            <div class="avatar-list avatar-list-stacked d-flex ps-2">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar5.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" title="Avatar">
                            </div>
                        </td>
                        <td>20 Jan 2023</td>
                        <td>05 Feb 2023</td>
                        <td>55</td>
                        <td>
                            <small class="text-muted">60 / 88</small>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>
                            <span class="badge text-secondary">CANCELLED</span>
                        </td>
                        <td>
                            <a href="#" class="dropdown-toggle after-none" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-opacity="1" d="M4 9.5C3.60218 9.5 3.22064 9.34196 2.93934 9.06066C2.65804 8.77936 2.5 8.39782 2.5 8C2.5 7.60218 2.65804 7.22064 2.93934 6.93934C3.22064 6.65804 3.60218 6.5 4 6.5C4.39782 6.5 4.77936 6.65804 5.06066 6.93934C5.34196 7.22064 5.5 7.60218 5.5 8C5.5 8.39782 5.34196 8.77936 5.06066 9.06066C4.77936 9.34196 4.39782 9.5 4 9.5ZM8 9.5C7.60218 9.5 7.22064 9.34196 6.93934 9.06066C6.65804 8.77936 6.5 8.39782 6.5 8C6.5 7.60218 6.65804 7.22064 6.93934 6.93934C7.22064 6.65804 7.60218 6.5 8 6.5C8.39782 6.5 8.77936 6.65804 9.06066 6.93934C9.34196 7.22064 9.5 7.60218 9.5 8C9.5 8.39782 9.34196 8.77936 9.06066 9.06066C8.77936 9.34196 8.39782 9.5 8 9.5ZM12 9.5C11.6022 9.5 11.2206 9.34196 10.9393 9.06066C10.658 8.77936 10.5 8.39782 10.5 8C10.5 7.60218 10.658 7.22064 10.9393 6.93934C11.2206 6.65804 11.6022 6.5 12 6.5C12.3978 6.5 12.7794 6.65804 13.0607 6.93934C13.342 7.22064 13.5 7.60218 13.5 8C13.5 8.39782 13.342 8.77936 13.0607 9.06066C12.7794 9.34196 12.3978 9.5 12 9.5Z" />
                                    <path fill-opacity="0.3" d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V14C15 14.2652 14.8946 14.5196 14.7071 14.7071C14.5196 14.8946 14.2652 15 14 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L2 0Z" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 p-2 rounded-4">
                                <li><a class="dropdown-item rounded-pill" href="#">File Info</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Copy to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Move to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Rename</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Block</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Delete</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="project-details.html">Consequat vehicula ante ultricies purus</a></td>
                        <td>
                            <div class="avatar-list avatar-list-stacked d-flex ps-2">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar8.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar9.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip" title="Avatar">
                            </div>
                        </td>
                        <td>21 Jan 2023</td>
                        <td>11 Feb 2023</td>
                        <td>85</td>
                        <td>
                            <small class="text-muted">32 / 50</small>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>
                            <span class="badge text-warning">INACTIVE</span>
                        </td>
                        <td>
                            <a href="#" class="dropdown-toggle after-none" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-opacity="1" d="M4 9.5C3.60218 9.5 3.22064 9.34196 2.93934 9.06066C2.65804 8.77936 2.5 8.39782 2.5 8C2.5 7.60218 2.65804 7.22064 2.93934 6.93934C3.22064 6.65804 3.60218 6.5 4 6.5C4.39782 6.5 4.77936 6.65804 5.06066 6.93934C5.34196 7.22064 5.5 7.60218 5.5 8C5.5 8.39782 5.34196 8.77936 5.06066 9.06066C4.77936 9.34196 4.39782 9.5 4 9.5ZM8 9.5C7.60218 9.5 7.22064 9.34196 6.93934 9.06066C6.65804 8.77936 6.5 8.39782 6.5 8C6.5 7.60218 6.65804 7.22064 6.93934 6.93934C7.22064 6.65804 7.60218 6.5 8 6.5C8.39782 6.5 8.77936 6.65804 9.06066 6.93934C9.34196 7.22064 9.5 7.60218 9.5 8C9.5 8.39782 9.34196 8.77936 9.06066 9.06066C8.77936 9.34196 8.39782 9.5 8 9.5ZM12 9.5C11.6022 9.5 11.2206 9.34196 10.9393 9.06066C10.658 8.77936 10.5 8.39782 10.5 8C10.5 7.60218 10.658 7.22064 10.9393 6.93934C11.2206 6.65804 11.6022 6.5 12 6.5C12.3978 6.5 12.7794 6.65804 13.0607 6.93934C13.342 7.22064 13.5 7.60218 13.5 8C13.5 8.39782 13.342 8.77936 13.0607 9.06066C12.7794 9.34196 12.3978 9.5 12 9.5Z" />
                                    <path fill-opacity="0.3" d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V14C15 14.2652 14.8946 14.5196 14.7071 14.7071C14.5196 14.8946 14.2652 15 14 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L2 0Z" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 p-2 rounded-4">
                                <li><a class="dropdown-item rounded-pill" href="#">File Info</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Copy to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Move to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Rename</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Block</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Delete</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="project-details.html">Venenatis litora letius nam nibh</a></td>
                        <td>
                            <div class="avatar-list avatar-list-stacked d-flex ps-2">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" title="Avatar">
                            </div>
                        </td>
                        <td>22 Jan 2023</td>
                        <td>12 Feb 2023</td>
                        <td>74</td>
                        <td>
                            <small class="text-muted">40 / 50</small>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>
                            <span class="badge text-info">ONGOING</span>
                        </td>
                        <td>
                            <a href="#" class="dropdown-toggle after-none" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-opacity="1" d="M4 9.5C3.60218 9.5 3.22064 9.34196 2.93934 9.06066C2.65804 8.77936 2.5 8.39782 2.5 8C2.5 7.60218 2.65804 7.22064 2.93934 6.93934C3.22064 6.65804 3.60218 6.5 4 6.5C4.39782 6.5 4.77936 6.65804 5.06066 6.93934C5.34196 7.22064 5.5 7.60218 5.5 8C5.5 8.39782 5.34196 8.77936 5.06066 9.06066C4.77936 9.34196 4.39782 9.5 4 9.5ZM8 9.5C7.60218 9.5 7.22064 9.34196 6.93934 9.06066C6.65804 8.77936 6.5 8.39782 6.5 8C6.5 7.60218 6.65804 7.22064 6.93934 6.93934C7.22064 6.65804 7.60218 6.5 8 6.5C8.39782 6.5 8.77936 6.65804 9.06066 6.93934C9.34196 7.22064 9.5 7.60218 9.5 8C9.5 8.39782 9.34196 8.77936 9.06066 9.06066C8.77936 9.34196 8.39782 9.5 8 9.5ZM12 9.5C11.6022 9.5 11.2206 9.34196 10.9393 9.06066C10.658 8.77936 10.5 8.39782 10.5 8C10.5 7.60218 10.658 7.22064 10.9393 6.93934C11.2206 6.65804 11.6022 6.5 12 6.5C12.3978 6.5 12.7794 6.65804 13.0607 6.93934C13.342 7.22064 13.5 7.60218 13.5 8C13.5 8.39782 13.342 8.77936 13.0607 9.06066C12.7794 9.34196 12.3978 9.5 12 9.5Z" />
                                    <path fill-opacity="0.3" d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V14C15 14.2652 14.8946 14.5196 14.7071 14.7071C14.5196 14.8946 14.2652 15 14 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L2 0Z" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 p-2 rounded-4">
                                <li><a class="dropdown-item rounded-pill" href="#">File Info</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Copy to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Move to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Rename</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Block</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Delete</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="project-details.html">Nullam primis nec etiam erat</a></td>
                        <td>
                            <div class="avatar-list avatar-list-stacked d-flex ps-2">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar5.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar6.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" title="Avatar">
                            </div>
                        </td>
                        <td>23 Jan 2023</td>
                        <td>13 Feb 2023</td>
                        <td>44</td>
                        <td>
                            <small class="text-muted">80 / 100</small>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>
                            <span class="badge text-info">ONGOING</span>
                        </td>
                        <td>
                            <a href="#" class="dropdown-toggle after-none" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-opacity="1" d="M4 9.5C3.60218 9.5 3.22064 9.34196 2.93934 9.06066C2.65804 8.77936 2.5 8.39782 2.5 8C2.5 7.60218 2.65804 7.22064 2.93934 6.93934C3.22064 6.65804 3.60218 6.5 4 6.5C4.39782 6.5 4.77936 6.65804 5.06066 6.93934C5.34196 7.22064 5.5 7.60218 5.5 8C5.5 8.39782 5.34196 8.77936 5.06066 9.06066C4.77936 9.34196 4.39782 9.5 4 9.5ZM8 9.5C7.60218 9.5 7.22064 9.34196 6.93934 9.06066C6.65804 8.77936 6.5 8.39782 6.5 8C6.5 7.60218 6.65804 7.22064 6.93934 6.93934C7.22064 6.65804 7.60218 6.5 8 6.5C8.39782 6.5 8.77936 6.65804 9.06066 6.93934C9.34196 7.22064 9.5 7.60218 9.5 8C9.5 8.39782 9.34196 8.77936 9.06066 9.06066C8.77936 9.34196 8.39782 9.5 8 9.5ZM12 9.5C11.6022 9.5 11.2206 9.34196 10.9393 9.06066C10.658 8.77936 10.5 8.39782 10.5 8C10.5 7.60218 10.658 7.22064 10.9393 6.93934C11.2206 6.65804 11.6022 6.5 12 6.5C12.3978 6.5 12.7794 6.65804 13.0607 6.93934C13.342 7.22064 13.5 7.60218 13.5 8C13.5 8.39782 13.342 8.77936 13.0607 9.06066C12.7794 9.34196 12.3978 9.5 12 9.5Z" />
                                    <path fill-opacity="0.3" d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V14C15 14.2652 14.8946 14.5196 14.7071 14.7071C14.5196 14.8946 14.2652 15 14 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L2 0Z" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 p-2 rounded-4">
                                <li><a class="dropdown-item rounded-pill" href="#">File Info</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Copy to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Move to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Rename</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Block</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Delete</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="project-details.html">Lorem ipsum dolor sit amet</a></td>
                        <td>
                            <div class="avatar-list avatar-list-stacked d-flex ps-2">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar6.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" title="Avatar">
                            </div>
                        </td>
                        <td>25 Jan 2023</td>
                        <td>05 Feb 2023</td>
                        <td>45</td>
                        <td>
                            <small class="text-muted">50 / 75</small>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>
                            <span class="badge text-info">ONGOING</span>
                        </td>
                        <td>
                            <a href="#" class="dropdown-toggle after-none" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-opacity="1" d="M4 9.5C3.60218 9.5 3.22064 9.34196 2.93934 9.06066C2.65804 8.77936 2.5 8.39782 2.5 8C2.5 7.60218 2.65804 7.22064 2.93934 6.93934C3.22064 6.65804 3.60218 6.5 4 6.5C4.39782 6.5 4.77936 6.65804 5.06066 6.93934C5.34196 7.22064 5.5 7.60218 5.5 8C5.5 8.39782 5.34196 8.77936 5.06066 9.06066C4.77936 9.34196 4.39782 9.5 4 9.5ZM8 9.5C7.60218 9.5 7.22064 9.34196 6.93934 9.06066C6.65804 8.77936 6.5 8.39782 6.5 8C6.5 7.60218 6.65804 7.22064 6.93934 6.93934C7.22064 6.65804 7.60218 6.5 8 6.5C8.39782 6.5 8.77936 6.65804 9.06066 6.93934C9.34196 7.22064 9.5 7.60218 9.5 8C9.5 8.39782 9.34196 8.77936 9.06066 9.06066C8.77936 9.34196 8.39782 9.5 8 9.5ZM12 9.5C11.6022 9.5 11.2206 9.34196 10.9393 9.06066C10.658 8.77936 10.5 8.39782 10.5 8C10.5 7.60218 10.658 7.22064 10.9393 6.93934C11.2206 6.65804 11.6022 6.5 12 6.5C12.3978 6.5 12.7794 6.65804 13.0607 6.93934C13.342 7.22064 13.5 7.60218 13.5 8C13.5 8.39782 13.342 8.77936 13.0607 9.06066C12.7794 9.34196 12.3978 9.5 12 9.5Z" />
                                    <path fill-opacity="0.3" d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V14C15 14.2652 14.8946 14.5196 14.7071 14.7071C14.5196 14.8946 14.2652 15 14 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L2 0Z" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 p-2 rounded-4">
                                <li><a class="dropdown-item rounded-pill" href="#">File Info</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Copy to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Move to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Rename</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Block</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Delete</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="project-details.html">Placerat inceptos gravida convallis luctus</a></td>
                        <td>
                            <div class="avatar-list avatar-list-stacked d-flex ps-2">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar5.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar6.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar8.jpg" data-bs-toggle="tooltip" title="Avatar">
                            </div>
                        </td>
                        <td>25 Jan 2023</td>
                        <td>15 Feb 2023</td>
                        <td>50</td>
                        <td>
                            <small class="text-muted">25 / 125</small>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 77%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>
                            <span class="badge text-success">COMPLETED</span>
                        </td>
                        <td>
                            <a href="#" class="dropdown-toggle after-none" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-opacity="1" d="M4 9.5C3.60218 9.5 3.22064 9.34196 2.93934 9.06066C2.65804 8.77936 2.5 8.39782 2.5 8C2.5 7.60218 2.65804 7.22064 2.93934 6.93934C3.22064 6.65804 3.60218 6.5 4 6.5C4.39782 6.5 4.77936 6.65804 5.06066 6.93934C5.34196 7.22064 5.5 7.60218 5.5 8C5.5 8.39782 5.34196 8.77936 5.06066 9.06066C4.77936 9.34196 4.39782 9.5 4 9.5ZM8 9.5C7.60218 9.5 7.22064 9.34196 6.93934 9.06066C6.65804 8.77936 6.5 8.39782 6.5 8C6.5 7.60218 6.65804 7.22064 6.93934 6.93934C7.22064 6.65804 7.60218 6.5 8 6.5C8.39782 6.5 8.77936 6.65804 9.06066 6.93934C9.34196 7.22064 9.5 7.60218 9.5 8C9.5 8.39782 9.34196 8.77936 9.06066 9.06066C8.77936 9.34196 8.39782 9.5 8 9.5ZM12 9.5C11.6022 9.5 11.2206 9.34196 10.9393 9.06066C10.658 8.77936 10.5 8.39782 10.5 8C10.5 7.60218 10.658 7.22064 10.9393 6.93934C11.2206 6.65804 11.6022 6.5 12 6.5C12.3978 6.5 12.7794 6.65804 13.0607 6.93934C13.342 7.22064 13.5 7.60218 13.5 8C13.5 8.39782 13.342 8.77936 13.0607 9.06066C12.7794 9.34196 12.3978 9.5 12 9.5Z" />
                                    <path fill-opacity="0.3" d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V14C15 14.2652 14.8946 14.5196 14.7071 14.7071C14.5196 14.8946 14.2652 15 14 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L2 0Z" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 p-2 rounded-4">
                                <li><a class="dropdown-item rounded-pill" href="#">File Info</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Copy to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Move to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Rename</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Block</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Delete</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="project-details.html">Odio magnis libero vehicula id duis eros</a></td>
                        <td>
                            <div class="avatar-list avatar-list-stacked d-flex ps-2">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar5.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar6.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" title="Avatar">
                            </div>
                        </td>
                        <td>25 Jan 2023</td>
                        <td>10 Feb 2023</td>
                        <td>30</td>
                        <td>
                            <small class="text-muted">5 / 10</small>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>
                            <span class="badge text-info">ONGOING</span>
                        </td>
                        <td>
                            <a href="#" class="dropdown-toggle after-none" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-opacity="1" d="M4 9.5C3.60218 9.5 3.22064 9.34196 2.93934 9.06066C2.65804 8.77936 2.5 8.39782 2.5 8C2.5 7.60218 2.65804 7.22064 2.93934 6.93934C3.22064 6.65804 3.60218 6.5 4 6.5C4.39782 6.5 4.77936 6.65804 5.06066 6.93934C5.34196 7.22064 5.5 7.60218 5.5 8C5.5 8.39782 5.34196 8.77936 5.06066 9.06066C4.77936 9.34196 4.39782 9.5 4 9.5ZM8 9.5C7.60218 9.5 7.22064 9.34196 6.93934 9.06066C6.65804 8.77936 6.5 8.39782 6.5 8C6.5 7.60218 6.65804 7.22064 6.93934 6.93934C7.22064 6.65804 7.60218 6.5 8 6.5C8.39782 6.5 8.77936 6.65804 9.06066 6.93934C9.34196 7.22064 9.5 7.60218 9.5 8C9.5 8.39782 9.34196 8.77936 9.06066 9.06066C8.77936 9.34196 8.39782 9.5 8 9.5ZM12 9.5C11.6022 9.5 11.2206 9.34196 10.9393 9.06066C10.658 8.77936 10.5 8.39782 10.5 8C10.5 7.60218 10.658 7.22064 10.9393 6.93934C11.2206 6.65804 11.6022 6.5 12 6.5C12.3978 6.5 12.7794 6.65804 13.0607 6.93934C13.342 7.22064 13.5 7.60218 13.5 8C13.5 8.39782 13.342 8.77936 13.0607 9.06066C12.7794 9.34196 12.3978 9.5 12 9.5Z" />
                                    <path fill-opacity="0.3" d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V14C15 14.2652 14.8946 14.5196 14.7071 14.7071C14.5196 14.8946 14.2652 15 14 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L2 0Z" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 p-2 rounded-4">
                                <li><a class="dropdown-item rounded-pill" href="#">File Info</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Copy to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Move to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Rename</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Block</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Delete</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="project-details.html">Lorem ipsum dolor sit amet dis sapien</a></td>
                        <td>
                            <div class="avatar-list avatar-list-stacked d-flex ps-2">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar5.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" title="Avatar">
                                <img class="avatar sm rounded-circle" src="assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" title="Avatar">
                            </div>
                        </td>
                        <td>26 Jan 2023</td>
                        <td>23 Feb 2023</td>
                        <td>78</td>
                        <td>
                            <small class="text-muted">25 / 100</small>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>
                            <span class="badge text-danger">CRITICAL</span>
                        </td>
                        <td>
                            <a href="#" class="dropdown-toggle after-none" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-opacity="1" d="M4 9.5C3.60218 9.5 3.22064 9.34196 2.93934 9.06066C2.65804 8.77936 2.5 8.39782 2.5 8C2.5 7.60218 2.65804 7.22064 2.93934 6.93934C3.22064 6.65804 3.60218 6.5 4 6.5C4.39782 6.5 4.77936 6.65804 5.06066 6.93934C5.34196 7.22064 5.5 7.60218 5.5 8C5.5 8.39782 5.34196 8.77936 5.06066 9.06066C4.77936 9.34196 4.39782 9.5 4 9.5ZM8 9.5C7.60218 9.5 7.22064 9.34196 6.93934 9.06066C6.65804 8.77936 6.5 8.39782 6.5 8C6.5 7.60218 6.65804 7.22064 6.93934 6.93934C7.22064 6.65804 7.60218 6.5 8 6.5C8.39782 6.5 8.77936 6.65804 9.06066 6.93934C9.34196 7.22064 9.5 7.60218 9.5 8C9.5 8.39782 9.34196 8.77936 9.06066 9.06066C8.77936 9.34196 8.39782 9.5 8 9.5ZM12 9.5C11.6022 9.5 11.2206 9.34196 10.9393 9.06066C10.658 8.77936 10.5 8.39782 10.5 8C10.5 7.60218 10.658 7.22064 10.9393 6.93934C11.2206 6.65804 11.6022 6.5 12 6.5C12.3978 6.5 12.7794 6.65804 13.0607 6.93934C13.342 7.22064 13.5 7.60218 13.5 8C13.5 8.39782 13.342 8.77936 13.0607 9.06066C12.7794 9.34196 12.3978 9.5 12 9.5Z" />
                                    <path fill-opacity="0.3" d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V14C15 14.2652 14.8946 14.5196 14.7071 14.7071C14.5196 14.8946 14.2652 15 14 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2L0 14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0L2 0Z" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 p-2 rounded-4">
                                <li><a class="dropdown-item rounded-pill" href="#">File Info</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Copy to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Move to</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Rename</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Block</a></li>
                                <li><a class="dropdown-item rounded-pill" href="#">Delete</a></li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
</div>

<?php include('includes/footer.php') ?>
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/dataTables.bundle.js"></script>

<script src="assets/js/main.js"></script>

<script>
    $(document).ready(function() {
        $('.dataTable')
            .addClass('nowrap')
            .dataTable({
                responsive: true,
            });
    });
</script>