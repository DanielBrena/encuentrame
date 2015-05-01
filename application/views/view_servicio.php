
<html class="no-js" ng-app="app" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Encuentrame</title>
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation.css" />
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/servicio.css">
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/nav.css">

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="<?=base_url()?>recursos/js/vendor/jquery.js"></script>
    <script src="<?=base_url()?>recursos/js/angular.js"></script>
    <script src="<?=base_url()?>recursos/js/foundation.min.js"></script>
    <script src="<?=base_url()?>recursos/js/vendor/modernizr.js"></script>
        <script src="<?=base_url()?>recursos/js/gmaps.js"></script>

    <script src="<?=base_url()?>recursos/js/principal.js"></script>
    <script src="<?=base_url()?>recursos/js/app.js"></script>
     <script src="<?=base_url()?>recursos/js/factory/factory.js"></script>
    <script src="<?=base_url()?>recursos/js/controller/servicioController.js"></script>
  </head>
  </body  >

    <header>
      <div class="contain-to-grid sticky">
        <nav class="top-bar" data-topbar>
          <ul class="title-area">
            <li class="name">
              <h1><a id="titulo"href="<?php echo base_url(); ?>">Encuentrame</a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
          </ul>
              
          <section class="top-bar-section">
            <ul id="menu"class="right">
              <li class=""><a href="<?=base_url()?>principal/registro" class="button">Salir</a></li>
            </ul>
              
          </section>
        </nav>
      </div>
    </header>
  
  <section class="contenido">
    
  </section>

   <section ng-controller="servicioController" class="contenido">
     <div class="row">
       <div class="large-11 large-centered columns">
        <div class="row perfil">
          <div class="large-6 large-centered columns">
            <div class="logo">
              <img class="th radius"src="<?=base_url()?>recursos/img/logo_servicio.png">
            </div>
            
          </div>

          <div class="info">

            <div class="small-4 large-4 columns ">
              <div class="text-center">
                <h5 class="subheader">Visitas</h5>
                <h3 class="subheader">2000</h3>
              </div>
            </div>

            <div class="small-4 large-4 columns ">
              <div class="text-center">
                <h5 class="subheader">Comentarios</h5>
                <h3 class="subheader">100</h3>
              </div>
            </div>

            <div class="small-4 large-4 columns ">
              <div class="text-center">
                <h5 class="subheader">Rating</h5>
                <h3 class="subheader">500</h3>
              </div>
            </div>

          </div>

          <div id="mapa">
            
          </div>
          
          


        </div>
      </div>
     </div>
   </section>
    
  
    
   
    
   
  </body>
</html>
