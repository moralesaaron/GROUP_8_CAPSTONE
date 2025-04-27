<?php
include __DIR__ . '/../partials/ownerheader.php';
?>

<div class="container hero-section">
  <div class="welcome-message">
    <h1>Welcome to Dormlynk</h1>
    <p class="tagline">Your complete dorm management solution</p>
    <div class="welcome-description">
      <p>Manage your dorm properties efficiently and effectively with our comprehensive dashboard. Access real-time
        occupancy data, track payments, manage maintenance requests, and communicate with your residents all in one
        place.</p>
      <p>Dormlynk helps you streamline your operations, increase resident satisfaction, and maximize your property's
        potential. Navigate through the dashboard sections to get started.</p>
    </div>
    <div class="date-display">
      <script>
        const now = new Date();
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        document.write(now.toLocaleDateString('en-US', options));
      </script>
    </div>
  </div>

</div>

<style>
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }

  .hero-section {
    position: relative;
    padding: 30px 0;
  }

  .welcome-message {
    background: linear-gradient(135deg, #FF6B01 0%, #FF8933 100%);
    border-radius: 8px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    color: white;
    animation: fadeIn 0.6s ease-out;
    position: relative;
    overflow: hidden;
  }

  .welcome-message::after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 150px;
    height: 150px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    transform: translate(50%, -50%);
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

  .welcome-message h1 {
    font-size: 28px;
    margin-bottom: 8px;
    font-weight: 600;
  }

  .tagline {
    font-size: 18px;
    margin-bottom: 16px;
    font-weight: 300;
    opacity: 0.9;
  }

  .welcome-description {
    margin: 20px 0;
    max-width: 90%;
    line-height: 1.6;
  }

  .welcome-description p {
    margin-bottom: 12px;
    font-size: 15px;
  }

  .date-display {
    margin-top: 15px;
    font-size: 14px;
    opacity: 0.8;
    font-style: italic;
  }

  h2 {
    color: #404040;
    margin-top: 10px;
  }
</style>

<?php
include __DIR__ . '/../partials/footer.php';
?>