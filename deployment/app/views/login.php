<?php include "partials/header.php" ?>

<body>
    <!-- Navbar -->
    
    <!-- main content -->
    <div class="container-fluid hero-section">
        <div class="row w-100 align-items-center mb-5">
            <!-- Main Content -->
            <div class="col-md-6">
                <h1 class="display-3 fw-bold">
                    LOGIN
                </h1>
            </div>
            
            <!-- Login Form -->
            <div class="col-md-6 d-flex justify-content-center">
                <form action="" method="POST" class="w-50 mx-auto">
                    <!-- Success Message -->
                    <?php if (!empty($success)): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $success ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <!-- General Error Message -->
                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= $error ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <!-- Validation Errors -->
                    <?php if (!empty($errors)): ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?php foreach ($errors as $e): ?>
                                <?= $e ?><br>

                                <?php if ($e == 'Please verify your email first.'): ?>
                                    <form method="post" action="<?= ROOT ?>/resend" class="mt-3">
                                        <input type="hidden" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                                        <button type="submit" class="btn btn-sm btn-primary">Resend Verification Email</button>
                                    </form>
                                <?php endif; ?>

                            <?php endforeach; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <!-- Login Inputs -->
                    <div class="mb-2">
                        <label for="">Email</label>
                        <input type="text" value="<?= get_var('email') ?>" name="email" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="text-end mt-2">
  <a href="<?= ROOT ?>/forgotpassword" class="text-decoration-none">Forgot your password?</a>
</div>

                    <button type="submit" class="custom-button text-white me-3">Login</button>
                    
                    <br><br><br><br><br>
                    No account yet?<br> 
                    <a href="<?= ROOT ?>/registeruser" class="btn btn-dark">Register Here</a>

                </form>
            </div>
        </div>
    </div>
</body>

<?php include "partials/footer.php" ?>
