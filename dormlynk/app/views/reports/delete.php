<?php include PATH . "partials/header.php" ?>

<div class="container">

  <form action="" method="POST" class="mt-5 w-50 mx-auto">
    <h2>Delete Report</h2>

    

    <div class="mb-2">
      <label for="">BPC ID</label>
      <input name="bpc_id" disabled value="<?= $report->bpc_id ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">First Name</label>
      <input name="firstname" disabled value="<?= $report->firstname ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input name="lastname" disabled value="<?= $report->lastname ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Year</label>
      <input name="year" disabled value="<?= $report->year ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Section</label>
      <input name="section" disabled value="<?= $report->section ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Com Lab</label>
      <input name="clnum" disabled value="<?= $report->clnum ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">PC</label>
      <input name="pcnum" disabled value="<?= $report->pcnum ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Description</label>
      <input name="info" disabled value="<?= $report->info ?>" type="text" class="form-control">
    </div>







    <!-- <div class="mb-2">
      <label for="">Password</label>
      <input name="password" disabled value="<?= $user->password ?>" type="password" class="form-control">
    </div> -->
    <input type="hidden" name="id" value="<?= $report->id ?>">
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>

</div>

<?php include PATH . "partials/footer.php" ?>