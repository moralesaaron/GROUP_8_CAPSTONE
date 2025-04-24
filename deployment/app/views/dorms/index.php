<?php //header if statementss
if (isset($_SESSION['USER'])) {
  if ($_SESSION['USER']->role === 'admin') {
    include __DIR__ . '/../partials/adminheader.php';
  } elseif ($_SESSION['USER']->role === 'dorm') {
    include __DIR__ . '/../partials/ownerheader.php';
  }
}
?>


<div class="container my-5">
  <h2 class="mb-4">Dorms</h2>

  <?php if (isset($_SESSION['USER']) && $_SESSION['USER']->role === 'dorm'): ?>
  <a href="<?= ROOT ?>/mydorms/create" class="btn btn-primary mb-3">Add New Dorm</a>
<?php endif; ?>

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Room Name</th>
      <th>Location</th>
      <th>Status</th>
      <th>Available Rooms</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if (!empty($dorms)): ?>
      <?php foreach ($dorms as $dorm): ?>
        <tr>
          <td><?= esc($dorm->id) ?></td>
          <td><?= esc($dorm->name) ?></td>
          <td><?= esc($dorm->city) ?>, <?= esc($dorm->province) ?></td>
          <td>
            <span class="badge <?= $dorm->status == 'active' ? 'bg-success' : 'bg-danger' ?>">
              <?= ucfirst($dorm->status) ?>
            </span>
          </td>
          <td><?= esc($dorm->available_rooms) ?></td>
          <td>
            <a href="<?= ROOT ?>/mydorms/viewdorm/<?= $dorm->id ?>" class="btn btn-info btn-sm">View</a>
            <a href="<?= ROOT ?>/mydorms/edit/<?= $dorm->id ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="<?= ROOT ?>/mydorms/delete/<?= $dorm->id ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
    <?php else: ?>
      <tr>
        <td colspan="6" class="text-center">No apartment found</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>

</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>
