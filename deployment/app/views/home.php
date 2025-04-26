<?php include "partials/header.php" ?>

<body>
    <!-- Navbar is in header.php -->

    <!-- Hero Section -->
    <section class="container hero-section">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6 hero-content fade-in">
                <h1 class="hero-title1">Dorm<span class="text-highlight">Lynk</span>
                    <h1 class="hero-title2">Connecting Students <span class="text-highlight">to Their Perfect
                            Dorm</span>
                    </h1>
                    <p class="hero-description">Say goodbye to the dorm hunt hassle. Browse a variety of cozy,
                        budget-friendly dorms tailored to your academic life. Find your perfect space with features that
                        match your lifestyle and preferences.</p>
                    <div class="hero-buttons">
                        <a href="<?= ROOT ?>/explore" class="custom-button me-3">Find Dorms</a>
                    </div>
            </div>
            <div class="col-lg-5 col-md-6 zoom-in">
                <div class="hero-image">
                    <img src="./assets/images/bed.png" alt="Students finding dorms" class="img-fluid rounded-lg w-800">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Dorms Carousel Section -->
    <section class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-12 fade-in">
                    <h2 class="section-title">Featured <span class="text-highlight">Dorms</span></h2>
                    <p class="section-subtitle">Explore our hand-picked selection of top-rated dormitories</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div id="dormCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#dormCarousel" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#dormCarousel" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#dormCarousel" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row g-4">
                                    <div class="col-md-4">
                                        <div class="card h-100 feature-card">
                                            <img src="./assets/images/room.png" class="card-img-top"
                                                alt="Sunny Side Dorms">
                                            <div class="card-body">
                                                <h5 class="card-title">Sunny Side Dorms</h5>
                                                <p class="card-text">Modern facilities with spacious rooms and study
                                                    areas.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-highlight fw-bold">$450/mo</span>
                                                    <a href="<?= ROOT ?>/explore" class="btn btn-sm custom-button">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card h-100 feature-card">
                                            <img src="./assets/images/room.png" class="card-img-top"
                                                alt="Campus View Residences">
                                            <div class="card-body">
                                                <h5 class="card-title">Campus View Residences</h5>
                                                <p class="card-text">Just 5 minutes from main campus with all amenities.
                                                </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-highlight fw-bold">$500/mo</span>
                                                    <a href="<?= ROOT ?>/explore" class="btn btn-sm custom-button">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card h-100 feature-card">
                                            <img src="./assets/images/room.png" class="card-img-top"
                                                alt="Oakwood Student Housing">
                                            <div class="card-body">
                                                <h5 class="card-title">Oakwood Student Housing</h5>
                                                <p class="card-text">Quiet environment perfect for focused studying.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-highlight fw-bold">$420/mo</span>
                                                    <a href="<?= ROOT ?>/explore" class="btn btn-sm custom-button">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row g-4">
                                    <div class="col-md-4">
                                        <div class="card h-100 feature-card">
                                            <img src="./assets/images/room.png" class="card-img-top"
                                                alt="University Gardens">
                                            <div class="card-body">
                                                <h5 class="card-title">University Gardens</h5>
                                                <p class="card-text">Green spaces and sustainable living near campus.
                                                </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-highlight fw-bold">$470/mo</span>
                                                    <a href="<?= ROOT ?>/explore" class="btn btn-sm custom-button">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card h-100 feature-card">
                                            <img src="./assets/images/room.png" class="card-img-top"
                                                alt="Central Square Dorms">
                                            <div class="card-body">
                                                <h5 class="card-title">Central Square Dorms</h5>
                                                <p class="card-text">In the heart of student life with social spaces.
                                                </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-highlight fw-bold">$520/mo</span>
                                                    <a href="<?= ROOT ?>/explore" class="btn btn-sm custom-button">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card h-100 feature-card">
                                            <img src="./assets/images/room.png" class="card-img-top"
                                                alt="Scholar's Retreat">
                                            <div class="card-body">
                                                <h5 class="card-title">Scholar's Retreat</h5>
                                                <p class="card-text">Private rooms with dedicated study spaces.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-highlight fw-bold">$490/mo</span>
                                                    <a href="<?= ROOT ?>/explore" class="btn btn-sm custom-button">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row g-4">
                                    <div class="col-md-4">
                                        <div class="card h-100 feature-card">
                                            <img src="./assets/images/room.png" class="card-img-top"
                                                alt="Riverside Halls">
                                            <div class="card-body">
                                                <h5 class="card-title">Riverside Halls</h5>
                                                <p class="card-text">Scenic views with modern amenities for students.
                                                </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-highlight fw-bold">$480/mo</span>
                                                    <a href="<?= ROOT ?>/explore" class="btn btn-sm custom-button">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card h-100 feature-card">
                                            <img src="./assets/images/room.png" class="card-img-top"
                                                alt="The Graduate Lofts">
                                            <div class="card-body">
                                                <h5 class="card-title">The Graduate Lofts</h5>
                                                <p class="card-text">Modern loft-style dorms for graduate students.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-highlight fw-bold">$550/mo</span>
                                                    <a href="<?= ROOT ?>/explore" class="btn btn-sm custom-button">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card h-100 feature-card">
                                            <img src="./assets/images/room.png" class="card-img-top"
                                                alt="Heritage Hall">
                                            <div class="card-body">
                                                <h5 class="card-title">Heritage Hall</h5>
                                                <p class="card-text">Classic dormitory with a rich campus history.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-highlight fw-bold">$430/mo</span>
                                                    <a href="<?= ROOT ?>/explore" class="btn btn-sm custom-button">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#dormCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#dormCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="container features-section">
        <div class="row text-center mb-5">
            <div class="col-12 fade-in">
                <h2 class="section-title">Why Choose <span class="text-highlight">DormLynk</span></h2>
                <p class="section-subtitle">We make finding your perfect dorm simple and stress-free</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4 fade-in">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="bi bi-search"></i>
                    </div>
                    <h3 class="feature-title">Easy Search</h3>
                    <p class="feature-description">Find the perfect dorm with our powerful filters - search by price,
                        location, amenities, and more.</p>
                </div>
            </div>

            <div class="col-md-4 fade-in">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h3 class="feature-title">Verified Listings</h3>
                    <p class="feature-description">All our dorms are verified and reviewed to ensure quality, safety,
                        and accuracy.</p>
                </div>
            </div>

            <div class="col-md-4 fade-in">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="bi bi-chat-dots"></i>
                    </div>
                    <h3 class="feature-title">Direct Contact</h3>
                    <p class="feature-description">Connect directly with dorm owners and ask questions before making
                        decisions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Register Your Dorm Section -->
    <section class="container hero-section">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 order-md-1 order-2 zoom-in">
                <div class="hero-image2">
                    <img src="./assets/images/Register.png" alt="Register your dorm" class="img-fluid rounded-lg w-100">
                </div>
            </div>
            <div class="col-lg-7 col-md-6 order-md-2 order-1 hero-content fade-in">
                <h2 class="hero-title3">Register Your <span class="text-highlight">Dorm!</span></h2>
                <p class="hero-description">Own a dormitory or have rooms to rent? List your property on DormLynk and
                    connect with thousands of students looking for their next home. Our simple registration process
                    makes it easy to showcase your property to the right audience.</p>
                <div class="hero-buttons">
                    <a href="<?= ROOT ?>/login" class="custom-button me-3">Register Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12 fade-in">
                    <h2 class="section-title">What Our <span class="text-highlight">Users Say</span></h2>
                    <p class="section-subtitle">Hear from students and dorm owners who use DormLynk</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 fade-in">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            "I found my perfect dorm in just one day using DormLynk. The filters made it so easy to find
                            exactly what I was looking for within my budget."
                        </div>
                        <div class="testimonial-author">
                            - Sarah T., Computer Science Student
                        </div>
                    </div>
                </div>

                <div class="col-md-4 fade-in">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            "As a dorm owner, I've been able to reach more students and keep my rooms fully booked
                            throughout the academic year thanks to DormLynk."
                        </div>
                        <div class="testimonial-author">
                            - Michael R., Property Owner
                        </div>
                    </div>
                </div>

                <div class="col-md-4 fade-in">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            "The virtual tours feature helped me make a decision without having to travel to visit every
                            dorm. Saved me so much time and effort!"
                        </div>
                        <div class="testimonial-author">
                            - Jason K., International Student
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="container text-center">
            <h2 class="cta-title fade-in">Ready to Find Your Perfect Dorm?</h2>
            <p class="cta-description fade-in">Join thousands of students who have found their ideal dorms through
                DormLynk. Register now and start browsing!</p>
            <div class="mt-4 fade-in">
                <a href="<?= ROOT ?>/registeruser" class="btn btn-lg cta-button me-3">Sign Up Free</a>
                <a href="<?= ROOT ?>/explore" class="btn btn-lg btn-outline-light">Browse Dorms</a>
            </div>
        </div>
    </section>

    <!-- JavaScript for animations -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Navbar scroll effect
            window.addEventListener('scroll', function () {
                const navbar = document.querySelector('.navbar-custom');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // Animation for fade-in elements
            const fadeElems = document.querySelectorAll('.fade-in');
            const zoomElems = document.querySelectorAll('.zoom-in');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, { threshold: 0.1 });

            fadeElems.forEach(elem => {
                observer.observe(elem);
            });

            zoomElems.forEach(elem => {
                observer.observe(elem);
            });
        });
    </script>
</body>

<?php include "partials/footer.php" ?>