<?php include __DIR__ . '/../partials/ownerheader.php'; 
?>

<div class="container my-5">
  <h2 class="mb-4">Edit Room</h2>

  <?php
// 🛠️ Place this BEFORE the <form> starts
$room_amenities = json_decode($room->amenities ?? '[]', true);
$available_amenities = ['wifi', 'pool', 'aircon', 'tv', 'kitchen']; // You can expand this list
?>
  

  <form method="post">
    <div class="mb-3">
      <label for="room_number" class="form-label">Room Number</label>
      <input type="text" class="form-control" name="room_number" id="room_number" value="<?= $room->room_number ?>" required>
    </div>

    <div class="mb-3">
      <label for="room_name" class="form-label">Room Name</label>
      <input type="text" class="form-control" name="room_name" id="room_name" value="<?= $room->room_name ?>" required>
    </div>

    <div class="mb-3">
      <label for="room_type" class="form-label">Room Type</label>
      <input type="text" class="form-control" name="room_type" id="room_type" value="<?= $room->room_type ?>" required>
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" class="form-control" step="0.01" name="price" id="price" value="<?= $room->price ?>" required>
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="description" rows="3"><?= $room->description ?></textarea>
    </div>

    <div class="mb-3">
      <label for="capacity" class="form-label">Capacity</label>
      <input type="number" class="form-control" name="capacity" id="capacity" value="<?= $room->capacity ?>" required>
    </div>

    <div class="mb-3">
  <label class="form-label">Amenities</label><br>

  <?php foreach ($available_amenities as $amenity): ?>
    <div class="form-check form-check-inline">
      <input 
        class="form-check-input" 
        type="checkbox" 
        name="amenities[]" 
        id="amenity_<?= $amenity ?>" 
        value="<?= $amenity ?>"
        <?= in_array($amenity, $room_amenities) ? 'checked' : '' ?>
      >
      <label class="form-check-label" for="amenity_<?= $amenity ?>">
        <?= ucfirst($amenity) ?>
      </label>
    </div>
  <?php endforeach; ?>
</div>

    <div class="mb-3">
      <label for="image" class="form-label">Image URL</label>
      <input type="text" class="form-control" name="image" id="image" value="<?= $room->image ?>">
    </div>

    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
      <select class="form-select" name="status" id="status" required>
        <option value="available" <?= $room->status === 'available' ? 'selected' : '' ?>>Available</option>
        <option value="unavailable" <?= $room->status === 'unavailable' ? 'selected' : '' ?>>Unavailable</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="visibility" class="form-label">Visibility</label>
      <select class="form-select" name="visibility" id="visibility" required>
        <option value="public" <?= $room->visibility === 'public' ? 'selected' : '' ?>>Public</option>
        <option value="private" <?= $room->visibility === 'private' ? 'selected' : '' ?>>Private</option>
      </select>
    </div>

    <button type="submit" class="btn btn-success">Save Changes</button>
    <a href="<?= ROOT ?>/myrooms/index/<?= $room->dorm_id ?>" class="btn btn-secondary">Cancel</a>
  </form>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>
