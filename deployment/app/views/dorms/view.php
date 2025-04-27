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
    <!-- Clean, professional header with subtle orange accent -->
    <div class="row align-items-center mb-4">
        <div class="col-md-8">
            <h2 class="mb-0 fw-bold" style="color: #333; border-left: 4px solid #FF8C00; padding-left: 12px;">
                <?= esc($dorm->name) ?>
            </h2>
            <p class="text-muted mt-1 mb-0"><?= esc($dorm->city) ?> • ID: <?= $dorm->id ?></p>
        </div>
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <a href="<?= ROOT ?>/myrooms/create/<?= $dorm->id ?>" class="btn btn-sm" style="background-color: #FF8C00; color: white; border: none; padding: 8px 16px; font-weight: 500;">
                <i class="fas fa-plus me-1"></i> Add Room
            </a>
            <a href="<?= ROOT ?>/mydorms" class="btn btn-sm btn-outline-secondary ms-2" style="padding: 8px 16px; font-weight: 500;">
                <i class="fas fa-arrow-left me-1"></i> Back
            </a>
        </div>
    </div>
    
    <!-- Dorm summary with clean, minimal design -->
    <div class="card mb-4 border-0 shadow-sm">
        <div class="card-body p-4">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <h6 class="text-uppercase text-muted mb-2" style="font-size: 0.8rem; letter-spacing: 0.5px;">Dorm Overview</h6>
                    <div class="d-flex align-items-center mb-2">
                        <div style="width: 8px; height: 8px; border-radius: 50%; background-color: <?= $dorm->status === 'Active' ? '#28a745' : '#dc3545' ?>; margin-right: 8px;"></div>
                        <span><?= esc($dorm->status) ?></span>
                    </div>
                    <div class="mb-2">
                        <span class="text-muted">Available Rooms:</span> <strong><?= esc($dorm->available_rooms) ?></strong>
                    </div>
                </div>
                <div class="col-md-8">
                    <h6 class="text-uppercase text-muted mb-2" style="font-size: 0.8rem; letter-spacing: 0.5px;">Description</h6>
                    <p class="mb-0 text-secondary" style="line-height: 1.6;">
                        <?= !empty($dorm->description) ? esc($dorm->description) : 'No description available.' ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Rooms section header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0 fw-bold">Room Inventory</h5>
        <?php if (!empty($rooms)): ?>
                <span class="badge bg-light text-dark border"><?= count($rooms) ?> Rooms</span>
        <?php endif; ?>
    </div>

    <?php if (!empty($rooms)): ?>
            <div class="card border-0 shadow-sm">
                <div class="table-responsive">
                    <table class="table table-hover mb-0" style="border-collapse: separate; border-spacing: 0;">
                        <thead>
                            <tr style="background-color: #f8f9fa;">
                                <th style="padding: 14px 16px; font-weight: 500; color: #495057; border-bottom: 1px solid #dee2e6;">Room #</th>
                                <th style="padding: 14px 16px; font-weight: 500; color: #495057; border-bottom: 1px solid #dee2e6;">Name</th>
                                <th style="padding: 14px 16px; font-weight: 500; color: #495057; border-bottom: 1px solid #dee2e6;">Type</th>
                                <th style="padding: 14px 16px; font-weight: 500; color: #495057; border-bottom: 1px solid #dee2e6;">Price</th>
                                <th style="padding: 14px 16px; font-weight: 500; color: #495057; border-bottom: 1px solid #dee2e6;">Capacity</th>
                                <th style="padding: 14px 16px; font-weight: 500; color: #495057; border-bottom: 1px solid #dee2e6;">Status</th>
                                <th style="padding: 14px 16px; font-weight: 500; color: #495057; border-bottom: 1px solid #dee2e6;">Visibility</th>
                                <th style="padding: 14px 16px; font-weight: 500; color: #495057; border-bottom: 1px solid #dee2e6; text-align: right;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rooms as $room): ?>
                                    <tr>
                                        <td style="padding: 14px 16px; vertical-align: middle; border-bottom: 1px solid #f0f0f0;"><strong><?= esc($room->room_number) ?></strong></td>
                                        <td style="padding: 14px 16px; vertical-align: middle; border-bottom: 1px solid #f0f0f0;"><?= esc($room->room_name) ?></td>
                                        <td style="padding: 14px 16px; vertical-align: middle; border-bottom: 1px solid #f0f0f0;">
                                            <span style="font-size: 0.85rem; padding: 4px 8px; border-radius: 4px; background-color: #f8f9fa; color: #495057;"><?= esc($room->room_type) ?></span>
                                        </td>
                                        <td style="padding: 14px 16px; vertical-align: middle; border-bottom: 1px solid #f0f0f0;">
                                            <span style="font-weight: 500; color: #FF8C00;">₱<?= number_format(esc($room->price), 2) ?></span>
                                        </td>
                                        <td style="padding: 14px 16px; vertical-align: middle; border-bottom: 1px solid #f0f0f0;">
                                            <span style="font-size: 0.85rem; padding: 4px 8px; border-radius: 4px; background-color: #f8f9fa; color: #495057;"><?= esc($room->capacity) ?> Person<?= $room->capacity > 1 ? 's' : '' ?></span>
                                        </td>
                                        <td style="padding: 14px 16px; vertical-align: middle; border-bottom: 1px solid #f0f0f0;">
                                            <?php if ($room->status == 'Available'): ?>
                                                    <span style="font-size: 0.85rem; padding: 4px 8px; border-radius: 4px; background-color: rgba(40, 167, 69, 0.15); color: #28a745;">Available</span>
                                            <?php elseif ($room->status == 'Occupied'): ?>
                                                    <span style="font-size: 0.85rem; padding: 4px 8px; border-radius: 4px; background-color: rgba(220, 53, 69, 0.15); color: #dc3545;">Occupied</span>
                                            <?php else: ?>
                                                    <span style="font-size: 0.85rem; padding: 4px 8px; border-radius: 4px; background-color: rgba(108, 117, 125, 0.15); color: #6c757d;"><?= esc($room->status) ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td style="padding: 14px 16px; vertical-align: middle; border-bottom: 1px solid #f0f0f0;">
                                            <?php if ($room->visibility == 'Visible'): ?>
                                                    <span style="font-size: 0.85rem; padding: 4px 8px; border-radius: 4px; background-color: rgba(13, 202, 240, 0.15); color: #0dcaf0;">
                                                        <i class="fas fa-eye me-1" style="font-size: 0.8rem;"></i> Visible
                                                    </span>
                                            <?php else: ?>
                                                    <span style="font-size: 0.85rem; padding: 4px 8px; border-radius: 4px; background-color: rgba(33, 37, 41, 0.15); color: #212529;">
                                                        <i class="fas fa-eye-slash me-1" style="font-size: 0.8rem;"></i> Hidden
                                                    </span>
                                            <?php endif; ?>
                                        </td>
                                        <td style="padding: 14px 16px; vertical-align: middle; border-bottom: 1px solid #f0f0f0; text-align: right;">
                                            <div class="btn-group">
                                                <a href="<?= ROOT ?>/myrooms/edit/<?= $room->id ?>" class="btn btn-sm btn-outline-secondary" style="padding: 4px 10px; font-size: 0.85rem;">
                                                    Edit
                                                </a>
                                                <a href="<?= ROOT ?>/myrooms/delete/<?= $room->id ?>" class="btn btn-sm btn-outline-danger" style="padding: 4px 10px; font-size: 0.85rem;"
                                                   onclick="return confirm('Are you sure you want to delete this room?')">
                                                    Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
    <?php else: ?>
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 text-center">
                    <div style="color: #6c757d; margin-bottom: 16px;">
                        <i class="fas fa-info-circle fa-3x"></i>
                    </div>
                    <h5 style="color: #495057; font-weight: 500;">No Rooms Available</h5>
                    <p class="text-muted mb-3" style="max-width: 500px; margin: 0 auto;">
                        This dorm doesn't have any rooms yet. Use the "Add Room" button to create rooms for this dorm.
                    </p>
                    <a href="<?= ROOT ?>/myrooms/create/<?= $dorm->id ?>" class="btn btn-sm" style="background-color: #FF8C00; color: white; border: none; padding: 8px 16px; font-weight: 500;">
                        <i class="fas fa-plus me-1"></i> Add First Room
                    </a>
                </div>
            </div>
    <?php endif; ?>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>