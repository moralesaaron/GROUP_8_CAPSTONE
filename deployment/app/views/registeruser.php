<?php include 'partials/header.php'; ?>

<!-- <div class="container mt-5">
  <h2 class="mb-4">Register as a User</h2>

  <?php if (!empty($errors['errors'])): ?>
    <div class="alert alert-danger">
      <?= $errors['errors'] ?>
    </div>
  <?php endif; ?>

  <form method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
    <div class="mb-3">
      <label for="firstname" class="form-label">First Name</label>
      <input type="text" class="form-control" name="firstname" required>
    </div>

    <div class="mb-3">
      <label for="lastname" class="form-label">Last Name</label>
      <input type="text" class="form-control" name="lastname" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" required>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" required>
    </div>

    <input type="hidden" name="role" value="user">

    <div class="mb-3">
      <label for="image" class="form-label">Profile Image (optional)</label>
      <input type="file" class="form-control" name="image" accept="image/*">
    </div>

    <button type="submit" class="btn btn-primary w-100">Register</button>
  </form>

  <div class="mt-3">
    <a href="<?= ROOT ?>/login">Already have an account? Login</a>
  </div>
</div> -->


<body>
    <!-- Navbar -->
    
    
    <!-- main content -->
    <div class="container hero-section">
        <div class="row w-100 align-items-center mb-5">
            <!-- Main Content -->
            <div class="col-md-6">
                <h1 class="display-3 fw-bold">
                REGISTER ACCOUNT</h1>
                <!-- <img src="<?= ROOT ?>/assets/images/logo.png" alt="Visual representation" class="img-fluid w-100" /> -->
                
                <!-- <div class="mt-4">
                    <a href="#" class="custom-button text-white me-3">Get started</a>
                    <a href="#" class="btn btn-outline-secondary">Talk to a human</a>
                </div> -->
            </div>
            
            <!-- Search Bar -->
            
            <div class="col-md-6 d-flex justify-content-center">
            <form action="" method="POST" class="w-50 mx-auto">
    <!-- <h2 class="login-title">Login</h2> -->

    <?php if (!empty($errors)): ?>

      <div class="alert alert-warning alert-dismissible fade show" role="alert">

        <?php foreach ($errors as $error): ?>
          <?= $error . "<br>" ?>
        <?php endforeach; ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

              <?php endif; ?>

              <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" required>
                </div>

                <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" required>
                </div>

                <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
                </div>

                <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
                </div>

                <input type="hidden" name="role" value="user">

                <div class="mb-3">
                <label for="image" class="form-label">Profile Image (optional)</label>
                <input type="file" class="form-control" name="image" accept="image/*">
                </div>
              
              <button type="submit" class="custom-button text-white me-3">Register</button>
              
                    <br><br><br><br><br>
                    No account yet?<br> <a href="<?= ROOT ?>/registeruser" class="btn btn-dark">Register Here</a>

            </form>
            </div>
            </div>


            


        </div>
    </div>

</body>










<?php include 'partials/footer.php'; ?>
