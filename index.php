<?php
include("config/fbconfig.php");
if (!isset($_COOKIE['firsttime'])) {
    setcookie("firsttime", "no");
    echo "Primer visita";
    exit();
} else {
    echo "Siguientes visitas";
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Facebook Login JavaScript Example</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/index.css">
        <script src="js/fbindex.js"></script>
        <script src="js/index.js"></script>
    </head>
    <body>
        <div id="corp-logo">
            <img src="images/logo.png" border="0" width="246px" height="123px" />
        </div>
        <div id="searchcontainer" class="searchcontainer">
            <div id="searchcontent" class="searchcontent">
                <form method="post" action="">
                    <p align="center">Ingrese lo que quiera buscar: </p>
                    <p align="center"><input type="text" id="busqueda" name="busqueda" size="30" class="searchfield" /></p>
                    <p align="center"><input type="submit" value="BUSCAR" class="searchbutton" /></p>
                </form>
            </div>
        </div>
        <div id="logincontainer" class="logincontainer">
            <div id="logincontent" align="center" class="logincontent">
<?php if ($fbstatus == true) { ?>
                <fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
                <div id="status"></div>
                ----- O -----<br />
<?php } ?>
                Ingresar usando email<br />
                    <form method="post" action="" autocomplete="email">
                        EMAIL <input type="text" onclick="showDiv('email-login')" id="email" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="ejemplo@tumail.com" required /><br />
                            <div id="email-login" class="email-login">
                                CONTRASEÑA <input type="password" id="password" name="password" required /><br />
                                <input type="submit" name="Ingresar" value="INGRESAR" /><br />
                                <h5><a href="">Recuperar contraseña</a></h5>
                        </div>
                    </form>
                </div>
            </div>
         <input id="showlogin" class="searchbutton" type="button" value="INGRESAR" onclick="hideDiv('searchcontainer'); setTimeout(showDiv('logincontainer'), 5000);"/>
    </body>
</html>