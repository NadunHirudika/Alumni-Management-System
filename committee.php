<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> SICT Alumni Site </title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>

<body>

  <!-- Header -->
  <?php
  include('header.php');
  ?>

  <br><br><br><br>
  <div class="site-header section-padding d-flex justify-content-center align-items-center" style="background-color: #191b52; width:100%">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-12">
          <h1>
            <p style="color: #191b52;">.</p>
            <p style="text-align: center;  color:white">Committee Members</p>
            <p style="color: #191b52;">.</p>
          </h1>
        </div>
      </div>
    </div>
  </div>
  <section class="committee-section">

    <div class="container">
      <div class="row g-4">
        <!-- Committee Member 1 -->
        <div class="col-md-3 col-sm-6">
          <div class="committee-card">
            <img src="images/placeholder-male.png" alt="Member Photo">
            <h5>James Carter</h5>
            <p>President</p>
          </div>
        </div>
        <!-- Committee Member 2 -->
        <div class="col-md-3 col-sm-6">
          <div class="committee-card">
            <img src="images/placeholder-male.png" alt="Member Photo">
            <h5>William Hughes</h5>
            <p>Vice President</p>
          </div>
        </div>
        <!-- Committee Member 3 -->
        <div class="col-md-3 col-sm-6">
          <div class="committee-card">
            <img src="images/placeholder-male.png" alt="Member Photo">
            <h5>Henry Adams</h5>
            <p>Secretary</p>
          </div>
        </div>
        <!-- Committee Member 4 -->
        <div class="col-md-3 col-sm-6">
          <div class="committee-card">
            <img src="images/placeholder-male.png" alt="Member Photo">
            <h5>Edward Tuener</h5>
            <p>Treasurer</p>
          </div>
        </div>
        <!-- Committee Member 5 -->
        <div class="col-md-3 col-sm-6">
          <div class="committee-card">
            <img src="images/placeholder-male.png" alt="Member Photo">
            <h5>Oliver Bennett</h5>
            <p>Event Coordinator</p>
          </div>
        </div>
        <!-- Committee Member 6 -->
        <div class="col-md-3 col-sm-6">
          <div class="committee-card">
            <img src="images/placeholder-male.png" alt="Member Photo">
            <h5>Thomas Parker</h5>
            <p>Membership Coordinator</p>
          </div>
        </div>
        <!-- Committee Member 7 -->
        <div class="col-md-3 col-sm-6">
          <div class="committee-card">
            <img src="images/placeholder-male.png" alt="Member Photo">
            <h5>Alex Adams</h5>
            <p>Public Relation Officer</p>
          </div>
        </div>
        <!-- Committee Member 8 -->
        <div class="col-md-3 col-sm-6">
          <div class="committee-card">
            <img src="images/placeholder-male.png" alt="Member Photo">
            <h5>Charles Dawson</h5>
            <p>Fundraising Chair</p>
          </div>
        </div>
      </div>
    </div>
  </section>





  <!-- footer -->
  <?php
  include('footer.php');
  ?>


  <script src="Script.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>