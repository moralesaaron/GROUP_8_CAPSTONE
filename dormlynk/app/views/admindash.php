<?php include "partials/adminheader.php" ?>

<div class="container fluid">



  <!-- <h1 class="title">Home Page</h1>
<h2 class="mt-5">Report your computer issues using the help of comLab</h2>
  <a href="<?= ROOT ?>/reports/create" class="btn btn-warning mt-5">File a Report</a> -->

  <h1 class="display-4">Admin Dashboard</h1>

  <span class="me-3">
            <img class="rounded-circle" width="100px" height="100px" src="<?= ROOT ?>/<?= $_SESSION['USER']->image ?>"
              alt="">
            <?= $_SESSION['USER']->firstname ?>
            <?= $_SESSION['USER']->lastname ?>
          </span>
</div>


</div>

<!-- <div class="container flex">
<button type="button" class="btn btn-outline-success">Payment</button>
<button type="button" class="btn btn-outline-danger">Messages</button>
<button type="button" class="btn btn-outline-warning">Archive</button>
<button type="button" class="btn btn-outline-light">Edit Profile</button> -->


</div>


<!-- 
<?php include "partials/footer.php" ?> -->