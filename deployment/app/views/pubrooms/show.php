<?php
include __DIR__ . '/../partials/header.php';
?>

<body>
    
    <!-- main content -->
<div class="container hero-section">
    <div class="container mt-5">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-5 text-center">
           
                <img src="<?= ROOT ?>/<?= $room->image ?? 'assets/images/default.png' ?>" class="img-fluid rounded mb-3" alt="Room Image">
                
            </div>

            <!-- Right Column -->
            <div class="col-md-7">
            <h3><?= htmlspecialchars($room->room_name) ?></h3>
                <p><strong>Price:</strong> ₱<?= number_format($room->price) ?></p>
                <p><strong>Location:</strong> <?= htmlspecialchars($room->location) ?></p>
                <p><strong>Description:</strong><br> <?= nl2br(htmlspecialchars($room->description)) ?></p>

                <a href="<?= ROOT ?>/apply/<?= $room_id ?>" class="btn btn-primary mt-3">Apply for Room</a>
            </div>
        </div>
    </div>
</div>



</body>



<?php include __DIR__ . '/../partials/footer.php'; ?>