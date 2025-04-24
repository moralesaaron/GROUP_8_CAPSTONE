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
        DormLynk</a>
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
                
            </ul>
        </div>
    </nav>

    <!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
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
</div>


