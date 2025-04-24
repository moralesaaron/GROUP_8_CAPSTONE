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

  <!-- <h2><?= esc($dorm->name) ?></h2>
<p><strong>City:</strong> <?= esc($dorm->city) ?></p>
<p><strong>Status:</strong> <?= esc($dorm->status) ?></p>
<p><strong>Available Rooms:</strong> <?= esc($dorm->available_rooms) ?></p>
<p><strong>Description:</strong> <?= esc($dorm->description) ?></p> -->






<div class="container my-5">
<h2><?= esc($dorm->name) ?> — Rooms</h2>
    <a href="<?= ROOT ?>/myrooms/create/<?= $dorm->id ?>" class="btn btn-primary">Add Room</a>
    



    <?php if (!empty($rooms)): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Room #</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Capacity</th>
                    <th>Status</th>
                    <th>Visibility</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rooms as $room): ?>
                    <tr>
                        <td><?= esc($room->room_number) ?></td>
                        <td><?= esc($room->room_name) ?></td>
                        <td><?= esc($room->room_type) ?></td>
                        <td>₱<?= esc($room->price) ?></td>
                        <td><?= esc($room->capacity) ?></td>
                        <td><?= esc($room->status) ?></td>
                        <td><?= esc($room->visibility) ?></td>
                        <td>
                            <a href="<?= ROOT ?>/myrooms/edit/<?= $room->id ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?= ROOT ?>/myrooms/delete/<?= $room->id ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No rooms found.</p>
    <?php endif; ?>
</div>

<a href="<?= ROOT ?>/mydorms" class="btn btn-secondary">Back to My Dorms</a>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>
