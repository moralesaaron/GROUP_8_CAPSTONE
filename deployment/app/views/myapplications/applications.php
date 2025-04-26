<?php //header if statementss
if (isset($_SESSION['USER'])) {
  if ($_SESSION['USER']->role === 'admin') {
    include __DIR__ . '/../partials/adminheader.php';
  } elseif ($_SESSION['USER']->role === 'dorm') {
    include __DIR__ . '/../partials/ownerheader.php';
  }
}
?>

<!-- old applications table view -->
<!-- <div class="container my-5">
<h2 class="mb-4">Pending Room Applications</h2>

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
            <td><?= esc($app->dorm_city) ?>, <?=esc($app->dorm_province) ?></td>
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





</div> -->

<!-- 
new applications table view -->
<div class="hero-section">
  <h2 class="mb-4">Pending Applications</h2>

  <?php if (isset($_SESSION['USER']) && $_SESSION['USER']->role === 'dorm'): ?>
<?php endif; ?>

<table class="table table-striped">
  <thead> 
    <tr>
      
      <th>Full Name</th>
      <th>Dorm Name</th>
      <th>Location</th>
      <th>Room Name</th>
      <th>Room No.</th>
      
      <th>Status</th>
      <th>Payment Status</th>

      
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if (!empty($applications)): ?>
      <?php foreach ($applications as $app): ?>
        <tr>
        <td><?= esc($app->full_name) ?></td>
            <td><?= esc($app->dorm_name) ?></td>
            <td><?= esc($app->dorm_city) ?>, <?=esc($app->dorm_province) ?></td>
            <td><?= esc($app->room_name) ?></td>
            <td>0<?= esc($app->room_number) ?></td>
            <td>
            <?php
              $status = strtolower($app->status);
              $badgeClass = match ($status) {
                'approved' => 'bg-success',
                'pending' => 'bg-warning',
                'canceled' => 'bg-danger',
                default => 'bg-secondary', // fallback
              };
            ?>
            <span class="badge <?= $badgeClass ?>">
              <?= ucfirst($status) ?>
            </span>
            </td>

            <td>
              <?php
                $status = strtolower($app->payment_status);
                $badgeClass = match ($status) {
                  'paid' => 'bg-success',
                  'pending' => 'bg-warning',
                  default => 'bg-secondary', // fallback
                };
              ?>
                <span class="badge <?= $badgeClass ?>">
                  <?= ucfirst($status) ?>
                </span>
            </td>

          <td>
            <div class="d-flex gap-1 ">
              
            
            
            <!-- view details button -->
            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal<?= $app->id ?>">
              View
            </button>
            <!-- <?= ROOT ?>/mydorms/edit/<?= $app->id ?> -->
                        <a href="#" class="btn btn-warning btn-sm">Send Bill</a>
                        <a href="#" class="btn btn-danger btn-sm">Accept</a>
                        <a href="#" class="btn btn-danger btn-sm">Decline</a>
            </div>
          </td>

        </tr>

        <div class="modal fade" id="viewModal<?= $app->id ?>" tabindex="-1" aria-labelledby="viewModalLabel<?= $app->id ?>" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="viewModalLabel<?= $app->id ?>">Application Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p><strong>Full Name:</strong> <?= htmlspecialchars($app->full_name) ?></p>
              <p><strong>Dorm Name:</strong> <?= htmlspecialchars($app->dorm_name) ?></p>
              <p><strong>Location:</strong> <?= htmlspecialchars($app->dorm_city) ?>, <?= htmlspecialchars($app->dorm_province) ?></p>
              <p><strong>Room Name:</strong> <?= htmlspecialchars($app->room_name) ?></p>
              <p><strong>Room No.:</strong> <?= htmlspecialchars($app->room_number) ?></p>
              <p><strong>Status:</strong> <?= ucfirst($app->status) ?></p>
              <p><strong>Payment Status:</strong> <?= ucfirst($app->payment_status) ?></p>
              <!-- You can add more fields if needed -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <?php endforeach; ?>
    <?php else: ?>
      <tr>
        <td colspan="6" class="text-center">No applications found</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>

</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>
