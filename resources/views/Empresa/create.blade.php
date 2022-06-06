<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="wingo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, wingo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Punto de Venta</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="main-loader">
        <div class="bar-0"></div>
        <div class="bar-1"></div>
        <div class="bar-2"></div>
        <div class="bar-3"></div>
        <div class="bar-4"></div>
      </div>
      <div class="loading">Loading...    </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <section>
      <div class="container-fluid p-0">
        <div class="row m-0">
          <div class="col-12 p-0">
            <div class="login-card"><img class="img-fluid bg-img-cover" src="../assets/images/a-pos/punto.jpeg" alt="">
              <form class="theme-form login-form" method="post" action="{{route('Empresa.store')}}" >
                      @csrf
                      @if($errors->any())
                          <div class="alert alert-danger">
                              <h6>Por favor corrige el error de abajo:</h6>
                          </div>
                      @endif
                <div class="login-header text-center">
                  <h4>Crear Cuenta </h4>
                  <h6>Introduce tus Datos personales y las de tu Empresa</h6>
                </div>
                <div class="form-group">

                </div>
                <div class="login-social-title">
                  <h5>Regístrese con correo electrónico</h5>
                </div>
                <div class="form-group">
                  <label>Nombre del propietario</label>
                  <div class="small-group">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="icon-user"></i>
                        </span>
                      <input class="form-control" name="name" type="text" required="" placeholder="Nombres">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="icon-user"></i></span>
                      <input class="form-control" name="lastname" type="text" required="" placeholder="Apellidos">
                    </div>
                  </div>
                </div>

                  <div class="form-group">
                      <label>Nombre de la Empresa</label>
                      <div class="small-group">
                          <div class="input-group"><span class="input-group-text"><i class=""></i></span>
                              <input class="form-control" name="nombre" type="text" required="" placeholder="Nombre">
                          </div>
                          <div class="input-group"><span class="input-group-text"><i class=""></i></span>
                              <input class="form-control" name="rubro" type="text" required="" placeholder="Rubro">
                          </div>
                      </div>
                  </div>

                <div class="form-group">
                  <label>Correo Electrónico</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                    <input class="form-control" name="email" type="email" required="" placeholder="Test@gmail.com">
                  </div>
                </div>
                <div class="form-group">
                  <label>Contraseña</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                    <input class="form-control" name="password" type="password" name="login[password]" required="" placeholder="*********">
                    <div class="show-hide"><span class="show">                         </span></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="checkbox">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">Está de acuerdo con la <span>Política de Privacidad                 </span></label>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit">Crear</button>
                </div>
                <p>¿Ya tienes una cuenta?<a class="ms-2" href="/login">Login</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- page-wrapper end-->
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/config.js">   </script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
