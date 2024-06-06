<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/equation/html/semi-dark-menu/component-splide.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jan 2024 11:42:41 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Splide | EQUATION - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="https://designreset.com/equation/html/src/assets/img/favicon.ico" />
    <link href="../../../layouts/semi-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="../../../layouts/semi-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="../../../layouts/semi-dark-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../../../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../../layouts/semi-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../../../layouts/semi-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="../../../src/plugins/src/splide/splide.min.css">

    <link rel="stylesheet" type="text/css" href="../../../src/assets/css/light/scrollspyNav.css" />
    <link rel="stylesheet" type="text/css" href="../../../src/plugins/css/light/splide/custom-splide.min.css">

    <link rel="stylesheet" type="text/css" href="../../../src/assets/css/dark/scrollspyNav.css" />
    <link rel="stylesheet" type="text/css" href="../../../src/plugins/css/dark/splide/custom-splide.min.css">
    <!--  END CUSTOM STYLE FILE  -->
    <style>
    h6 {
        color: white;
    }

    .hello img {
        width: 200px;
        height: 200px;
    }

    .hello {
        border: 5px solid #191e3a;
        border-radius: 10px;
    }
    </style>
</head>

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container " id="container">

    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">
        <nav id="sidebar">
            <div class="navbar-nav theme-brand flex-row  text-center">
                <div class="nav-logo">
                    <div class="nav-item theme-logo">
                        <a href="index.php">
                            <img src="../../assets/images/conbo-removebg-preview.png" alt="logo">
                        </a>
                    </div>
                    <div class="nav-item theme-text">
                        <a href="index.php" class="nav-link"> Admin </a>
                    </div>
                </div>
                <div class="nav-item sidebar-toggle">
                    <div class="btn-toggle sidebarCollapse">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevrons-left">
                            <polyline points="11 17 6 12 11 7"></polyline>
                            <polyline points="18 17 13 12 18 7"></polyline>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="shadow-bottom"></div>
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu">
                    <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span>Home</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="dashboard" data-bs-parent="#accordionExample">
                        <li>
                            <a href="index.php"> Notification </a>
                        </li>
                        <!-- <li>
                            <a href="index2.html"> Sales </a>
                        </li>
                        <li>
                            <a href="index3.html"> Real Estate </a>
                        </li> -->
                    </ul>
                </li>

                <li class="menu menu-heading">
                    <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg><span>APPLICATIONS</span></div>
                </li>


                <li class="menu">
                    <a href="#invoice" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-book">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                            </svg>
                            <span>Category</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="invoice" data-bs-parent="#accordionExample">
                        <!-- <li>
                            <a href="app-invoice-list.html"> List </a>
                        </li> -->
                        <li>
                            <a href="?act=dsdm"> List </a>
                        </li>
                        <li>
                            <a href="?act=adddm"> Add </a>
                        </li>
                        <!-- <li>
                            <a href="?act=listdm"> Edit </a>
                        </li> -->
                    </ul>
                </li>

                <li class="menu active">
                    <a href="#ecommerce" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-shopping-cart">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h6l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                            <span>Product</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled show" id="ecommerce" data-bs-parent="#accordionExample">
                        <!-- <li>
                                <a href="app-ecommerce-product-shop.html"> Shop </a>
                            </li> -->
                        <li class="active">
                            <a href="?act=dssp"> List </a>
                        </li>
                        <li>
                            <a href="?act=addsp"> Add </a>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <a href="#blog" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-pen-tool">
                                <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                                <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                                <path d="M2 2l7.586 7.586"></path>
                                <circle cx="11" cy="11" r="2"></circle>
                            </svg>
                            <span>Blog</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="blog" data-bs-parent="#accordionExample">
                        <!-- <li>
                            <a href="app-blog-grid.html"> Grid </a>
                        </li> -->
                        <li>
                            <a href="?act=dsbv"> List </a>
                        </li>
                        <li>
                            <a href="?act=addbv"> Create </a>
                        </li>
                        <!-- <li>
                            <a href="app-blog-edit.html"> Edit </a>
                        </li> -->
                    </ul>
                </li>
                <li class="menu">
                    <a href="?act=dslh" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-map-pin">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span>Contacts</span>
                        </div>
                    </a>
                </li>
                <li class="menu">
                    <a href="?act=dsacc" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-users">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <span>Users</span>
                        </div>
                    </a>
                </li>
                <li class="menu">
                    <a href="?act=dsbill" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-calendar">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <span>Bill</span>
                        </div>
                    </a>
                </li>
            </ul>

        </nav>

    </div>
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="container">
            <div class="container">
                <div class="row layout-top-spacing">
                    <div id="splider_Basic" class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">

                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area  style-custom-1">

                                <div class="code-section-container show-code">

                                    <?php foreach ($productDetail as $data) :
                                        extract($data); ?>

                                    <div class="code-section text-left">
                                        <pre><h6 class="">ID Product :<?= $id_product ?></h6>
