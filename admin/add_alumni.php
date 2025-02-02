<?php
include("../db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $year = $_POST['year'];
    $dob = $_POST['dob-year'];
    $marital_status = $_POST['marital_status'];
    $profession = $_POST['profession'];
    $address_line1 = $_POST['address-line1'];
    $address_line2 = $_POST['address-line2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $graduation_details = $_POST['graduation-details'];
    $personal_message = $_POST['personal-message'];

    $sql = "INSERT INTO alumni (name, email, phone, username, password, year_of_passing, dob, marital_status, profession, address_line1, address_line2, city, state, zip, graduation_details, personal_message)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssssssssssssssss",
        $name,
        $email,
        $phone,
        $username,
        $password,
        $year,
        $dob,
        $marital_status,
        $profession,
        $address_line1,
        $address_line2,
        $city,
        $state,
        $zip,
        $graduation_details,
        $personal_message
    );

    if ($stmt->execute()) {
        header("Location: all_alumni.php?message=Alumni added successfully!");
        exit;
    } else {
        $error_message = "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Member</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <?php
        include("includes/sidebar.php");
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php
                include("includes/nav.php");
                ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Member</h1>
                    </div>

                    <div class="col-lg-12">
                        <div class="mt-5 mb-5">


                            <?php if (isset($error_message)): ?>
                                <div class="alert alert-danger"><?php echo $error_message; ?></div>
                            <?php endif; ?>

                            <form method="POST" action="">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name:</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number:</label>
                                    <input type="text" id="phone" name="phone" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="username" class="form-label">Username:</label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password:</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="year" class="form-label">Year of Passing:</label>
                                    <input type="text" id="year" name="year" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="dob-year" class="form-label">Date of Birth:</label>
                                    <input type="date" name="dob-year" id="dob-year" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="marital_status" class="form-label">Marital Status:</label>
                                    <div class="form-check">
                                        <input type="radio" id="single" name="marital_status" value="single" class="form-check-input" required>
                                        <label for="single" class="form-check-label">Single</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" id="married" name="marital_status" value="married" class="form-check-input" required>
                                        <label for="married" class="form-check-label">Married</label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="profession" class="form-label">Profession:</label>
                                    <input type="text" id="profession" name="profession" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="address-line1" class="form-label">Address:</label>
                                    <input type="text" id="address-line1" name="address-line1" class="form-control mb-2" placeholder="Line 1" required>
                                    <input type="text" id="address-line2" name="address-line2" class="form-control mb-2" placeholder="Line 2">
                                    <input type="text" id="city" name="city" class="form-control mb-2" placeholder="City" required>
                                    <input type="text" id="state" name="state" class="form-control mb-2" placeholder="State">
                                    <input type="text" id="zip" name="zip" class="form-control" placeholder="ZIP Code" required>
                                </div>

                                <div class="mb-3">
                                    <label for="graduation-details" class="form-label">Where did life take you after graduation?</label>
                                    <textarea id="graduation-details" name="graduation-details" class="form-control"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="personal-message" class="form-label">Personal message for us @ Alumni:</label>
                                    <textarea id="personal-message" name="personal-message" class="form-control"></textarea>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-primary">Add Alumni</button>
                                    <a href="all_alumni.php" class="btn btn-secondary">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <?php
            include("includes/footer.php");
            ?>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>