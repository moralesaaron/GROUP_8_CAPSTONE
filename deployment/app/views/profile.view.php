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

<!-- Add custom CSS for animations and styling -->
<style>
  .profile-container {
    max-width: 900px;
    margin: 0 auto;
    padding: 2rem 1rem;
  }

  .profile-heading {
    position: relative;
    margin-bottom: 2rem;
    padding-bottom: 0.5rem;
    font-weight: 600;
    color: #333;
  }

  .profile-heading::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 60px;
    background: linear-gradient(to right, rgb(252, 123, 2), rgb(245, 119, 16));
    transition: width 0.3s ease;
  }

  .profile-heading:hover::after {
    width: 120px;
  }

  .profile-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: none;
  }

  .profile-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  }

  .profile-header {
    background: linear-gradient(135deg, rgb(243, 145, 17) 0%, rgb(252, 101, 1) 100%);
    padding: 2rem;
    color: white;
  }

  .profile-body {
    padding: 2rem;
  }

  .profile-avatar {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    border: 4px solid rgba(255, 255, 255, 0.2);
    object-fit: cover;
    transition: transform 0.3s ease;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  }

  .profile-avatar:hover {
    transform: scale(1.05);
  }

  .profile-info {
    animation: fadeIn 0.5s ease-in-out;
  }

  .profile-name {
    font-size: 1.8rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
  }

  .profile-role {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    padding: 0.3rem 1rem;
    border-radius: 20px;
    font-size: 0.9rem;
    margin-bottom: 0.5rem;
  }

  .profile-email {
    opacity: 0.8;
    font-size: 1rem;
  }

  .profile-detail {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
  }

  .profile-icon {
    margin-right: 10px;
    color: #4e73df;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(10px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



<div class="profile-container">
  <h2 class="profile-heading">My Profile</h2>

  <div class="profile-card">
    <div class="profile-header d-flex flex-column flex-md-row align-items-center">
      <img src="<?= ROOT ?>/public/assets/images/<?= $_SESSION['USER']->image ?>" alt="Profile Picture"
        class="profile-avatar me-md-4">
      <div class="profile-info text-center text-md-start mt-3 mt-md-0">
        <h3 class="profile-name"><?= $_SESSION['USER']->firstname ?> <?= $_SESSION['USER']->lastname ?></h3>
        <span class="profile-role"><?= ucfirst($_SESSION['USER']->role) ?></span>
        <p class="profile-email">
          <i class="fas fa-envelope profile-icon"></i>
          <?= $_SESSION['USER']->email ?>
        </p>
      </div>
    </div>

    <div class="profile-body">
      <div class="row">
        <div class="col-md-6">
          <div class="profile-detail">
            <i class="fas fa-id-card profile-icon"></i>
            <div>
              <strong>Account Type</strong>
              <p><?= ucfirst($_SESSION['USER']->role) ?> Account</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="profile-detail">
            <i class="fas fa-calendar-alt profile-icon"></i>
            <div>
              <strong>Member Since</strong>
              <p><?= date('F Y') ?></p>
            </div>
          </div>
        </div>
      </div>

      <div class="text-end mt-4">
        <a href="#" class="btn btn-outline-primary me-2">
          <i class="fas fa-pen me-1"></i> Edit Profile
        </a>
      </div>
    </div>
  </div>
</div>

<?php include "partials/footer.php" ?>