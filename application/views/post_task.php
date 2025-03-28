<?php $this->load->view('includes/header'); ?>

<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <form class="flex flex-col gap-4">
        <div class="container w-100 pt-24 shadow-lg bg-white p-4" style="border-radius: 12px;">
            <h4>Task Submission Form</h4>
            <hr>

            <div class="d-flex w-100 gap-4 mb-4">
                <div class="flex-grow-1">
                    <label>Project Name</label>
                    <input class="form-control" type="text" placeholder="Project Name">
                </div>

                <div class="flex-grow-1">
                    <label for="taskViewSelect">Category</label>
                    <select class="form-select" id="taskViewSelect">
                        <option selected>Choose a task view</option>
                        <option value="1">Admin Support</option>
                        <option value="2">Customer Service</option>
                        <option value="3">Data Analytics</option>
                        <option value="4">Design & Creative</option>
                        <option value="5">Legal</option>
                        <option value="6">Software Developing</option>
                        <option value="7">IT & Networking</option>
                    </select>
                </div>

                <div class="flex-grow-1">
                    <label>Location</label>
                    <input class="form-control" type="text" placeholder="Location">
                </div>
            </div>

            <div class="d-flex w-100 gap-4 mb-4">
                <div class="flex-grow-1">
                    <label>What is your estimated budget?</label>
                    <input class="form-control" type="number" placeholder="Minimum">
                </div>

                <div class="flex-grow-1">
                    <label></label>
                    <input class="form-control" type="number" placeholder="Maximum">
                </div>

                <div class="flex-grow-1 position-relative" style="max-width: 400px;">
                    <label>What skills are required?</label>
                    <div class="position-relative">
                        <input class="form-control" type="text" placeholder="Add Skills" style="padding-right: 40px;">
                        <button class="btn position-absolute" style="right: 5px; top: 50%; transform: translateY(-50%);">
                            <i class="bi bi-plus-circle"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="radio-container d-flex flex-row gap-2 align-items-center rounded-3">
                <div class="radio-item">
                    <input class="form-check-input custom-radio" type="radio" name="projectType" id="fixedPrice" value="fixed">
                    <label class="form-check-label custom-label" for="fixedPrice">Fixed Price Project</label>
                </div>

                <div class="radio-item">
                    <input class="form-check-input custom-radio" type="radio" name="projectType" id="hourly" value="hourly">
                    <label class="form-check-label custom-label" for="hourly">Hourly Project</label>
                </div>
            </div>

            <!-- Added Private/Public Radio Buttons -->
            <div class="radio-container d-flex flex-row gap-2 align-items-center rounded-3 mt-3">
                <div class="radio-item">
                    <input class="form-check-input custom-radio" type="radio" name="visibility" id="public" value="public" checked>
                    <label class="form-check-label custom-label" for="public">Public (Anyone can apply)</label>
                </div>

                <div class="radio-item">
                    <input class="form-check-input custom-radio" type="radio" name="visibility" id="private" value="private">
                    <label class="form-check-label custom-label" for="private">Private (Only invited freelancers can apply)</label>
                </div>
            </div>

            <div class="mb-3 mt-3">
                <label for="projectDescription" class="form-label">Describe Your Project</label>
                <textarea id="projectDescription" class="form-control custom-textarea" rows="5" placeholder="Explain your project in detail..."></textarea>
            </div>

            <div class="mb-3 mt-3 d-flex gap-4">
                <button class="btn custom-upload-btn">Upload Files</button>
            </div>
        </div>

        <div class="mb-3 m-3">
            <button class="btn custom-post-task-btn d-flex align-items-center gap-2">
                <i class="bi bi-send"></i> Post a Task
            </button>
        </div>
    </form>
</div>

<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/footer-link'); ?>
