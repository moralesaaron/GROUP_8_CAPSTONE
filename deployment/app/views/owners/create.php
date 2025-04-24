<?php include __DIR__ . '/../partials/adminheader.php'; ?>

<div class="container my-5">
  <h2 class="mb-4">Add New Owner</h2>

  <?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
      <?php foreach ($errors as $error): ?>
        <div><?= $error ?></div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="firstname" class="form-label">First Name</label>
      <input type="text" class="form-control" name="firstname" id="firstname" required>
    </div>

    <div class="mb-3">
      <label for="lastname" class="form-label">Last Name</label>
      <input type="text" class="form-control" name="lastname" id="lastname" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="email" required>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="password" required>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Profile Image</label>
      <input type="file" class="form-control" name="image" id="image">
    </div>

    <input type="hidden" name="role" value="dorm">

    <button type="submit" class="btn btn-primary">Create</button>
    <a href="<?= ROOT ?>/owners" class="btn btn-secondary">Cancel</a>
  </form>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>
