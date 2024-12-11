<?php include PATH . "partials/dormheader.php" ?>

<div class="container">

    <form action="" method="POST" class="mt-5 w-50 mx-auto">
        <h2>Edit Room</h2>

        <!-- <div class="mb-2">
            <label for="">Role</label>
            <select name="role" class="form-control">
                <option value="">Select a Role</option>
                <option <?= $user->role == 'Admin' ? 'selected' : '' ?> value="Admin">Admin</option>
                <option <?= $user->role == 'Staff' ? 'selected' : '' ?> value="Staff">Staff</option>
            </select>
        </div> -->

        
        <div class="mb-2">
            <label for="">Details</label>
            <input name="details" value="<?= $roomposts->details ?>" type="text" class="form-control">
        </div>

        <div class="mb-2">
            <label for="">Location</label>
            <input name="location" value="<?= $roomposts->location ?>" type="text" class="form-control">
        </div>

        <div class="mb-2">
            <label for="">Cost</label>
            <input name="cost" value="<?= $roomposts->cost ?>" type="text" class="form-control">
        </div>

        <!-- <div class="mb-2">
            <label for="">Status</label>
            <select name="status" class="form-control">
                <option value="">Select a Status</option>
                <option <?= get_select('status', 'Available') ?> value="Available">Available</option>
                <option <?= get_select('status', 'Under Maintanance') ?> value="Under Maintanance">Under Maintanance</option>
                <option <?= get_select('status', 'Occupied') ?> value="Occupied">Occupied</option>
                <option <?= get_select('status', 'Unavailable') ?> value="Unavailable">Unavailable</option>
            </select>
        </div> -->

        <div class="mb-2">
            <label for="">Status</label>
            <select name="status" class="form-control">
                <option value="">Select a Status</option>
                <option <?= $roomposts->status == 'Available' ? 'selected' : '' ?> value="Available">Available</option>
                <option <?= $roomposts->status == 'Under Maintanance' ? 'selected' : '' ?> value="Under Maintanance">Under Maintanance</option>
                <option <?= $roomposts->status == 'Occupied' ? 'selected' : '' ?> value="Occupied">Occupied</option>
                <option <?= $roomposts->status == 'Unavailable' ? 'selected' : '' ?> value="Unavailable">Unavailable</option>
            </select>
        </div>


        <!-- <div class="mb-2">
            <label for="">Note</label>
            <input name="note" value="<?= $comds->note ?>" type="text" class="form-control">
        </div> -->
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