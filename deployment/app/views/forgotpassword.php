<?php include "partials/blankheader.php"; ?>

<body>
  <div class="container mt-5">
    <h1>Forgot Password</h1>

    <?php if (!empty($errors)): ?>
      <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
          <?= $error . "<br>" ?>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <form method="post" action="">
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Send Reset Link</button>
    </form>
  </div>
</body>

<?php include "partials/footer.php"; ?>
