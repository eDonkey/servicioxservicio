<?php
include("config/fbconfig.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Facebook Login JavaScript Example</title>
        <meta charset="UTF-8">
        <style type="text/css">
            input, textarea, select, button {
              width : 150px;
              margin: 0;
                -webkit-box-sizing: border-box; /* For legacy WebKit based browsers */
                -moz-box-sizing: border-box; /* For legacy (Firefox <29) Gecko based browsers */
                box-sizing: border-box;
            }
            body {
                background-color: #f1d849;
            }
        </style>
    </head>
    <body>
        <script>
            function statusChangeCallback(response) {
                console.log('statusChangeCallback');
                console.log(response);
                if (response.status === 'connected') {
                  testAPI();
                } else {
                  document.getElementById('status').innerHTML = 'Please log ' +
                    'into this app.';
                }
            }
              function checkLoginState() {
                FB.getLoginStatus(function(response) {
                  statusChangeCallback(response);
                });
  }
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1213490652138684',
      cookie     : true,  // enable cookies to allow the server to access 
                          // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.8' // use graph api version 2.8
    });
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });

  };
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
    function showDiv(divid) {
    div = document.getElementById(divid);
    div.style.visibility = "visible";
    div.style.opacity = 1;
}
        </script>
        <div id="corp-logo">
            <img src="images/logo.png" border="0" width="246px" height="123px" />
        </div>
        <div id="searchcontainer" style="position:fixed;top: 50%;left: 50%;width:30em;height:12em;margin-top: -9em;margin-left: -15em;border: 1px solid #ccc;background-color: #f3f3f3;visibility:visible;">
            <form method="post" action="">
                <p><input type="text" id="busqueda" name="busqueda" size="30" /><input type="submit" value="BUSCAR" style="padding: 10px 20px 11px !important;font-size: 21px !important;background-color: #F36C8C;font-weight: bold;text-shadow: 1px 1px #F36C8C;color: #ffffff;border-radius: 100px;-moz-border-radius: 100px;-webkit-border-radius: 100px;border: 1px solid #F36C8C;cursor: pointer;box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;" /></p>
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