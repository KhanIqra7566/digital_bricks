<?php include('includes/header.php') ?>

<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header py-3 bg-transparent border-bottom-0 m-auto">
                <h6 class="card-title mb-0 text-center"><strong>For Employees</strong></h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="mb-3 col-md-6 col-12">
                            <label class="col-form-label">Name of Employee</label>
                            <input type="text" class="form-control" placeholder="Enter Employee Name">
                        </div>
                        <div class="mb-3 col-md-6 col-12">
                            <label class="col-form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter Email Address">
                        </div>
                        <div class="mb-3 col-md-6 col-12">
                            <label class="col-form-label">Mobile Number</label>
                            <input type="text" class="form-control" placeholder="Enter Mobile Number">
                        </div>
                        <div class="mb-3 col-md-6 col-12">
                            <label class="col-form-label">Role Assign</label>
                            <select class="form-control">
                                <option value="Admin">Admin</option>
                                <option value="Manager">Manager</option>
                                <option value="Employee">Employee</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6 col-12">
                            <label class="col-form-label">Access Level</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="accessLevel" value="Full Access">
                                <label class="form-check-label">Full Access</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="accessLevel" value="Limited Access">
                                <label class="form-check-label">Limited Access</label>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-outline-secondary ms-2">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>

<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php') ?>