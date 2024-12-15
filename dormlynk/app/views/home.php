<?php include "partials/header.php" ?>

<div class="container mt-5 w-50">

<section class="hero">
        <div class="text">
            <h1>Find Your Perfect Link with</h1>
            <div class="name">
                <img src="<?= ROOT ?>/assets/images/dormlynk_logo.png" alt="name">
                <p>Say goodbye to the dorm hunt hassle. Browse a variety of cozy, budget-friendly dorms tailored to your academic life. Your next home is waiting!</p>
            </div>
            <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search Dorm" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
            <!-- <div class="search-bar">
                <input type="text" placeholder="Search Dorm">
                <button>🔍</button>
            </div> -->
        </div>
        <div class="hero-image">
            <!-- <img src="assets/head.png" alt="Bunk Bed"> -->
        </div>
    </section>


<!-- <section class="about">
    <h2>About Us</h2>
    <div class="about-content">
        <div class="about-image">
            <img src="assets/woman.png" alt="Character">
        </div>
        <div class="about-text">
            <p>DormLynk is a modern platform connecting dorm owners and tenants in one convenient hub. We make dorm rentals hassle-free by showcasing available dormitories, allowing owners to reach potential tenants directly and at no extra cost. With DormLynk, tenants can explore detailed dorm listings, compare options, and inquire online with ease. Our user-friendly system includes a tenant portal for secure payments, maintenance requests, and real-time communication with dorm management. Join DormLynk and experience an effortless approach to dorm rentals—where convenience meets community!</p>
        </div>
    </div>
</section> -->


    <!-- Explore Dorms Section -->
    <!-- <section class="explore-dorms">
        <h2>Explore Dorms</h2>
        <div class="dorm-cards">
            <div class="dorm-card">
                <img src="assets/dorm.png" alt="Dorm 1">
                <div class="card-content">
                    <h3>De Luna Dormitory</h3>
                    <p>123, Malolos, Bulacan</p>
                    <p class="price">₱20,000 monthly</p>
                    <a href="#" class="view-button">View</a>
                </div>
            </div>
            <div class="dorm-card">
                <img src="assets/dorm.png" alt="Dorm 2">
                <div class="card-content">
                    <h3>De Luna Dormitory</h3>
                    <p>123, Malolos, Bulacan</p>
                    <p class="price">₱20,000 monthly</p>
                    <a href="#" class="view-button">View</a>
                </div>
            </div>
            <div class="dorm-card">
                <img src="assets/dorm.png" alt="Dorm 3">
                <div class="card-content">
                    <h3>De Luna Dormitory</h3>
                    <p>123, Malolos, Bulacan</p>
                    <p class="price">₱20,000 monthly</p>
                    <a href="#" class="view-button">View</a>
                </div>
            </div>
        </div>
    </section> -->


    <section class="services">
        <div class="container">
            <h1>Our <span style="color: #ff6d00">Services</span></h1>
            <div class="service-grid">
                <div class="service-item">
                    <!-- <img src="<?= ROOT ?>/assets/images/product.png" alt="Service Logo"> -->
                    <h3><img src="<?= ROOT ?>/assets/images/product.png" alt="Service Logo">Dormitory Listings & Marketing</h3>
                    <p>DormLynk provides a platform for dormitory owners to list their properties through detailed profiles, helping tenants discover available rooms.</p>
                </div>
                <div class="service-item">
                    
                    <h3><img src="<?= ROOT ?>/assets/images/booking (1).png" alt="Service Logo">Online Room Inquiry & Booking</h3>
                    <p>We simplify room booking by allowing prospective tenants to easily inquire and reserve rooms online, saving valuable time and effort.</p>
                </div>
                <div class="service-item">
                    
                    <h3><img src="<?= ROOT ?>/assets/images/browser.png" alt="Service Logo">Tenant Portal</h3>
                    <p>Tenants can manage their leases, review payments, and stay connected with dorm management through a single portal.</p>
                </div>
                <div class="service-item">
                    
                    <h3><img src="<?= ROOT ?>/assets/images/online-payment.png" alt="Service Logo">Secure Online Payments</h3>
                    <p>DormLynk ensures secure payment options for tenants and guarantees timely payments to dorm owners.</p>
                </div>
                <div class="service-item">
                    
                    <h3><img src="<?= ROOT ?>/assets/images/customer-service.png" alt="Service Logo">24/7 Customer Support</h3>
                    <p>Our dedicated team is available round-the-clock to assist with inquiries and resolve tenant or dorm owner concerns promptly.</p>
                </div>
                <div class="service-item">
                    
                    <h3><img src="<?= ROOT ?>/assets/images/virtual-meeting.png" alt="Service Logo">Virtual Room Tours</h3>
                    <p>DormLynk offers virtual room tours to give prospective tenants a detailed view of available dormitories.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="highlight-section">
        <p>Only <span>5 simple steps</span> to finding your ideal home away from home with <span>DormLynk</span>.</p>
    </section>


    <!-- CTA Section -->
    <section class="cta-section">
        <div>
            <h2>For Tenants</h2>
            <p>Discover secure and comfortable dorms, schedule a tour, and get ready to move in with ease.</p>
            <div class="cta-buttons">
                <a href="<?= ROOT ?>/browse" class="btn btn-primary btn-sm">Find Dorms</a>
            </div>
        </div>
        <div>
            <h2>For Dorm Owners</h2>
            <p>List your property, attract renters, and keep your rooms filled.</p>
            <div class="cta-buttons">
                <a href="<?= ROOT ?>/dorms/create" class="btn btn-primary btn-sm">Create My Dorm</a>
            </div>
        </div>
    </section>

  


  </div>
</div>


</div>





<div class="container flex">


</div>



<?php include "partials/footer.php" ?>