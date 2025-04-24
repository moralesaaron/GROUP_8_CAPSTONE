<?php include __DIR__ . '/../partials/ownerheader.php'; ?>

<div class="container my-5">
  <h2 class="mb-4 text-danger">Delete Room</h2>

  <div class="alert alert-warning">
    Are you sure you want to delete the room: <strong><?= $room->room_name ?></strong>?
  </div>

  <form method="post">
    <button type="submit" class="btn btn-danger">Yes, Delete</button>
    <a href="<?= ROOT ?>/myrooms/index/<?= $room->dorm_id ?>" class="btn btn-secondary">Cancel</a>
  </form>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>
