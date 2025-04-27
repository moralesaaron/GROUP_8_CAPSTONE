<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Dorm Confirmation</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    :root {
      --danger: #dc3545;
      --danger-light: #f8d7da;
      --danger-dark: #b02a37;
      --gray-100: #f8f9fa;
      --gray-200: #e9ecef;
      --gray-700: #495057;
    }

    body {
      background-color: #f5f7fb;
    }

    .delete-container {
      max-width: 650px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
      padding: 2rem;
    }

    .delete-header {
      display: flex;
      align-items: center;
      margin-bottom: 1.5rem;
      padding-bottom: 1.5rem;
      border-bottom: 1px solid var(--gray-200);
    }

    .delete-icon {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      background-color: var(--danger-light);
      color: var(--danger);
      border-radius: 50%;
      margin-right: 1rem;
      flex-shrink: 0;
    }

    .delete-title {
      font-weight: 700;
      color: var(--danger);
      font-size: 1.75rem;
      margin-bottom: 0;
    }

    .delete-warning {
      background-color: var(--gray-100);
      border-radius: 12px;
      padding: 1.5rem;
      margin-bottom: 2rem;
    }

    .warning-header {
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
      font-weight: 600;
      color: var(--gray-700);
    }

    .warning-header i {
      color: var(--danger);
      margin-right: 0.75rem;
    }

    .dorm-name {
      font-size: 1.2rem;
      font-weight: 600;
      color: var(--gray-700);
      padding: 0.5rem 1rem;
      background-color: white;
      border: 1px solid var(--gray-200);
      border-radius: 8px;
      margin: 1rem 0;
      text-align: center;
    }

    .delete-actions {
      display: flex;
      justify-content: flex-end;
      gap: 1rem;
      margin-top: 2rem;
    }

    .btn {
      border-radius: 10px;
      padding: 0.75rem 1.5rem;
      font-weight: 600;
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

    .btn-secondary {
      background-color: var(--gray-200);
      border-color: var(--gray-200);
      color: var(--gray-700);
    }

    .btn-secondary:hover {
      background-color: var(--gray-200);
      border-color: var(--gray-200);
      opacity: 0.9;
    }

    .delete-btn {
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .back-link {
      display: block;
      margin-bottom: 1.5rem;
      color: var(--gray-700);
      text-decoration: none;
      font-weight: 500;
    }

    .back-link:hover {
      color: var(--danger);
    }
  </style>
</head>

<body>

  <?php include __DIR__ . '/../partials/ownerheader.php'; ?>

  <div class="container my-5">
    <a href="<?= ROOT ?>/mydorms" class="back-link">
      <i class="fas fa-arrow-left me-2"></i> Back to My Dorms
    </a>

    <div class="delete-container">
      <div class="delete-header">
        <div class="delete-icon">
          <i class="fas fa-trash-alt fa-lg"></i>
        </div>
        <h2 class="delete-title">Delete Dorm</h2>
      </div>

      <div class="delete-warning">
        <div class="warning-header">
          <i class="fas fa-exclamation-triangle"></i>
          <span>Warning: This action cannot be undone</span>
        </div>
        <p>You are about to permanently delete the following dorm. This will remove all associated data including:</p>
        <ul>
          <li>Room information</li>
          <li>Amenity details</li>
          <li>Active bookings (if any)</li>
          <li>Photos and descriptions</li>
        </ul>
      </div>

      <p class="text-center mb-4">Are you sure you want to delete:</p>

      <div class="dorm-name">
        <?= esc($dorm->name) ?>
      </div>

      <form method="post" class="mt-4">
        <div class="form-check mb-4">
          <input class="form-check-input" type="checkbox" id="confirmDelete" required>
          <label class="form-check-label" for="confirmDelete">
            I understand that this action cannot be undone
          </label>
        </div>

        <div class="delete-actions">
          <a href="<?= ROOT ?>/mydorms" class="btn btn-secondary">
            <i class="fas fa-times me-2"></i> Cancel
          </a>
          <button type="submit" class="btn btn-danger delete-btn" id="deleteButton" disabled>
            <i class="fas fa-trash-alt"></i> Delete Permanently
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