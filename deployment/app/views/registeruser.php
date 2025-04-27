<?php include "partials/header.php" ?>

<style>
/* Registration Page Styles */
:root {
  --primary-color: #f15a24;
  --secondary-color: #333333;
  --light-color: #f8f9fa;
  --border-color: #e1e1e1;
  --input-bg: #f5f5f5;
  --shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  --transition: all 0.3s ease;
}

body {
  font-family: 'Poppins', sans-serif;
  background-color: #f8f9fa;
  margin: 0;
  padding: 0;
}

/* Main Container */
.registration-container {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  padding: 40px 0;
}

.registration-wrapper {
  display: flex;
  width: 100%;
  max-width: 1000px;
  margin: 0 auto;
  background-color: white;
  box-shadow: var(--shadow);
  border-radius: 12px;
  overflow: hidden;
}

/* Left Section */
.registration-left {
  flex: 1;
  background-color: white;
  padding: 40px;
  display: flex;
  flex-direction: column;
  justify-content: start;
  position: relative;
}

.welcome-content {
  text-align: left;
  position: relative;
  z-index: 2;
}

.welcome-title {
  color: var(--primary-color);
  font-size: 2.7rem;
  font-weight: 800;
  margin-bottom: 5px;
  animation: fadeIn 0.8s ease forwards;
}

.welcome-subtitle {
  color: var(--secondary-color);
  font-size: 1.3rem;
  font-weight: 500;
  margin-bottom: 10px;
  animation: slideUp 0.6s ease forwards 0.3s;
  opacity: 0;
  transform: translateY(20px);
}

.character-image-container {
  position: relative;
  display: flex;
  justify-content: center;
  margin-top: 50px;
}

.character-image {
  width: 600%;       
  max-width: 500px;  
  height: auto;
  animation: floatAnimation 4s ease-in-out infinite;
}

/* Right Section */
.registration-right {
  flex: 1;
  padding: 20px;
  background-color: white;
  
}

.form-container {
  max-width: 350px;
  margin: 0 auto;
  padding: 20px 15px;
  border-radius: 8px;
  animation: fadeIn 0.8s ease forwards;
}

.form-header {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
  font-size: 4rem;
}

.logo-container {
  margin-right: 10px;
}

.logo-image {
  width: 30px;
  height: 30px;
}

.form-title {
  font-size: 1rem;
  color: var(--secondary-color);
  margin: 0;
}

/* Form Styles */
.registration-form {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.form-group {
  margin-bottom: 4px;
  animation: slideUp 0.5s ease forwards;
  opacity: 0;
  transform: translateY(10px);
}

.form-group:nth-child(1) { animation-delay: 0.1s; }
.form-group:nth-child(2) { animation-delay: 0.2s; }
.form-group:nth-child(3) { animation-delay: 0.3s; }
.form-group:nth-child(4) { animation-delay: 0.4s; }
.form-group:nth-child(5) { animation-delay: 0.5s; }
.form-group:nth-child(6) { animation-delay: 0.6s; }
.form-group:nth-child(7) { animation-delay: 0.7s; }
.form-group:nth-child(8) { animation-delay: 0.8s; }

.form-label {
  display: block;
  font-size: 0.8rem;
  margin-bottom: 4px;
  color: #555;
  font-weight: 500;
}

.form-input,
.form-select {
  width: 100%;
  padding: 8px 12px;
  border: 1px solid var(--border-color);
  border-radius: 4px;
  font-size: 0.85rem;
  transition: var(--transition);
  background-color: var(--input-bg);
}

.form-input:focus,
.form-select:focus {
  border-color: var(--primary-color);
  outline: none;
  box-shadow: 0 0 0 2px rgba(241, 90, 36, 0.2);
}

.file-input {
  padding: 6px;
  font-size: 0.8rem;
}

/* Button Styles */
.register-button {
  background-color: var(--primary-color);
  color: white;
  border: none;
  border-radius: 4px;
  padding: 10px 15px;
  font-size: 0.9rem;
  font-weight: 600;
  cursor: pointer;
  transition: var(--transition);
  text-transform: lowercase;
  width: 100%;
  margin-top: 8px;
  position: relative;
  overflow: hidden;
  letter-spacing: 1px;
}

.register-button::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
  transition: 0.5s;
}

