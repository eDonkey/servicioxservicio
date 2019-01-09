<?php
include("config/fbconfig.php");
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
        <div id="searchcontainer" style="position:fixed;top: 50%;left: 50%;width:30em;height:12em;margin-top: -9em;margin-left: -15em;border: 1px solid #ccc;background-color: #f3f3f3;visibility:visible;">
            <form method="post" action="">
                <p><input type="text" id="busqueda" name="busqueda" size="30" class="searchfield" /><input type="submit" value="BUSCAR" class="searchbutton" /></p>
            </form>
        </div>
        <div id"logincontainer" style="position:fixed;top: 50%;left: 50%;width:30em;height:12em;margin-top: -9em;margin-left: -15em;border: 1px solid #ccc;background-color: #f3f3f3;visibility:hidden;">
            <div align="center" style="position:fixed;top: 33%;left: 41%;">
<?php if ($fbstatus == true) { ?>
                <fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
                <div id="status"></div>
                ----- O -----<br />
<?php } ?>
                Ingresar usando email<br />
                    <form method="post" action="" autocomplete="email">
                        EMAIL <input type="text" onclick="showDiv('email-login')" id="email" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="ejemplo@tumail.com" required /><br />
                            <div id="email-login" style="  visibility: hidden;opacity: 0;transition: visibility 0s, opacity 0.5s linear;">
                                CONTRASEÑA <input type="password" id="password" name="password" required /><br />
                                <input type="submit" name="Ingresar" value="INGRESAR" /><br />
                                <h5><a href="">Recuperar contraseña</a></h5>
                        </div>
                    </form>
                </div>
            </div>
    </body>
</html>