<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "phpfrom");

if($link === false){
    die("ERROR: Not connection to database. " . mysqli_connect_error());
}

if(isset($_POST['registr_button']))
{
$full_name = mysqli_real_escape_string($link, $_REQUEST['fullname']);
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$passwordform = mysqli_real_escape_string($link, $_REQUEST['passwordform']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);

$query = "INSERT INTO formtemp (Full_name, Username, Email, Phone, Password, Gender) VALUES ('$full_name', '$username', '$email', '$phone', '$passwordform', '$gender')";
$query_run = mysqli_query($link ,$query);

if($query_run){
    $SESSION['status'] = "Inserted Successfully";
    header("Location: form.php");
}
else{
    $SESSION['status'] = "Inserted Successfully";
    header("Location: form.php");
}
}
 ?>