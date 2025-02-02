<?php
include 'db.php';

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
    $stmt->bind_param("ssssssssssssssss", $name, $email, $phone, $username, $password, $year, $dob, $marital_status, $profession, $address_line1, $address_line2, $city, $state, $zip, $graduation_details, $personal_message);

    if ($stmt->execute()) {
        echo "<script>
                alert('Data saved successfully!');
                window.location.href = 'Join_with_us.php';
              </script>";
        exit();
    } else {
        echo "<script>
                alert('Error: " . $stmt->error . "');
                window.location.href = 'Join_with_us.php';
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
