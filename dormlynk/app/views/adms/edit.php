<?php include PATH . "partials/adminheader.php" ?>

<div class="container">

    <form action="" method="POST" class="mt-5 w-50 mx-auto">
        <h2>Edit Admin</h2>

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
            <input name="firstname" value="<?= $adm->firstname ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Last Name</label>
            <input name="lastname" value="<?= $adm->lastname ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Email</label>
            <input name="email" value="<?= $adm->email ?>" type="email" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Password</label>
            <input name="password" value="<?= $adm->password ?>" type="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>

<?php include PATH . "partials/footer.php" ?>