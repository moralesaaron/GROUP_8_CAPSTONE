<?php include PATH . "partials/header.php" ?>

<div class="container">

  <form action="" method="POST" class="mt-5 w-50 mx-auto">
    <h2>Delete PC</h2>

    <div class="mb-2">
      <label for="">PC Number</label>
      <input name="pcnum" disabled value="<?= $comb->pcnum ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Status</label>
      <input name="status" disabled value="<?= $comb->status ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Note</label>
      <input name="note" disabled value="<?= $comb->note ?>" type="text" class="form-control">
    </div>
    <!-- <div class="mb-2">
      <label for="">Password</label>
      <input name="password" disabled value="<?= $user->password ?>" type="password" class="form-control">
    </div> -->
    <input type="hidden" name="id" value="<?= $comb->id ?>">
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>

</div>

<?php include PATH . "partials/footer.php" ?>