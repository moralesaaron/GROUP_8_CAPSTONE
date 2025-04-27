<?php include __DIR__ . '/../partials/ownerheader.php'; ?>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <!-- Form Header -->
      <div class="d-flex align-items-center mb-4">
        <div class="feature-icon bg-orange-soft rounded-circle me-3">
          <i class="bi bi-building-add text-orange"></i>
        </div>
        <div>
          <h2 class="fw-bold mb-0">Add New Dormss</h2>
          <p class="text-muted mb-0">Enter your dorm details to create a new listing</p>
        </div>
      </div>

      <!-- Alerts -->
      <?php if (!empty($errors)): ?>
        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
          <div class="d-flex">
            <div class="me-3">
              <i class="bi bi-exclamation-circle-fill text-danger fs-4"></i>
            </div>
            <div>
              <h6 class="alert-heading fw-bold mb-1">Please correct the following errors:</h6>
              <ul class="mb-0 ps-3">
                <?php foreach ($errors as $error): ?>
                  <li><?= $error ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>

      <!-- Main Form Card -->
      <div class="card border-0 shadow-sm overflow-hidden">
        <div class="card-header bg-light border-0 py-3">
          <div class="d-flex align-items-center">
            <i class="bi bi-pencil-square text-orange me-2"></i>
            <span class="fw-medium">Dorm Information</span>
          </div>
        </div>
        <div class="card-body p-4">
          <form method="post" enctype="multipart/form-data">
            <!-- Basic Information -->
            <div class="form-section mb-4">
              <h6 class="section-label text-uppercase text-muted fw-semibold mb-3">
                <i class="bi bi-info-circle me-2"></i>Basic Information
              </h6>

              <div class="row mb-3">
                <label for="name" class="col-sm-3 col-form-label fw-medium">Dorm Name <span
                    class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter dorm name" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="description" class="col-sm-3 col-form-label fw-medium">Description <span
                    class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <textarea class="form-control" name="description" id="description" rows="4"
                    placeholder="Provide details about your dorm" required></textarea>
                  <div class="form-text">Include amenities, rules, and any special features of your dorm.</div>
                </div>
              </div>

              <div class="row mb-3">
                <label for="image" class="col-sm-3 col-form-label fw-medium">Dorm Image</label>
                <div class="col-sm-9">
                  <input type="file" class="form-control" name="image" id="image">
                  <div class="form-text">Upload a high-quality image (recommended size: 1200×800px).</div>
                </div>
              </div>
            </div>

            <!-- Location Information -->
            <div class="form-section mb-4">
              <h6 class="section-label text-uppercase text-muted fw-semibold mb-3">
                <i class="bi bi-geo-alt me-2"></i>Location Information
              </h6>

              <div class="row mb-3">
                <label for="address" class="col-sm-3 col-form-label fw-medium">Address <span
                    class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="address" id="address" placeholder="Street address"
                    required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="city" class="col-sm-3 col-form-label fw-medium">City <span
                    class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="city" id="city" placeholder="City" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="province" class="col-sm-3 col-form-label fw-medium">Province <span
                    class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="province" id="province" placeholder="Province" required>
                </div>
              </div>
            </div>

            <!-- Room Information -->
            <div class="form-section mb-4">
              <h6 class="section-label text-uppercase text-muted fw-semibold mb-3">
                <i class="bi bi-door-open me-2"></i>Room Information
              </h6>

              <div class="row mb-3">
                <label for="total_rooms" class="col-sm-3 col-form-label fw-medium">Total Rooms <span
                    class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" name="total_rooms" id="total_rooms" min="1"
                    placeholder="Total number of rooms" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="available_rooms" class="col-sm-3 col-form-label fw-medium">Available Rooms <span
                    class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" name="available_rooms" id="available_rooms" min="0"
                    placeholder="Available rooms" required>
                  <div class="form-text">Must be less than or equal to total rooms.</div>
                </div>
              </div>
            </div>

            <!-- Status -->
            <div class="form-section">
              <h6 class="section-label text-uppercase text-muted fw-semibold mb-3">
                <i class="bi bi-toggles me-2"></i>Status Information
              </h6>

              <div class="row mb-3">
                <label for="status" class="col-sm-3 col-form-label fw-medium">Listing Status <span
                    class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <select class="form-select" name="status" id="status" required>
                    <option value="">-- Select Status --</option>
                    <option value="active">Active (Visible to Renters)</option>
                    <option value="inactive">Inactive (Hidden from Renters)</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="border-top mt-4 pt-4">
              <div class="row">
                <div class="col-sm-9 offset-sm-3">
                  <div class="d-flex gap-2">
                    <a href="<?= ROOT ?>/mydorms" class="btn btn-light px-4">
                      <i class="bi bi-arrow-left me-2"></i>Cancel
                    </a>
                    <button type="submit" class="btn btn-orange px-4 py-2">
                      <i class="bi bi-plus-circle me-2"></i>Create Dorm
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<!-- Add custom CSS for orange theme and styling -->
<style>
  /* Typography */
  body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
  }

  /* Orange Theme Colors */
  :root {
    --orange-primary: #FF7A00;
    --orange-secondary: #FF9A3D;
    --orange-light: #FFF0E0;
  }

  /* Custom Button Styles */
  .btn-orange {
    background-color: var(--orange-primary);
    color: white;
    border: none;
    font-weight: 500;
    border-radius: 6px;
    transition: all 0.3s ease;
  }

  .btn-orange:hover,
  .btn-orange:focus {
    background-color: var(--orange-secondary);
    color: white;
    box-shadow: 0 5px 15px rgba(255, 122, 0, 0.15);
  }

  /* Card Styling */
  .card {
    border-radius: 10px;
  }

  /* Form Styling */
  .form-control,
  .form-select {
    height: 42px;
    border-color: #e0e0e0;
    font-size: 0.95rem;
  }

  textarea.form-control {
    height: auto;
  }

  .form-control:focus,
  .form-select:focus {
    border-color: var(--orange-primary);
    box-shadow: 0 0 0 0.25rem rgba(255, 122, 0, 0.15);
  }

  .col-form-label {
    padding-top: calc(0.5rem + 1px);
    padding-bottom: calc(0.5rem + 1px);
    line-height: 1.5;
  }

  .form-text {
    font-size: 0.8rem;
    color: #6c757d;
    margin-top: 0.35rem;
  }

  /* Section Label Styling */
  .section-label {
    font-size: 0.8rem;
    letter-spacing: 0.05em;
  }

  /* Form Section */
  .form-section {
    position: relative;
    padding-bottom: 1.5rem;
  }

  .form-section:not(:last-child)::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 1px;
    background-color: rgba(0, 0, 0, 0.05);
  }

  /* Feature Icon */
  .feature-icon {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
  }

  /* Background Colors */
  .bg-orange-soft {
    background-color: var(--orange-light);
  }

  /* Text Colors */
  .text-orange {
    color: var(--orange-primary) !important;
  }

  /* Responsive Adjustments */
  @media (max-width: 767.98px) {
    .col-form-label {
      padding-bottom: 0;
    }
  }
</style>

<script>
  // Validate that available rooms <= total rooms
  document.addEventListener('DOMContentLoaded', function () {
    const totalRoomsInput = document.getElementById('total_rooms');
    const availableRoomsInput = document.getElementById('available_rooms');

    function validateRooms() {
      const totalRooms = parseInt(totalRoomsInput.value) || 0;
      const availableRooms = parseInt(availableRoomsInput.value) || 0;

      if (availableRooms > totalRooms) {
        availableRoomsInput.setCustomValidity('Available rooms cannot exceed total rooms');
      } else {
        availableRoomsInput.setCustomValidity('');
      }
    }

    totalRoomsInput.addEventListener('input', validateRooms);
    availableRoomsInput.addEventListener('input', validateRooms);
  });
</script>

<?php include __DIR__ . '/../partials/footer.php'; ?>