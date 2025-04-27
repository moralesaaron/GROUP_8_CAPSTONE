<?php //header if statements
if (isset($_SESSION['USER'])) {
    if ($_SESSION['USER']->role === 'admin') {
        include __DIR__ . '/../partials/adminheader.php';
    } elseif ($_SESSION['USER']->role === 'dorm') {
        include __DIR__ . '/../partials/ownerheader.php';
    }
}
?>

<div class="container my-5">
    <div class="row mb-4">
        <div class="col">
            <h2 class="text-dark mb-4"><i class="fas fa-bed text-warning me-2"></i>My Rooms</h2>
        </div>
        <div class="col-auto">
            <a href="<?= ROOT ?>/myrooms/create" class="btn btn-primary"
                style="background-color: #ff7b00; border-color: #ff7b00;">
                <i class="fas fa-plus-circle me-2"></i>Add New Room
            </a>
        </div>
    </div>

    <?php if (!empty($rooms)): ?>
        <div class="card shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead style="background-color: #fff4e6;">
                            <tr>
                                <th class="px-4 py-3">Room #</th>
                                <th class="px-4 py-3">Name</th>
                                <th class="px-4 py-3">Type</th>
                                <th class="px-4 py-3">Price</th>
                                <th class="px-4 py-3">Capacity</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">Visibility</th>
                                <th class="px-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rooms as $room): ?>
                                <tr>
                                    <td class="px-4 py-3"><?= esc($room->room_number) ?></td>
                                    <td class="px-4 py-3"><?= esc($room->room_name) ?></td>
                                    <td class="px-4 py-3"><?= esc($room->room_type) ?></td>
                                    <td class="px-4 py-3">₱<?= esc($room->price) ?></td>
                                    <td class="px-4 py-3"><?= esc($room->capacity) ?></td>
                                    <td class="px-4 py-3">
                                        <?php if ($room->status == 'Available'): ?>
                                            <span class="badge bg-success">Available</span>
                                        <?php elseif ($room->status == 'Occupied'): ?>
                                            <span class="badge bg-danger">Occupied</span>
                                        <?php else: ?>
                                            <span class="badge bg-secondary"><?= esc($room->status) ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="px-4 py-3">
                                        <?php if ($room->visibility == 'Public'): ?>
                                            <span class="badge bg-info">Public</span>
                                        <?php else: ?>
                                            <span class="badge bg-dark">Hidden</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="btn-group" role="group">
                                            <a href="<?= ROOT ?>/myrooms/edit/<?= $room->id ?>" class="btn btn-sm"
                                                style="background-color: #ffab66; color: #000;">
                                                <i class="fas fa-edit me-1"></i>Edit
                                            </a>
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal<?= $room->id ?>">
                                                <i class="fas fa-trash-alt me-1"></i>Delete
                                            </button>
                                        </div>

                                        <!-- Delete Confirmation Modal -->
                                        <div class="modal fade" id="deleteModal<?= $room->id ?>" tabindex="-1"
                                            aria-labelledby="deleteModalLabel<?= $room->id ?>" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel<?= $room->id ?>">Confirm
                                                            Delete</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete room "<?= esc($room->room_name) ?>"
                                                        (#<?= esc($room->room_number) ?>)?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <a href="<?= ROOT ?>/myrooms/delete/<?= $room->id ?>"
                                                            class="btn btn-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="alert alert-info" role="alert" style="border-left: 5px solid #ff7b00;">
            <div class="d-flex align-items-center">
                <i class="fas fa-info-circle me-3 fs-4 text-warning"></i>
                <p class="mb-0">No rooms have been added yet. Click on "Add New Room" to create your first room.</p>
            </div>
        </div>
    <?php endif; ?>
</div>

<style>
    .btn-primary:hover {
        background-color: #e06900 !important;
        border-color: #e06900 !important;
    }

    .table thead th {
        font-weight: 600;
        color: #664d03;
        border-bottom: 2px solid #ff7b00;
    }

    .card {
        border: none;
        border-radius: 8px;
        overflow: hidden;
    }

    .btn-group .btn {
        transition: all 0.2s;
    }

    .btn-group .btn:hover {
        transform: translateY(-2px);
    }
</style>

<?php include __DIR__ . '/../partials/footer.php'; ?>