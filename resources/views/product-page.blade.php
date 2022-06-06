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
    <title>wingo - Premium Admin Template</title>
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
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/rating.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css">
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
                <a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo.png" alt="">
                </a>
            </div>
          </div>
          <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i></div>
                  <input class="form-control-plaintext" placeholder="Buscar...">
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown">
                <div class="media profile-media"><img class="rounded-circle" src="../assets/images/avtar/emoji/9.png" alt=""></div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><i data-feather="user"></i><span>Perfil </span></li>
                  <li><i data-feather="mail"></i><span>Inbox</span></li>
                  <li><i data-feather="file-text"></i><span>Taskboard</span></li>
                  <li><i data-feather="settings"></i><span>Configurar</span></li>
                  <li><a class="btn btn-light w-100" href="login.blade.php"><i data-feather="log-in"></i>Salir</a></li>
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
          <div class="logo-wrapper"><a href="">
                  {{--<img class="img-fluid" src="../assets/images/logo/logo.png" alt="">--}}
              </a>
          </div>

          <div class="logo-icon-wrapper">
              <a href="">
                  {{--<img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt="">--}}
              </a>
          </div>

          <div class="morden-logo">
              <a href="">
                  {{--<img class="img-fluid" src="../assets/images/logo/morden-logo.png" alt="">--}}
              </a>
          </div>

          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">

                  <li class="dropdown">
                      <a class="nav-link menu-title" href="javascript:void(0)">
                          <i data-feather="layout">
                          </i><span>Page layout</span>
                      </a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="box-layout.html">Boxed</a></li>
                      <li><a href="layout-rtl.html">RTL             </a></li>
                      <li><a href="layout-dark.html">Dark Layout             </a></li>
                      <li><a href="footer-light.html">Footer Light</a></li>
                      <li><a href="footer-dark.html">Footer Dark</a></li>
                      <li><a href="footer-fixed.html">Footer Fixed</a></li>
                    </ul>
                  </li>

                  <li class="dropdown">
                      <a class="nav-link menu-title" href="javascript:void(0)">
                          <i data-feather="box"></i><span>Productos </span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="">Estado</a></li>
                      <li><a href="">Registrar Producto</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="">
                          <i data-feather="git-pull-request">
                          </i><span>Prueba</span></a></li>

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
                  <h3>Product Page</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">Producto</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="chat.html" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="product-page.html" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="shopping-bag">               </i></a></li>
                      <li><a href="user-profile.html" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="users"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="heart"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div>
              <div class="row product-page-main p-0">
                <div class="col-xl-5 col-md-6 box-col-12 xl-50">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-xl-9 product-main">
                          <div class="pro-slide-single">
                            <div class="slide-box"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt=""></div>
                            <div class="slide-box"><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt=""></div>
                            <div class="slide-box"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt=""></div>
                            <div class="slide-box"><img class="img-fluid" src="../assets/images/ecommerce/04.jpg" alt=""></div>
                            <div class="slide-box"><img class="img-fluid" src="../assets/images/ecommerce/05.jpg" alt=""></div>
                            <div class="slide-box"><img class="img-fluid" src="../assets/images/ecommerce/06.jpg" alt=""></div>
                            <div class="slide-box"><img class="img-fluid" src="../assets/images/ecommerce/07.jpg" alt=""></div>
                            <div class="slide-box"><img class="img-fluid" src="../assets/images/ecommerce/08.jpg" alt=""></div>
                          </div>
                        </div>
                        <div class="col-xl-3 product-thumbnail">
                          <div class="pro-slide-right">
                            <div class="slide-box"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt=""></div>
                            <div class="slide-box"><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt=""></div>
                            <div class="slide-box"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt=""></div>
                            <div class="slide-box"><img class="img-fluid" src="../assets/images/ecommerce/04.jpg" alt=""></div>
                            <div class="slide-box"><img class="img-fluid" src="../assets/images/ecommerce/05.jpg" alt=""></div>
                            <div class="slide-box"><img class="img-fluid" src="../assets/images/ecommerce/06.jpg" alt=""></div>
                            <div class="slide-box"><img class="img-fluid" src="../assets/images/ecommerce/07.jpg" alt=""></div>
                            <div class="slide-box"><img class="img-fluid" src="../assets/images/ecommerce/08.jpg" alt=""></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-5 box-col-6 proorder-xl-3 xl-100">
                  <div class="card">
                    <div class="card-body">
                      <div class="pro-group pt-0">
                        <div class="product-page-details">
                          <h3>Women Pink shirt.</h3>
                          <div class="pro-review">
                            <div class="d-flex">
                              <select id="u-rating-fontawesome" name="rating" autocomplete="off">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select><span>(250 review)</span>
                            </div>
                          </div>
                        </div>
                        <div class="product-price">$30.00
                          <del>$48.00</del>
                        </div>
                        <ul class="product-color">
                          <li class="bg-primary"></li>
                          <li class="bg-secondary"></li>
                          <li class="bg-success"></li>
                          <li class="bg-info"></li>
                          <li class="bg-warning"></li>
                        </ul><a class="btn btn-warning mt-0" href="cart.html"><i class="fa fa-shopping-cart me-2"></i>Buy Now</a>
                      </div>
                      <div class="pro-group">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that.</p>
                      </div>
                      <div class="pro-group">
                        <div>
                          <div class="row">
                            <div class="col-md-6">
                              <table>
                                <tbody>
                                  <tr>
                                    <td> <b>Brand &nbsp;&nbsp;&nbsp;:</b></td>
                                    <td>Pixelstrap</td>
                                  </tr>
                                  <tr>
                                    <td> <b>Availability &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                                    <td class="txt-success">In stock</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="col-md-6">
                              <table>
                                <tbody>
                                  <tr>
                                    <td> <b>Seller &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                                    <td>ABC</td>
                                  </tr>
                                  <tr>
                                    <td> <b>Fabric &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                                    <td>Cotton</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pro-group">
                        <div class="row">
                          <div class="col-md-6">
                            <h6 class="product-title">share it</h6>
                          </div>
                          <div class="col-md-6">
                            <div class="product-icon">
                              <ul class="product-social">
                                <li class="d-inline-block"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li class="d-inline-block"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                <li class="d-inline-block"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li class="d-inline-block"><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                                <li class="d-inline-block"><a href="javascript:void(0)"><i class="fa fa-rss"></i></a></li>
                              </ul>
                              <form class="d-inline-block f-right">                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pro-group pb-0">
                        <div class="pro-shop"><a class="btn btn-primary" href="cart.html"><i class="fa fa-shopping-basket me-2"></i>Add To Cart                                  </a><a class="btn btn-warning" href="list-wish.html"><i class="fa fa-heart me-2"></i>Add To WishList</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-md-6 box-col-6 xl-50 proorder-lg-1">
                  <div class="card">
                    <div class="card-body">
                      <!-- side-bar colleps block stat-->
                      <div class="filter-block">
                        <h4>Brand</h4>
                        <ul>
                          <li>
                            <div class="form-check">
                              <input class="form-check-input" id="Raymond" type="checkbox" value="">
                              <label class="form-check-label" for="Raymond">Raymond</label>
                            </div>
                          </li>
                          <li>
                            <div class="form-check">
                              <input class="form-check-input" id="Pepe-Jeans" type="checkbox" value="">
                              <label class="form-check-label" for="Pepe-Jeans">Pepe-Jeans</label>
                            </div>
                          </li>
                          <li>
                            <div class="form-check">
                              <input class="form-check-input" id="Celio" type="checkbox" value="">
                              <label class="form-check-label" for="Celio">Celio</label>
                            </div>
                          </li>
                          <li>
                            <div class="form-check">
                              <input class="form-check-input" id="aime" type="checkbox" value="">
                              <label class="form-check-label" for="aime">aime</label>
                            </div>
                          </li>
                          <li>
                            <div class="form-check">
                              <input class="form-check-input" id="aliff" type="checkbox" value="">
                              <label class="form-check-label" for="aliff">aliff</label>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <div class="collection-filter-block">
                        <ul class="pro-services">
                          <li>
                            <div class="media"><i data-feather="truck"></i>
                              <div class="media-body">
                                <h5>Free Shipping                                    </h5>
                                <p>Free Shipping World Wide</p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="media"><i data-feather="clock"></i>
                              <div class="media-body">
                                <h5>24 X 7 Service                                    </h5>
                                <p>Online Service For New Customer</p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- silde-bar colleps block end here-->
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="row product-page-main">
                <div class="col-sm-12">
                  <ul class="nav nav-tabs border-tab mb-0" id="top-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="false">Febric</a>
                      <div class="material-border"></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">Video</a>
                      <div class="material-border"></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="true">Details</a>
                      <div class="material-border"></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" id="brand-top-tab" data-bs-toggle="tab" href="#top-brand" role="tab" aria-controls="top-brand" aria-selected="true">Brand</a>
                      <div class="material-border"></div>
                    </li>
                  </ul>
                  <div class="tab-content" id="top-tabContent">
                    <div class="tab-pane fade active show" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                      <p class="mb-0 m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                      <p class="mb-0 m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                    <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                      <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                    </div>
                    <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                      <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                    </div>
                    <div class="tab-pane fade" id="top-brand" role="tabpanel" aria-labelledby="brand-top-tab">
                      <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2022 © Sitemas de Información II</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
        <!-- tap on top starts-->
        <div class="tap-top"><i class="icon-control-eject"></i></div>
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
    <script src="../assets/js/rating/jquery.barrating.js"></script>
    <script src="../assets/js/rating/rating-script.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <script src="../assets/js/slick-slider/slick.min.js"></script>
    <script src="../assets/js/slick-slider/slick-theme.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <script src="../assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
