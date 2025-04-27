<?php //header if statements
if (isset($_SESSION['USER'])) {
  if ($_SESSION['USER']->role === 'admin') {
    include __DIR__ . '/../partials/adminheader.php';
  } elseif ($_SESSION['USER']->role === 'dorm') {
    include __DIR__ . '/../partials/ownerheader.php';
  }
}
?>

<div class="dashboard-container">
  <div class="content-wrapper">
    <!-- Dashboard Header Section -->
    <div class="page-header">
      <div class="header-content">
        <h1 class="page-title">Dorms Management</h1>
        <p class="text-muted">Manage your property listings and room availability</p>
      </div>
      <div class="header-actions">
        <?php if (isset($_SESSION['USER']) && $_SESSION['USER']->role === 'dorm'): ?>
          <a href="<?= ROOT ?>/mydorms/create" class="btn btn-create">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="12" y1="8" x2="12" y2="16"></line>
              <line x1="8" y1="12" x2="16" y2="12"></line>
            </svg>
            <span>Add New Dorm</span>
          </a>
        <?php endif; ?>
      </div>
    </div>

    <!-- Main Content Card -->
    <div class="data-card">
      <div class="card-header-custom">
        <div class="header-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
            <polyline points="9 22 9 12 15 12 15 22"></polyline>
          </svg>
          <span>Property Listings</span>
        </div>
      </div>

      <?php if (!empty($dorms)): ?>
        <div class="table-container">
          <table class="data-table">
            <thead>
              <tr>
                <th width="5%">#</th>
                <th width="20%">Room Name</th>
                <th width="20%">Location</th>
                <th width="15%">Status</th>
                <th width="15%">Available Rooms</th>
                <th width="25%">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($dorms as $index => $dorm): ?>
                <tr>
                  <td><?= esc($dorm->id) ?></td>
                  <td>
                    <div class="user-info">
                      <div class="dorm-avatar">
                        <span><?= strtoupper(substr($dorm->name, 0, 1)) ?></span>
                      </div>
                      <div class="user-details">
                        <span class="user-name"><?= esc($dorm->name) ?></span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="location-info">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                      </svg>
                      <span><?= esc($dorm->city) ?>, <?= esc($dorm->province) ?></span>
                    </div>
                  </td>
                  <td>
                    <?php if ($dorm->status == 'active'): ?>
                      <span class="status-badge status-active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                          <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        Active
                      </span>
                    <?php else: ?>
                      <span class="status-badge status-inactive">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <circle cx="12" cy="12" r="10"></circle>
                          <line x1="15" y1="9" x2="9" y2="15"></line>
                          <line x1="9" y1="9" x2="15" y2="15"></line>
                        </svg>
                        Inactive
                      </span>
                    <?php endif; ?>
                  </td>
                  <td>
                    <div class="rooms-available">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 3h18v18H3zM9 3v18M15 3v18M3 9h18M3 15h18"></path>
                      </svg>
                      <span><?= esc($dorm->available_rooms) ?></span>
                    </div>
                  </td>
                  <td>
                    <div class="action-buttons">
                      <a href="<?= ROOT ?>/mydorms/viewdorm/<?= $dorm->id ?>" class="btn-action view"
                        aria-label="View details">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                          <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                      </a>
                      <a href="<?= ROOT ?>/mydorms/edit/<?= $dorm->id ?>" class="btn-action edit" aria-label="Edit dorm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                        </svg>
                      </a>
                      <a href="javascript:void(0)" onclick="confirmDelete(<?= $dorm->id ?>)" class="btn-action delete"
                        aria-label="Delete dorm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="3 6 5 6 21 6"></polyline>
                          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        </svg>
                      </a>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

          <div class="table-footer">
            <div class="footer-info">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="16" x2="12" y2="12"></line>
                <line x1="12" y1="8" x2="12.01" y2="8"></line>
              </svg>
              <span>Showing <?= count($dorms) ?> total dorm propert<?= count($dorms) > 1 ? 'ies' : 'y' ?></span>
            </div>
            <div class="footer-actions">
              <button type="button" class="btn-secondary" onclick="window.print()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="6 9 6 2 18 2 18 9"></polyline>
                  <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                  <rect x="6" y="14" width="12" height="8"></rect>
                </svg>
                Print List
              </button>
            </div>
          </div>
        </div>
      <?php else: ?>
        <div class="empty-state">
          <div class="empty-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
              <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
          </div>
          <h3>No Dorms Available</h3>
          <p>You haven't added any dorms to your listing yet.</p>
          <?php if (isset($_SESSION['USER']) && $_SESSION['USER']->role === 'dorm'): ?>
            <a href="<?= ROOT ?>/mydorms/create" class="btn-create-empty">Add Your First Dorm</a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal-overlay" id="deleteModal">
  <div class="modal-container">
    <div class="modal-header">
      <h3>Confirm Deletion</h3>
      <button class="modal-close" id="closeModal">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
    </div>
    <div class="modal-body">
      <div class="warning-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
          <line x1="12" y1="9" x2="12" y2="13"></line>
          <line x1="12" y1="17" x2="12.01" y2="17"></line>
        </svg>
      </div>
      <h4>Are you sure you want to delete this dorm?</h4>
      <p>This action cannot be undone and all associated data will be permanently removed.</p>
    </div>
    <div class="modal-footer">
      <button class="btn-cancel" id="cancelDelete">Cancel</button>
      <a href="#" id="confirmDeleteBtn" class="btn-delete">Yes, Delete</a>
    </div>
  </div>
