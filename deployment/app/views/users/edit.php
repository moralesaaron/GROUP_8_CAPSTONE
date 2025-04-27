<?php include __DIR__ . '/../partials/adminheader.php'; ?>

<style>
  /* Custom Styles for User Edit Form - Orange Theme */
  .user-edit-container {
    max-width: 700px;
    margin: 2rem auto;
  }
  
  .user-edit-card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  }
  
  .user-header {
    background: linear-gradient(135deg, #ff7b00, #ff5722);
    padding: 1.5rem;
    color: white;
  }
  
  .user-header h2 {
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

<div class="container user-edit-container">
  <div class="card user-edit-card">
    <div class="user-header">
      <h2><i class="bi bi-person-fill"></i> Edit User</h2>
    </div>
    <div class="card-body">
      <form method="post" id="user-edit-form">
        
        <!-- Personal Information Section -->
        <div class="form-section">
          <h5 class="section-heading">Personal Information</h5>
          
          <div class="row mb-3">
            <div class="col-md-6 mb-3 mb-md-0">
              <label for="firstname" class="form-label">First Name <span class="required-indicator">*</span></label>
              <div class="input-icon-wrapper">
                <i class="bi bi-person input-icon"></i>
                <input type="text" class="form-control icon-input" name="firstname" id="firstname" value="<?= esc($user->firstname) ?>" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="lastname" class="form-label">Last Name <span class="required-indicator">*</span></label>
              <div class="input-icon-wrapper">
                <i class="bi bi-person input-icon"></i>
                <input type="text" class="form-control icon-input" name="lastname" id="lastname" value="<?= esc($user->lastname) ?>" required>
              </div>
            </div>
          </div>
          
          <div class="mb-3">
            <label for="email" class="form-label">Email Address <span class="required-indicator">*</span></label>
            <div class="input-icon-wrapper">
              <i class="bi bi-envelope input-icon"></i>
              <input type="email" class="form-control icon-input" name="email" id="email" value="<?= esc($user->email) ?>" required>
              <div class="form-text">Used for login and account notifications.</div>
            </div>
          </div>
        </div>
        
        <!-- Account Settings Section -->
        <div class="form-section">
          <h5 class="section-heading">Account Settings</h5>
          
          <div class="mb-3">
            <label class="form-label">Account Status</label>
            <div class="d-flex align-items-center mt-2">
              <div class="form-check me-4">
                <input class="form-check-input" type="radio" name="status" id="status_active" value="active" <?= (!isset($user->status) || $user->status === 'active') ? 'checked' : '' ?>>
                <label class="form-check-label" for="status_active">
                  Active <span class="badge bg-success">Enabled</span>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="status_inactive" value="inactive" <?= (isset($user->status) && $user->status === 'inactive') ? 'checked' : '' ?>>
                <label class="form-check-label" for="status_inactive">
                  Inactive <span class="badge bg-danger">Disabled</span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    
    <div class="card-footer">
      <div class="d-flex justify-content-between">
        <a href="<?= ROOT ?>/users" class="btn btn-outline-secondary">
          <i class="bi bi-arrow-left"></i> Back to Users
        </a>
        <button type="submit" form="user-edit-form" class="btn btn-primary">
          <i class="bi bi-check2-circle"></i> Save Changes
        </button>
      </div>
    </div>
  </div>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>