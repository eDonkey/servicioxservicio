<?php
error_reporting(E_ALL);
setlocale(LC_ALL,"es_ES");
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
        <title>Mi perfil</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/new_profile.js"></script>
<!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" href="css/new_profile.css">
        <link rel="stylesheet" href="css/profile.css">
        <script>
          $(function () {
            $('form').on('submit', function (e) {
              e.preventDefault();
              $.ajax({
                type: 'post',
                url: 'developer.php',
                data: $('form').serialize(),
                success: function () {
                  alert('form was submitted');
                }
              });
            });
          });
        </script>
    </head>
    <body>

<div class="container emp-profile">
    <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="images/<?php echo $_SESSION['avatar']; ?>" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Cambiar Foto
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $_SESSION['fullname']; ?>
                                    </h5>
                                    <h6>
                                        <?php echo $_SESSION['descripcion']; ?>
                                    </h6>
                                    <p class="proile-rating">KARMA: <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Acerca de</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Publicaciones</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Editar Perfil"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <label class="switch">
                                <form method="post" action="developer.php">
                                    <input type="checkbox" id="developer" <?php if ($_SESSION['developer'] == "Y" ) { echo "checked"; ?> onclick="this.form.submit()"/>
                                </form>
                                <span class="slider"></span>
                                <input type="text" id="apikey" value="CLICK PARA MOSTRAR API KEY" onclick="showApiKey('<?php echo "asbdhbsadkhbshd"; ?>')" />
                                <?php } ?>
                            </label>     
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>EMAIL</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['email']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>MIEMBRO DESDE</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo date('r', strtotime($_SESSION['user_since'])); ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ID EN SISTEMA</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['kid']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Web Developer and Designer</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
        </div>
        </body>
</html>
<?php } ?>