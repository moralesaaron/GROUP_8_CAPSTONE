<?php include PATH . "partials/dormheader.php" ?>

<div class="container">

  <form action="" method="POST" class="mt-5 w-50 mx-auto">
    <h2>Delete PC</h2>

    <div class="mb-2">
      <label for="">Description</label>
      <input name="details" disabled value="<?= $roompost->pcnum ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Status</label>
      <input name="status" disabled value="<?= $roompost->status ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Note</label>
      <input name="note" disabled value="<?= $roompost->note ?>" type="text" class="form-control">
    </div>
    <!-- <div class="mb-2">
      <label for="">Password</label>
      <input name="password" disabled value="<?= $user->password ?>" type="password" class="form-control">
    </div> -->
    <input type="hidden" name="id" value="<?= $roompost->id ?>">
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>

</div>

<?php include PATH . "partials/footer.php" ?>