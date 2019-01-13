<?php
include("config/mysql_connection.php");
include("config/site_based_checks.php");
include("config/parameters.php");
$fullname = $_POST['fullname'];
$descripcion = $_POST['descripcion'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
//$keywords_id = createUniqueKeywordId();
if (comparepassword($password, $confirm_password) == true ) {
    $passtosave = password_encrypt($password, $passwordhash);
} else {
    return $error10;
}
$registrationquery = "INSERT INTO services SET fullname='$fullname', descripcion='$descripcion', email='$email'";
mysqli_query($connect, $registrationquery) or die(mysqli_error($connect));
echo "All goooood!";
?>