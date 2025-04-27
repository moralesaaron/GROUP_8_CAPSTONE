<?php include "partials/header.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>css</title>
    <link rel="stylesheet" href="about.css">

    <style>
        :root {
            --primary: #F2501B;
            --secondary: #F2501B;
            --accent: #F2501B;
            --light: #f8f9fa;
            --dark: #212529;
            --text-primary: ##1f1e1b !important;
            --text-secondary: #000000;
            --text-light: #f8f9fa;
            --shadow-sm: 0 .125rem .25rem rgba(0, 0, 0, .075);
            --shadow-md: 0 .5rem 1rem rgba(0, 0, 0, .15);
            --shadow-lg: 0 1rem 3rem rgba(0, 0, 0, .175);
            --transition: all 0.3s ease;
            --border-radius: 0.5rem;
            --font-main: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        body {
            font-family: var(--font-main);
            color: var(--text-primary);
            overflow-x: hidden;
            line-height: 1.7;
        }

        /* Typography */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .display-3 {
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            position: relative;
            margin-bottom: 1rem;
        }

        .lead {
            font-size: 1.25rem;
            font-weight: 400;
            line-height: 1.8;
        }

        .text-gradient {
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Accent Line */
        .accent-line {
            height: 5px;
            width: 80px;
            background: #f28705;
            border-radius: 5px;
            margin-bottom: 2rem;
        }

        /* Hero Section */
        .about-hero {
            padding: 7rem 0;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(248, 249, 250, 0.9) 100%);
            position: relative;
            overflow: hidden;
        }

        .about-hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%234361ee' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
            z-index: -1;
        }

        .hero-image {
            transition: var(--transition);
            box-shadow: var(--shadow-lg);
            transform: perspective(1000px) rotateY(-5deg);
        }

        .hero-image:hover {
            transform: perspective(1000px) rotateY(0deg) scale(1.02);
        }



        /* Additional Sections (e.g., Story, Team, Stats, etc.) would be placed here similarly */
    </style>
</head>

