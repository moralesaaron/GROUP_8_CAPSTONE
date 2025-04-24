<?php
include __DIR__ . '/../partials/adminheader.php';
?>

<div class="container hero-section">
  <h2>Admin Dashboard</h2>
  

<p>Welcome, <?= ($_SESSION['USER']->firstname ?? '') . ' ' . ($_SESSION['USER']->lastname ?? '') ?>!</p>

  <p>Here's a quick overview of your admin panel.</p>

  <ul>
    <li><a href="<?= ROOT ?>/users">Manage Users</a></li>
    <li><a href="<?= ROOT ?>/dorms">View Dorm Listings</a></li>
    <li><a href="<?= ROOT ?>/rooms">Manage Rooms</a></li>
    <li><a href="<?= ROOT ?>/applications">Handle Applications</a></li>
  </ul>
</div>

<?php
include __DIR__ . '/../partials/footer.php';
?>
