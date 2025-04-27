<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DormLynk</title>

  <!-- jQuery (required by Bootstrap 4) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Bootstrap 4 Bundle (with Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


  <link rel="stylesheet" href="<?= ROOT ?>/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= ROOT ?>/assets/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>

<body>
  <div class="overlay"></div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light navbar-custom px-5 py-3">
    <a class="navbar-brand fw-bold fs-4" href="<?= ROOT ?>/dormdashboard">
      <img src="<?= ROOT ?>/assets/images/logo.png" alt="DormLynk Logo" class="me-2" style="height: 40px;">

    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav ms-auto gap-3">
        <li class="nav-item"><a class="nav-link" href="<?= ROOT ?>/dormdashboard">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= ROOT ?>/mydorms">My Dorms</a></li>

        <!-- <li class="nav-item"><a class="nav-link" href="<?= ROOT ?>/mydorms/create">Add Dorm</a></li> -->

        <!-- <li class="nav-item"><a class="nav-link" href="<?= ROOT ?>/myrooms">My Rooms</a></li> -->
        <li class="nav-item"><a class="nav-link" href="<?= ROOT ?>/applications/owner">Applications</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= ROOT ?>/Owners/booking">Bookings</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= ROOT ?>/payouts">Payouts</a></li>
        <li>
          <hr class="divider">
        </li>
      </ul>

      <?php if (empty($_SESSION['USER'])): ?>
        <a href="<?= ROOT ?>/login" class="custom-button text-white">Login</a>
      <?php else: ?>
        <div class="dropdown">
          <a class="d-flex align-items-center text-decoration-none dropdown-toggle" href="#" role="button"
            id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
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