<?php include PATH . "partials/dormheader.php" ?>

<div class="container">

    <form action="" method="POST" class="mt-5 w-50 mx-auto">
        <h2>View Application</h2>

        <!-- <div class="mb-2">
            <label for="">Role</label>
            <select name="role" class="form-control">
                <option value="">Select a Role</option>
                <option <?= $user->role == 'Admin' ? 'selected' : '' ?> value="Admin">Admin</option>
                <option <?= $user->role == 'Staff' ? 'selected' : '' ?> value="Staff">Staff</option>
            </select>
        </div> -->

        <div class="mb-2">
            <label for="">First Name</label>
            <input name="firstname" value="<?= $pendingapps->firstname ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">First Name</label>
            <input name="middlename" value="<?= $pendingapps->middlename ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Last Name</label>
            <input name="lastname" value="<?= $pendingapps->lastname ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Home Address</label>
            <input name="address" value="<?= $pendingapps->address ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Contact Number</label>
            <input name="contact" value="<?= $pendingapps->contact ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Gender</label>
            <input name="gender" value="<?= $pendingapps->gender ?>" type="text" class="form-control">
        </div>

        <h2>For Emergencies</h2>

        <div class="mb-2">
            <label for="">Full Name</label>
            <input name="emfullname" value="<?= $pendingapps->emfullname ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Contact Number</label>
            <input name="emcontact" value="<?= $pendingapps->emcontact ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Home Address</label>
            <input name="emaddress" value="<?= $pendingapps->emaddress ?>" type="text" class="form-control">
        </div>
        
        <div class="mb-2">
            <label for="">Relation</label>
            <input name="emrelation" value="<?= $pendingapps->emrelation ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Email</label>
            <input name="email" value="<?= $pendingapps->email ?>" type="email" class="form-control">
        </div>
        
        <!-- <div class="mb-2">
            <label for="">Application Status</label>
            <input name="appstatus" value="<?= $pendingapps->appstatus ?>" type="text" class="form-control">
        </div> -->

        <div class="mb-2">
            <label for="">Application Status</label>
            <select name="appstatus" class="form-control">
                <option value="">Select a Status</option>
                <option <?= $pendingapps->appstatus == 'Approved' ? 'selected' : '' ?> value="Approved">Approved</option>
                <option <?= $pendingapps->appstatus == 'Denied' ? 'selected' : '' ?> value="Denied">Denied</option>
                
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>

<?php include PATH . "partials/footer.php" ?>