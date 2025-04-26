<?php include "partials/header.php"; ?>

<div class="container hero-section">
    <h2>Apply for Room</h2>

    <!-- Room and Dorm details -->
    <div class="mb-4 border p-3 bg-light rounded">
        <p><strong>Dorm:</strong> <?= htmlspecialchars($dorm_name) ?></p>
        <p><strong>Room:</strong> <?= htmlspecialchars($room_name) ?></p>
        <p><strong>Price:</strong> ₱<?= number_format($price, 2) ?></p>
    </div>

    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="" method="POST">
        <input type="hidden" name="room_id" value="<?= $room_id ?>">

        <!-- <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Write a message to the dorm owner" rows="4"></textarea>
        </div> -->

        <?php if ($user_image): ?>
            <div class="mb-3">
                <label class="form-label">Your ID Image</label>
                <img src="<?= ROOT ?>/<?= htmlspecialchars($user_image) ?>" alt="User Image" class="img-thumbnail" style="max-width: 150px;">
            </div>
        <?php else: ?>
            <div class="mb-3 text-danger">
                You have not uploaded your ID image yet.
            </div>
        <?php endif; ?>

        <button type="submit" class="btn btn-primary" <?= !$user_image ? 'disabled' : '' ?>>
            Submit Application
        </button>
    </form>
</div>

<?php include "partials/footer.php"; ?>
