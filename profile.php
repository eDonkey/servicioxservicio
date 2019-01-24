<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("config/fbconfig.php");
include("config/site_based_checks.php");
session_start();
if (!isset($_SESSION['fullname'])) {
    echo "No hay perfil a mostrar, porque no se ha ingresado con ninguna cuenta";
} else {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Servicio X Servicio</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/profile.css">
    </head>
    <body>
<img src="images/<?php echo $_SESSION['avatar']; ?>" border="0" />
<label class="switch">
  <input type="checkbox" <?php if ($_SESSION['developer'] == "Y" ) { echo "checked"; }?> />
  <span class="slider"></span>
</label>
<?php } ?>