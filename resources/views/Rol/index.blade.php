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
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
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
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row m-0">
                <div class="main-header-left">
                    <div class="logo-wrapper">
                        <a href="index.html">
                            <img class="img-fluid" src="../assets/images/logo/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="toggle-sidebar">
                    <i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle">
                    </i>
                </div>

                <div class="nav-right col pull-right right-menu">
                    <ul class="nav-menus">

                        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                        <li class="onhover-dropdown">
                            <div class="media profile-media"><img class="rounded-circle" src="../assets/images/avtar/emoji/9.png" alt=""></div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><i data-feather="user"></i><span>Perfil</span></li>
                                <li><i data-feather="settings"></i><span>Configurar</span></li>
                                <li><a class="btn btn-light w-100" href="/login">
                                        <i data-feather="log-in"></i>Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="d-lg-none col mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
          <header class="main-nav">
              <div class="logo-wrapper">
                  <a href="index.html">
                      {{--<img class="img-fluid" src="../assets/images/logo/logo.png" alt="">--}}
                  </a>
              </div>
              <div class="logo-icon-wrapper">
                  <a href="index.html">
                      {{--<img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt="">--}}
                  </a>
              </div>
              <div class="morden-logo">
                  <a href="index.html">
                      {{--<img class="img-fluid" src="../assets/images/logo/morden-logo.png" alt="">--}}
                  </a>
              </div>
              <nav>
                  <div class="main-navbar">
                      <div class="left-arrow" id="left-arrow">
                          <i data-feather="arrow-left">
                          </i>
                      </div>
                      <div id="mainnav">
                          <ul class="nav-menu custom-scrollbar">

                              <li class="back-btn">
                                  <div class="mobile-back text-end">
                                      <span>Back</span>
                                      <i class="fa fa-angle-right ps-2" aria-hidden="true">
                                      </i>
                                  </div>
                              </li>

                              <li class="dropdown"><a class="nav-link menu-title" href=""><i data-feather="box"></i><span>Productos  </span></a>
                                  <ul class="nav-submenu menu-content">
                                      <li><a href="">Registrar</a></li>
                                      <li><a href="">Almacenar</a></li>
                                  </ul>
                              </li>

                              <li class="dropdown"><a class="nav-link menu-title link-nav" href="ReporteVenta"><i data-feather="git-pull-request"> </i><span>Reportes       </span></a></li>

                              <li class="dropdown"><a class="nav-link menu-title link-nav" href=""><i data-feather="shopping-bag"> </i><span>Ventas       </span></a></li>

                              <li class="dropdown"><a class="nav-link menu-title link-nav" href="Usuario"><i data-feather="user"> </i><span>Usuarios       </span></a></li>

                          </ul>
                      </div>
                      <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                  </div>
              </nav>
          </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Lista de Roles</h3>
                  <ol class="breadcrumb">

                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->

                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <!-- Zero Configuration  Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                      <button class="btn btn-primary btn-block" type="submit">Añadir Rol</button>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Nombre</th>

                            <th>Función</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach ($roles as $rol)
                              <tr>
                                  <td>{{ $rol->id }}</td>
                                  <td>{{ $rol->name }}</td>
                                  <td>System Architect</td>
                              </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Zero Configuration  Ends-->
              <!-- Feature Unable /Disable Order Starts-->

              <!-- Feature Unable /Disable Ends-->
              <!-- Default ordering (sorting) Starts-->

              <!-- Default ordering (sorting) Ends-->
              <!-- Multi-Column Starts-->

              <!-- Multi-Column Ends-->
              <!-- Multiple tables Start-->

              <!-- Multiple tables Ends-->
              <!-- Hidden Starts-->

              <!-- Hidden Ends-->
              <!-- Complex headers (rowspan and colspan) Starts-->

              <!-- Complex headers (rowspan and colspan) Ends-->
              <!-- DOM Positioning Starts-->

              <!-- DOM positioning Ends-->
              <!-- Flexible table width Starts-->

              <!-- Flexible table width  Ends-->
              <!-- State saving Starts-->

              <!-- State saving Ends-->
              <!-- Alternative pagination Starts-->

              <!-- Alternative pagination Ends-->
              <!-- Scroll - vertical Starts-->

              <!-- Scroll - vertical Ends-->
              <!-- Scroll - vertical dynamic Starts-->

              <!-- Scroll - vertical dynamic Ends-->
              <!-- Scroll - horizontal Starts-->

              <!-- Scroll - horizontal Ends-->
              <!-- Language Starts-->

            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- tap on top starts-->
        <div class="tap-top"><i class="icon-control-eject"></i></div>
        <!-- tap on tap ends-->
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2022 © Sistema de Información II.</p>
              </div>
              <div class="col-md-6">

              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
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
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <script src="../assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
