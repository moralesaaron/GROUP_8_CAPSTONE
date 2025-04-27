<?php include __DIR__ . '/../partials/ownerheader.php'; ?>

<div class="container my-5">
    <!-- Professional header with subtle orange accent -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0 fw-bold" style="color: #333; border-left: 4px solid #FF8C00; padding-left: 12px;">
            Add New Room
        </h2>
        <a href="<?= ROOT ?>/myrooms/index/<?= $dorm_id ?>" class="btn btn-sm btn-outline-secondary" style="padding: 8px 16px; font-weight: 500;">
            <i class="fas fa-arrow-left me-1"></i> Back to Rooms
        </a>
    </div>

    <?php
    $available_amenities = [
      'wifi' => 'WiFi',
      'pool' => 'Pool',
      'aircon' => 'Air Conditioning',
      'tv' => 'TV',
      'kitchen' => 'Kitchen'
    ];
    ?>

    <?php if (!empty($errors)): ?>
          <div class="alert alert-danger border-0 shadow-sm">
              <div class="d-flex">
                  <div class="me-3">
                      <i class="fas fa-exclamation-circle" style="color: #dc3545;"></i>
                  </div>
                  <div>
                      <?php foreach ($errors as $error): ?>
                            <div class="mb-1"><?= $error ?></div>
                      <?php endforeach; ?>
                  </div>
              </div>
          </div>
    <?php endif; ?>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="dorm_id" value="<?= $dorm_id ?>">
                
                <div class="row g-3">
                    <!-- Room Basic Details -->
                    <div class="col-12">
                        <h5 class="mb-3 text-secondary fw-bold" style="font-size: 0.9rem; letter-spacing: 0.5px; text-transform: uppercase; color: #666;">
                            Basic Information
                        </h5>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="room_number" class="form-label text-secondary fw-semibold">Room Number</label>
                            <input type="text" class="form-control form-control-lg border" style="padding: 12px 16px; background-color: #f9f9f9;" name="room_number" id="room_number" value="<?= set_value('room_number') ?>" required>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="room_name" class="form-label text-secondary fw-semibold">Room Name</label>
                            <input type="text" class="form-control form-control-lg border" style="padding: 12px 16px; background-color: #f9f9f9;" name="room_name" id="room_name" value="<?= set_value('room_name') ?>" required>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="room_type" class="form-label text-secondary fw-semibold">Room Type</label>
                            <input type="text" class="form-control form-control-lg border" style="padding: 12px 16px; background-color: #f9f9f9;" name="room_type" id="room_type" value="<?= set_value('room_type') ?>" required>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="price" class="form-label text-secondary fw-semibold">Price (₱)</label>
                            <div class="input-group">
                                <span class="input-group-text" style="background-color: #f9f9f9; border-right: none;">₱</span>
                                <input type="number" class="form-control form-control-lg border" style="padding: 12px 16px; background-color: #f9f9f9; border-left: none;" step="0.01" name="price" id="price" value="<?= set_value('price') ?>" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="capacity" class="form-label text-secondary fw-semibold">Capacity</label>
                            <input type="number" class="form-control form-control-lg border" style="padding: 12px 16px; background-color: #f9f9f9;" name="capacity" id="capacity" value="<?= set_value('capacity') ?>" required>
                        </div>
                    </div>
                    
                    <input type="hidden" name="location" value="<?= $dorm->city . ', ' . $dorm->province ?>" readonly>
                    
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="description" class="form-label text-secondary fw-semibold">Description</label>
                            <textarea class="form-control border" style="padding: 12px 16px; background-color: #f9f9f9; min-height: 120px;" name="description" id="description" rows="3"><?= set_value('description') ?></textarea>
                        </div>
                    </div>
                    
                    <!-- Room Settings -->
                    <div class="col-12 mt-4">
                        <h5 class="mb-3 text-secondary fw-bold" style="font-size: 0.9rem; letter-spacing: 0.5px; text-transform: uppercase; color: #666;">
                            Room Settings
                        </h5>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="status" class="form-label text-secondary fw-semibold">Status</label>
                            <select class="form-select form-select-lg border" style="padding: 12px 16px; background-color: #f9f9f9;" name="status" id="status" required>
                                <option value="">-- Select Status --</option>
                                <option value="available" <?= set_select('status', 'available') ?>>Available</option>
                                <option value="unavailable" <?= set_select('status', 'unavailable') ?>>Unavailable</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="visibility" class="form-label text-secondary fw-semibold">Visibility</label>
                            <select class="form-select form-select-lg border" style="padding: 12px 16px; background-color: #f9f9f9;" name="visibility" id="visibility" required>
                                <option value="">-- Select Visibility --</option>
                                <option value="public" <?= set_select('visibility', 'public') ?>>Public</option>
                                <option value="private" <?= set_select('visibility', 'private') ?>>Private</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Amenities -->
                    <div class="col-12 mt-4">
                        <h5 class="mb-3 text-secondary fw-bold" style="font-size: 0.9rem; letter-spacing: 0.5px; text-transform: uppercase; color: #666;">
                            Room Amenities
                        </h5>
                        
                        <div class="card border" style="background-color: #f9f9f9;">
                            <div class="card-body">
                                <div class="row g-3">
                                    <?php foreach ($available_amenities as $value => $label): ?>
                                          <div class="col-md-4 col-sm-6">
                                              <div class="form-check">
                                                  <input 
                                                      class="form-check-input" 
                                                      type="checkbox" 
                                                      name="amenities[]" 
                                                      id="amenity_<?= $value ?>" 
                                                      value="<?= $value ?>"
                                                      <?= (isset($_POST['amenities']) && in_array($value, $_POST['amenities'])) ? 'checked' : '' ?>
                                                  >
                                                  <label class="form-check-label" for="amenity_<?= $value ?>">
                                                      <?php
                                                      $icon = '';
                                                      switch ($value) {
                                                        case 'wifi':
                                                          $icon = 'fas fa-wifi';
                                                          break;
                                                        case 'pool':
                                                          $icon = 'fas fa-swimming-pool';
                                                          break;
                                                        case 'aircon':
                                                          $icon = 'fas fa-wind';
                                                          break;
                                                        case 'tv':
                                                          $icon = 'fas fa-tv';
                                                          break;
                                                        case 'kitchen':
                                                          $icon = 'fas fa-utensils';
                                                          break;
                                                        default:
                                                          $icon = 'fas fa-check-circle';
                                                      }
                                                      ?>
                                                      <i class="<?= $icon ?> me-2" style="color: #FF8C00;"></i> <?= $label ?>
                                                  </label>
                                              </div>
                                          </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Room Image -->
                    <div class="col-12 mt-4">
                        <h5 class="mb-3 text-secondary fw-bold" style="font-size: 0.9rem; letter-spacing: 0.5px; text-transform: uppercase; color: #666;">
                            Room Image
                        </h5>
                        
                        <div class="mb-3">
                            <div class="card border border-dashed p-3" style="background-color: #f9f9f9; border-style: dashed !important;">
                                <div class="text-center py-4">
                                    <i class="fas fa-cloud-upload-alt fa-3x mb-3" style="color: #FF8C00;"></i>
                                    <h6 class="mb-2">Drag & drop a file or click to browse</h6>
                                    <p class="text-muted small mb-3">Recommended size: 1200 x 800 pixels. Max file size: 5MB</p>
                                    <input type="file" class="form-control" name="image" id="image" style="display: none;">
                                    <label for="image" class="btn" style="background-color: #FF8C00; color: white; border: none; padding: 8px 16px; font-weight: 500;">
                                        <i class="fas fa-upload me-1"></i> Upload Image
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Submit Buttons -->
                    <div class="col-12 mt-4 text-end">
                        <hr>
                        <a href="<?= ROOT ?>/myrooms/index/<?= $dorm_id ?>" class="btn btn-outline-secondary me-2" style="padding: 10px 20px;">
                            Cancel
                        </a>
                        <button type="submit" class="btn" style="background-color: #FF8C00; color: white; border: none; padding: 10px 24px; font-weight: 500;">
                            <i class="fas fa-plus-circle me-2"></i> Create Room
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Custom file input script
document.getElementById('image').addEventListener('change', function() {
    const fileName = this.files[0]?.name;
    if (fileName) {
        const label = document.querySelector('label[for="image"]');
        label.innerHTML = '<i class="fas fa-check me-1"></i> File Selected';
        label.style.backgroundColor = '#28a745';
    }
});

// Just for the visual effect when clicking on the card
document.querySelector('.border-dashed').addEventListener('click', function() {
    document.getElementById('image').click();
});
</script>

<?php include __DIR__ . '/../partials/footer.php'; ?>