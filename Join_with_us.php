<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> SICT Alumni Site </title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_(R).css">
  <link rel="stylesheet" href="css/bootstrap.min.css">


</head>

<body>

  <!-- Header -->
  <?php
  include('header.php');
  ?>
  <br><br><br><br>

  <div class="form-container">
    <h1>Alumni Registration Form</h1>

    <form action="save_form.php" method="post">
      <div class="form-group">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required>
      </div>
      <h6><b>"Please note that the Username and Password you create will be required for logging into your account."</b></h6><br>

    
        <div class="row">
          <div class="col">
            <input type="text" name="username" class="form-control" placeholder="User Name" required>
          </div>
          <div class="col">
            <input type="Password" name="password" class="form-control" placeholder="Password" required>
          </div>
        </div>
    <br>
      <div class="form-group">
        <label for="year">Year of Passing:</label>
        <input type="text" id="year" name="year" required>
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob-year" id="dob-year" required>
      </div>
      <div class="form-group">
        <label>Marital Status:</label>
        <div class="radio-group">
          <input type="radio" id="single" name="marital_status" value="single" required>
          <label for="single">Single</label>
          <input type="radio" id="married" name="marital_status" value="married" required>
          <label for="married">Married</label>
        </div>
      </div>
      <div class="form-group">
        <label for="profession">Profession:</label>
        <input type="text" id="profession" name="profession" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address-line1" name="address-line1" placeholder="Line 1" required>
        <input type="text" id="address-line2" name="address-line2" placeholder="Line 2">
        <input type="text" id="city" name="city" placeholder="City" required>
        <input type="text" id="state" name="state" placeholder="State">
        <input type="text" id="zip" name="zip" placeholder="ZIP Code" required>
      </div>
      <div class="form-group">
        <label for="graduation-details">Where did life take you after graduation?</label>
        <textarea id="graduation-details" name="graduation-details"></textarea>
      </div>
      <div class="form-group">
        <label for="personal-message">Personal message for us @ Alumni:</label>
        <textarea id="personal-message" name="personal-message"></textarea>
      </div>
      <div class="form-buttons">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>

  <!-- footer -->
  <?php
  include('footer.php');
  ?>

  <script src="Script.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>