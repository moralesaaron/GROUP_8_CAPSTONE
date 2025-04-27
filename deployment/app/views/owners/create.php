<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Add New Owner</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    .admin-form-container {
      max-width: 700px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      padding: 30px;
      margin-top: 100px;
    }


    .form-header {
      border-bottom: 1px solid #eee;
      padding-bottom: 15px;
      margin-bottom: 25px;
    }

    .form-title {
      font-weight: 600;
      color: #2c3e50;
      font-size: 1.8rem;
      margin-bottom: 0;
    }

    .form-control {
      border-radius: 5px;
      padding: 12px 15px;
      border: 1px solid #ddd;
      transition: all 0.3s;
    }

    .form-control:focus {
      border-color: #4a6fdc;
      box-shadow: 0 0 0 0.25rem rgba(74, 111, 220, 0.15);
    }

    .form-label {
      font-weight: 500;
      margin-bottom: 8px;
      color: #495057;
    }

    .btn-primary {
      background-color: #4a6fdc;
      border-color: #4a6fdc;
      padding: 10px 20px;
      font-weight: 500;
    }

    .btn-primary:hover {
      background-color: #3a5cbc;
      border-color: #3a5cbc;
    }

    .btn-secondary {
      background-color: #f8f9fa;
      border-color: #dee2e6;
      color: #212529;
      padding: 10px 20px;
      font-weight: 500;
    }

    .btn-secondary:hover {
      background-color: #e9ecef;
      border-color: #dee2e6;
    }

    .password-wrapper {
      position: relative;
    }

    .password-toggle {
      position: absolute;
      right: 12px;
      top: 12px;
      cursor: pointer;
      color: #6c757d;
    }

    .password-strength {
      height: 5px;
      margin-top: 8px;
      border-radius: 2px;
      background-color: #e9ecef;
    }

    .password-strength-text {
      font-size: 0.8rem;
      margin-top: 5px;
    }

    .form-text {
      font-size: 0.85rem;
    }

    .form-actions {
      padding-top: 15px;
      margin-top: 30px;
      border-top: 1px solid #eee;
      display: flex;
      justify-content: flex-end;
      gap: 15px;
    }

    .file-upload {
      border: 1px dashed #ddd;
      padding: 20px;
      text-align: center;
      cursor: pointer;
      border-radius: 5px;
      background-color: #f8f9fa;
      transition: all 0.3s;
    }

    .file-upload:hover {
      border-color: #4a6fdc;
      background-color: #f1f5ff;
    }

    .hidden-input {
      display: none;
    }

    .upload-icon {
      font-size: 2rem;
      color: #6c757d;
      margin-bottom: 10px;
    }

    .upload-placeholder {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background-color: #e9ecef;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 15px;
    }

    .upload-placeholder i {
      font-size: 2.5rem;
      color: #adb5bd;
    }

    .preview-image {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin: 0 auto 15px;
      display: none;
    }

    .role-badge {
      display: inline-block;
      padding: 6px 12px;
      border-radius: 30px;
      background-color: #e9f5ff;
      color: #4a6fdc;
      font-weight: 500;
      font-size: 0.85rem;
      margin-left: 10px;
    }

    .info-icon {
      color: #6c757d;
      font-size: 0.9rem;
      margin-left: 5px;
      cursor: pointer;
    }
  </style>
</head>

