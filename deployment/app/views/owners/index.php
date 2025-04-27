<?php
include __DIR__ . '/../partials/adminheader.php';
?>

<div class="dashboard-container">
  <div class="content-wrapper">
    <div class="page-header">
      <div class="header-content">
        <h1 class="page-title">Owners Management</h1>
        <p class="text-muted">Manage all property owners in one place</p>
      </div>
      <div class="header-actions">
        <a href="<?= ROOT ?>/owners/create" class="btn btn-create">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <line x1="19" y1="8" x2="19" y2="14"></line>
            <line x1="22" y1="11" x2="16" y2="11"></line>
          </svg>
          <span>Add Owner</span>
        </a>
      </div>
    </div>

    <div class="data-card">
      <?php if (!empty($users)): ?>
        <div class="table-container">
          <table class="data-table">
            <thead>
              <tr>
                <th width="5%">#</th>
                <th width="30%">Owner</th>
                <th width="25%">Email</th>
                <th width="10%">Role</th>
                <th width="15%">Registered</th>
                <th width="15%">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $index => $user): ?>
                <tr>
                  <td class="user-index"><?= $index + 1 ?></td>
                  <td>
                    <div class="user-info">
                      <div class="user-avatar">
                        <img src="<?= ROOT ?>/<?= $user->image ?>" alt="Owner">
                      </div>
                      <div class="user-details">
                        <span class="user-name"><?= esc($user->firstname) . ' ' . esc($user->lastname) ?></span>
                      </div>
                    </div>
                  </td>
                  <td class="user-email"><?= esc($user->email) ?></td>
                  <td>
                    <?php
                    $roleClasses = [
                      'owner' => 'role-owner',
                      'landlord' => 'role-landlord',
                      'investor' => 'role-investor'
                    ];
                    $roleClass = isset($roleClasses[$user->role]) ? $roleClasses[$user->role] : 'role-default';
                    ?>
                    <span class="role-badge <?= $roleClass ?>"><?= esc($user->role) ?></span>
                  </td>
                  <td>
                    <?php if (!empty($user->date)): ?>
                      <div class="date-info">
                        <span class="date-value"><?= date('M d, Y', strtotime($user->date)) ?></span>
                      </div>
                    <?php else: ?>
                      <span class="no-date">Not set</span>
                    <?php endif; ?>
                  </td>
                  <td>
                    <div class="action-buttons">
                      <a href="<?= ROOT ?>/owners/edit/<?= $user->id ?>" class="btn-action edit" aria-label="Edit owner">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                        </svg>
                      </a>
                      <a href="<?= ROOT ?>/owners/delete/<?= $user->id ?>" class="btn-action delete"
                        aria-label="Delete owner" onclick="return confirm('Are you sure you want to delete this owner?')">
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
          <h3>No Owners Found</h3>
          <p>There are no property owners in the system yet</p>
          <a href="<?= ROOT ?>/owners/create" class="btn-create-empty">Create First Owner</a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<style>
  :root {
    --primary-color: #FF7A00;
    --primary-light: #FFF4EA;
    --primary-dark: #E05F00;
    --success-color: #34D399;
    --danger-color: #F87171;
    --gray-100: #F3F4F6;
    --gray-200: #E5E7EB;
    --gray-300: #D1D5DB;
    --gray-500: #6B7280;
    --gray-700: #374151;
    --gray-900: #111827;
    --card-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.04), 0 4px 6px -2px rgba(0, 0, 0, 0.02);
    --border-radius: 16px;
    --font-sans: system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
  }

  /* Base Styles */
  body {
    font-family: var(--font-sans);
    background-color: #F9FAFB;
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

  /* User Styling */
  .user-info {
    display: flex;
    align-items: center;
    gap: 0.875rem;
  }

  .user-avatar {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    overflow: hidden;
    background-color: var(--gray-100);
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 0 2px white, 0 0 0 4px var(--primary-light);
  }

  .user-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .user-name {
    font-weight: 600;
    color: var(--gray-900);
  }

  .user-email {
    color: var(--gray-500);
  }

  /* Badges */
  .role-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0.375rem 0.75rem;
    border-radius: 9999px;
    font-size: 0.75rem;
    font-weight: 500;
    text-transform: capitalize;
  }

  .role-owner {
    background-color: var(--primary-color);
    color: white;
  }

  .role-landlord {
    background-color: #FBBF24;
    color: #7C2D12;
  }

  .role-investor {
    background-color: #60A5FA;
    color: white;
  }

  .role-default {
    background-color: var(--gray-200);
    color: var(--gray-700);
  }

  /* Date */
  .date-info {
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .date-value {
    color: var(--gray-500);
    font-size: 0.875rem;
  }

  .no-date {
    color: var(--gray-300);
    font-style: italic;
    font-size: 0.875rem;
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

  .action-buttons {
    display: flex;
    gap: 0.5rem;
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
    border: none;
    text-decoration: none;
  }

  .btn-action.edit:hover {
    background-color: #EBEBFF;
    color: #4F46E5;
  }

  .btn-action.delete:hover {
    background-color: #FEECEC;
    color: var(--danger-color);
  }

  /* Empty State */
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
  }
</style>

<?php
include __DIR__ . '/../partials/footer.php';
?>