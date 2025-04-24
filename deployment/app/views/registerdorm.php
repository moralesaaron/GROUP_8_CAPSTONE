<?php include "partials/header.php" ?>

<body>
  <div class="container hero-section">
    <div class="row w-100 align-items-center mb-5">
      
      <!-- Left Content -->
      <div class="col-md-6">
        <h1 class="display-3 fw-bold">
          REGISTER YOUR DORM OWNER ACCOUNT
        </h1>
      </div>

      <!-- Registration Form -->
      <div class="col-md-6 d-flex justify-content-center">
        <form action="" method="POST" class="w-50 mx-auto" enctype="multipart/form-data">

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

          <div class="mb-3">
            <label for="image" class="form-label">Profile Image (optional)</label>
            <input type="file" class="form-control" name="image" accept="image/*">
          </div>

          <!-- Optional Inputs -->
          <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="address">
          </div>

          <div class="mb-3">
            <label for="contact" class="form-label">Contact Number</label>
            <input type="text" class="form-control" name="contact">
          </div>

          <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" class="form-select">
              <option value="">Select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>

          <button type="submit" class="custom-button text-white me-3">Register</button>

          <div class="mt-3">
            Already have an account? <a href="<?= ROOT ?>/login" class="btn btn-dark">Login</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</body>

<?php include "partials/footer.php" ?>
