<?php $this->load->view('includes/header-link'); ?>
<?php $this->load->view('includes/freelancer_header'); ?>
<style>
    .category-dropdown {
        position: absolute;
        width: 100%;
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        max-height: 200px;
        overflow-x: auto;
        z-index: 999999;
    }

    .list-group-item {
        cursor: pointer;
        transition: background 0.3s, color 0.3s;
    }

    .list-group-item:hover {
        background: #f8f9fa;
    }

    .list-group-item.selected {
        background: var(--primary-color);
        color: white;
        font-weight: bold;
    }
</style>
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <div class="my-3 position-relative category-dropdown-container" style="max-width: 300px;">
        <input type="text" class="form-control mb-2 category-search-input" placeholder="Search Categories..." onkeyup="filterCategories()" onclick="showDropdown()">

        <ul class="list-group category-dropdown d-none" id="categoryDropdown">
            <li class="list-group-item" onclick="selectCategory(this, 'All Categories')">All Categories</li>
            <li class="list-group-item" onclick="selectCategory(this, 'App Development')">App Development</li>
            <li class="list-group-item" onclick="selectCategory(this, 'Graphic Design')">Graphic Design</li>
            <li class="list-group-item" onclick="selectCategory(this, 'Web Development')">Web Development</li>
            <li class="list-group-item" onclick="selectCategory(this, 'Content Writing')">Content Writing</li>
            <li class="list-group-item" onclick="selectCategory(this, 'Digital Marketing')">Digital Marketing</li>
            <li class="list-group-item" onclick="selectCategory(this, 'SEO')">SEO</li>
            <li class="list-group-item" onclick="selectCategory(this, 'Data Entry')">Data Entry</li>
        </ul>
    </div>

    <div class="ps-md-0 pe-md-3 px-2 py-3 page-body">
        <ul class="row g-3 li_animate list-unstyled">
            <li class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-header flex-nowrap align-items-center">
                        <a href="#" class="card-title mb-0 text-primary fw-bold" style="font-size: 18px; text-decoration: none;">
                            Website Redesign Project
                        </a>
                        <div>
                            <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full Screen">
                                <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 16m0 1a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1z"></path>
                                    <path d="M4 12v-6a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-6"></path>
                                    <path d="M12 8h4v4"></path>
                                    <path d="M16 8l-5 5"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-1">
                            <i class="fa fa-building me-3"></i>
                            <span class="pe-2">Client: </span>
                            <a href="#">John Doe</a>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-credit-card me-3"></i>
                            <span class="pe-2">Budget: </span>
                            <a href="#">$1,200</a>
                        </div>
                        <div class="hstack gap-3 mb-4">
                            <div>
                                <p class="mb-1 text-muted small">Skills Required:</p>
                                HTML, CSS, JavaScript, React
                            </div>
                            <div class="vr"></div>
                            <div>
                                <p class="mb-1 text-muted small">Posted:</p>
                                22 March, 2025
                            </div>
                            <div class="ms-auto">
                                <p class="mb-1 text-muted small">Deadline:</p>
                                5 April, 2025
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="mb-1 text-muted small" style="font-size: 18px;">Description:</p>
                                <p style="font-size: 15px;">Redesign a corporate website with a modern, responsive UI and enhanced accessibility</p>
                            </div>
                            <a href="#" class="btn btn-primary btn-sm" style="width: 100px; font-size: 10px; font-weight: bold; padding: 8px 4px; border-radius: 5px; text-align: center; display: inline-block;">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </li>


            <li class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-header flex-nowrap align-items-center">
                        <a href="#" class="card-title mb-0 text-primary fw-bold" style="font-size: 18px; text-decoration: none;">
                            Website Redesign Project
                        </a>
                        <div>
                            <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full Screen">
                                <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 16m0 1a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1z"></path>
                                    <path d="M4 12v-6a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-6"></path>
                                    <path d="M12 8h4v4"></path>
                                    <path d="M16 8l-5 5"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-1">
                            <i class="fa fa-building me-3"></i>
                            <span class="pe-2">Client: </span>
                            <a href="#">John Doe</a>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-credit-card me-3"></i>
                            <span class="pe-2">Budget: </span>
                            <a href="#">$1,200</a>
                        </div>
                        <div class="hstack gap-3 mb-4">
                            <div>
                                <p class="mb-1 text-muted small">Skills Required:</p>
                                HTML, CSS, JavaScript, React
                            </div>
                            <div class="vr"></div>
                            <div>
                                <p class="mb-1 text-muted small">Posted:</p>
                                22 March, 2025
                            </div>
                            <div class="ms-auto">
                                <p class="mb-1 text-muted small">Deadline:</p>
                                5 April, 2025
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="mb-1 text-muted small" style="font-size: 18px;">Description:</p>
                                <p style="font-size: 15px;">Redesign a corporate website with a modern, responsive UI and enhanced accessibility</p>
                            </div>

                            <a href="#" class="btn btn-primary btn-sm" style="width: 100px; font-size: 10px; font-weight: bold; padding: 8px 4px; border-radius: 5px; text-align: center; display: inline-block;">
                                View Details
                            </a>


                        </div>

                    </div>
                </div>
            </li>


        </ul>

    </div>



</div>

<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/footer-link'); ?>
<script>
    function filterCategories() {
        let input = document.querySelector(".category-search-input").value.toLowerCase();
        let dropdown = document.getElementById("categoryDropdown");
        let items = dropdown.getElementsByTagName("li");

        let hasResults = false;

        for (let i = 0; i < items.length; i++) {
            let text = items[i].textContent.toLowerCase();
            if (text.includes(input)) {
                items[i].style.display = "block";
                hasResults = true;
            } else {
                items[i].style.display = "none";
            }
        }

        dropdown.classList.toggle("d-none", !hasResults);
    }

    function selectCategory(element, category) {
        document.querySelector(".category-search-input").value = category;
        document.getElementById("categoryDropdown").classList.add("d-none");

        // Remove "selected" class from all items
        document.querySelectorAll(".list-group-item").forEach(item => {
            item.classList.remove("selected");
        });

        // Add "selected" class to clicked item
        element.classList.add("selected");
    }

    function showDropdown() {
        document.getElementById("categoryDropdown").classList.remove("d-none");
    }
</script>