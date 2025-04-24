<?php include __DIR__ . '/../partials/adminheader.php'; ?>

<div class="container my-5">
  <h2 class="mb-4 text-danger">Delete User</h2>

  <p>Are you sure you want to delete <strong><?= esc($user->firstname . ' ' . $user->lastname) ?></strong>?</p>

  <form method="post">
    <button type="submit" class="btn btn-danger">Delete</button>
    <a href="<?= ROOT ?>/users" class="btn btn-secondary">Cancel</a>
  </form>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>
