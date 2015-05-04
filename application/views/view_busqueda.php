
<html class="no-js" ng-app="app" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Encuentrame</title>
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation.css" />
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/busqueda.css">
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
    <script src="<?=base_url()?>recursos/js/controller/servicioConfiguracionController.js"></script>
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

 
    
    <section class="panel_contenido" ng-controller="servicioConfiguracionController">
      <div id="busqueda">
        <div  class="large-12 large-centered columns">
            <div class="row collapse">
              <div class="small-10 columns">
                <input type="text" id="inp_search"  placeholder="Buscar">
              </div>
              <div class="small-2 columns">
                <a href="#"  id="btn_search" class="button secondary postfix fi-magnifying-glass size-72">
                </a>
              </div>
            </div>
          </div>
      </div>
      <!--<div id="search" class="large-12  columns">
          <div  class="large-11 large-centered columns">
            <div class="row collapse">
              <div class="small-10 columns">
                <input type="text" id="inp_search"  placeholder="Busca tú ubicación">
              </div>
              <div class="small-2 columns">
                <a href="#"  id="btn_search" class="button secondary postfix fi-magnifying-glass size-72">
                </a>
              </div>
            </div>
          </div>
      </div>-->

      <div id="lugares">
        <ul>
          <div  ng-repeat="e in [1,2,3,4,5,6,7] track by $index">
                
                <li class="lista">
                  <div class="row">
                    

                    <div class="small-8 columns">
                      <h2 class="subheader">Cafeteria</h2>
                      <h3><small>Oaxaca, Mexico</small></h3>
                      <h4><small>Martires de tacubaya.</small></h4>
                      <p class="descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos doloremque deserunt ipsum tempore illo!</p>
                      <hr>
                    </div>

                    <div class="small-4 columns">
                      
                      <div class="row">
                        <div class="small-12 small-centered columns">
                          <div class="logo right">
                            <img class="th radius"src="<?=base_url()?>recursos/img/logo_servicio.png">
                          </div>
                          
                        </div>
                      </div>
                      </div>
                    </div>
                    
                  </div>
                </li>
          </div>
          
        </ul>
      </div>
    </section>
    
    
    <section >
       <div class="row" >
        <div ng-controller="servicioConfiguracionController" id="mapa"></div>
       </div>
      
    </section>

   
   
  
    
   
    
   
  </body>
</html>
