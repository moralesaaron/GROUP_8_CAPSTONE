<?php include PATH . "partials/dormheader.php" ?>

<div class="container">

  <div class="mt-5 d-flex justify-content-between align-items-center">
    <h2>List Room Postings</h2>

    <?php if (!empty($_SESSION['DORM'])): ?>
    <a href="<?= ROOT ?>/roomposts/create" class="btn btn-primary">Add New</a>
    <?php endif; ?>

  </div>

  <table class="table table-striped mt-3">
    <tr>
      <th>Description</th>
      <th>Location</th>
      <th>Dorm</th>
      <th>Cost</th>
      <th>Date Posted</th>
      <th>Status</th>
      <!-- <th>Image</th> -->
      <th>View</th>
      
      <th></th>
    </tr>
    <?php if ($roomposts != null) { ?>
      <?php foreach ($roomposts as $item) { ?>
        <tr>
          <td><?= $item->details ?></td>
          <td><?= $item->location ?></td>
          <td><?= $item->dorm ?></td>
          <td><?= $item->cost ?></td>
          <td><?= $item->date ?></td>
          <td><?= $item->status ?></td>
          <!-- <td>
            <img width="50px" height="50px" src="<?= ROOT ?>/<?= $item->image ?>" alt="">
          </td> -->
          
          <td><a href="<?= ROOT ?>/room<?= $item->id ?>" class="btn btn-primary btn-sm">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
           <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
          <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
          </svg>
          View</a></td>

          <td>
          <?php if (!empty($_SESSION['DORM'])): ?>
            <a href="<?= ROOT ?>/roomposts/edit/<?= $item->id ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="<?= ROOT ?>/roomposts/delete/<?= $item->id ?>" class="btn btn-danger btn-sm">Delete</a>
            <?php endif; ?>
          </td>
          
        </tr>
      <?php } ?>
    <?php } else { ?>
      <tr>
        <td colspan="3">
          <h3>No record found.</h3>
        </td>
      </tr>
    <?php } ?>
  </table>

</div>

<?php include PATH . "partials/footer.php" ?>