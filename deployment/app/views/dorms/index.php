<?php //header if statements
if (isset($_SESSION['USER'])) {
  if ($_SESSION['USER']->role === 'admin') {
    include __DIR__ . '/../partials/adminheader.php';
  } elseif ($_SESSION['USER']->role === 'dorm') {
    include __DIR__ . '/../partials/ownerheader.php';
  }
}
?>

<div class="container my-5">
  <!-- Dashboard Header Section -->
  <div class="dashboard-header mb-4">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <h2 class="dashboard-title fw-bold text-dark mb-1">Dorms Management</h2>
        <p class="text-muted fs-6">Manage your property listings and room availability</p>
      </div>
      <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
        <?php if (isset($_SESSION['USER']) && $_SESSION['USER']->role === 'dorm'): ?>
          <a href="<?= ROOT ?>/mydorms/create" class="btn btn-orange shadow-sm px-4 py-2">
            <i class="bi bi-plus-circle me-2"></i>Add New Dorm
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <!-- Main Content Card -->
  <div class="card border-0 shadow-sm overflow-hidden">
    <div class="card-header bg-light d-flex align-items-center py-3 px-4 border-0">
      <i class="bi bi-building fs-5 text-orange me-2"></i>
      <span class="fw-semibold">Property Listings</span>
    </div>

    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-borderless align-middle mb-0">
          <thead>
            <tr class="bg-light">
              <th class="px-4 py-3" width="5%">#</th>
              <th class="py-3" width="20%">Room Name</th>
              <th class="py-3" width="20%">Location</th>
              <th class="py-3" width="15%">Status</th>
              <th class="py-3" width="15%">Available Rooms</th>
              <th class="text-end pe-4 py-3" width="25%">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($dorms)): ?>
              <?php foreach ($dorms as $index => $dorm): ?>
                <tr class="<?= $index % 2 === 0 ? 'bg-white' : 'bg-light-orange' ?>">
                  <td class="px-4"><?= esc($dorm->id) ?></td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div
                        class="avatar-sm bg-orange-soft rounded-circle d-flex align-items-center justify-content-center me-3">
                        <span class="text-orange fw-bold"><?= strtoupper(substr($dorm->name, 0, 1)) ?></span>
                      </div>
                      <div>
                        <span class="fw-medium"><?= esc($dorm->name) ?></span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-geo-alt text-muted me-2"></i>
                      <span><?= esc($dorm->city) ?>, <?= esc($dorm->province) ?></span>
                    </div>
                  </td>
                  <td>
                    <?php if ($dorm->status == 'active'): ?>
                      <div class="status-pill bg-success-soft text-success">
                        <i class="bi bi-check-circle me-1"></i>Active
                      </div>
                    <?php else: ?>
                      <div class="status-pill bg-danger-soft text-danger">
                        <i class="bi bi-x-circle me-1"></i>Inactive
                      </div>
                    <?php endif; ?>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="availability-badge">
                        <i class="bi bi-door-open me-2"></i>
                        <span class="fw-medium"><?= esc($dorm->available_rooms) ?></span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="action-buttons d-flex justify-content-end gap-2 pe-3">
                      <a href="<?= ROOT ?>/mydorms/viewdorm/<?= $dorm->id ?>" class="btn btn-sm btn-light-orange"
                        data-bs-toggle="tooltip" title="View Details">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="<?= ROOT ?>/mydorms/edit/<?= $dorm->id ?>" class="btn btn-sm btn-light-blue"
                        data-bs-toggle="tooltip" title="Edit Dorm">
                        <i class="bi bi-pencil"></i>
                      </a>
                      <a href="javascript:void(0)" onclick="confirmDelete(<?= $dorm->id ?>)"
                        class="btn btn-sm btn-light-red" data-bs-toggle="tooltip" title="Delete Dorm">
                        <i class="bi bi-trash"></i>
                      </a>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="6">
                  <div class="empty-state p-5 text-center">
                    <div class="empty-state-icon bg-orange-soft rounded-circle mx-auto mb-3">
                      <i class="bi bi-building text-orange"></i>
                    </div>
                    <h5 class="fw-medium mb-2">No Dorms Available</h5>
                    <p class="text-muted mb-3">You haven't added any dorms to your listing yet.</p>
                    <?php if (isset($_SESSION['USER']) && $_SESSION['USER']->role === 'dorm'): ?>
                    <?php endif; ?>
                  </div>
                </td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>

    <?php if (!empty($dorms)): ?>
      <div class="card-footer bg-white py-3 px-4 d-flex justify-content-between align-items-center">
        <div class="text-muted small">
          <i class="bi bi-info-circle me-1"></i> Showing <?= count($dorms) ?> total dorm
          propert<?= count($dorms) > 1 ? 'ies' : 'y' ?>
        </div>
        <div>
          <button type="button" class="btn btn-sm btn-light" onclick="window.print()">
            <i class="bi bi-printer me-1"></i> Print List
          </button>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow">
      <div class="modal-header border-0">
        <h5 class="modal-title">Confirm Deletion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center py-4">
        <div class="mb-3">
          <i class="bi bi-exclamation-triangle text-warning display-4"></i>
        </div>
        <h5 class="mb-2">Are you sure you want to delete this dorm?</h5>
        <p class="text-muted">This action cannot be undone and all associated data will be permanently removed.</p>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        <a href="#" id="confirmDeleteBtn" class="btn btn-danger">Yes, Delete</a>
      </div>
    </div>
  </div>