<body class="bg-light">

  <?php include __DIR__ . '/../partials/adminheader.php'; ?>

  <div class="container my-5">
    <div class="admin-form-container">
      <div class="form-header d-flex justify-content-between align-items-center">
        <h2 class="form-title">
          Add New Owner
          <span class="role-badge">
            <i class="fas fa-building me-1"></i> Dorm Owner
          </span>
        </h2>
        <a href="<?= ROOT ?>/owners" class="btn btn-sm btn-outline-secondary">
          <i class="fas fa-arrow-left me-1"></i> Back to Owners
        </a>
      </div>

      <?php if (!empty($errors)): ?>
        <div class="alert alert-danger alert-dismissible fade show">
          <strong><i class="fas fa-exclamation-triangle me-2"></i>Error!</strong>
          <ul class="mb-0 mt-2">
            <?php foreach ($errors as $error): ?>
              <li><?= $error ?></li>
            <?php endforeach; ?>
          </ul>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>

      <form method="post" enctype="multipart/form-data" id="addOwnerForm" class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstname" class="form-label">First Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="firstname" id="firstname" required>
            <div class="invalid-feedback">
              Please enter a first name.
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="lastname" class="form-label">Last Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="lastname" id="lastname" required>
            <div class="invalid-feedback">
              Please enter a last name.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
          <input type="email" class="form-control" name="email" id="email" required>
          <div class="invalid-feedback">
            Please enter a valid email address.
          </div>
          <div class="form-text text-muted">
            This email will be used for account login and notifications.
          </div>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
          <div class="password-wrapper">
            <input type="password" class="form-control" name="password" id="password" required>
            <i class="fas fa-eye password-toggle" id="passwordToggle"></i>
            <div class="invalid-feedback">
              Please enter a password.
            </div>
          </div>
          <div class="password-strength" id="passwordStrength"></div>
          <div class="password-strength-text text-muted" id="passwordStrengthText">Password strength</div>
          <div class="form-text text-muted">
            Password must be at least 8 characters and include uppercase, lowercase, number and special character.
          </div>
        </div>

        <div class="mb-4">
          <label class="form-label">Profile Image</label>
          <div class="file-upload" id="fileUpload">
            <div class="upload-placeholder" id="uploadPlaceholder">
              <i class="fas fa-user-tie"></i>
            </div>
            <img id="imagePreview" class="preview-image">
            <div class="upload-text">
              <i class="fas fa-cloud-upload-alt"></i>
              <div>Click to upload or drag and drop</div>
              <div class="text-muted small">SVG, PNG, JPG or GIF (max. 2MB)</div>
            </div>
            <input type="file" class="hidden-input" name="image" id="image" accept="image/*">
          </div>
        </div>

        <input type="hidden" name="role" value="dorm">

        <div class="form-actions">
          <a href="<?= ROOT ?>/owners" class="btn btn-secondary">
            <i class="fas fa-times me-1"></i> Cancel
          </a>
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-user-plus me-1"></i> Create Owner Account
          </button>
        </div>
      </form>
    </div>
  </div>

  <?php include __DIR__ . '/../partials/footer.php'; ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Form validation
      const form = document.getElementById('addOwnerForm');
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      });

      // Password visibility toggle
      const passwordToggle = document.getElementById('passwordToggle');
      const passwordInput = document.getElementById('password');
      passwordToggle.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
      });

      // Password strength meter
      const passwordStrength = document.getElementById('passwordStrength');
      const passwordStrengthText = document.getElementById('passwordStrengthText');

      passwordInput.addEventListener('input', function () {
        const password = this.value;
        let strength = 0;
        let color = '';
        let text = '';

        if (password.length >= 8) strength += 1;
        if (password.match(/[A-Z]/)) strength += 1;
        if (password.match(/[a-z]/)) strength += 1;
        if (password.match(/[0-9]/)) strength += 1;
        if (password.match(/[^A-Za-z0-9]/)) strength += 1;

        switch (strength) {
          case 0:
          case 1:
            color = '#dc3545';
            text = 'Weak';
            width = '20%';
            break;
          case 2:
          case 3:
            color = '#ffc107';
            text = 'Medium';
            width = '60%';
            break;
          case 4:
          case 5:
            color = '#28a745';
            text = 'Strong';
            width = '100%';
            break;
        }

        passwordStrength.style.backgroundColor = color;
        passwordStrength.style.width = width;
        passwordStrengthText.textContent = text ? `Password strength: ${text}` : 'Password strength';
        passwordStrengthText.style.color = color;
      });

      // File upload preview
      const fileUpload = document.getElementById('fileUpload');
      const fileInput = document.getElementById('image');
      const imagePreview = document.getElementById('imagePreview');
      const uploadPlaceholder = document.getElementById('uploadPlaceholder');

      fileUpload.addEventListener('click', function () {
        fileInput.click();
      });

      fileInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function (e) {
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block';
            uploadPlaceholder.style.display = 'none';
          }
          reader.readAsDataURL(file);
        }
      });

      // Drag and drop functionality
      ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        fileUpload.addEventListener(eventName, preventDefaults, false);
      });

      function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
      }

      ['dragenter', 'dragover'].forEach(eventName => {
        fileUpload.addEventListener(eventName, highlight, false);
      });

      ['dragleave', 'drop'].forEach(eventName => {
        fileUpload.addEventListener(eventName, unhighlight, false);
      });

      function highlight() {
        fileUpload.classList.add('border-primary');
      }

      function unhighlight() {
        fileUpload.classList.remove('border-primary');
      }

      fileUpload.addEventListener('drop', handleDrop, false);

      function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        fileInput.files = files;

        if (files[0]) {
          const reader = new FileReader();
          reader.onload = function (e) {
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block';
            uploadPlaceholder.style.display = 'none';
          }
          reader.readAsDataURL(files[0]);
        }
      }
    });
  </script>
</body>

</html>