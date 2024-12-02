<?php include PATH . "partials/header.php" ?>

<div class="container">

  <div class="mt-5 d-flex justify-content-between align-items-center">
    <h2>Inbox</h2>

    <?php if (!empty($_SESSION['USER'])): ?>
    <a href="<?= ROOT ?>/reports/create" class="btn btn-primary">Add New</a>
    <?php endif; ?>

  </div>

  <table class="table table-striped mt-3">
    <tr>
      <th>BPC ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Year</th>
      <th>Section</th>
      <th>Com Lab</th>
      <th>PC</th>
      <th>Description</th>
      <!-- <th>Image</th> -->
    </tr>
    <?php if ($reports != null) { ?>
      <?php foreach ($reports as $item) { ?>
        <tr>
          <td><?= $item->bpc_id ?></td>
          <td><?= $item->firstname ?></td>
          <td><?= $item->lastname ?></td>
          <td><?= $item->year ?></td>
          <td><?= $item->section ?></td>
          <td><?= $item->clnum ?></td>
          <td><?= $item->pcnum ?></td>
          <td><?= $item->info ?></td>
          <!-- <td>
            <img width="50px" height="50px" src="<?= ROOT ?>/<?= $item->image ?>" alt="">
          </td> -->
          
          <td>
            <a href="<?= ROOT ?>/reports/edit/<?= $item->id ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="<?= ROOT ?>/reports/delete/<?= $item->id ?>" class="btn btn-danger btn-sm">Delete</a>
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