</div>

<!-- Add Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<!-- Add custom CSS for orange theme and styling -->
<style>
  /* Typography Enhancements */
  body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
  }

  /* Orange Theme Colors */
  :root {
    --orange-primary: #FF7A00;
    --orange-secondary: #FF9A3D;
    --orange-light: #FFF0E0;
    --blue-light: #E0F0FF;
    --red-light: #FFE0E0;
  }

  /* Custom Button Styles */
  .btn-orange {
    background-color: var(--orange-primary);
    color: white;
    border: none;
    font-weight: 500;
    border-radius: 6px;
    transition: all 0.3s;
  }

  .btn-orange:hover,
  .btn-orange:focus {
    background-color: var(--orange-secondary);
    color: white;
    box-shadow: 0 5px 15px rgba(255, 122, 0, 0.15);
  }

  .btn-light-orange {
    background-color: var(--orange-light);
    color: var(--orange-primary);
    border: none;
    transition: all 0.2s;
  }

  .btn-light-orange:hover {
    background-color: var(--orange-primary);
    color: white;
  }

  .btn-light-blue {
    background-color: var(--blue-light);
    color: #0d6efd;
    border: none;
  }

  .btn-light-blue:hover {
    background-color: #0d6efd;
    color: white;
  }

  .btn-light-red {
    background-color: var(--red-light);
    color: #dc3545;
    border: none;
  }

  .btn-light-red:hover {
    background-color: #dc3545;
    color: white;
  }

  /* Custom Card Styling */
  .card {
    border-radius: 10px;
  }

  .card-header {
    background-color: #f8f9fa;
  }

  /* Table Styling */
  .table th {
    font-weight: 600;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.03em;
    color: #495057;
  }

  .table td {
    padding-top: 1rem;
    padding-bottom: 1rem;
    font-size: 0.95rem;
  }

  /* Status Pills */
  .status-pill {
    display: inline-flex;
    align-items: center;
    padding: 0.5rem 0.875rem;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 500;
  }

  .bg-success-soft {
    background-color: rgba(25, 135, 84, 0.15);
  }

  .bg-danger-soft {
    background-color: rgba(220, 53, 69, 0.15);
  }

  /* Availability Badge */
  .availability-badge {
    display: inline-flex;
    align-items: center;
    background-color: #f8f9fa;
    padding: 0.5rem 0.875rem;
    border-radius: 6px;
    font-size: 0.875rem;
  }

  /* Avatar Style */
  .avatar-sm {
    width: 36px;
    height: 36px;
  }

  /* Custom Background Colors */
  .bg-orange-soft {
    background-color: var(--orange-light);
  }

  .bg-light-orange {
    background-color: rgba(255, 122, 0, 0.05);
  }

  /* Text Colors */
  .text-orange {
    color: var(--orange-primary) !important;
  }

  /* Dashboard Title */
  .dashboard-title {
    letter-spacing: -0.02em;
  }

  /* Empty State */
  .empty-state-icon {
    width: 70px;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.75rem;
  }

  /* Add more professional spacing */
  .dashboard-header {
    padding-bottom: 1rem;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  }
</style>

<!-- JavaScript for Delete Confirmation Modal -->
<script>
  function confirmDelete(dormId) {
    const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
    document.getElementById('confirmDeleteBtn').href = `<?= ROOT ?>/mydorms/delete/${dormId}`;
    modal.show();
  }

  // Initialize tooltips
  document.addEventListener('DOMContentLoaded', function () {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl, {
        boundary: document.body
      });
    });
  });
</script>

<?php include __DIR__ . '/../partials/footer.php'; ?>