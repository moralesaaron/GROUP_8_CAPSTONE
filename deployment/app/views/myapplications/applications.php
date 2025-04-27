<?php //header if statements
if (isset($_SESSION['USER'])) {
  if ($_SESSION['USER']->role === 'admin') {
    include __DIR__ . '/../partials/adminheader.php';
  } elseif ($_SESSION['USER']->role === 'dorm') {
    include __DIR__ . '/../partials/ownerheader.php';
  }
}
?>

<!-- Custom CSS for this page -->
<style>
  :root {
    --primary-orange: #ff7700;
    --light-orange: #fff0e6;
    --dark-orange: #e56b00;
    --accent-orange: #ffac59;
  }

  .hero-section {
    padding: 2rem;
    margin: 2rem auto;
    max-width: 95%;
    animation: fadeIn 0.5s ease-in-out;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .hero-section h2 {
    color: var(--dark-orange);
    font-weight: 700;
    border-left: 5px solid var(--primary-orange);
    padding-left: 15px;
    margin-bottom: 2rem;
  }

  .application-table {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    animation: slideUp 0.5s ease-out;
  }

  @keyframes slideUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .application-table thead {
    background-color: var(--primary-orange);
    color: white;
  }

  .application-table thead th {
    font-weight: 600;
    padding: 1rem;
    white-space: nowrap;
  }

  .application-table tbody tr {
    transition: all 0.2s ease;
  }

  .application-table tbody tr:hover {
    background-color: var(--light-orange);
    transform: translateY(-3px);
    box-shadow: 0 5px 8px rgba(0, 0, 0, 0.1);
  }

  .application-table tbody td {
    padding: 1rem;
    vertical-align: middle;
  }

  .badge {
    font-size: 0.8rem;
    padding: 0.4rem 0.8rem;
    border-radius: 50px;
  }

  .bg-success {
    background-color: #28a745 !important;
  }

  .bg-warning {
    background-color: #ffc107 !important;
  }

  .bg-danger {
    background-color: #dc3545 !important;
  }

  .bg-secondary {
    background-color: #6c757d !important;
  }

  .btn-action {
    border-radius: 6px;
    font-weight: 500;
    transition: all 0.2s;
    margin: 0 2px;
  }

  .btn-view {
    background-color: var(--primary-orange);
    color: white;
    border: none;
  }

  .btn-view:hover {
    background-color: var(--dark-orange);
    transform: translateY(-2px);
  }

  .btn-bill {
    background-color: #6c757d;
    color: white;
    border: none;
  }

  .btn-bill:hover {
    background-color: #5a6268;
    transform: translateY(-2px);
  }

  .btn-accept {
    background-color: #28a745;
    color: white;
    border: none;
  }

  .btn-accept:hover {
    background-color: #218838;
    transform: translateY(-2px);
  }

  .btn-decline {
    background-color: #dc3545;
    color: white;
    border: none;
  }

  .btn-decline:hover {
    background-color: rgb(247, 153, 46);
    transform: translateY(-2px);
  }

  .empty-state {
    padding: 3rem;
    text-align: center;
    color: #6c757d;
  }

  .modal-content {
    border-radius: 12px;
    border: none;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }

  .modal-header {
    background-color: var(--primary-orange);
    color: white;
    border-radius: 12px 12px 0 0;
  }

  .modal-title {
    font-weight: 600;
  }

  .modal-body {
    padding: 1.5rem;
  }

  .modal-body p {
    margin-bottom: 0.8rem;
    border-bottom: 1px solid #f0f0f0;
    padding-bottom: 0.8rem;
  }

  .modal-body p strong {
    color: var(--dark-orange);
  }

  .modal-footer {
    border-top: none;
  }

  .btn-close-modal {
    background-color: var(--primary-orange);
    color: white;
    border: none;
    border-radius: 6px;
    padding: 0.5rem 1.5rem;
    font-weight: 500;
  }

  .btn-close-modal:hover {
    background-color: var(--dark-orange);
  }

  /* Responsive adjustments */
  @media (max-width: 992px) {
    .action-buttons {
      display: flex;
      flex-direction: column;
      gap: 5px;
    }

    .application-table {
      font-size: 0.9rem;
    }
  }
</style>

<div class="hero-section">
  <h2>Pending Applications</h2>

  <div class="application-table">
    <table class="table table-borderless mb-0">
      <thead>
        <tr>
          <th>Full Name</th>
          <th>Dorm Name</th>
          <th>Location</th>
          <th>Room Name</th>
          <th>Room No.</th>
          <th>Status</th>
          <th>Payment</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($applications)): ?>
          <?php foreach ($applications as $app): ?>
            <tr class="application-row">
              <td><span class="fw-medium"><?= esc($app->full_name) ?></span></td>
              <td><?= esc($app->dorm_name) ?></td>
              <td><?= esc($app->dorm_city) ?>, <?= esc($app->dorm_province) ?></td>
              <td><?= esc($app->room_name) ?></td>
              <td>0<?= esc($app->room_number) ?></td>
              <td>
                <?php
                $status = strtolower($app->status);
                $badgeClass = match ($status) {
                  'approved' => 'bg-success',
                  'pending' => 'bg-warning',
                  'canceled' => 'bg-danger',
                  default => 'bg-secondary',
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
                  default => 'bg-secondary',
                };
                ?>
                <span class="badge <?= $badgeClass ?>">
                  <?= ucfirst($status) ?>
                </span>
              </td>
              <td>
                <div class="action-buttons d-flex gap-1">
                  <button class="btn btn-action btn-view btn-sm" data-bs-toggle="modal"
                    data-bs-target="#viewModal<?= $app->id ?>">
                    <i class="bi bi-eye me-1"></i> View
                  </button>
                  <button class="btn btn-action btn-bill btn-sm">
                    <i class="bi bi-receipt me-1"></i> Send Bill
                  </button>
                  <button class="btn btn-action btn-accept btn-sm">
                    <i class="bi bi-check-circle me-1"></i> Accept
                  </button>
                  <button class="btn btn-action btn-decline btn-sm">
                    <i class="bi bi-x-circle me-1"></i> Decline
                  </button>
                </div>
              </td>
            </tr>

            <!-- Modal for application details -->
            <div class="modal fade" id="viewModal<?= $app->id ?>" tabindex="-1"
              aria-labelledby="viewModalLabel<?= $app->id ?>" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel<?= $app->id ?>">
                      <i class="bi bi-info-circle me-2"></i>Application Details
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p><strong>Full Name:</strong> <?= htmlspecialchars($app->full_name) ?></p>
                    <p><strong>Dorm Name:</strong> <?= htmlspecialchars($app->dorm_name) ?></p>
                    <p><strong>Location:</strong> <?= htmlspecialchars($app->dorm_city) ?>,
                      <?= htmlspecialchars($app->dorm_province) ?>
                    </p>
                    <p><strong>Room Name:</strong> <?= htmlspecialchars($app->room_name) ?></p>
                    <p><strong>Room No.:</strong> <?= htmlspecialchars($app->room_number) ?></p>
                    <p><strong>Status:</strong> <?= ucfirst($app->status) ?></p>
                    <p><strong>Payment Status:</strong> <?= ucfirst($app->payment_status) ?></p>
                    <p class="mb-0"><strong>Application Date:</strong>
                      <?= isset($app->applied_at) ? htmlspecialchars($app->applied_at) : 'N/A' ?></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-close-modal" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="8" class="empty-state">
              <i class="bi bi-inbox fs-1 d-block mb-3"></i>
              <h5>No applications found</h5>
              <p class="text-muted">When students apply for rooms, they will appear here.</p>
            </td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Add Bootstrap Icons if not already included -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

<!-- Add animation library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

<script>
  // Initialize animations
  document.addEventListener('DOMContentLoaded', function () {
    // Add smooth hover effect to application rows
    const rows = document.querySelectorAll('.application-row');
    rows.forEach(row => {
      row.addEventListener('mouseenter', function () {
        this.style.transition = 'all 0.3s ease';
      });
    });

    // Add subtle entrance animation to action buttons
    const actionButtons = document.querySelectorAll('.btn-action');
    actionButtons.forEach(button => {
      button.addEventListener('mouseenter', function () {
        this.style.transform = 'translateY(-3px)';
        this.style.boxShadow = '0 4px 8px rgba(0,0,0,0.1)';
      });

      button.addEventListener('mouseleave', function () {
        this.style.transform = 'translateY(0)';
        this.style.boxShadow = 'none';
      });
    });
  });
</script>

<?php include __DIR__ . '/../partials/footer.php'; ?>