<?php include PATH . "partials/header.php" ?>

<div class="container">

  <div class="mt-5 d-flex justify-content-between align-items-center">
    <h2>Computer Lab A</h2>

    <?php if (!empty($_SESSION['USER'])): ?>
    <a href="<?= ROOT ?>/comas/create" class="btn btn-primary">Add New</a>
    <?php endif; ?>

  </div>

  <table class="table table-striped mt-3">
    <tr>
      <th>PC Number</th>
      <th>Status</th>
      <th>Note</th>
      
      <th></th>
    </tr>
    <?php if ($comas != null) { ?>
      <?php foreach ($comas as $item) { ?>
        <tr>
          <td><?= $item->pcnum ?></td>
          <td><?= $item->status ?></td>
          <td><?= $item->note ?></td>
          <!-- <td>
            <img width="50px" height="50px" src="<?= ROOT ?>/<?= $item->image ?>" alt="">
          </td> -->
          
          <td>
          <?php if (!empty($_SESSION['USER'])): ?>
            <a href="<?= ROOT ?>/comas/edit/<?= $item->id ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="<?= ROOT ?>/comas/delete/<?= $item->id ?>" class="btn btn-danger btn-sm">Delete</a>
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