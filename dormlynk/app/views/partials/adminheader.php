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
  <nav class="navbar sticky-top navbar-expand-lg bg-primary">
    <div class="container">
      <img src="assets/images/home.png" alt="" href="<?= ROOT ?>/admindash">
      <a class="navbar-brand" href="<?= ROOT ?>/admindash">DormLynk Admin</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/admindash">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Dorms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/users">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Payment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Reports</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Archive</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/comas">CL-A</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/combs">CL-B</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/comcs">CL-C</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/comds">CL-D</a>
            </li> -->
            

            
            <?php if (!empty($_SESSION['USER'])): ?>
            <!-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/reports">Reports</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/users">Users</a>
            </li> -->

            <!-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/profile">My Profile</a>
            </li> -->
            
            <?php endif; ?>
          

        </ul>

        <?php if (empty($_SESSION['USER'])): ?>

          <a href="<?= ROOT ?>/login" class="btn btn-secondary">Login</a>

        <?php else: ?>

          <span class="me-3">
            <img class="rounded-circle" width="30px" height="30px" src="<?= ROOT ?>/<?= $_SESSION['USER']->image ?>"
              alt="">
            <?= $_SESSION['USER']->firstname ?>
            <?= $_SESSION['USER']->lastname ?>
          </span>

          <a href="<?= ROOT ?>/logout" class="btn btn-secondary">Logout</a>

        <?php endif; ?>

      </div>
    </div>
  </nav>