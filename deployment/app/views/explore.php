<?php include "partials/header.php" ?>

<body>
    <!-- Main Content -->
    <div class="container hero-section">
        <div class="row align-items-center mb-5">
            <!-- Text Content -->
            <div class="col-md-8">
                <!-- <h1 class="display-3 fw-bold">Explore Page</h1> -->
                

                
            </div>

            <!-- Image Section -->
            <!-- <div class="col-md-4 d-flex justify-content-center">
                <img src="<?= ROOT ?>/assets/images/Landing_Page_BG.jpg" alt="Visual representation" class="img-fluid w-100 rounded">
            </div> -->
        </div>
    </div>

    <!-- Search Bar Section -->
    <div class="container mt-3">
    <h2 class="text-dark">Find Location</h2>
        <div class="input-group">
            <input type="text" class="form-control border-dark" placeholder="ex. Malolos, Bulacan" aria-label="Search">
            
        </div>
    </div>

    

<div class="container mt-5">
    <h2 class="text-dark">Featured Rooms</h2>

    <!-- Horizontal scrollable room cards -->
    <div class="row mt-3 flex-nowrap overflow-auto">
    <?php if (!empty($data['rooms'])): ?>
    <?php foreach($data['rooms'] as $room): ?>
        <!-- Room Card -->
        <div class="col-md-2 col-6 mb-3">
        <a href="<?= ROOT ?>/pubrooms/show/<?= $room->id ?>" class="text-decoration-none text-dark">

                <div class="card border-light shadow-sm">
                    <img src="<?= ROOT ?>/<?= $room->image ?? '' ?>" class="card-img-top" alt="Room Image">
                    <div class="card-body p-2">
                        <h6 class="card-title mb-1"><?= htmlspecialchars($room->room_name); ?></h6>
                        <p class="text-danger fw-bold mb-0">₱<?= number_format($room->price); ?></p>
                        <small class="text-muted">
                        <?= htmlspecialchars($room->location); ?>
                        </small>
                    </div>
                </div>
                </a>
            </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>No featured rooms found.</p>
<?php endif; ?>
    </div>

    <!-- Button -->
    <div class="text-end mt-3">
        <a href="<?= ROOT ?>/rooms" class="btn btn-danger">VIEW ALL ROOMS</a>
    </div>
</div>

 <!-- this too! -->

 <div class="container mt-5">
 <h2 class="text-dark mt-5">Featured Dorms</h2>

    <div class="row mt-3 flex-nowrap overflow-auto">
    <?php if (!empty($data['dorms'])): ?>
        <?php foreach($data['dorms'] as $dorm): ?>
            <!-- Dorm Card -->

             <!-- Clickable card -->
             
            <div class="col-md-2 col-6 mb-3">
            <a href="<?= ROOT ?>/pubdorms/show/<?= $dorm->id ?>" class="text-decoration-none text-dark">
                <div class="card border-light shadow-sm">
                    <img src="<?= ROOT ?>/<?= $dorm->image ?? '' ?>" class="card-img-top" alt="Dorm Image">
                    
                    <div class="card-body p-2">
                        <h6 class="card-title mb-1"><?= htmlspecialchars($dorm->name); ?></h6>
                        <small class="text-muted"><?= htmlspecialchars($dorm->city . ', ' . $dorm->province); ?></small>
                    </div>
                </div>
                </a>
            </div>
        
        <?php endforeach; ?>
    <?php else: ?>
        <p>No featured dorms found.</p>
    <?php endif; ?>
    </div>

    <!-- Button -->
    <div class="text-end mt-3">
        <a href="<?= ROOT ?>/dorms" class="btn btn-dark">VIEW ALL DORMS</a>
    </div>
</div>



</body>

<!-- <div class="col-md-6 d-flex justify-content-center">
                    <img src="<?= ROOT ?>/assets/images/Landing_Page_BG.jpg" alt="Visual representation" class="img-fluid w-100" />
                </div> -->

<?php include "partials/footer.php" ?>