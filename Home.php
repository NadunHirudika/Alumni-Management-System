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

    <!-- Home -->
    <section class="home" id="home">
        <div class="home-text">
            <h1><b>Welcome to <br>SICT Alumni Association</b></h1>
            <p>Stay connected with your fellow alumni and be part of our growing community.</p><br><br>
            <a href="Join_with_us.php" class="btn">Register now </a>
        </div>
        <div class="home-img">
            <!-- <img src="" alt=""> -->
        </div>

    </section>
    <section class="Vistion_Mission" id="Vistion_Mission">

        <div class="Vision_Mission-img" id="Vision_Mission-img">
            <img src="images/niibs-main-slider.png" alt="niibs-main-slider">
        </div>
        <div class="vistion_mission-text">
            <h2><b> vistion & mission</b></h2>
            <p>Our strategic goals are essential to achieving the campus’s vision and mission. They establish the proper
                guidelines for the campus to act strategically, ensuring efficient operation and management that
                underpin a high standard of education.
            </p>
        </div>
    </section>
    <section class="About-Alumni" id="About-Alumni">
        <div class="About-Alumni-img">
            <img src="images/sict_alumi_logo_white.webp" alt="sict_alumi_Logo">
            <h2><b>About Alumni</b></h2>

        </div>
        <div class="About-Alumni-text">
            <p>The alumni association is the main body of the passed-out graduates of SICT. Being a member of the
                alumni association brings you many benefits. It enables you to stay connected with fellow graduates and
                lecturers, obtain new career opportunities.<br><br>

                This is your opportunity to be a part of an ever-growing prestigious community and to be actively
                engaged in university activities. Join us and be a part of this network to reach greater heights in your
                personal and professional lives!
            </p><br><br>
            <a href="About_us.php" class="btn"> Explore More </a>
        </div>
    </section><Br>

    <!-- committe members -->
    <section class="committee-section">
        <h2 style="text-align: center;"> Committee Members</h2><br><br><br>
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
            </div>
        </div>
    </section>






    <!-- footer -->
    <?php
    include('footer.php');
    ?>

    <script src="js/Script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>