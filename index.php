<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("config/parameters.php");
include("config/fbconfig.php");
include("config/site_based_checks.php");
firstvisit();
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Servicio X Servicio</title>
        <meta charset="UTF-8">
<!--        <script src="js/jquery-2.1.4.min.js"></script> -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134329309-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-134329309-1');
        </script>
        <script src="js/bootstrap/dist/js/bootstrap.js"></script>
        <script src="js/fbindex.js"></script>
        <script src="js/index.js"></script>
        <script src="js/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>
        <script src="js/jquery-cookie/src/jquery.cookie.js"></script>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="js/lightbox/dist/css/lightbox.min.css">
    </head>
    <body>
<?php
if ( $islive == false) { ?>
        <div align="center" id="mantenimiento" class="mantenimiento"><img src="images/mantenimiento.png" border="0" alt="Sitio en mantenimiento" /></div>
<?php 
} else {
if (isset($_GET['login'])) {
    if ($_GET['reason'] == "unverified") {
        echo "<div id='errortopbar' class='errortopbar'><b>No se ha podido iniciar sesion porque la cuenta no esta verificada. <a href='#'>Re-Enviar email de verificacion</a></b></div>";
    } elseif ($_GET['reason'] == "suspended") {
        echo "<div id='errortopbar' class='errortopbar'><b>No se ha podido iniciar sesion porque la cuenta esta suspendida. <a href='#'>Contactar al Administrador</a></b></div>";
    } else {
        echo "<div id='errortopbar' class='errortopbar'><b>No se ha podido iniciar sesion. Por favor, intente nuevamente</b></div>";
    }
}        
?>
        <div id="logintopbar" class="logintopbar">
<?php if (isset($_SESSION['id'])) { ?>
Bienvenido <b><?php echo $_SESSION['fullname']; ?></b> - <a href="logout.php">Salir</a> | <a href="profile.php" id="ele_id" rel="lightbox" data-lightbox="lightbox" data-title="Mi perfil">Perfil</a><br />
<?php } ?>
        </div>
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
        <div id="registercontainer" class="registercontainer">
            <div id="registercontent" class="registercontent">
                <form method="post" action="register.php" autocomplete="email">
                    <table>
                        <tr>
                            <td>NOMBRE Y APELLIDO:</td>
                            <td><input class="registerformfields" type="text" name="fullname" required /></td>
                        </tr>
                        <tr>
                            <td>DESCRIPCION DE SERVICIO:</td>
                            <td><textarea class="registerformtextarea" name="descripcion"></textarea></td>
                        </tr>
                        <tr>
                            <td>EMAIL:</td>
                            <td><input class="registerformfields" type="text" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required /></td>
                        </tr>
                        <tr>
                            <td>CONTRASEÑA:</td>
                            <td><input class="registerformfields" type="password" name="password" required /></td>
                        </tr>
                        <tr>
                            <td>CONFIRMAR CONTRASEÑA:</td>
                            <td><input class="registerformfields" type="password" name="confirm_password" required /></td>
                        </tr>
                        <tr>&nbsp;</tr>
                        <tr>
                            <td colspan="2" align="center"><input class="ingresarbutton" type="submit" name="Ingresar" value="REGISTRAR" /></td>
                        </tr>
                    </table>
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
                <form method="post" action="login.php" autocomplete="email">
            <table width="100">
                <tr>
                    <td>EMAIL:</td>
                    <td><input class="emailfield" type="text" onclick="showDiv('email-login')" name="username" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="ejemplo@tumail.com" size="30" required /></td>
                </tr>
                <div id="email-login" class="email-login">
                    <tr>
                        <td>CONTRASEÑA:</td>
                        <td><input class="passwordfield" type="password" name="password" placeholder="Pass.." size="30" required /></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input class="ingresarbutton" type="submit" name="Ingresar" value="INGRESAR" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><h5><a href="">Recuperar contraseña</a></h5></td>
                    </tr>
                </div>
            </table>
                </form>
                </div>
            </div>
        <div class="footer">
            <div class="footerbuttons">
<?php if (!isset($_SESSION['fullname'])) { ?>
                <input id="showlogin" class="loginbutton" type="button" value="INGRESAR" onclick="checkDivVisible('logincontainer', 'registercontainer', 'searchcontainer');"/>
                <input id="showlogin" class="registerbutton" type="button" value="REGISTRARSE" onclick="checkDivVisible('registercontainer','logincontainer', 'searchcontainer');"/>
<?php } else { ?>
                <input id="showlogin" class="loginbutton" type="button" value="PUBLICAR" onclick="checkDivVisible('logincontainer', 'registercontainer', 'searchcontainer');"/>
<?php } ?>
                <input id="showlogin" class="searchbutton" type="button" value="BUSCAR" onclick="checkDivVisible('searchcontainer', 'logincontainer', 'registercontainer');"/>
            </div>
            <div class="copyright">Copyright 2019 - &copy; - <a data-title="My caption" id="ele_id" href="https://www.google.com/" data-lightbox="ele_id" rel="lightbox" title="Ayuda">Ayuda</a></div>
            <div class="privacy">Terminos <a href="http://microsoft.com" id="ele_id" rel="lightbox" data-lightbox="lightbox" data-title="My caption">legales</a> y <a href="http://yahoo.com" id="ele_id" rel="lightbox" data-lightbox="lightbox" data-title="My caption">privacidad</a>.</div>
        </div>
        <script>
        $('document').ready(function(){
            if ($.cookie('firsttime') != TRUE) {
                $('#ele_id').trigger('click');
        }});
        </script>
<?php } ?>
    </body>
</html>