<body>
    <div class="about-hero py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="display-3 fw-bold  animate__animated animate__fadeInLeft">About Us
                    </h1>
                    <div class="accent-line mb-4 animate__animated animate__fadeInLeft animate__delay-1s"></div>
                    <p class="lead text-body-secondary mt-3 ">
                        Welcome to DormLynk — Where You Find Your Perfect Dorm! We connect dorm owners and tenants in
                        one
                        easy-to-use platform, making dorm hunting and management simple for everyone.
                    </p>
                    <div class="mt-4 animate__animated animate__fadeInUp animate__delay-3s">


                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <img src="<?= ROOT ?>/assets/images/about.jpg" alt="DormLynk platform"
                        class="img-fluid rounded-4 shadow-lg animate__animated animate__fadeInRight hero-image" />
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 class="section-title animate__animated animate__fadeInUp">Our Story</h2>
                    <div class="accent-line mx-auto mb-4 animate__animated animate__fadeInUp animate__delay-1s"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="card h-100 border-0 shadow-md animate__animated animate__fadeInLeft story-card">
                        <div class="card-body p-5">
                            <p class="lead text-body-secondary">
                                Founded by former college roommates who experienced firsthand the challenges
                                of finding quality dorm accommodations, DormLynk was created to solve a common problem
                                faced by students everywhere.
                            </p>
                            <p>
                                Our founders recognized that while universities often provide housing resources, there
                                was no comprehensive platform connecting private dorm owners with students looking for
                                alternatives to traditional campus housing.
                            </p>
                            <p>
                                Today, DormLynk serves thousands of students and dorm owners across the country, making
                                the dorm hunting experience simpler and more efficient for everyone involved.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="timeline animate__animated animate__fadeInRight">
                        <div class="timeline-item">
                            <div class="timeline-point">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div class="timeline-content timeline-content-transition">
                                <h4>The Idea</h4>
                                <p>DormLynk began as a simple idea between friends frustrated with their own dorm
                                    hunting experiences.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-point">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div class="timeline-content timeline-content-transition">
                                <h4>Launch Day</h4>
                                <p>After months of development, DormLynk launched at three major universities.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-point">
                                <i class="fas fa-expand-alt"></i>
                            </div>
                            <div class="timeline-content timeline-content-transition">
                                <h4>Expansion</h4>
                                <p>Within a year, we expanded to over 25 campuses nationwide.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-point">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="timeline-content timeline-content-transition">
                                <h4>Today</h4>
                                <p>DormLynk now serves students across the country with plans for international
                                    expansion.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="vision-card animate__animated animate__fadeInUp card-effect">
                    <div class="icon-circle mb-4">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h2 class="section-title">Our Vision</h2>
                    <div class="accent-line mb-4"></div>
                    <p class="lead mb-4 text-body-secondary">To become the top platform for dormitory living, where
                        finding and managing
                        dorms is effortless, reliable, and accessible for everyone.</p>
                    <p>At DormLynk, we aim to simplify the dorm experience and help people connect with the spaces
                        they'll call home. By building intuitive tools and fostering community connections, we're
                        transforming how students experience campus living.</p>
                    <p>By 2030, we envision DormLynk being present at every major educational institution globally,
                        making student housing simpler for millions.</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="mission-card animate__animated animate__fadeInUp animate__delay-1s card-effect">
                    <div class="icon-circle mb-4">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h2 class="section-title">Our Mission</h2>
                    <div class="accent-line mb-4"></div>
                    <p class="lead mb-4 text-body-secondary">To make dorm hunting and management easy for both tenants
                        and dorm owners
                        through innovative technology and community building.</p>
                    <p>We help tenants discover their ideal dorms through a smooth and stress-free process, while
                        empowering dorm owners to showcase their properties, attract renters, and manage inquiries
                        efficiently.</p>
                    <p>By building trust and fostering strong connections, we create a community where everyone feels
                        supported. We're committed to continuous improvement, leveraging technology to solve real
                        problems in student housing.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 class="section-title animate__animated animate__fadeInUp">Our Core Values</h2>
                    <div class="accent-line mx-auto mb-4 animate__animated animate__fadeInUp animate__delay-1s"></div>
                    <p class="lead text-body-secondary animate__animated animate__fadeInUp animate__delay-2s">At
                        DormLynk, our values guide
                        everything we do as we work to transform the dorm living experience.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="value-card animate__animated animate__fadeInUp card-effect">
                        <div class="value-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3>Simplicity</h3>
                        <p>We believe in keeping things straightforward and user-friendly. Our platform is designed to
                            be intuitive and accessible for everyone.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="value-card animate__animated animate__fadeInUp animate__delay-1s card-effect">
                        <div class="value-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Trust</h3>
                        <p>Building trust through transparency and reliable service is at the core of everything we do
                            at DormLynk.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="value-card animate__animated animate__fadeInUp animate__delay-2s card-effect">
                        <div class="value-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h3>Innovation</h3>
                        <p>We continuously strive to improve our platform with new features and technologies that
                            enhance the user experience.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="value-card animate__animated animate__fadeInUp animate__delay-3s card-effect">
                        <div class="value-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Community</h3>
                        <p>We foster connections between dorm owners and tenants, creating a supportive community around
                            campus living.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="section-title animate__animated animate__fadeInUp">Meet Our Team</h2>
                <div class="accent-line mx-auto mb-4 animate__animated animate__fadeInUp animate__delay-1s"></div>
                <p class="lead text-body-secondary animate__animated animate__fadeInUp animate__delay-2s">The passionate
                    individuals behind
                    DormLynk who are dedicated to improving student housing experiences.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="team-card animate__animated animate__fadeInUp team-card-hover">
                    <div class="team-img-container">
                        <img src="./assets/images/pic.jpg" alt="Team Member" class="img-fluid team-img" />
                    </div>
                    <div class="team-info">
                        <h4>Aaro John Morales</h4>
                        <p class="text-primary">From BSIS 4-F</p>
                        <p class="team-bio text-body-secondary">"Life begins at the end of your comfort zone."
                            experiences.</p>
                        <div class="team-social">
                            <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="team-card animate__animated animate__fadeInUp animate__delay-1s team-card-hover">
                    <div class="team-img-container">
                        <img src="./assets/images/pic.jpg" alt="Team Member" class="img-fluid team-img" />
                    </div>
                    <div class="team-info">
                        <h4>Justine Evangelista</h4>
                        <p class="text-primary">From BSIS 4-F</p>
                        <p class="team-bio text-body-secondary">"Sometimes you win, sometimes you learn."
                            innovation.</p>
                        <div class="team-social">
                            <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="team-card animate__animated animate__fadeInUp animate__delay-2s team-card-hover">
                    <div class="team-img-container">
                        <img src="./assets/images/pic.jpg" alt="Team Member" class="img-fluid team-img" />
                    </div>
                    <div class="team-info">
                        <h4>Catrina Legaspina</h4>
                        <p class="text-primary">From BSIS 4-F</p>
                        <p class="team-bio text-body-secondary">"Do what you can, with what you have, where you are."
                        </p>
                        <div class="team-social">
                            <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="team-card animate__animated animate__fadeInUp animate__delay-3s team-card-hover">
                    <div class="team-img-container">
                        <img src="./assets/images/pic.jpg" alt="Team Member" class="img-fluid team-img" />
                    </div>
                    <div class="team-info">
                        <h4>Sheila May Cruz </h4>
                        <p class="text-primary">From BSIS 4-F</p>
                        <p class="team-bio text-body-secondary">"Don’t count the days, make the days count."
                        </p>
                        <div class="team-social">
                            <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-3 col-sm-6">
                <div class="stat-card text-center animate__animated animate__fadeInUp stat-card-hover">
                    <div class="stat-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="stat-number">5,000+</h3>
                    <p class="stat-title">Dorms Listed</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div
                    class="stat-card text-center animate__animated animate__fadeInUp animate__delay-1s stat-card-hover">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="stat-number">10,000+</h3>
                    <p class="stat-title">Happy Students</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div
                    class="stat-card text-center animate__animated animate__fadeInUp animate__delay-2s stat-card-hover">
                    <div class="stat-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="stat-number">75+</h3>
                    <p class="stat-title">Universities</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div
                    class="stat-card text-center animate__animated animate__fadeInUp animate__delay-3s stat-card-hover">
                    <div class="stat-icon">
                        <i class="fas fa-city"></i>
                    </div>
                    <h3 class="stat-number">30+</h3>
                    <p class="stat-title">Cities</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-primary py-5 cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="text-white animate__animated animate__fadeInLeft">Ready to find your perfect dorm?</h2>
                    <p class="text-white-50 lead animate__animated animate__fadeInLeft animate__delay-1s">Join thousands
                        of students who've simplified their dorm hunt with DormLynk.</p>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <a href="#" class="btn btn-light btn-lg animate__animated animate__fadeInRight cta-button">Sign Up
                        Now</a>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include "partials/footer.php" ?>