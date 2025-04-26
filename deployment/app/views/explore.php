<?php include "partials/header.php" ?>
<link rel="stylesheet" href="<?php ROOT?>./assets/css/explore.css">
<body>
    <!-- Hero Section with Gradient Background -->
    <div class="hero-container">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 hero-text animate-fade-in">
                    <!-- Hero content can be added here if needed -->
                </div>
            </div>
        </div>
    </div>

    <!-- Search Bar Section -->
    <div class="container search-section">
        <h2 class="section-title animate-slide-up">Find Location</h2>
        <div class="search-container">
            <input type="text" class="search-input" placeholder="ex. Malolos, Bulacan" aria-label="Search">
            <button class="search-button">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>

    <!-- Featured Rooms Section -->
    <div class="container section-container">
        <div class="section-header">
            <h2 class="section-title animate-slide-up">Featured Rooms</h2>
            <div class="section-line"></div>
        </div>

        <!-- Horizontal scrollable room cards -->
        <div class="card-scroll-container">
            <?php if (!empty($data['rooms'])): ?>
                <?php foreach($data['rooms'] as $room): ?>
                    <!-- Room Card -->
                    <div class="card-item animate-pop">
                        <a href="<?= ROOT ?>/pubrooms/show/<?= $room->id ?>" class="card-link">
                            <div class="custom-card">
                                <div class="card-image-container">
                                    <img src="<?= ROOT ?>/<?= $room->image ?? '' ?>" class="card-image" alt="Room Image">
                                    <div class="card-badge">Featured</div>
                                </div>
                                <div class="card-content">
                                    <h6 class="card-title"><?= htmlspecialchars($room->room_name); ?></h6>
                                    <p class="card-price">₱<?= number_format($room->price); ?></p>
                                    <div class="card-location">
                                        <i class="fas fa-map-marker-alt location-icon"></i>
                                        <small><?= htmlspecialchars($room->location); ?></small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="no-items-message">No featured rooms found.</p>
            <?php endif; ?>
        </div>

        <!-- View All Button -->
        <div class="view-all-container">
            <a href="<?= ROOT ?>/rooms" class="view-all-button view-rooms-button">VIEW ALL ROOMS</a>
        </div>
    </div>

    <!-- Featured Dorms Section -->
    <div class="container section-container">
        <div class="section-header">
            <h2 class="section-title animate-slide-up">Featured Dorms</h2>
            <div class="section-line"></div>
        </div>

        <!-- Horizontal scrollable dorm cards -->
        <div class="card-scroll-container">
            <?php if (!empty($data['dorms'])): ?>
                <?php foreach($data['dorms'] as $dorm): ?>
                    <!-- Dorm Card -->
                    <div class="card-item animate-pop">
                        <a href="<?= ROOT ?>/pubdorms/show/<?= $dorm->id ?>" class="card-link">
                            <div class="custom-card">
                                <div class="card-image-container">
                                    <img src="<?= ROOT ?>/<?= $dorm->image ?? '' ?>" class="card-image" alt="Dorm Image">
                                    <div class="card-badge dorm-badge">Featured</div>
                                </div>
                                <div class="card-content">
                                    <h6 class="card-title"><?= htmlspecialchars($dorm->name); ?></h6>
                                    <div class="card-location">
                                        <i class="fas fa-map-marker-alt location-icon"></i>
                                        <small><?= htmlspecialchars($dorm->city . ', ' . $dorm->province); ?></small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="no-items-message">No featured dorms found.</p>
            <?php endif; ?>
        </div>

        <!-- View All Button -->
        <div class="view-all-container">
            <a href="<?= ROOT ?>/dorms" class="view-all-button view-dorms-button">VIEW ALL DORMS</a>
        </div>
    </div>

    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</body>

<?php include "partials/footer.php" ?>