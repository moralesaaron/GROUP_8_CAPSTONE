<?php
include __DIR__ . '/../partials/adminheader.php';
?>

<div class="admin-dashboard">
  <div class="dashboard-header">
    <h1>Admin Dashboard</h1>
    <div class="welcome-message">
      Welcome, <?= ($_SESSION['USER']->firstname ?? '') . ' ' . ($_SESSION['USER']->lastname ?? '') ?>!
    </div>
  </div>

  <div class="dorm-description">
    <h2>Campus Dorm Management System</h2>
    <p>Efficiently manage dormitory operations, room assignments, and student applications from one central dashboard.
      Our system streamlines administrative tasks while providing real-time insights into campus housing.</p>
  </div>

  <div class="dashboard-stats">
    <a href="<?= ROOT ?>/users" class="stat-card">
      <div class="stat-icon"><i class="fas fa-users"></i></div>
      <div class="stat-content">
        <h3>Users</h3>
        <p>Manage user accounts</p>
      </div>
    </a>
    <a href="<?= ROOT ?>/dorms" class="stat-card">
      <div class="stat-icon"><i class="fas fa-building"></i></div>
      <div class="stat-content">
        <h3>Dorms</h3>
        <p>View all dormitories</p>
      </div>
    </a>
    <a href="<?= ROOT ?>/rooms" class="stat-card">
      <div class="stat-icon"><i class="fas fa-door-open"></i></div>
      <div class="stat-content">
        <h3>Rooms</h3>
        <p>Room management</p>
      </div>
    </a>
    <a href="<?= ROOT ?>/applications" class="stat-card">
      <div class="stat-icon"><i class="fas fa-file-alt"></i></div>
      <div class="stat-content">
        <h3>Applications</h3>
        <p>Process applications</p>
      </div>
    </a>
  </div>
</div>

<style>
  .admin-dashboard {
    padding: 2rem;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    padding-top: 100px;
    padding-bottom: 100px;
  }

  .dashboard-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid #ff8c00;
    padding-top: 30px;
    padding-bottom: 30px;
  }

  .dashboard-header h1 {
    color: #333;
    margin: 0;
    font-size: 1.8rem;
  }

  .welcome-message {
    font-size: 1rem;
    color: #666;
    background-color: #fff;
    padding: 0.75rem 1.5rem;
    border-radius: 4px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    border-left: 4px solid #ff8c00;
  }

  .dorm-description {
    background-color: #fff;
    padding: 1.5rem;
    margin-bottom: 2rem;
    border-radius: 6px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    border-left: 4px solid #ff8c00;
  }

  .dorm-description h2 {
    color: #ff8c00;
    margin-top: 0;
    margin-bottom: 0.75rem;
    font-size: 1.4rem;
  }

  .dorm-description p {
    color: #555;
    margin: 0;
    line-height: 1.6;
  }

  .dashboard-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 1.5rem;
  }

  .stat-card {
    display: flex;
    align-items: center;
    background-color: #fff;
    padding: 1.25rem;
    border-radius: 6px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    transition: transform 0.2s, box-shadow 0.2s;
    text-decoration: none;
    color: inherit;
  }

  .stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    border-left: 4px solid #ff8c00;
  }

  .stat-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(255, 140, 0, 0.15);
    color: #ff8c00;
    font-size: 1.5rem;
    width: 50px;
    height: 50px;
    border-radius: 10px;
    margin-right: 1rem;
  }

  .stat-content h3 {
    margin: 0 0 0.25rem 0;
    color: #333;
    font-size: 1.1rem;
  }

  .stat-content p {
    margin: 0;
    color: #777;
    font-size: 0.9rem;
  }

  @media (max-width: 768px) {
    .dashboard-header {
      flex-direction: column;
      align-items: flex-start;
    }

    .welcome-message {
      margin-top: 1rem;
      width: 100%;
    }
  }
</style>

<?php
include __DIR__ . '/../partials/footer.php';
?>