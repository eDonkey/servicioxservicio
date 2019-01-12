<?php
include("config/fbconfig.php");
include("config/site_based_checks.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Facebook Login JavaScript Example</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/index.css">
        <link href="js/lightbox/src/css/lightbox.css" rel="stylesheet">
        <script src="js/fbindex.js"></script>
        <script src="js/index.js"></script>
        <script src="js/lightbox/src/js/lightbox.js"></script>
        <script src="js/jquery-cookie/src/jquery.cookie.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js" integrity="sha256-8WqyJLuWKRBVhxXIL1jBDD7SDxU936oZkCnxQbWwJVw=" crossorigin="anonymous"></script>
        <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
        <script>
        $('document').ready(function(){
            if ($.cookie('firsttime') != TRUE) {
                $('#ele_id').trigger('click');
        });
        </script>
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
        <div id="registercontainer" class="registercontainer">
            <div id="searchcontent" class="searchcontent">
                <form method="post" action="">
                    <p align="center">Ingrese lo que quiera buscar (register): </p>
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
                        <td colspan="2"><input class="ingresarbutton" type="submit" name="Ingresar" value="INGRESAR" /></td>
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
                <input id="showlogin" class="loginbutton" type="button" value="INGRESAR" onclick="checkDivVisible('logincontainer', 'registercontainer', 'searchcontainer');"/>
                <input id="showlogin" class="registerbutton" type="button" value="REGISTRARSE" onclick="checkDivVisible('registercontainer','logincontainer', 'searchcontainer');"/>
                <input id="showlogin" class="searchbutton" type="button" value="BUSCAR" onclick="checkDivVisible('searchcontainer', 'logincontainer', 'registercontainer');"/>
            </div>
            <div class="copyright">Copyright 2019 - &copy; - <a id ="ele_id" href="firsttime.php" rel="lightbox" title="Ayuda">Ayuda</a></div>
            <div class="privacy">Terminos <a href="#">legales</a> y <a href="#">privacidad</a>.</div>
        </div>
    </body>
</html>