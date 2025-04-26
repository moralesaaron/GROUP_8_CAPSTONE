<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DormLynk</title>

    <link rel="stylesheet" href="<?= ROOT ?>/assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/style.css">
</head>

<body>
    <div class="overlay"></div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom px-5 py-3">
        <a class="navbar-brand fw-bold fs-4" href="<?= ROOT ?>/home">
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
                <li class="nav-item"><a class="nav-link" href="<?= ROOT ?>/home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= ROOT ?>/explore">Explore</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= ROOT ?>/about">About</a></li>
                <li>
                    <hr class="divider">
                </li>







                <!-- <li class="nav-item"><a class="custom-button text-white" href="<?= ROOT ?>/login">Login</a></li> -->
                <!-- <li class="nav-item"><a class="custom-button text-white" data-bs-toggle="modal" data-bs-target="#loginModal" href="#">Login</a></li> -->
            </ul>


            <?php if (empty($_SESSION['USER'])): ?>

                <a href="<?= ROOT ?>/login" class="custom-button text-white">Login</a>

            <?php else: ?>

                <div class="dropdown">
                    <a class="d-flex align-items-center text-decoration-none dropdown-toggle" href="#" role="button"
                        id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?= ROOT ?>/public/assets/images/<?= $_SESSION['USER']->image ?>" alt="Profile" width="32"
                            height="32" class="rounded-circle me-2">

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

    <!-- Login Modal -->
    <!-- <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-success">Login</button>
                </form>
            </div>
        </div>
    </div>
</div> -->