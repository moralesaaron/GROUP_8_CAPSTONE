<?php include PATH . "partials/header.php" ?>

<div class="container">

    <form action="" method="POST" class="mt-5 w-50 mx-auto">
        <h2>Edit PC</h2>

        <!-- <div class="mb-2">
            <label for="">Role</label>
            <select name="role" class="form-control">
                <option value="">Select a Role</option>
                <option <?= $user->role == 'Admin' ? 'selected' : '' ?> value="Admin">Admin</option>
                <option <?= $user->role == 'Staff' ? 'selected' : '' ?> value="Staff">Staff</option>
            </select>
        </div> -->

        
        <div class="mb-2">
            <label for="">PC Number</label>
            <input name="pcnum" value="<?= $comds->pcnum ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Status</label>
            <select name="status" class="form-control">
                <option value="">Select a Status</option>
                <option <?= $comds->status == 'Working' ? 'selected' : '' ?> value="Working">Working</option>
                <option <?= $comds->status == 'Under Maintanance' ? 'selected' : '' ?> value="Under Maintanance">Under Maintanance</option>
                <option <?= $comds->status == 'Not Working' ? 'selected' : '' ?> value="Not Working">Not Working</option>
            </select>
        </div>
        <div class="mb-2">
            <label for="">Note</label>
            <input name="note" value="<?= $comds->note ?>" type="text" class="form-control">
        </div>
<!--         
        <div class="mb-2">
            <label for="">Email</label>
            <input name="email" value="<?= $user->email ?>" type="email" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Password</label>
            <input name="password" value="<?= $user->password ?>" type="password" class="form-control">
        </div> -->

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>

<?php include PATH . "partials/footer.php" ?>