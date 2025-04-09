<?php include 'partials/header.php'; ?>

<div class="container mt-5">
  <h2>Create Admin</h2>

  <?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
      <?= implode('<br>', $errors) ?>
    </div>
  <?php endif; ?>

  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="firstname" class="form-label">First Name</label>
      <input type="text" name="firstname" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="lastname" class="form-label">Last Name</label>
      <input type="text" name="lastname" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Create Admin</button>
  </form>
</div>

<?php include 'partials/footer.php'; ?>
