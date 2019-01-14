<?php
include("config/parameters.php");
session_start();
if (isset($_SESSION['fullname'])) {
    echo $error1;
} else {
    session_destroy();
    header("Location: index.php");
}
?>