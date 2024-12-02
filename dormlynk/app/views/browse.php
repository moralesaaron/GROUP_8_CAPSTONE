<?php include "partials/header.php" ?>
<div class="container flex">

<br></br>
<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
<br></br>
<h1 class="">Featured Dorms</h1>

<div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h2 class="fw-normal">Dormify Solutions</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h2 class="fw-normal">Campus Cribs</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h2 class="fw-normal">Roomster Living</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div>

</div>

<br></br><br></br>

<!-- mt-5 w-50 -->
<div class="container">

<h1 class="">Recent Posts</h1>

  <!-- <h1 class="title">Home Page</h1>
<h2 class="mt-5">Report your computer issues using the help of comLab</h2>
  <a href="<?= ROOT ?>/reports/create" class="btn btn-warning mt-5">File a Report</a> -->

  <table class="table table-striped mt-3">
    <tr>
      <th>Details</th>
      <th>Location</th>
      <th>Dorm</th>
      <th>Cost</th>
      <th>Date Posted</th>
      <th>Status</th>
      
      <th>View</th>
    </tr>

    <tr>
    <td>2LDK Room</td>
    <td>Malolos, Bulacan</td>
    <td>RJ Dorms</td>
    <td>₱1,500/mo</td>
    <td>November 27, 2024</td>
    <td class="status">Available</td>
    <td><button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
</svg>
                View
              </button></td>
    </tr>
    
    <tr>
    <td>1 Bedroom</td>
    <td>Manila</td>
    <td>City Scapes</td>
    <td>₱1,500/mo</td>
    <td>November 20, 2024</td>
    <td >Occupied</td>
    <td><button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
</svg>
                View
              </button></td>
    </tr>

    <tr>
    <td>Shared Room - Males only</td>
    <td>Plaridel, Bulacan</td>
    <td>Beds R Us</td>
    <td>₱1,500/mo</td>
    <td>November 15, 2024</td>
    <td >Available</td>
    <td><button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
</svg>
                View
              </button></td>
    </tr>

    <tr>
    <td>1LDK House</td>
    <td>Pasay City</td>
    <td>Air Binibini</td>
    <td>₱1,500/mo</td>
    <td>November 11, 2024</td>
    <td>Occupied</td>
    <td><button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
</svg>
                View
              </button></td>
    </tr>

    <tr>
    <td>2LDK Mansion</td>
    <td>Cavite</td>
    <td>Kitauji</td>
    <td>₱1,500/mo</td>
    <td>November 9, 2024</td>
    <td >Available</td>
    <td><button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
</svg>
                View
              </button></td>
    </tr>

  </table>

</div>


</div>


</div>





<?php include "partials/footer.php" ?>