</div>

<style>
  :root {
    --primary-color: #FF7A00;
    --primary-light: #FFF4EA;
    --primary-dark: #E05F00;
    --success-color: #34D399;
    --success-light: #D1FAE5;
    --danger-color: #F87171;
    --danger-light: #FEE2E2;
    --gray-50: #F9FAFB;
    --gray-100: #F3F4F6;
    --gray-200: #E5E7EB;
    --gray-300: #D1D5DB;
    --gray-400: #9CA3AF;
    --gray-500: #6B7280;
    --gray-700: #374151;
    --gray-900: #111827;
    --blue-color: #3B82F6;
    --blue-light: #DBEAFE;
    --card-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.04), 0 4px 6px -2px rgba(0, 0, 0, 0.02);
    --border-radius: 16px;
    --font-sans: system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
  }

  /* Base Styles */
  body {
    font-family: var(--font-sans);
    background-color: var(--gray-50);
    color: var(--gray-700);
  }

  .dashboard-container {
    max-width: 1280px;
    margin: 0 auto;
    padding-top: 150px;
    padding-bottom: 100px;
  }

  .content-wrapper {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
  }

  /* Header */
  .page-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1.5rem;
    flex-wrap: wrap;
    gap: 1rem;
  }

  .page-title {
    font-size: 1.875rem;
    font-weight: 700;
    color: var(--gray-900);
    margin: 0;
    line-height: 1.2;
  }

  /* Cards */
  .data-card {
    background: white;
    border-radius: var(--border-radius);
    box-shadow: var(--card-shadow);
    overflow: hidden;
  }

  /* Table */
  .table-container {
    overflow-x: auto;
  }

  .data-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
  }

  .data-table th {
    padding: 1rem;
    text-align: left;
    font-weight: 600;
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: var(--gray-500);
    background-color: #FAFAFA;
    border-bottom: 1px solid var(--gray-200);
  }

  .data-table td {
    padding: 1rem;
    border-bottom: 1px solid var(--gray-200);
  }

  .data-table tr:last-child td {
    border-bottom: none;
  }

  .data-table tr:hover {
    background-color: var(--primary-light);
  }

  /* Card Header */
  .card-header-custom {
    padding: 1rem;
    background-color: white;
    border-bottom: 1px solid var(--gray-200);
  }

  .header-icon {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--primary-color);
    font-weight: 600;
  }

  /* Dorm Styling */
  .user-info {
    display: flex;
    align-items: center;
    gap: 0.875rem;
  }

  .dorm-avatar {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: var(--primary-light);
    color: var(--primary-color);
    font-weight: 700;
    font-size: 1.125rem;
    box-shadow: 0 0 0 2px white, 0 0 0 4px var(--primary-light);
  }

  .user-name {
    font-weight: 600;
    color: var(--gray-900);
  }

  /* Location display */
  .location-info {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--gray-500);
  }

  .location-info svg {
    color: var(--gray-400);
  }

  /* Status badges */
  .status-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.375rem;
    padding: 0.375rem 0.75rem;
    border-radius: 9999px;
    font-size: 0.75rem;
    font-weight: 500;
  }

  .status-active {
    background-color: var(--success-light);
    color: var(--success-color);
  }

  .status-inactive {
    background-color: var(--danger-light);
    color: var(--danger-color);
  }

  /* Rooms available styling */
  .rooms-available {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.375rem 0.75rem;
    background-color: var(--gray-100);
    border-radius: 8px;
    color: var(--gray-700);
    font-weight: 500;
    width: fit-content;
  }

  /* Action buttons */
  .action-buttons {
    display: flex;
    gap: 0.5rem;
    justify-content: flex-end;
  }

  .btn-action {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.2s ease;
    color: var(--gray-500);
    background-color: var(--gray-100);
    text-decoration: none;
  }

  .btn-action.view:hover {
    background-color: var(--primary-light);
    color: var(--primary-color);
  }

  .btn-action.edit:hover {
    background-color: var(--blue-light);
    color: var(--blue-color);
  }

  .btn-action.delete:hover {
    background-color: var(--danger-light);
    color: var(--danger-color);
  }

  /* Buttons */
  .btn-create {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background-color: var(--primary-color);
    color: white;
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: 12px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
    text-decoration: none;
    box-shadow: 0 2px 5px rgba(255, 122, 0, 0.3);
  }

  .btn-create:hover {
    background-color: var(--primary-dark);
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(255, 122, 0, 0.4);
  }

  .btn-secondary {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background-color: var(--gray-100);
    color: var(--gray-700);
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
  }

  .btn-secondary:hover {
    background-color: var(--gray-200);
  }

  /* Table footer */
  .table-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
    background-color: white;
    border-top: 1px solid var(--gray-200);
  }

  .footer-info {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--gray-500);
    font-size: 0.875rem;
  }

  /* Empty state */
  .empty-state {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 4rem 1rem;
    text-align: center;
  }

  .empty-icon {
    color: var(--gray-300);
    margin-bottom: 1rem;
  }

  .empty-state h3 {
    margin: 0.5rem 0;
    color: var(--gray-700);
    font-weight: 600;
  }

  .empty-state p {
    color: var(--gray-500);
    margin-bottom: 1.5rem;
  }

  .btn-create-empty {
    display: inline-flex;
    align-items: center;
    background-color: var(--primary-color);
    color: white;
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: 12px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
    text-decoration: none;
  }

  .btn-create-empty:hover {
    background-color: var(--primary-dark);
  }

  /* Modal styling */
  .modal-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
    align-items: center;
    justify-content: center;
  }

  .modal-overlay.active {
    display: flex;
  }

  .modal-container {
    background-color: white;
    border-radius: 16px;
    width: 100%;
    max-width: 450px;
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    overflow: hidden;
  }

  .modal-header {
    padding: 1rem 1.5rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid var(--gray-200);
  }

  .modal-header h3 {
    margin: 0;
    font-weight: 600;
    color: var(--gray-900);
  }

  .modal-close {
    background: none;
    border: none;
    cursor: pointer;
    color: var(--gray-500);
    padding: 0.25rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.2s ease;
  }

  .modal-close:hover {
    background-color: var(--gray-100);
    color: var(--gray-900);
  }

  .modal-body {
    padding: 2rem 1.5rem;
    text-align: center;
  }

  .warning-icon {
    color: #FBBF24;
    margin-bottom: 1rem;
  }

  .modal-body h4 {
    margin: 0 0 0.75rem 0;
    color: var(--gray-900);
    font-weight: 600;
  }

  .modal-body p {
    margin: 0;
    color: var(--gray-500);
  }

  .modal-footer {
    padding: 1rem 1.5rem;
    display: flex;
    justify-content: flex-end;
    gap: 0.75rem;
    border-top: 1px solid var(--gray-200);
  }

  .btn-cancel {
    padding: 0.5rem 1rem;
    background-color: var(--gray-100);
    color: var(--gray-700);
    border: none;
    border-radius: 8px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
  }

  .btn-cancel:hover {
    background-color: var(--gray-200);
  }

  .btn-delete {
    padding: 0.5rem 1rem;
    background-color: var(--danger-color);
    color: white;
    border: none;
    border-radius: 8px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
    text-decoration: none;
  }

  .btn-delete:hover {
    background-color: #EF4444;
  }

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .page-header {
      flex-direction: column;
      align-items: flex-start;
    }

    .header-actions {
      width: 100%;
    }

    .btn-create {
      width: 100%;
      justify-content: center;
    }

    .table-footer {
      flex-direction: column;
      gap: 1rem;
    }

    .footer-actions {
      width: 100%;
    }

    .footer-actions button {
      width: 100%;
      justify-content: center;
    }
  }
</style>

<script>
  // JavaScript for Delete Confirmation Modal
  document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('deleteModal');
    const closeButton = document.getElementById('closeModal');
    const cancelButton = document.getElementById('cancelDelete');

    function showModal() {
      modal.classList.add('active');
    }

    function hideModal() {
      modal.classList.remove('active');
    }

    window.confirmDelete = function (dormId) {
      document.getElementById('confirmDeleteBtn').href = `<?= ROOT ?>/dorms/delete/${dormId}`;
      showModal();
    }

    closeButton.addEventListener('click', hideModal);
    cancelButton.addEventListener('click', hideModal);

    // Close modal when clicking outside the modal content
    modal.addEventListener('click', function (event) {
      if (event.target === modal) {
        hideModal();
      }
    });
  });
</script>

<?php include __DIR__ . '/../partials/footer.php'; ?>