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
<img src="images/<?php echo $_SESSION['avatar']; ?>" border="0" />
<?php } ?>