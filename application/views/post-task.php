<?php $this->load->view('includes/header'); ?>

<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <form class="flex flex-col gap-4">
        <div class="col-12">
            <h3>Post a Task</h3>
        </div>
        
        <div class="container w-100 pt-24 shadow-lg bg-white p-4 mt-20" style="border-radius: 12px; margin-top: 31px;">
            <p>Task Submission Form</p>
            <hr>

            <!-- First Row of Inputs -->
            <div class="d-flex w-100 gap-4 mb-4">
                <!-- Project Title Input -->
                <div class="flex-grow-1">
                    <label>Project Name</label>
                    <input class="form-control" type="text" placeholder="Project Name">
                </div>
                
                <!-- Task View Dropdown -->
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

                <!-- Location Input -->
                <div class="flex-grow-1">
                    <label>Location</label>
                    <input class="form-control" type="text" placeholder="Location">
                </div>
            </div>

            <!-- Second Row of Inputs -->
            <div class="d-flex w-100 gap-4 mb-4">
                <!-- Budget Input -->
                <div class="flex-grow-1">
                    <label>What is your estimated budget?</label>
                    <input class="form-control" type="number" placeholder="Minimum                     USD">
                </div>

                <!-- Deadline Input -->
                <div class="flex-grow-1">
                   <label></label>
                    <input class="form-control" type="number"  placeholder="Maximum                    USD">
                </div>

                <!-- Priority Input -->
                <div class="flex-grow-1">
                    <label>What skills are required? </label>
                    <input class="form-control" type="name"  placeholder="Add Skills">
                </div>
            </div>
        </div>
    </form>
</div>

<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/footer-link'); ?>
