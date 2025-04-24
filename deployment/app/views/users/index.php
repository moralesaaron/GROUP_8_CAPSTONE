<?php
include __DIR__ . '/../partials/adminheader.php';
?>

<div class="hero-section"></div></div>
<div class="container my-5">
  <h2 class="mb-4">User Management</h2>

  <a href="<?= ROOT ?>/users/create" class="btn btn-primary mb-3">Add New User</a>

  <table class="table table-bordered table-striped text-center align-middle">
    <thead class="table-light">
      <tr>
        <th>#</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Registered</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($users)) : ?>
        <?php foreach ($users as $index => $user): ?>
          <tr>
            <td><?= $index + 1 ?></td>
            <td><img src="<?= ROOT ?>/<?= $user->image ?>" class="rounded-circle" width="40" height="40"></td>
            <td><?= esc($user->firstname) . ' ' . esc($user->lastname) ?></td>
            <td><?= esc($user->email) ?></td>
            <td><span class="badge bg-info text-dark"><?= esc($user->role) ?></span></td>
            <td>
            <?php if (!empty($user->date)): ?>
              <?= date('M d, Y', strtotime($user->date)) ?>
            <?php else: ?>
              <span class="text-muted">Not set</span>
            <?php endif; ?>
             </td>

            <td>
              <a href="<?= ROOT ?>/users/edit/<?= $user->id ?>" class="btn btn-sm btn-success">Edit</a>
              <a href="<?= ROOT ?>/users/delete/<?= $user->id ?>" class="btn btn-sm btn-danger">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr><td colspan="7">No users found.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>
</div>
<?php
include __DIR__ . '/../partials/footer.php';
?>