<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DormLynk - Register Account</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    html,
    body {
      height: 100%;
    }

    body {
      background-color: #f5f7fa;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .page-content {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 20px;
    }

    .main-container {
      display: flex;
      width: 100%;
      max-width: 1000px;
    }

    .character-section {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .character-image {
      max-width: 500% !important;
      height: 70%;
      margin-right: 20%;
    }

    .form-section {
      flex: 1.5;
      padding: 40px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      margin-top: 100px
    }

    .logo {
      text-align: center;
      margin-bottom: 10px;
    }

    .logo-text {
      font-size: 32px;
      font-weight: bold;
    }

    .logo-text span {
      color: #ff5722;
    }

    .welcome-text {
      color: #ff5722;
      text-align: center;
      font-size: 30px;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .title {
      text-align: center;
      color: #333;
      margin-bottom: 25px;
      font-size: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-label {
      display: block;
      margin-bottom: 5px;
      color: #555;
      font-size: 14px;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 16px;
    }

    .form-control:focus {
      outline: none;
      border-color: #ff5722;
    }

    .gender-group {
      display: flex;
      gap: 15px;
    }

    .gender-option {
      display: flex;
      align-items: center;
    }

    .gender-option input {
      margin-right: 5px;
    }

    .submit-btn {
      width: 100%;
      padding: 12px;
      background-color: #1a75ff;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 10px;
    }

    .submit-btn:hover {
      background-color: #0066ff;
    }

    .login-link {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
    }

    .login-link a {
      color: #1a75ff;
      text-decoration: none;
      margin-left: 5px;
    }

    .alert {
      padding: 10px;
      background-color: #fff3cd;
      color: #856404;
      border-radius: 5px;
      margin-bottom: 15px;
      position: relative;
    }

    .btn-close {
      position: absolute;
      right: 10px;
      top: 10px;
      cursor: pointer;
      background: none;
      border: none;
      font-size: 18px;
    }

    .orange-footer {
      width: 100%;
      height: 10px;
      background-color: #ff5722;
      margin-top: auto;
    }

    /* Footer styles - assuming your footer.php has content */
    footer {
      width: 100%;
      background-color: #fff;
      border-top: 1px solid #eee;
    }

    @media (max-width: 768px) {
      .main-container {
        flex-direction: column;
      }

      .character-section {
        display: none;
      }

      .form-section {
        padding: 30px 20px;
        max-width: 100%;
      }
    }
  </style>
</head>

<body>
  <?php include 'partials/header.php'; ?>

  <div class="page-content">
    <div class="main-container">
      <div class="character-section">
        <img src="<?= ROOT ?>/assets/images/register.png" alt="DormLynk Character" class="character-image">
      </div>

      <div class="form-section">
        <div class="logo">
          <div class="logo-text">
            <span>Dorm</span>Lynk
          </div>
        </div>

        <div class="welcome-text">Hello Users!</div>
        <h1 class="title">Create Your Own Account</h1>

        <form action="" method="POST" enctype="multipart/form-data">
          <!-- Show errors if any -->
          <?php if (!empty($errors)): ?>
            <div class="alert" role="alert">
              <?php foreach ($errors as $error): ?>
                <?= $error . "<br>" ?>
              <?php endforeach; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">×</button>
            </div>
          <?php endif; ?>

          <div class="form-group">
            <label class="form-label">First Name</label>
            <input type="text" value="<?= htmlspecialchars(get_var('firstname') ?? '') ?>" class="form-control"
              name="firstname" required>
          </div>

          <div class="form-group">
            <label class="form-label">Middle Name</label>
            <input type="text" value="<?= htmlspecialchars(get_var('middlename') ?? '') ?>" class="form-control"
              name="middlename">
          </div>

          <div class="form-group">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" value="<?= htmlspecialchars(get_var('lastname') ?? '') ?>"
              name="lastname" required>
          </div>

          <div class="form-group">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" value="<?= htmlspecialchars(get_var('address') ?? '') ?>"
              name="address" required>
          </div>

          <div class="form-group">
            <label class="form-label">Contact Number</label>
            <input type="text" class="form-control" name="contact"
              value="<?= htmlspecialchars(get_var('contact') ?? '') ?>" required
              oninput="this.value = this.value.replace(/\D/g, '').slice(0, 11);">
          </div>

          <div class=" form-group">
            <label class="form-label">Gender</label>
            <div class="gender-group">
              <div class="gender-option">
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Male</label>
              </div>
              <div class="gender-option">
                <input type="radio" id="female" name="gender" value="female" required>
                <label for="female">Female</label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">Email</label>
            <input type="email" value="<?= htmlspecialchars(get_var('email') ?? '') ?>" class="form-control"
              name="email" required>
          </div>

          <div class="form-group">
            <label class="form-label">Password</label>
            <input type="password" value="<?= htmlspecialchars(get_var('password') ?? '') ?>" class="form-control"
              name="password" required>
          </div>

          <div class="form-group">
            <label class="form-label">Profile Image (optional)</label>
            <input type="file" class="form-control" name="image" accept="image/*">
          </div>

          <div class="form-group">
            <label class="form-label">Valid ID Image</label>
            <input type="file" class="form-control" name="id_image" accept="image/*">
          </div>

          <input type="hidden" name="role" value="user">

          <button type="submit" class="submit-btn">Register</button>

          <div class="login-link">
            Already have an account?
            <a href="<?= ROOT ?>/login">Login</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="orange-footer"></div>

  <?php include 'partials/footer.php'; ?>
</body>

</html>