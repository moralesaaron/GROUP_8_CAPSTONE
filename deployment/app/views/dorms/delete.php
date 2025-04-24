<?php include __DIR__ . '/../partials/ownerheader.php'; ?>

<div class="container my-5">
  <h2 class="mb-4 text-danger">Delete Dorm</h2>

  <p>Are you sure you want to delete <strong><?= esc($dorm->name) ?></strong>?</p>

  <form method="post">
    <button type="submit" class="btn btn-danger">Delete</button>
    <a href="<?= ROOT ?>/mydorms" class="btn btn-secondary">Cancel</a>
  </form>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>
