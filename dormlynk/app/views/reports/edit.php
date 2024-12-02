<?php include PATH . "partials/header.php" ?>

<div class="container">

    <form action="" method="POST" class="mt-5 w-50 mx-auto">
        <h2>Edit User</h2>

        <!-- <div class="mb-2">
            <label for="">Role</label>
            <select name="role" class="form-control">
                <option value="">Select a Role</option>
                <option <?= $user->role == 'Admin' ? 'selected' : '' ?> value="Admin">Admin</option>
                <option <?= $user->role == 'Staff' ? 'selected' : '' ?> value="Staff">Staff</option>
            </select>
        </div> -->

        
        <div class="mb-2">
            <label for="">BPC ID</label>
            <input name="bpc_id" value="<?= $reports->bpc_id ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">First Name</label>
            <input name="firstname" value="<?= $reports->firstname ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Last Name</label>
            <input name="lastname" value="<?= $reports->lastname ?>" type="text" class="form-control">
        </div>

        <div class="mb-2">
            <label for="">Year</label>
            <select name="year" class="form-control">
                <option value="">Select a Year</option>
                <option <?= $reports->year == '1' ? 'selected' : '' ?> value="1">1</option>
                <option <?= $reports->year == '2' ? 'selected' : '' ?> value="2">2</option>
                <option <?= $reports->year == '3' ? 'selected' : '' ?> value="3">3</option>
                <option <?= $reports->year == '4' ? 'selected' : '' ?> value="4">4</option>
            </select>
        </div>
        
        <div class="mb-2">
            <label for="">Section</label>
            <select name="section" class="form-control">
                <option value="">Select a Section</option>
                <option <?= $reports->section == 'A' ? 'selected' : '' ?> value="A">A</option>
                <option <?= $reports->section == 'B' ? 'selected' : '' ?> value="B">B</option>
                <option <?= $reports->section == 'C' ? 'selected' : '' ?> value="C">C</option>
                <option <?= $reports->section == 'D' ? 'selected' : '' ?> value="D">D</option>
                <option <?= $reports->section == 'E' ? 'selected' : '' ?> value="E">E</option>
                <option <?= $reports->section == 'F' ? 'selected' : '' ?> value="F">F</option>
            </select>
        </div>

        <div class="mb-2">
            <label for="">Computer Lab</label>
            <select name="clnum" class="form-control">
                <option value="">Select a Year</option>
                <option <?= $reports->clnum == 'A' ? 'selected' : '' ?> value="A">A</option>
                <option <?= $reports->clnum == 'B' ? 'selected' : '' ?> value="B">B</option>
                <option <?= $reports->clnum == 'C' ? 'selected' : '' ?> value="C">C</option>
                <option <?= $reports->clnum == 'D' ? 'selected' : '' ?> value="D">D</option>
            </select>
        </div>


        <div class="mb-2">
            <label for="">PC</label>
            <input name="pcnum" value="<?= $reports->pcnum ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Description</label>
            <input name="info" value="<?= $reports->info ?>" type="text" class="form-control">
        </div>

        <!-- <div class="mb-2">
            <label for="">Status</label>
            <select name="status" class="form-control">
                <option value="">Select a Status</option>
                <option <?= $comas->status == 'Working' ? 'selected' : '' ?> value="Working">Working</option>
                <option <?= $comas->status == 'Under Maintanance' ? 'selected' : '' ?> value="Under Maintanance">Under Maintanance</option>
                <option <?= $comas->status == 'Not Working' ? 'selected' : '' ?> value="Not Working">Not Working</option>
            </select>
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