<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete User Confirmation</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    :root {
      --danger: #dc3545;
      --danger-light: #f8d7da;
      --danger-dark: #b02a37;
      --gray-100: #f8f9fa;
      --gray-200: #e9ecef;
      --gray-300: #dee2e6;
      --gray-600: #6c757d;
      --gray-700: #495057;
      --gray-800: #343a40;
      --gray-900: #212529;
    }

    body {
      background-color: #f5f7fb;
    }

    .confirmation-container {
      max-width: 700px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 16px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
      padding: 2.5rem;
    }

    .confirmation-header {
      display: flex;
      align-items: center;
      margin-bottom: 2rem;
      padding-bottom: 1.5rem;
      border-bottom: 1px solid var(--gray-200);
    }

    .confirmation-icon {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 60px;
      height: 60px;
      background-color: var(--danger-light);
      color: var(--danger);
      border-radius: 12px;
      margin-right: 1.25rem;
      flex-shrink: 0;
    }

    .confirmation-title {
      font-weight: 700;
      color: var(--danger);
      font-size: 1.75rem;
      margin-bottom: 0;
    }

    .confirmation-subtitle {
      color: var(--gray-600);
      margin-top: 0.25rem;
      font-size: 1rem;
    }

    .alert-warning {
      background-color: #fff8e6;
      border-left: 4px solid #ffb700;
      border-radius: 8px;
      padding: 1.25rem;
      margin-bottom: 1.5rem;
    }

    .alert-warning h5 {
      color: #b37400;
      font-weight: 600;
      display: flex;
      align-items: center;
    }

    .alert-warning h5 i {
      margin-right: 0.5rem;
    }

    .user-profile {
      background-color: var(--gray-100);
      border-radius: 12px;
      padding: 1.5rem;
      margin-bottom: 1.5rem;
      display: flex;
      align-items: center;
    }

    .user-avatar {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      background-color: white;
      border: 1px solid var(--gray-300);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 1.25rem;
      color: var(--gray-500);
      font-size: 1.75rem;
      flex-shrink: 0;
      overflow: hidden;
    }

    .user-avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .user-info h4 {
      font-weight: 600;
      color: var(--gray-800);
      margin-bottom: 0.25rem;
      font-size: 1.25rem;
    }

    .user-info .user-email {
      color: var(--gray-600);
      font-size: 0.95rem;
      display: flex;
      align-items: center;
    }

    .user-info .user-email i {
      margin-right: 0.5rem;
      font-size: 0.9rem;
    }

    .confirmation-actions {
      display: flex;
      justify-content: flex-end;
      gap: 1rem;
      margin-top: 2rem;
      padding-top: 1.5rem;
      border-top: 1px solid var(--gray-200);
    }

    .btn {
      border-radius: 8px;
      padding: 0.75rem 1.5rem;
      font-weight: 500;
      transition: all 0.2s;
    }

    .btn-danger {
      background-color: var(--danger);
      border-color: var(--danger);
    }

    .btn-danger:hover {
      background-color: var(--danger-dark);
      border-color: var(--danger-dark);
    }

    .btn-danger:disabled {
      background-color: var(--danger);
      border-color: var(--danger);
      opacity: 0.65;
    }

    .btn-secondary {
      background-color: var(--gray-200);
      border-color: var(--gray-200);
      color: var(--gray-700);
    }

    .btn-secondary:hover {
      background-color: var(--gray-300);
      border-color: var(--gray-300);
      color: var(--gray-800);
    }

    .delete-btn {
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .back-link {
      display: inline-flex;
      align-items: center;
      margin-bottom: 1.5rem;
      color: var(--gray-700);
      text-decoration: none;
      font-weight: 500;
      transition: all 0.2s;
    }

    .back-link:hover {
      color: var(--danger);
    }

    .back-link i {
      margin-right: 0.5rem;
    }

    .confirmation-checkbox {
      margin-top: 1.5rem;
    }

    .form-check-input:checked {
      background-color: var(--danger);
      border-color: var(--danger);
    }

    .form-check-label {
      font-weight: 500;
    }

    .consequences-list {
      margin-top: 0.75rem;
      margin-bottom: 0;
    }

    .consequences-list li {
      margin-bottom: 0.5rem;
      position: relative;
      padding-left: 1.5rem;
    }

    .consequences-list li:before {
      content: "•";
      color: var(--danger);
      font-weight: bold;
      position: absolute;
      left: 0;
    }
  </style>
</head>

<body>

  <?php include __DIR__ . '/../partials/adminheader.php'; ?>

  <div class="container my-5">
    <a href="<?= ROOT ?>/users" class="back-link">
      <i class="fas fa-arrow-left"></i> Back to Users
    </a>

    <div class="confirmation-container">
      <div class="confirmation-header">
        <div class="confirmation-icon">
          <i class="fas fa-user-slash fa-lg"></i>
        </div>
        <div>
          <h2 class="confirmation-title">Delete User</h2>
          <p class="confirmation-subtitle">Permanently remove this user account and all associated data</p>
        </div>
      </div>

      <div class="alert alert-warning">
        <h5><i class="fas fa-exclamation-triangle"></i> Important</h5>
        <p class="mb-0">This action cannot be undone. Once deleted, all data associated with this user will be
          permanently removed from the system.</p>
      </div>

      <div class="user-profile">
        <div class="user-avatar">
          <?php if (!empty($user->image)): ?>
            <img src="<?= ROOT ?>/assets/images/<?= $user->image ?>"
              alt="<?= esc($user->firstname . ' ' . $user->lastname) ?>">
          <?php else: ?>
            <i class="fas fa-user"></i>
          <?php endif; ?>
        </div>
        <div class="user-info">
          <h4><?= esc($user->firstname . ' ' . $user->lastname) ?></h4>
          <div class="user-email">
            <i class="fas fa-envelope"></i>
            <?= esc($user->email ?? 'No email available') ?>
          </div>
        </div>
      </div>

      <div>
        <h5 class="mb-3 text-danger">What will be deleted:</h5>
        <ul class="consequences-list">
          <li>User's personal account and profile information</li>
          <li>Access permissions to the platform</li>
          <li>User activity history and preferences</li>
          <li>All related data associated with this user</li>
        </ul>
      </div>

      <form method="post">
        <div class="confirmation-checkbox">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="confirmDelete" required>
            <label class="form-check-label" for="confirmDelete">
              I confirm that I want to permanently delete this user account and understand this action cannot be
              reversed
            </label>
          </div>
        </div>

        <div class="confirmation-actions">
          <a href="<?= ROOT ?>/users" class="btn btn-secondary">
            <i class="fas fa-times me-1"></i> Cancel
          </a>
          <button type="submit" class="btn btn-danger delete-btn" id="deleteButton" disabled>
            <i class="fas fa-user-slash"></i> Delete User
          </button>
        </div>
      </form>
    </div>
  </div>

  <?php include __DIR__ . '/../partials/footer.php'; ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const confirmCheckbox = document.getElementById('confirmDelete');
      const deleteButton = document.getElementById('deleteButton');

      confirmCheckbox.addEventListener('change', function () {
        deleteButton.disabled = !this.checked;
      });
    });
  </script>

</body>

</html>