<?php
session_start();
include_once('connection.php');

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $pass = md5($_POST['password']);
    $captcha = $_POST['captcha'];

    // Verify captcha
    if ($captcha == $_SESSION['captcha']) {
        // Process the registration if captcha is correct
        $sql = "INSERT INTO `tbl_user`(`name`, `username`, `password`) VALUES ('$name','$username','$pass')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('New User Register Success');</script>";
            header('Location: index.php');
            exit();
        } else {
            die("Error: " . mysqli_error($conn));
        }
    } else {
        // If captcha is incorrect, display an error message
        echo "<script>alert('Captcha verification failed. Please try again.');</script>";
    }
}
?>
