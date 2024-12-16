<?php include PATH . "partials/header.php" ?>

<div class="container">

    <form action="" method="POST" enctype="multipart/form-data" class="mt-5 w-50 mx-auto">
        <h2>Confirm Dorm Application</h2>

        <?php if (!empty($errors)): ?>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">

                <?php foreach ($errors as $error): ?>
                    <?= $error . "<br>" ?>
                <?php endforeach; ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        <?php endif; ?>

        <input type="hidden" name="token">

        <!-- <div class="mb-2">
            <label for="">Select Profile Image</label>
            <input type="file" name="image" class="form-control">
        </div> -->


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
            <input name="firstname" value="<?= $_SESSION['USER']->firstname ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Middle Name</label>
            <input name="middlename" value="<?= $_SESSION['USER']->middlename ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Last Name</label>
            <input name="lastname" value="<?= $_SESSION['USER']->lastname ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Home Address</label>
            <input name="address" value="<?= $_SESSION['USER']->address ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Contact Number</label>
            <input name="contact" value="<?= $_SESSION['USER']->contact ?>" type="text" class="form-control">
        </div>
        
        <div class="mb-2">
            <label for="">Gender</label>
            
            <input name="gender" value="<?= $_SESSION['USER']->gender ?>" type="text" class="form-control">
                
            
        </div>

        <h2>For Emergencies</h2>

        <div class="mb-2">
            <label for="">Full Name</label>
            <input name="emfullname" value="<?= $_SESSION['USER']->emfullname ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Contact Number</label>
            <input name="emcontact" value="<?= $_SESSION['USER']->emcontact ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Home Address</label>
            <input name="emaddress" value="<?= $_SESSION['USER']->emaddress ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Relation</label>
            <input name="emrelation" value="<?= $_SESSION['USER']->emrelation ?>" type="text" class="form-control">
        </div>



        <div class="mb-2">
            <label for="">Email</label>
            <input name="email" value="<?= $_SESSION['USER']->email ?>" type="text" class="form-control">
        </div>
        <!-- <div class="mb-2">
            <label for="">Password</label>
            <input name="password" value="<?= $_SESSION['USER']->dormname ?>" type="password" class="form-control">
        </div> -->

        <button type="submit" class="btn btn-primary">Submit Application</button>
    </form>

</div>

<?php include PATH . "partials/footer.php" ?>