<h6>Name Product :<?= $data['name_product'] ?></h6>
<h6>Price Product : $<?= $data['price_product'] ?></h6>
<h6>Views Product :<?= $data['views'] ?></h6>
<h6>Tag Product :<?= $data['tags'] ?></h6>
<h6>Date Add :<?= $data['date_add'] ?></h6>

                                    </div>
                                    
                                </div>
                                <br>
                                <br>
                                <div  class="hello"  cols="20" style="color:#191e3a;font-weight: bold;" class="form-control" disabled rows="5"><br><h5 style="margin-left: 20px;">Description :</h5><?= $data['description_product'] ?></div>
                                <br>
                                <?php $img =  getSanPhamAnhOne($id_product); for ($i = 0; $i < count($img); $i++) : ?>
                                    <div class="position-relative">
    <div class="container" style="max-width: 560px">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($img as $index => $image) : ?>
                        <li class="splide__slide">
                            <img alt="slider-image" class="img-fluid"
                                src="<?= viewImageAdmin($image['img']) ?>">  
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
                                <?php endfor; ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- <div class="row">
                    <div id="splider_MultipleSlider" class="col-lg-12 col-md-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h6>Multiple Slides</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="position-relative">
                                    <div class="container" style="max-width: 700px">
                                        <div class="splide-multiple">
                                            <div class="splide__track">
                                                <ul class="splide__list">
                                                    <li class="splide__slide">
                                                        <img alt="slider-image" class="img-fluid"
                                                            src="../src/assets/img/product-1.jpg">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img alt="slider-image" class="img-fluid"
                                                            src="../src/assets/img/product-2.jpg">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img alt="slider-image" class="img-fluid"
                                                            src="../src/assets/img/product-3.jpg">
                                                    </li>

                                                    <li class="splide__slide">
                                                        <img alt="slider-image" class="img-fluid"
                                                            src="../src/assets/img/product-1.jpg">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img alt="slider-image" class="img-fluid"
                                                            src="../src/assets/img/product-2.jpg">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img alt="slider-image" class="img-fluid"
                                                            src="../src/assets/img/product-3.jpg">
                                                    </li>

                                                    <li class="splide__slide">
                                                        <img alt="slider-image" class="img-fluid"
                                                            src="../src/assets/img/product-1.jpg">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img alt="slider-image" class="img-fluid"
                                                            src="../src/assets/img/product-2.jpg">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img alt="slider-image" class="img-fluid"
                                                            src="../src/assets/img/product-3.jpg">
                                                    </li>

                                                    <li class="splide__slide">
                                                        <img alt="slider-image" class="img-fluid"
                                                            src="../src/assets/img/product-1.jpg">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img alt="slider-image" class="img-fluid"
                                                            src="../src/assets/img/product-2.jpg">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img alt="slider-image" class="img-fluid"
                                                            src="../src/assets/img/product-3.jpg">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="code-section-container">

                                    <button class="btn toggle-code-snippet"><span>Code</span> <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-chevron-down toggle-code-icon">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg></button>

                                    <div class="code-section text-left">
                                        <pre></pre>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <script src="../../../src/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../../../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="../../../src/plugins/src/mousetrap/mousetrap.min.js"></script>
        <script src="../../../src/plugins/src/waves/waves.min.js"></script>
        <script src="../../../layouts/semi-dark-menu/app.js"></script>

        <script src="../../../src/plugins/src/highlight/highlight.pack.js"></script>
        <!-- END GLOBAL MANDATORY STYLES -->
        <script src="../../../src/assets/js/scrollspyNav.js"></script>
        <script src="../../../src/plugins/src/splide/splide.min.js"></script>
        <script src="../../../src/plugins/src/splide/custom-splide.js"></script>
        </body>

        <!-- Mirrored from designreset.com/equation/html/semi-dark-menu/component-splide.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jan 2024 11:42:45 GMT -->

</html>