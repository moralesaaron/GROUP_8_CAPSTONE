<?php include "partials/header.php" ?>

<body>
    <!-- Navbar -->
    
    
    <!-- main content -->
    <div class="container hero-section">
        <div class="row w-100 align-items-center mb-5">
            <!-- Main Content -->
            <div class="col-md-8">
                <h1 class="display-3 fw-bold">
                Connecting You to Home</h1>     
                <p class="text-secondary mt-3">Say goodbye to the dorm hunt hassle. Browse a variety of cozy, budget-friendly dorms tailored to your academic life. Your next home is waiting!</p>
                <div class="mt-4">
                    <a href="<?= ROOT ?>/explore" class="custom-button text-white me-3">Find Dorms</a>
                    <!-- <a href="#" class="btn btn-outline-secondary">Talk to a human</a> -->
                </div>
            </div>
            
            <!-- Side Img -->
            <div class="col-md-4 d-flex justify-content-center">
    <img src="<?= ROOT ?>/assets/images/Landing_Page_BG.jpg" alt="Visual representation" class="img-fluid w-100" />
</div>

        </div>
    </div>

    <div class="container hero-section">
        <div class="row w-100 align-items-center mb-5">
            <!-- Side Img -->
            <div class="col-md-4 d-flex justify-content-center">
            <div class="col-md-6 d-flex justify-content-center">
                    <img src="<?= ROOT ?>/assets/images/Landing_Page_BG.jpg" alt="Visual representation" class="img-fluid w-100" />
                </div>
            </div>

            <!-- 2nd Main Content -->
            <div class="col-md-8">
                <h1 class="display-3 fw-bold">
                Register Your Dorm!</h1>
                <p class="text-secondary mt-3">Say goodbye to the dorm hunt hassle. Browse a variety of cozy, budget-friendly dorms tailored to your academic life. Your next home is waiting!</p>
                <div class="mt-4">
                <a href="<?= ROOT ?>/registerdorm" class="custom-button text-white me-3">Register Now</a>
                    <a href="#" class="btn btn-outline-secondary">Talk to a human</a>
                </div>
            </div>

        </div>
    </div>

</body>

<!-- <div class="col-md-6 d-flex justify-content-center">
                    <img src="<?= ROOT ?>/assets/images/Landing_Page_BG.jpg" alt="Visual representation" class="img-fluid w-100" />
                </div> -->

<?php include "partials/footer.php" ?>