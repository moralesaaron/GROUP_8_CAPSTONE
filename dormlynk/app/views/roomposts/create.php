<?php include PATH . "partials/dormheader.php" ?>

<div class="container">

    <form action="" method="POST" enctype="multipart/form-data" class="mt-5 w-50 mx-auto">
        <h2>List a Room</h2>

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
            <label for="">Image</label>
            <input type="file" name="image" class="form-control">
        </div> -->


        <!-- <div class="mb-2">
            <label for="">Computer Lab</label>
            <select name="comlab" class="form-control">
                <option value="">Select a Computer Lab</option>
                <option <?= get_select('comlab', 'A') ?> value="A">A</option>
                <option <?= get_select('comlab', 'B') ?> value="B">B</option>
                <option <?= get_select('comlab', 'C') ?> value="C">C</option>
                <option <?= get_select('comlab', 'D') ?> value="D">D</option>
            </select>
        </div> -->

        <!-- <div class="mb-2">
            <label for="">PC Number</label>
            <input name="pcnum" value="<?= get_var('pcnum') ?>" type="text" class="form-control">
        </div>

        <div class="mb-2">
            <label for="">Status</label>
            <select name="status" class="form-control">
                <option value="">Select a Status</option>
                <option <?= get_select('status', 'Working') ?> value="Working">Working</option>
                <option <?= get_select('status', 'Under Maintanance') ?> value="Under Maintanance">Under Maintanance</option>
                <option <?= get_select('status', 'Not Working') ?> value="Not Working">Not Working</option>
            </select>
        </div>

        <div class="mb-2">
            <label for="">Note</label>
            <input name="note" value="<?= get_var('note') ?>" type="text" class="form-control">
        </div> -->

        

        
        <!-- <div class="mb-2">
            <label for="">Email</label>
            <input name="email" value="<?= get_var('email') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Password</label>
            <input name="password" value="<?= get_var('password') ?>" type="password" class="form-control">
        </div> -->

        
        <!-- <input name="dormname"  value="<?= $_SESSION['DORM']->dormname ?>" type="text" class="form-control"> -->
        

        <div class="mb-2">
            <label for="">Description</label>
            <input name="details" value="<?= get_var('details') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Location</label>
            <input name="location" value="<?= get_var('location') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Cost</label>
            <input name="cost" value="₱ "<?= get_var('cost') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Status</label>
            <select name="status" class="form-control">
                <option value="">Select a Status</option>
                <option <?= get_select('status', 'Available') ?> value="Available">Available</option>
                <option <?= get_select('status', 'Under Maintanance') ?> value="Under Maintanance">Under Maintanance</option>
                <option <?= get_select('status', 'Occupied') ?> value="Occupied">Occupied</option>
                <option <?= get_select('status', 'Unavailable') ?> value="Unavailable">Unavailable</option>
            </select>
        </div>
        <div class="mb-2">
            <!-- Dorm -->
            
        </div>
        <!-- <input  name="date" value="<?=  date("Y.m.d")->dormname  ?>" type="text" class="form-control">
        </div> -->



        <button type="submit" class="btn btn-primary">Create</button>
    </form>

</div>

<?php include PATH . "partials/footer.php" ?>