<?php include __DIR__ . '/../partials/adminheader.php'; ?>

<div class="container my-5">
  <h2 class="mb-4">Edit Owner</h2>

  <form method="post">
    <div class="mb-3">
      <label for="firstname" class="form-label">First Name</label>
      <input type="text" class="form-control" name="firstname" id="firstname" value="<?= esc($user->firstname) ?>" required>
    </div>

    <div class="mb-3">
      <label for="lastname" class="form-label">Last Name</label>
      <input type="text" class="form-control" name="lastname" id="lastname" value="<?= esc($user->lastname) ?>" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="email" value="<?= esc($user->email) ?>" required>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="<?= ROOT ?>/owners" class="btn btn-secondary">Cancel</a>
  </form>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>
