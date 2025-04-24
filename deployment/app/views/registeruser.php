<?php include 'partials/header.php'; ?>

<body>
  <div class="container hero-section">
    <div class="row w-100 align-items-center mb-5">
      
      <!-- Left Content -->
      <div class="col-md-6">
        <h1 class="display-3 fw-bold">REGISTER ACCOUNT</h1>
      </div>

      <!-- Registration Form -->
      <div class="col-md-6 d-flex justify-content-center">
        <form action="" method="POST" enctype="multipart/form-data" class="w-75 mx-auto bg-white p-4 shadow rounded">

          <!-- Show errors if any -->
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
  <label for="middlename" class="form-label">Middle Name</label>
  <input type="text" class="form-control" name="middlename">
</div>

<div class="mb-3">
  <label for="lastname" class="form-label">Last Name</label>
  <input type="text" class="form-control" name="lastname" required>
</div>

<div class="mb-3">
  <label for="address" class="form-label">Address</label>
  <input type="text" class="form-control" name="address" required>
</div>

<div class="mb-3">
  <label for="contact" class="form-label">Contact Number</label>
  <input type="text" class="form-control" name="contact" required>
</div>

<div class="mb-3">
  <label class="form-label">Gender</label><br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" value="male" required>
    <label class="form-check-label">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" value="female" required>
    <label class="form-check-label">Female</label>
  </div>
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

<div class="mb-3">
  <label for="id_image" class="form-label">Valid ID Image</label>
  <input type="file" class="form-control" name="id_image" accept="image/*" required>
</div>

          <input type="hidden" name="role" value="user">

          <button type="submit" class="custom-button text-white w-100">Register</button>

          <div class="text-center mt-3">
            Already have an account?
            <a href="<?= ROOT ?>/login" class="btn btn-outline-dark btn-sm ms-2">Login</a>
          </div>

        </form>
      </div>

    </div>
  </div>
</body>

<?php include 'partials/footer.php'; ?>
