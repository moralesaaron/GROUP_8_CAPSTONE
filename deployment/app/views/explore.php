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

    <!-- Flash Sale Section -->
<div class="container mt-5">
    <h2 class="text-dark">Featured Dorms</h2>
    
    <!-- Product List -->
    <div class="row mt-3 flex-nowrap overflow-auto">
        <div class="col-md-2 col-6">
            <div class="card border-light shadow-sm">
                <img src="<?= ROOT ?>/assets/images/images (2).jpg" class="card-img-top" alt="Product">
                <div class="card-body p-2">
                    <h6 class="card-title">Modern 1-Bed Space Near Campus </h6>
                    <p class="text-danger fw-bold mb-0">₱1,500</p>
                    <small class="text-muted ">Cebu City, Cebu</small>
                    
                </div>
            </div>
        </div>
        <div class="col-md-2 col-6">
            <div class="card border-light shadow-sm">
                <img src="<?= ROOT ?>/assets/images/images (3).jpg" class="card-img-top" alt="Product">
                <div class="card-body p-2">
                    <h6 class="card-title">Affordable Single Room for Rent</h6>
                    <p class="text-danger fw-bold mb-0">₱1,700</p>
                    <small class="text-muted ">Davao City, Davao del Sur</small>
                    
                </div>
            </div>
        </div>
        <div class="col-md-2 col-6">
            <div class="card border-light shadow-sm">
                <img src="<?= ROOT ?>/assets/images/images (4).jpg" class="card-img-top" alt="Product">
                <div class="card-body p-2">
                    <h6 class="card-title">Furnished 1-Bed Dorm Retreat</h6>
                    <p class="text-danger fw-bold mb-0">₱1,900</p>
                    <small class="text-muted ">Baguio City, Benguet</small>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-6">
            <div class="card border-light shadow-sm">
                <img src="<?= ROOT ?>/assets/images/images (5).jpg" class="card-img-top" alt="Product">
                <div class="card-body p-2">
                    <h6 class="card-title">Quiet & Comfortable 1-Bed Room</h6>
                    <p class="text-danger fw-bold mb-0">₱2,200</p>
                    <small class="text-muted ">Iloilo City, Iloilo</small>
                    
                </div>
            </div>
        </div>
        <div class="col-md-2 col-6">
            <div class="card border-light shadow-sm">
                <img src="<?= ROOT ?>/assets/images/images (6).jpg" class="card-img-top" alt="Product">
                <div class="card-body p-2">
                    <h6 class="card-title">Bright & Spacious 1-Bed Room</h6>
                    <p class="text-danger fw-bold mb-0">₱2,500</p>
                    <small class="text-muted ">Cagayan de Oro City, Misamis Oriental</small>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Shop All Products Button -->
    <div class="mt-3 text-end">
        <!-- <a href="#" class="btn btn-warning text-white">SHOP ALL PRODUCTS</a> -->
        <a href="#" class="custom-button text-white me-3">VIEW ALL DORMS</a>
    </div>
</div>



</body>

<!-- <div class="col-md-6 d-flex justify-content-center">
                    <img src="<?= ROOT ?>/assets/images/Landing_Page_BG.jpg" alt="Visual representation" class="img-fluid w-100" />
                </div> -->

<?php include "partials/footer.php" ?>