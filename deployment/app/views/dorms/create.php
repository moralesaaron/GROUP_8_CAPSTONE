<?php include __DIR__ . '/../partials/ownerheader.php'; ?>

<div class="container my-5">
  <h2 class="mb-4">Add New Dorm</h2>

  <?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
      <?php foreach ($errors as $error): ?>
        <div><?= $error ?></div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="name" class="form-label">Dorm Name</label>
      <input type="text" class="form-control" name="name" id="name" required>
    </div>

    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <input type="text" class="form-control" name="address" id="address" required>
    </div>

    <div class="mb-3">
      <label for="city" class="form-label">City</label>
      <input type="text" class="form-control" name="city" id="city" required>
    </div>

    <div class="mb-3">
      <label for="province" class="form-label">Province</label>
      <input type="text" class="form-control" name="province" id="province" required>
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
    </div>

    <div class="mb-3">
      <label for="total_rooms" class="form-label">Total Rooms</label>
      <input type="number" class="form-control" name="total_rooms" id="total_rooms" required>
    </div>

    <div class="mb-3">
      <label for="available_rooms" class="form-label">Available Rooms</label>
      <input type="number" class="form-control" name="available_rooms" id="available_rooms" required>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Dorm Image</label>
      <input type="file" class="form-control" name="image" id="image">
    </div>

    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
      <select class="form-select" name="status" id="status" required>
        <option value="">-- Select Status --</option>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
    <a href="<?= ROOT ?>/mydorms" class="btn btn-secondary">Cancel</a>
  </form>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>