.register-button:hover::before {
  left: 100%;
}

.register-button:hover {
  background-color: #e04d15;
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(241, 90, 36, 0.3);
}

.login-link {
  margin-top: 12px;
  text-align: center;
  font-size: 0.8rem;
  color: #666;
  animation: fadeIn 1s ease forwards 1s;
  opacity: 0;
}

.login-button {
  color: var(--primary-color);
  text-decoration: none;
  font-weight: 600;
  transition: var(--transition);
}

.login-button:hover {
  color: #e04d15;
  text-decoration: underline;
}

/* Animations */
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes slideUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes floatAnimation {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-15px);
  }
}

/* Alert Styles */
.alert {
  padding: 10px;
  margin-bottom: 15px;
  border-radius: 4px;
  animation: fadeIn 0.5s ease forwards;
  font-size: 0.8rem;
}

.alert-warning {
  background-color: #fff3cd;
  border-left: 3px solid #ffc107;
  color: #856404;
}

.btn-close {
  float: right;
  font-size: 1rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  opacity: 0.5;
  background: none;
  border: 0;
  cursor: pointer;
}

/* Responsive Styles */
@media (max-width: 992px) {
  .registration-wrapper {
    flex-direction: column;
    max-width: 450px;
  }
  
  .registration-left {
    padding: 25px;
  }
  
  .welcome-title {
    font-size: 1.8rem;
  }
  
  .welcome-subtitle {
    font-size: 1.2rem;
  }
  
  .character-image {
    max-height: 250px;
    object-fit: contain;
  }
}

@media (max-width: 576px) {
  .registration-container {
    padding: 10px;
  }
  
  .registration-left {
    Background:#fcfbfa;
  }
  
  .welcome-title {
    font-size: 1.3rem;
  }
  
  .welcome-subtitle {
    font-size: 1rem;
  }
  
  .form-container {
    padding: 10px 5px;
  }
}
</style>

<body>
  <div class="registration-container" style="margin-top:5%">
    <div class="registration-wrapper">
      <!-- Left Content with Character Image -->
      <div class="registration-left">
        <div class="welcome-content">
          <h1 class="welcome-title">Hello, Dorm Owners!</h1>
          <h2 class="welcome-subtitle">REGISTER YOUR DORM OWNER ACCOUNT</h2>
          
          <!-- Character Image - Replace with your actual image -->
          <div class="character-image-container">
            <img src="<?= ROOT ?>/assets/images/register.png" alt="3D Character" class="character-image" style="height: 500px; width:1000px;">
            <!-- If you don't have the image, use this placeholder instead:
            <img src="/api/placeholder/400/600" alt="3D Character" class="character-image"> -->
          </div>
        </div>
      </div>

      <!-- Registration Form -->
      <div class="registration-right">
        <div class="form-container">
          <div class="form-header">
            <h3 class="form-title">Hello Dormies! Welcome to DormLynk</h3>
          </div>

          <form action="" method="POST" class="registration-form" enctype="multipart/form-data">
            <?php if (!empty($errors)): ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php foreach ($errors as $error): ?>
                  <?= $error . "<br>" ?>
                <?php endforeach; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>

            <div class="form-group">
              <label for="firstname" class="form-label">First Name</label>
              <input type="text" class="form-input" name="firstname" required>
            </div>

            <div class="form-group">
              <label for="lastname" class="form-label">Last Name</label>
              <input type="text" class="form-input" name="lastname" required>
            </div>

            <div class="form-group">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-input" name="email" required>
            </div>

            <div class="form-group">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-input" name="password" required>
            </div>

            <div class="form-group">
              <label for="image" class="form-label">Profile Image (optional)</label>
              <input type="file" class="form-input file-input" name="image" accept="image/*">
            </div>

            <div class="form-group">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-input" name="address">
            </div>

            <div class="form-group">
              <label for="contact" class="form-label">Contact Number</label>
              <input type="text" class="form-input" name="contact">
            </div>

            <div class="form-group">
              <label for="gender" class="form-label">Gender</label>
              <select name="gender" class="form-select">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>

            <button type="submit" class="register-button">register</button>

            <div class="login-link">
              Already have an account? <a href="<?= ROOT ?>/login" class="login-button">Login here</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

<?php include "partials/footer.php" ?>