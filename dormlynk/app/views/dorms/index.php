<?php include PATH . "partials/adminheader.php" ?>

<div class="container">

  <div class="mt-5 d-flex justify-content-between align-items-center">
    <h2>List of Dorms</h2>

    <?php if (!empty($_SESSION['ADM'])): ?>
    <a href="<?= ROOT ?>/dorms/create" class="btn btn-primary">Add New Dorm</a>
    <?php endif; ?>

  </div>

  <table class="table table-striped mt-3">
    <tr>
      <th>Dorm Name</th>
      <th>Email</th>
      <!-- <th>Email</th>
      <th>Image</th> -->
      <th></th>
    </tr>
    <?php if ($dorms != null) { ?>
      <?php foreach ($dorms as $item) { ?>
        <tr>
          <td><?= $item->dormname ?></td>
          <td><?= $item->email ?></td>
          <!-- <td><?= $item->email ?></td>
          <td>
            <img width="50px" height="50px" src="<?= ROOT ?>/<?= $item->image ?>" alt="">
          </td> -->
          
          <td>
            <a href="<?= ROOT ?>/dorms/edit/<?= $item->id ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="<?= ROOT ?>/dorms/delete/<?= $item->id ?>" class="btn btn-danger btn-sm">Delete</a>
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