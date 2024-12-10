<?php include PATH . "partials/header.php" ?>

<div class="container">

    <form action="" method="POST" enctype="multipart/form-data" class="mt-5 w-50 mx-auto">
        <h2>Register Account</h2>

        <?php if (!empty($errors)): ?>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">

                <?php foreach ($errors as $error): ?>
                    <?= $error . "<br>" ?>
                <?php endforeach; ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        <?php endif; ?>

        <input type="hidden" name="token">

        <div class="mb-2">
            <label for="">Select Profile Image</label>
            <input type="file" name="image" class="form-control">
        </div>


        <!-- <div class="mb-2">
            <label for="">Role</label>
            <select name="role" class="form-control">
                <option value="">Select a Role</option>
                <option <?= get_select('role', 'Admin') ?> value="Admin">Admin</option>
                <option <?= get_select('role', 'Staff') ?> value="Staff">Staff</option>
            </select>
        </div> -->

        <div class="mb-2">
            <label for="">First Name</label>
            <input name="firstname" value="<?= get_var('firstname') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Middle Name</label>
            <input name="middlename" value="<?= get_var('middlename') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Last Name</label>
            <input name="lastname" value="<?= get_var('lastname') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Home Address</label>
            <input name="address" value="<?= get_var('address') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Contact Number</label>
            <input name="contact" value="<?= get_var('contact') ?>" type="text" class="form-control">
        </div>
        
        <div class="mb-2">
            <label for="">Gender</label>
            <select name="gender" class="form-control">
                <option value="">Select a Gender</option>
                <option <?= get_select('role', 'Male') ?> value="Male">Male</option>
                <option <?= get_select('role', 'Female') ?> value="Female">Female</option>
                <option <?= get_select('role', 'Other') ?> value="Other">Other</option>
                <option <?= get_select('role', 'Prefer not to say') ?> value="Prefer not to say">Prefer not to say</option>
            </select>
        </div>

        <h2>For Emergencies</h2>

        <div class="mb-2">
            <label for="">Full Name</label>
            <input name="emfullname" value="<?= get_var('emfullname') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Contact Number</label>
            <input name="emcontact" value="<?= get_var('emcontact') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Home Address</label>
            <input name="emaddress" value="<?= get_var('emaddress') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Relation</label>
            <input name="emrelation" value="<?= get_var('emrelation') ?>" type="text" class="form-control">
        </div>



        <div class="mb-2">
            <label for="">Email</label>
            <input name="email" value="<?= get_var('email') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Password</label>
            <input name="password" value="<?= get_var('password') ?>" type="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>

</div>

<?php include PATH . "partials/footer.php" ?>