
<html class="no-js" ng-app="app" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Encuentrame</title>
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation.css" />
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/servicio2.css">
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
  
  

   <section id="contenido_principal" ng-controller="servicioController" class="contenido">
     <div class="row">
       <div class="large-12 large-centered columns">

        <div class="row perfil">
          <div class="large-4 columns">
            <div class="logo">
              <img class="th radius"src="<?=base_url()?>recursos/img/logo_servicio.png">
            </div>
           </div>
          <div class="large-8 columns">
              <div class="row">

                <div class="large-12 columns">
                  <h2 class="subheader">Cafeteria</h2>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium laboriosam assumenda ut. Harum deleniti suscipit deserunt eum maxime accusantium neque tenetur beatae minima rerum modi nulla, at animi amet eveniet.</p>
                
                </div>

                <div class="large-12 columns">
                  <div class="row">
                    <div class="small-2 columns">
                      <a href="mailto:daniel_brena@outlook.com"><i class="fi-mail icon"></i></a>
                    </div>
                    <div class="small-2 columns">
                       <a href="tel:9511650590"><i class="fi-telephone icon"></i></a>
                    </div>
                    <div class="small-2 columns">
                      <a href="http://www.google.com"><i class="fi-web icon"></i></a>
                    </div>
                    <div class="small-2 columns">
                      <i class="fi-social-facebook icon"></i>
                    </div>
                    <div class="small-2 columns">
                      <i class="fi-social-twitter icon"></i>
                    </div>
                    <div class="small-2 columns">
                      <i class="fi-social-skype icon"></i>
                    </div>

                  </div>
                  
                </div>

                <div class="large-12 columns">
                  
                  <div class="small-4 large-4 columns box">
                    <div class="text-center">
                      <h5 class="subheader">Visitas</h5>
                      <h3 class="subheader">2000</h3>
                    </div>
                  </div>

                  <div class="small-4 large-4 columns box">
                    <div class="text-center">
                      <h5 class="subheader">Comentarios</h5>
                      <h3 class="subheader">100</h3>
                    </div>
                  </div>

                  <div class="small-4 large-4 columns box">
                    <div class="text-center">
                      <h5 class="subheader">Rating</h5>
                      <h3 class="subheader">500</h3>
                    </div>
                  </div>
                
                </div>


              </div>
            </div>

          <div class="">
            <div class="large-12 columns box">
              <div class="row">

                <div class="small-4 columns text-center icon-opciones">
                  <a href="#" class="button tiny split"> <i class="fi-map  "></i><span data-dropdown="drop"></span></a><br>
                  <ul id="drop" class="f-dropdown" data-dropdown-content>
                    <li><a href="#" data-value="DRIVING" class="evt_medio">Auto</a></li>
                    <li><a href="#" data-value="BICYCLING" class="evt_medio">Bicicleta</a></li>
                    <li><a href="#" data-value="WALKING" class="evt_medio" >Caminando</a></li>
                  </ul>

                  <p>Mostrar ruta</p>
                </div>

                <div class="small-4 columns text-center icon-opciones">
                  
                  <i class="fi-comment  "></i>
                  <p>Enviar comentario</p>
                </div>
                  
                </div>
              </div>
            </div>

            <div id="mapa" class=" ">
            
            </div>
            <div id="ruta">
              
            </div>
          </div>
          
          
          
          
          


        </div>
      </div>
     </div>
   </section>
    
    <footer>
      <div id="footer">
        <div class="row">
          <p>Mas de 1000 usuarios</p>
          <hr>
          <div class="small-3 columns">
            <h3 class="subheader">Siguenos</h3>
          </div>
          <div class="small-3 columns"></div>
          <div class="small-6 columns"></div>

          </div>
        </div>

    </footer>
  
    
   
    
   
  </body>
</html>
