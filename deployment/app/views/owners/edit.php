<?php include __DIR__ . '/../partials/adminheader.php'; ?>

<style>
  /* Custom Styles for Owner Edit Form - Orange Theme */
  .owner-edit-container {
    max-width: 700px;
    margin: 2rem auto;
    margin-top: 100px;
  }

  .owner-edit-card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  }

  .owner-header {
    background: linear-gradient(135deg, #ff7b00, #ff5722);
    padding: 1.5rem;
    color: white;
  }

  .owner-header h2 {
    margin: 0;
    font-weight: 600;
    font-size: 1.6rem;
  }

  .section-heading {
    color: #ff5722;
    border-bottom: 2px solid #ffe0d0;
    padding-bottom: 0.7rem;
    margin-bottom: 1.5rem;
    font-weight: 600;
  }

  .form-section {
    margin-bottom: 2rem;
  }

  .form-label {
    font-weight: 500;
    color: #444;
    margin-bottom: 0.5rem;
  }

  .form-control {
    border-radius: 6px;
    border: 1px solid #d1d1d1;
    padding: 0.625rem 0.75rem;
    transition: all 0.3s ease;
  }

  .form-control:focus {
    border-color: #ff7b00;
    box-shadow: 0 0 0 0.25rem rgba(255, 123, 0, 0.15);
  }

  .form-text {
    color: #5f6368;
    font-size: 0.85rem;
    margin-top: 0.5rem;
  }

  .card-body {
    padding: 2rem;
  }

  .btn-primary {
    background-color: #ff5722;
    border-color: #ff5722;
    padding: 0.625rem 1.5rem;
    border-radius: 30px;
    font-weight: 500;
    transition: all 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #e64a19;
    border-color: #e64a19;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(255, 87, 34, 0.3);
  }

  .btn-outline-secondary {
    color: #5f6368;
    border-color: #d1d1d1;
    padding: 0.625rem 1.5rem;
    border-radius: 30px;
    font-weight: 500;
    transition: all 0.3s ease;
  }

  .btn-outline-secondary:hover {
    background-color: #f5f5f5;
    color: #333;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
  }

  .required-indicator {
    color: #ff3d00;
    margin-left: 4px;
  }

  .input-icon-wrapper {
    position: relative;
  }

  .input-icon {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 12px;
    color: #757575;
  }

  .icon-input {
    padding-left: 40px;
  }

  .card-footer {
    background-color: #fff9f5;
    border-top: 1px solid #ffe0d0;
    padding: 1.25rem 2rem;
  }
</style>

<div class="container owner-edit-container">
  <div class="card owner-edit-card">
    <div class="owner-header">
      <h2><i class="bi bi-person-badge-fill"></i> Edit Owner</h2>
    </div>
    <div class="card-body">
      <form method="post">

        <!-- Personal Information Section -->
        <div class="form-section">
          <h5 class="section-heading">Personal Information</h5>

          <div class="row mb-3">
            <div class="col-md-6 mb-3 mb-md-0">
              <label for="firstname" class="form-label">First Name <span class="required-indicator">*</span></label>
              <div class="input-icon-wrapper">
                <i class="bi bi-person input-icon"></i>
                <input type="text" class="form-control icon-input" name="firstname" id="firstname"
                  value="<?= esc($user->firstname) ?>" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="lastname" class="form-label">Last Name <span class="required-indicator">*</span></label>
              <div class="input-icon-wrapper">
                <i class="bi bi-person input-icon"></i>
                <input type="text" class="form-control icon-input" name="lastname" id="lastname"
                  value="<?= esc($user->lastname) ?>" required>
              </div>
            </div>
          </div>

          <div class="mb-4">
            <label for="email" class="form-label">Email Address <span class="required-indicator">*</span></label>
            <div class="input-icon-wrapper">
              <i class="bi bi-envelope input-icon"></i>
              <input type="email" class="form-control icon-input" name="email" id="email"
                value="<?= esc($user->email) ?>" required>
              <div class="form-text">This email will be used for account notifications and communications.</div>
            </div>
          </div>
        </div>

        <!-- Additional Fields (Optional) -->
        <div class="form-section">
          <h5 class="section-heading">Contact Information</h5>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <div class="input-icon-wrapper">
              <i class="bi bi-telephone input-icon"></i>
              <input type="tel" class="form-control icon-input" name="phone" id="phone"
                value="<?= isset($user->phone) ? esc($user->phone) : '' ?>">
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class="card-footer">
      <div class="d-flex justify-content-between">
        <a href="<?= ROOT ?>/owners" class="btn btn-outline-secondary">
          <i class="bi bi-arrow-left"></i> Back to Owners
        </a>
        <button type="submit" form="owner-edit-form" class="btn btn-primary">
          <i class="bi bi-check2-circle"></i> Save Changes
        </button>
      </div>
    </div>
  </div>
</div>

<script>
  // Add form ID for the footer button to work
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('form').id = 'owner-edit-form';
  });
</script>

<?php include __DIR__ . '/../partials/footer.php'; ?>