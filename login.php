<?php
include("config/mysql_connection.php");
include("config/parameters.php");
include("config/site_based_checks.php");
$email = mysqli_real_escape_string($connect, $_POST['username']);
$password = password_encrypt(mysqli_real_escape_string($connect, $_POST['password']), $passwordhash);
$loginquery = "SELECT * FROM usuarios WHERE email='$email' AND password='$password' LIMIT 1";
$result = mysqli_query($connect, $loginquery) or die(mysqli_error());
$row = mysqli_num_rows($result);
if ($row === 1) {
    $data = mysqli_fetch_array($result);
    if ($data['confirmed'] == "Y") {
        if ($data['suspended'] == "N") {
            session_start();
            $_SESSION['id'] = $data['id'];
            $_SESSION['fullname'] = $data['fullname'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['kid'] = $data['keywords_id'];
            $_SESSION['priv'] = $data['privileges'];
            echo "<a href='index.php'>Back</a>";
        } else {
            header("Location: index.php?login=failed&reason=suspended");
        }
    } else {
        header("Location: index.php?login=failed&reason=unverified");
    }
}
?>