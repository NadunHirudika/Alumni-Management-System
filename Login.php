<?php
include('db.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Fetch form data and sanitize inputs

        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ? AND password = BINARY ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['user_type'] = 'admin';
            header("Location: admin/index.php");
            exit();
        }

        $stmt = $conn->prepare("SELECT * FROM alumni WHERE username = ? AND password = BINARY ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['user_type'] = 'member';
            header("Location: member/index.php");
            exit();
        } else {
            $error_message = "Invalid username or password.";
        }

        $stmt->close();
    } catch (Exception $e) {
        // Handle errors gracefully
        $error_message = "An error occurred: " . $e->getMessage();
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style_Login.css">
</head>

<body>
    <form action="" method="POST">
        <div class="container">
            <!-- Left Section -->
            <div class="left-section">
                <div class="logo">
                    <img src="images/sict_alumi_logo.webp" alt="sict_alumi_logo">
                </div>
                <h2>SICT Alumni Association</h2>
                <p>Please login to your account</p>

                <!-- Display Error Message -->
                <?php if (isset($error_message)) { ?>
                    <p style="color: red;"><?= htmlspecialchars($error_message) ?></p>
                <?php } ?>

                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="login-btn">LOG IN</button><br><br>
                <a href="Home.php" style="text-decoration: none;">
                    <h5 style="color: #00a650; ">Back to Alumni Website</h5>
                </a>
            </div>

            <!-- Right Section -->
            <div class="right-section">
                <h2>We are SICT Alumni Association</h2>
                <h4>
                    Stay connected with your fellow alumni and be part of our growing community.
                </h4>
            </div>
        </div>
    </form>
</body>

</html>