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
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      {{--<div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a></div>
          </div>
          <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>

        </div>
      </div>--}}
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        {{--<header class="main-nav">

        </header>--}}
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-12">
                  <h3>Forma de Pago</h3>
                </div>
                <div class="col-sm-12">
                  <!-- Bookmark Start-->

                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts                   -->
          <div class="container-fluid credit-card">
            <div class="row">
              <!-- Individual column searching (text inputs) Starts-->

              <!-- Individual column searching (text inputs) Ends-->
              <!-- Debit Card Starts-->
              <div class="col-xxl-12 box-col-12 debit-card">
                <div class="card">
                  <div class="card-header pb-0 py-4">
                    <h5>Tarjeta </h5>
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-7">
                              <form class="theme-form e-commerce-form row">
                                  <div class="mb-3 col-6 p-r-0">
                                      <input class="form-control" type="text" placeholder="Nombre Completo">
                                  </div>
                                  <div class="mb-3 col-6">
                                      <input class="form-control" type="text" placeholder="Número de la Tarjeta">
                                  </div>

                                  <div class="mb-3 col-6">
                                      <input class="form-control" type="text" placeholder="CVC">
                                  </div>
                                  <div class="col-12">
                                      <label class="col-form-label p-b-20">Fecha de Expiración</label>
                                  </div>
                                  <div class="mb-3 col-6 p-r-0">
                                      <select class="form-select" size="1">
                                          <option>Seleccionar Mes</option>
                                          <option>Enero</option>
                                          <option>Febrero</option>
                                          <option>Marzo</option>
                                          <option>Abril</option>
                                          <option>Mayo</option>
                                          <option>Junio</option>
                                          <option>Julio</option>
                                          <option>Agosto</option>
                                          <option>Septiembre</option>
                                          <option>Octubre</option>
                                          <option>Noviembre</option>
                                          <option>Diciembre</option>
                                      </select>
                                  </div>
                                  <div class="mb-3 col-6">
                                      <input class="form-control" type="number" placeholder="Introducir Año">
                                  </div>
                                  <div class="mb-3 col-12">
                                      <ul class="payment-opt">
                                          <li><img src="../assets/images/ecommerce/mastercard.png" alt=""></li>
                                          <li><img src="../assets/images/ecommerce/visa.png" alt=""></li>
                                          <li><img src="../assets/images/ecommerce/paypal.png" alt=""></li>
                                      </ul>
                                  </div>
                                  <div class="col-12">
                                      {{--<button class="btn btn-primary btn-block" type="button" href="Empresa/create" title="">Pagar</button>--}}
                                      <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="Empresa/create">Pagar</a></div>
                                  </div>
                              </form>
                          </div>
                          <div class="col-md-5 text-center"><img class="img-fluid" src="../assets/images/ecommerce/card.png" alt=""></div>
                      </div>


                  </div>
                </div>
              </div>
              <!-- Debit Card Ends-->
              <!-- COD Starts-->

              <!-- COD Ends-->
              <!-- EMI Starts-->

              <!-- EMI Ends-->
              <!-- EMI Starts-->

              <!-- EMI Ends                   -->
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        {{--<footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2022 © Sistemas de Información II.</p>
              </div>
              <div class="col-md-6">

              </div>
            </div>
          </div>
        </footer>--}}
        <!-- tap on top starts-->

        <!-- tap on tap ends-->
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
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <script src="../assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
