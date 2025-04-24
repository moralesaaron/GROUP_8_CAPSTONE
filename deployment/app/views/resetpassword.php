<?php include "partials/blankheader.php"; ?>

<body>
  <div class="container mt-5">
    <h1>Reset Password</h1>

    <?php if (!empty($errors)): ?>
      <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
          <?= $error . "<br>" ?>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($success)): ?>
      <div class="alert alert-success">
        ✅ Your password has been reset! You may now <a href="<?= ROOT ?>/login">login</a>.
      </div>
    <?php else: ?>
      <form method="post">
        <input type="hidden" name="email" value="<?= htmlspecialchars($email) ?>">
        <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">

        <div class="mb-3">
          <label>New Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>Confirm Password</label>
          <input type="password" name="password2" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Reset Password</button>
      </form>
    <?php endif; ?>
  </div>
</body>

<?php include "partials/footer.php"; ?>
