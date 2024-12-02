<?php include PATH . "partials/header.php" ?>

<div class="container">

    <form action="" method="POST" enctype="multipart/form-data" class="mt-5 w-50 mx-auto">
        <h2>File a Report</h2>

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


        <div class="mb-2">
            <label for="">BPC ID</label>
            <input name="bpc_id" value="<?= get_var('bpc_id') ?>" type="text" class="form-control">
        </div>

        <div class="mb-2">
            <label for="">First Name</label>
            <input name="firstname" value="<?= get_var('firstname') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Last Name</label>
            <input name="lastname" value="<?= get_var('lastname') ?>" type="text" class="form-control">
        </div>

        <div class="mb-2">
            <label for="">Year Level</label>
            <select name="year" class="form-control">
                <option value="">Select a Year</option>
                <option <?= get_select('year', '1') ?> value="1">1</option>
                <option <?= get_select('year', '2') ?> value="2">2</option>
                <option <?= get_select('year', '3') ?> value="3">3</option>
                <option <?= get_select('year', '4') ?> value="4">4</option>
            </select>
        </div>

        <div class="mb-2">
            <label for="">Section</label>
            <select name="section" class="form-control">
                <option value="">Select a Section</option>
                <option <?= get_select('section', 'A') ?> value="A">A</option>
                <option <?= get_select('section', 'B') ?> value="B">B</option>
                <option <?= get_select('section', 'C') ?> value="C">C</option>
                <option <?= get_select('section', 'D') ?> value="D">D</option>
                <option <?= get_select('section', 'E') ?> value="E">E</option>
                <option <?= get_select('section', 'F') ?> value="F">F</option>
            </select>
        </div>

        <div class="mb-2">
            <label for="">Computer Lab</label>
            <select name="clnum" class="form-control">
                <option value="">Select a Computer Lab</option>
                <option <?= get_select('clnum', 'A') ?> value="A">A</option>
                <option <?= get_select('clnum', 'B') ?> value="B">B</option>
                <option <?= get_select('clnum', 'C') ?> value="C">C</option>
                <option <?= get_select('clnum', 'D') ?> value="D">D</option>
            </select>
        </div>

        <div class="mb-2">
            <label for="">PC Number</label>
            <input name="pcnum" value="<?= get_var('pcnum') ?>" type="text" class="form-control">
        </div>

        <div class="mb-2">
            <label for="">Description</label>
            <input name="info" value="<?= get_var('info') ?>" type="text" class="form-control">
        </div>

        <!-- <div class="mb-2">
            <label for="">Status</label>
            <select name="status" class="form-control">
                <option value="">Select a Status</option>
                <option <?= get_select('status', 'Working') ?> value="Working">Working</option>
                <option <?= get_select('status', 'Under Maintanance') ?> value="Under Maintanance">Under Maintanance</option>
                <option <?= get_select('status', 'Not Working') ?> value="Not Working">Not Working</option>
            </select>
        </div> -->

        <!-- <div class="mb-2">
            <label for="">Note</label>
            <input name="note" value="<?= get_var('note') ?>" type="text" class="form-control">
        </div> -->

        <!-- <div class="mb-2">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control">
        </div> -->

        
        <!-- <div class="mb-2">
            <label for="">Email</label>
            <input name="email" value="<?= get_var('email') ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Password</label>
            <input name="password" value="<?= get_var('password') ?>" type="password" class="form-control">
        </div> -->

        <button type="submit" class="btn btn-primary">Submit Report</button>
    </form>

</div>

<?php include PATH . "partials/footer.php" ?>