<?php
include("connect.php");

$name = $_POST['name'];
$mobile = $_POST['number'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$address = $_POST['address'];
$image = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$role = $_POST['role'];

if ($password == $cpassword) {
    // Move uploaded file
    move_uploaded_file($tmp_name, "../uploads/$image");

    // Insert data into database
    $insert = mysqli_query($connect, "INSERT INTO users (name, mobile, password, address, photo, role, status, votes) VALUES ('$name', '$mobile', '$password', '$address', '$image', '$role', 0, 0)");
    
    if ($insert) {
        echo '
        <script>
        alert("Registered Successfully");
        window.location = "../";
        </script>
        ';
    } else {
        echo '
        <script>
        alert("Registration Unsuccessful");
        window.location = "../routes/register.html";
        </script>
        ';
    }

} else {
    echo '
    <script>
    alert("Check password");
    window.location = "../routes/register.html";
    </script>
    ';
}




?>
