<?php include __DIR__ . '/../partials/ownerheader.php'; ?>

<style>
  /* Custom Styles for Dorm Edit Form */
  .dorm-edit-container {
    max-width: 800px;
    margin: 2rem auto;
  }

  .dorm-edit-card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  }

  .dorm-header {
    background: linear-gradient(135deg, #1a73e8, #0d47a1);
    padding: 1.5rem;
    color: white;
  }

  .dorm-header h2 {
    margin: 0;
    font-weight: 600;
    font-size: 1.6rem;
  }

  .section-heading {
    color: #1a73e8;
    border-bottom: 2px solid #e0e0e0;
    padding-bottom: 0.7rem;
    margin-bottom: 1.5rem;
    font-weight: 600;
  }

  .form-section {
    margin-bottom: 2.5rem;
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
    border-color: #1a73e8;
    box-shadow: 0 0 0 0.25rem rgba(26, 115, 232, 0.15);
  }

  .form-text {
    color: #5f6368;
    font-size: 0.85rem;
    margin-top: 0.5rem;
  }

  .form-select {
    border-radius: 6px;
    border: 1px solid #d1d1d1;
    padding: 0.625rem 0.75rem;
    height: auto;
  }

  .form-select:focus {
    border-color: #1a73e8;
    box-shadow: 0 0 0 0.25rem rgba(26, 115, 232, 0.15);
  }

  .card-body {
    padding: 2rem;
  }

  .btn-primary {
    background-color: #1a73e8;
    border-color: #1a73e8;
    padding: 0.625rem 1.5rem;
    border-radius: 30px;
    font-weight: 500;
    transition: all 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #0d47a1;
    border-color: #0d47a1;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
    background-color: #f1f3f4;
    color: #202124;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
  }

  .required-indicator {
    color: #d93025;
    margin-left: 4px;
  }

  .status-active {
    background-color: #e6f4ea;
    color: #137333;
    padding: 0.2rem 0.75rem;
    border-radius: 16px;
    font-size: 0.85rem;
    font-weight: 500;
    display: inline-block;
    margin-left: 8px;
  }

  .status-inactive {
    background-color: #fce8e6;
    color: #c5221f;
    padding: 0.2rem 0.75rem;
    border-radius: 16px;
    font-size: 0.85rem;
    font-weight: 500;
    display: inline-block;
    margin-left: 8px;
  }
</style>

<div class="container dorm-edit-container">
  <div class="card dorm-edit-card">
    <div class="dorm-header">
      <h2><i class="bi bi-building-fill"></i> Edit Dorm Details</h2>
    </div>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data">

        <!-- Basic Information Section -->
        <div class="form-section">
          <h5 class="section-heading">Basic Information</h5>

          <div class="mb-3">
            <label for="name" class="form-label">Dorm Name <span class="required-indicator">*</span></label>
            <input type="text" class="form-control" name="name" id="name" value="<?= esc($dorm->name) ?>" required>
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description <span class="required-indicator">*</span></label>
            <textarea class="form-control" name="description" id="description" rows="4"
              required><?= esc($dorm->description) ?></textarea>
            <div class="form-text">Provide a detailed description of your dormitory's features and amenities.</div>
          </div>
        </div>

        <!-- Location Section -->
        <div class="form-section">
          <h5 class="section-heading">Location</h5>

          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="address" class="form-label">Street Address <span class="required-indicator">*</span></label>
              <input type="text" class="form-control" name="address" id="address" value="<?= esc($dorm->address) ?>"
                required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="city" class="form-label">City <span class="required-indicator">*</span></label>
              <input type="text" class="form-control" name="city" id="city" value="<?= esc($dorm->city) ?>" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="province" class="form-label">Province <span class="required-indicator">*</span></label>
              <input type="text" class="form-control" name="province" id="province" value="<?= esc($dorm->province) ?>"
                required>
            </div>
          </div>
        </div>

        <!-- Room Information Section -->
        <div class="form-section">
          <h5 class="section-heading">Room Information</h5>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="total_rooms" class="form-label">Total Rooms <span class="required-indicator">*</span></label>
              <input type="number" min="1" class="form-control" name="total_rooms" id="total_rooms"
                value="<?= esc($dorm->total_rooms) ?>" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="available_rooms" class="form-label">Available Rooms <span
                  class="required-indicator">*</span></label>
              <input type="number" min="0" class="form-control" name="available_rooms" id="available_rooms"
                value="<?= esc($dorm->available_rooms) ?>" required>
              <div class="form-text">Must not exceed total rooms.</div>
            </div>
          </div>
        </div>

        <!-- Status Section -->
        <div class="form-section">
          <h5 class="section-heading">Status</h5>

          <div class="mb-3">
            <label for="status" class="form-label">Listing Status <span class="required-indicator">*</span></label>
            <div class="d-flex align-items-center mt-2">
              <div class="form-check me-4">
                <input class="form-check-input" type="radio" name="status" id="status_active" value="active"
                  <?= $dorm->status === 'active' ? 'checked' : '' ?>>
                <label class="form-check-label" for="status_active">
                  Active <span class="status-active">Visible</span>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="status_inactive" value="inactive"
                  <?= $dorm->status === 'inactive' ? 'checked' : '' ?>>
                <label class="form-check-label" for="status_inactive">
                  Inactive <span class="status-inactive">Hidden</span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Form Actions -->
        <div class="d-flex justify-content-between mt-4 pt-3 border-top">
          <a href="<?= ROOT ?>/mydorms" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Back to My Dorms
          </a>
          <button type="submit" class="btn btn-primary">
            <i class="bi bi-check2-circle"></i> Save Changes
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>