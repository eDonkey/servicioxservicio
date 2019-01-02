<?php
include("config/fbconfig.php");
include("config/mysql_adapter.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Servicios x Servicios</title>
    </head>
    <body>
        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '<?php echo $fbappid; ?>',
              cookie     : true,
              xfbml      : true,
              version    : '3.2'
            });

            FB.AppEvents.logPageView();   

          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "https://connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });
        </script>

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
    Login
</fb:login-button>
    </body>
</html>