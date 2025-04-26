<?php 
if (isset($_SESSION['USER'])) {
  if ($_SESSION['USER']->role === 'admin') {
    include __DIR__ . '/partials/adminheader.php';
  } elseif ($_SESSION['USER']->role === 'dorm') {
    include __DIR__ . '/partials/ownerheader.php';
  } elseif ($_SESSION['USER']->role === 'user') {
    include __DIR__ . '/partials/header.php';
  }
}
?>


<div class="container hero-section"></div>
    <div class="container mt-5">
        <h2 class="mb-4">My Billings</h2>

        <div class="card p-4 shadow">
            <div class="d-flex align-items-center">
                <img src="<?= ROOT ?>/public/assets/images/<?= $_SESSION['USER']->image ?>" alt="Profile Picture" class="rounded-circle me-3" width="80" height="80">
                <div>
                    <h4><?= $_SESSION['USER']->firstname ?> <?= $_SESSION['USER']->lastname ?></h4>
                    <p><?= $_SESSION['USER']->role ?> </p>
                    <p><?= $_SESSION['USER']->email ?></p>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

<?php include "partials/footer.php" ?>
