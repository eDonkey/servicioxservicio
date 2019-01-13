<?php
include("config/mysql_connection.php");
include("config/site_based_checks.php");
include("config/parameters.php");
$fullname = $_POST['fullname'];
$descripcion = $_POST['descripcion'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$comparationresult = comparepassword($password, $confirm_password);
//$keywords_id = createUniqueKeywordId();
if ( $comparationresult == true ) {
    $passtosave = password_encrypt($_POST['password'], $passwordhash);
    var_dump($_POST['password']);
    echo "<br />";
    var_dump($passwordhash);
    echo "<br />";
    die(var_dump(password_encrypt($passwordhash, $_POST['password'])));
} else {
    return $error10;
}
$registrationquery = "INSERT INTO services SET fullname='$fullname', descripcion='$descripcion', email='$email', password='$passtosave'";
mysqli_query($connect, $registrationquery) or die(mysqli_error($connect));
echo "All goooood!";
?>