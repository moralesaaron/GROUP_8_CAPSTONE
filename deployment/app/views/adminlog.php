<?php include "partials/blankheader.php" ?>

<div class="container center-container">
  <form action="" method="POST" class="w-50 mx-auto text-center custom-form">
    <h1 class="login-title">Admin Login</h1>

    <?php if (!empty($errors)): ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?php foreach ($errors as $error): ?>
          <?= $error . "<br>" ?>
        <?php endforeach; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <div class="mb-2 text-start">
      <label for="">Email</label>
      <input type="text" value="<?= get_var('email') ?>" name="email" class="form-control">
    </div>
    <div class="mb-2 text-start">
      <label for="">Password</label>
      <input type="password" name="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Login</button><br><br>
    <a href="<?= ROOT ?>/home">Return to Home</a>
  </form>
</div>

<?php include "partials/footer.php" ?>