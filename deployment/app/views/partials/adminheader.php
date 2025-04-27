<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DormLynk Admin</title>

    <link rel="stylesheet" href="<?= ROOT ?>/assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/style.css">
</head>

<body>
    <div class="overlay"></div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom px-5 py-3">
        <a class="navbar-brand fw-bold fs-4" href="<?= ROOT ?>/admindashboard">
            <img src="<?= ROOT ?>/assets/images/logo.png" alt="DormLynk Logo" class="me-2" style="height: 40px;">
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto gap-3">
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Products</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Option 1</a></li>
                        <li><a class="dropdown-item" href="#">Option 2</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Company</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">About Us</a></li>
                        <li><a class="dropdown-item" href="#">Careers</a></li>
                    </ul>
                </li> -->
                <li class="nav-item"><a class="nav-link" href="<?= ROOT ?>/admindashboard">Dashboard</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="DatabaseDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Database
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="DatabaseDropdown">
                        <li><a class="dropdown-item" href="<?= ROOT ?>/rooms">Rooms</a></li>
                        <li><a class="dropdown-item" href="<?= ROOT ?>/admin">Applications</a></li>
                        <li><a class="dropdown-item" href="<?= ROOT ?>/users">Users</a></li>

                        <li><a class="dropdown-item" href="<?= ROOT ?>/owners">Owners</a></li>
                        <li><a class="dropdown-item" href="<?= ROOT ?>/dorms">Dorms</a></li>
                        <?php if (isset($_SESSION['USER']) && $_SESSION['USER']->role === 'superadmin'): ?>
                            <li><a class="dropdown-item" href="<?= ROOT ?>/admin">Admin</a></li>
                        <?php endif; ?>

                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="<?= ROOT ?>/about">Transaction</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="DatabaseDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="MoreDropdown">
                        <li><a class="dropdown-item" href="<?= ROOT ?>/rooms">Archieve</a></li>
                        <li><a class="dropdown-item" href="<?= ROOT ?>/users">Reports</a></li>
                    </ul>
                </li>

                <li>
                    <hr class="divider">
                </li>







            </ul>


            <?php if (empty($_SESSION['USER'])): ?>

                <a href="<?= ROOT ?>/login" class="custom-button text-white">Login</a>

            <?php else: ?>

                <div class="dropdown">
                    <a class="d-flex align-items-center text-decoration-none dropdown-toggle" href="#" role="button"
                        id="adminprofileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?= ROOT ?>/public/assets/images/<?= $_SESSION['USER']->image ?>" alt="Profile" width="32"
                            height="32" class="rounded-circle me-2">
                        <span>Profile</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item" href="<?= ROOT ?>/profile">View Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?= ROOT ?>/logout">Logout</a></li>
                    </ul>
                </div>

            <?php endif; ?>

        </div>
    </nav>