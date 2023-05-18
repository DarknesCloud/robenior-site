<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Robenior System</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
          <p>Cargando...</p>
        </div>
      </div>
    </div>
    <!-- Page-->
    <div class="page">
      <!-- Page Header-->
      <header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar_half-dark" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-stick-up-clone="false" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-lg-stick-up-offset="69px" data-xl-stick-up-offset="35px" data-xxl-stick-up-offset="35px">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand-name" href="index.php"><img src="images/logo-157x37.png" alt="" width="157" height="37"/></a></div>
              </div>
              <!-- RD Navbar Nav-->
              <div class="rd-navbar-nav-wrap">
                <div class="rd-navbar-nav-wrap__element"><a  ></a></div>
                <ul class="rd-navbar-nav">
                <?php
                   
                   $url = $_SERVER['REQUEST_URI'];
                   $producto = basename($url);
                 
                   if ($producto === "products.php") {
                       
                       $link = "index.php";
                   } else{
                    $link = "#";
                   }
                   
                   ?>
                  <li class="active"><a href="<?php echo $link ?>">Inicio
                   </a>
                  </li>
                  <li><a href="<?php echo $link ?>#about">¿Quienes Somos?
                      <!--if (navbarTexts && typeof(item.subtitle) !== 'undefined')-->
                      <!--  span.rd-navbar-subtitle=item.subtitle--></a>
                  </li>
                 
                  <li><a href="<?php echo $link ?>#services">Servicios
                      <!--if (navbarTexts && typeof(item.subtitle) !== 'undefined')-->
                      <!--  span.rd-navbar-subtitle=item.subtitle--></a>
                  </li>

                  <li><a href="<?php echo $link ?>#gallery">Galería
                      <!--if (navbarTexts && typeof(item.subtitle) !== 'undefined')-->
                      <!--  span.rd-navbar-subtitle=item.subtitle--></a>
                  </li>

                  <!-- <li><a href="#clients">Clientes -->
                      <!--if (navbarTexts && typeof(item.subtitle) !== 'undefined')-->
                      <!--  span.rd-navbar-subtitle=item.subtitle--></a>
                  <!-- </li> -->
                  <li><a href="<?php echo $link ?>#blog">Blog
                      <!--if (navbarTexts && typeof(item.subtitle) !== 'undefined')-->
                      <!--  span.rd-navbar-subtitle=item.subtitle--></a>
                  </li>
                  <li><a href="<?php echo $link ?>#contacts">Contactanos
                      <!--if (navbarTexts && typeof(item.subtitle) !== 'undefined')-->
                      <!--  span.rd-navbar-subtitle=item.subtitle--></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>    
      </section>

  <?php include_once('./product/store.php') ?>


      <!-- Page Footer-->
      <section class="pre-footer-corporate bg-image-7 bg-overlay-darkest">
        <div class="container">
          <div class="row justify-content-sm-center justify-content-lg-start row-30 row-md-60">
            <div class="col-sm-10 col-md-6 col-lg-10 col-xl-3"><a class="brand" href="index.html"><img src="images/logo-157x37.png" alt="" width="157" height="37"/></a>
              <p>Somos una empresa con una amplia experiencia en el sector, nos especializamos en brindar soluciones innovadoras en áreas como soporte técnico, desarrollo web, hosting, mantenimiento de computadoras, creación de aplicaciones, sitios web, contratos de servicio técnico mensual, atención al consumidor final y correo corporativo.</p>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-3 col-xl-3">
              <h6>Navegación</h6>
              <ul class="list-xxs list-primary">
                <li><a href="#">Lo que ofrecemos</a></li>
                <li><a href="#">Nuestro Equipo</a></li>
                <li><a href="#">Galería</a></li>
                <li><a href="#">Nuevos Posts</a></li>
              </ul>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-4 col-xl-3">
              <h6>Contacto</h6>
              <ul class="list-xs">
                <li>
                  <dl class="list-terms-minimal">
                    <dt>Dirección</dt>
                    <dd>Bo. El Benque, 9 Calle. 10 y 11 Ave.</dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal">
                    <dt>Phones</dt>
                    <dd>
                      <ul class="list-semicolon">
                        <li><a href="tel:#">(504)&nbsp;3155-9105;</a></li>
                        <li><a href="tel:#">(504)&nbsp;32174-8284</a></li>
                      </ul>
                    </dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal">
                    <dt>E-mail</dt>
                    <dd><a class="link-primary" href="mailto:#">junior.alexis@robenior.com</a></dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal">
                    <dt>Horarios</dt>
                    <dd>Lun-Sab: 8 am-5 pm</dd>
                  </dl>
                </li>
              </ul>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-5 col-xl-3">
              <div class="google-map-footer">
                <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
                <!--Please note that YOUR_API_KEY should replaced with your key.-->
                <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
                <div class="google-map-container" data-center="Asados Típicos Express, 9 Calle, San Pedro Sula, Cortes, 21101" data-zoom="17" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
                <div class="google-map"></div>
                <ul class="google-map-markers">
                  <li data-location="Asados Típicos Express, 9 Calle, San Pedro Sula, Cortes, 21101" data-description="Asados Típicos Express"></li>
                </ul>
              </div>


              </div>
            </div>
          </div>
        </div>
      </section>

      <footer class="footer-corporate bg-gray-darkest">
        <div class="container">
          <div class="footer-corporate__inner">
            <p class="rights"><span>Robenior System</span><span>&nbsp;&copy;&nbsp;</span><span id="copyright-year"></span>. All Rights Reserved.</p>
            <ul class="list-inline-xxs">
              <li><a class="icon icon-xxs icon-gray-darker fa fa-facebook" href="#"></a></li>
              <li><a class="icon icon-xxs icon-gray-darker fa fa-twitter" href="#"></a></li>
              <li><a class="icon icon-xxs icon-gray-darker fa fa-google-plus" href="#"></a></li>
              <li><a class="icon icon-xxs icon-gray-darker fa fa-vimeo" href="#"></a></li>
              <li><a class="icon icon-xxs icon-gray-darker fa fa-youtube" href="#"></a></li>
              <li><a class="icon icon-xxs icon-gray-darker fa fa-pinterest" href="#"></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!--+photoswipe()-->
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Houdini-->
  </body>
</html>