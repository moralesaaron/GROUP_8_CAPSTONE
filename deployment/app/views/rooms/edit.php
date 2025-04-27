<?php include __DIR__ . '/../partials/ownerheader.php'; ?>

<div class="container my-5">
    <!-- Professional header with subtle orange accent -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0 fw-bold" style="color: #333; border-left: 4px solid #FF8C00; padding-left: 12px;">
            Edit Room
        </h2>
        <a href="<?= ROOT ?>/myrooms/index/<?= $room->dorm_id ?>" class="btn btn-sm btn-outline-secondary" style="padding: 8px 16px; font-weight: 500;">
            <i class="fas fa-arrow-left me-1"></i> Back to Rooms
        </a>
    </div>

    <?php
    // Parse amenities
    $room_amenities = json_decode($room->amenities ?? '[]', true);
    $available_amenities = [
      'wifi' => 'WiFi',
      'pool' => 'Pool',
      'aircon' => 'Air Conditioning',
      'tv' => 'TV',
      'kitchen' => 'Kitchen'
    ];
    ?>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <form method="post">                
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
                            <input type="text" class="form-control form-control-lg border" style="padding: 12px 16px; background-color: #f9f9f9;" name="room_number" id="room_number" value="<?= $room->room_number ?>" required>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="room_name" class="form-label text-secondary fw-semibold">Room Name</label>
                            <input type="text" class="form-control form-control-lg border" style="padding: 12px 16px; background-color: #f9f9f9;" name="room_name" id="room_name" value="<?= $room->room_name ?>" required>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="room_type" class="form-label text-secondary fw-semibold">Room Type</label>
                            <input type="text" class="form-control form-control-lg border" style="padding: 12px 16px; background-color: #f9f9f9;" name="room_type" id="room_type" value="<?= $room->room_type ?>" required>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="price" class="form-label text-secondary fw-semibold">Price (₱)</label>
                            <div class="input-group">
                                <span class="input-group-text" style="background-color: #f9f9f9; border-right: none;">₱</span>
                                <input type="number" class="form-control form-control-lg border" style="padding: 12px 16px; background-color: #f9f9f9; border-left: none;" step="0.01" name="price" id="price" value="<?= $room->price ?>" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="capacity" class="form-label text-secondary fw-semibold">Capacity</label>
                            <input type="number" class="form-control form-control-lg border" style="padding: 12px 16px; background-color: #f9f9f9;" name="capacity" id="capacity" value="<?= $room->capacity ?>" required>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="description" class="form-label text-secondary fw-semibold">Description</label>
                            <textarea class="form-control border" style="padding: 12px 16px; background-color: #f9f9f9; min-height: 120px;" name="description" id="description" rows="3"><?= $room->description ?></textarea>
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
                                <option value="available" <?= $room->status === 'available' ? 'selected' : '' ?>>Available</option>
                                <option value="unavailable" <?= $room->status === 'unavailable' ? 'selected' : '' ?>>Unavailable</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="visibility" class="form-label text-secondary fw-semibold">Visibility</label>
                            <select class="form-select form-select-lg border" style="padding: 12px 16px; background-color: #f9f9f9;" name="visibility" id="visibility" required>
                                <option value="public" <?= $room->visibility === 'public' ? 'selected' : '' ?>>Public</option>
                                <option value="private" <?= $room->visibility === 'private' ? 'selected' : '' ?>>Private</option>
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
                                                      <?= in_array($value, $room_amenities) ? 'checked' : '' ?>
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
                            <label for="image" class="form-label text-secondary fw-semibold">Image URL</label>
                            <div class="input-group">
                                <span class="input-group-text" style="background-color: #f9f9f9; border-right: none;"><i class="fas fa-link"></i></span>
                                <input type="text" class="form-control form-control-lg border" style="padding: 12px 16px; background-color: #f9f9f9; border-left: none;" name="image" id="image" value="<?= $room->image ?>">
                            </div>
                            
                            <?php if (!empty($room->image)): ?>
                                  <div class="mt-3 p-2 border rounded" style="background-color: #f9f9f9;">
                                      <div class="d-flex align-items-center">
                                          <div class="me-3">
                                              <i class="fas fa-image fa-2x" style="color: #FF8C00;"></i>
                                          </div>
                                          <div>
                                              <p class="mb-0 small">Current image: <a href="<?= $room->image ?>" target="_blank" style="color: #FF8C00;">View image</a></p>
                                          </div>
                                      </div>
                                  </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <!-- Submit Buttons -->
                    <div class="col-12 mt-4 text-end">
                        <hr>
                        <a href="<?= ROOT ?>/myrooms/index/<?= $room->dorm_id ?>" class="btn btn-outline-secondary me-2" style="padding: 10px 20px;">
                            Cancel
                        </a>
                        <button type="submit" class="btn" style="background-color: #FF8C00; color: white; border: none; padding: 10px 24px; font-weight: 500;">
                            <i class="fas fa-save me-2"></i> Save Changes
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>