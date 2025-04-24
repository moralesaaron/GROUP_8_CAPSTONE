<?php include __DIR__ . '/../partials/ownerheader.php'; ?>

<div class="container my-5">
  <h2 class="mb-4">Add New Room</h2>

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
    <div class="alert alert-danger">
      <?php foreach ($errors as $error): ?>
        <div><?= $error ?></div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <form method="post" enctype="multipart/form-data">
    <input type="hidden" name="dorm_id" value="<?= $dorm_id ?>">

    <div class="mb-3">
      <label for="room_number" class="form-label">Room Number</label>
      <input type="text" class="form-control" name="room_number" id="room_number" value="<?= set_value('room_number') ?>" required>
    </div>

    <div class="mb-3">
      <label for="room_name" class="form-label">Room Name</label>
      <input type="text" class="form-control" name="room_name" id="room_name" value="<?= set_value('room_name') ?>" required>
    </div>

    <div class="mb-3">
      <label for="room_type" class="form-label">Room Type</label>
      <input type="text" class="form-control" name="room_type" id="room_type" value="<?= set_value('room_type') ?>" required>
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" class="form-control" step="0.01" name="price" id="price" value="<?= set_value('price') ?>" required>
    </div>

    <input type="hidden" name="location" value="<?= $dorm->city . ', ' . $dorm->province ?>" readonly>


    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="description" rows="3"><?= set_value('description') ?></textarea>
    </div>

    <div class="mb-3">
      <label for="capacity" class="form-label">Capacity</label>
      <input type="number" class="form-control" name="capacity" id="capacity" value="<?= set_value('capacity') ?>" required>
    </div>

    <!-- <div class="mb-3">
      <label for="amenities" class="form-label">Amenities</label>
      <input type="text" class="form-control" name="amenities" id="amenities" value="<?= set_value('amenities') ?>">
    </div> -->

    <div class="mb-3">
  <label class="form-label">Amenities</label><br>

  <?php foreach ($available_amenities as $value => $label): ?>
    <div class="form-check form-check-inline">
      <input 
        class="form-check-input" 
        type="checkbox" 
        name="amenities[]" 
        id="amenity_<?= $value ?>" 
        value="<?= $value ?>"
        <?= (isset($_POST['amenities']) && in_array($value, $_POST['amenities'])) ? 'checked' : '' ?>
      >
      <label class="form-check-label" for="amenity_<?= $value ?>">
        <?= $label ?>
      </label>
    </div>
  <?php endforeach; ?>
</div>


<div class="mb-3">
      <label for="image" class="form-label">Room Image</label>
      <input type="file" class="form-control" name="image" id="image">
    </div>

    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
      <select class="form-select" name="status" id="status" required>
        <option value="">-- Select Status --</option>
        <option value="available" <?= set_select('status', 'available') ?>>Available</option>
        <option value="unavailable" <?= set_select('status', 'unavailable') ?>>Unavailable</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="visibility" class="form-label">Visibility</label>
      <select class="form-select" name="visibility" id="visibility" required>
        <option value="">-- Select Visibility --</option>
        <option value="public" <?= set_select('visibility', 'public') ?>>Public</option>
        <option value="private" <?= set_select('visibility', 'private') ?>>Private</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Create Room</button>
    <a href="<?= ROOT ?>/myrooms/index/<?= $dorm_id ?>" class="btn btn-secondary">Cancel</a>
  </form>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>
