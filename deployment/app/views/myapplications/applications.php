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
<h2 class="mb-4">My Applications</h2>

  <?php if (!empty($applications)) : ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Full Name</th>
          <th>Dorm Name</th>
          <th>Dorm Address</th>
          <th>Room Number</th>
          <th>Room Name</th>
          <th>Price</th>
          <th>Status</th>
          <th>Payment</th>
          <th>Applied At</th>
          <th>Expires At</th>
          <th>Paid At</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($applications as $app) : ?>
          <tr>
            <td><?= esc($app->id) ?></td>
            <td><?= esc($app->full_name) ?></td>
            <td><?= esc($app->dorm_name) ?></td>
            <td><?= esc($app->dorm_address) ?></td>
            <td><?= esc($app->room_number) ?></td>
            <td><?= esc($app->room_name) ?></td>
            <td>₱<?= number_format($app->price, 2) ?></td>
            <td>
              <span class="badge <?= $app->status === 'paid' ? 'bg-success' : ($app->status === 'declined' ? 'bg-danger' : 'bg-secondary') ?>">
                <?= ucfirst($app->status) ?>
              </span>
            </td>
            <td>
              <span class="badge <?= $app->payment_status === 'Paid' ? 'bg-success' : 'bg-warning' ?>">
                <?= $app->payment_status ?>
              </span>
            </td>
            <td><?= esc($app->applied_at) ?></td>
            <td><?= $app->expires_at ? esc($app->expires_at) : 'N/A' ?></td>
            <td><?= $app->paid_at ? esc($app->paid_at) : 'N/A' ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php else : ?>
    <p>No applications found.</p>
  <?php endif; ?>





</div>


<?php include __DIR__ . '/../partials/footer.php'; ?>
