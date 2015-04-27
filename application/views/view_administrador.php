
<html class="no-js" ng-app="app" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Encuentrame</title>
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation.css" />
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/principal.css">

    <script src="<?=base_url()?>recursos/js/vendor/jquery.js"></script>
    <script src="<?=base_url()?>recursos/js/angular.js"></script>
    <script src="<?=base_url()?>recursos/js/foundation.min.js"></script>
    <script src="<?=base_url()?>recursos/js/vendor/modernizr.js"></script>
    
    <script src="<?=base_url()?>recursos/js/principal.js"></script>
    <script src="<?=base_url()?>recursos/js/app.js"></script>
     <script src="<?=base_url()?>recursos/js/factory/factory.js"></script>
    <script src="<?=base_url()?>recursos/js/controller/registroController.js"></script>
  </head>
  </body >

   <header>
          <div class="contain-to-grid sticky">
            <nav class="top-bar" data-topbar>
              <ul class="title-area">
                <li class="name">
                  <h1><a href="<?=base_url()?>">Encuentrame</a></h1>
                </li>
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
              </ul>
          
              <section class="top-bar-section">
               
                <ul class="right">
                  
                  <li class=""><a href="<?=base_url()?>principal/registro" class="button">Salir</a></li>
                  
                  
                </ul>
              
              </section>
            </nav>
          </div>
        </header>
    
    <section class="contenido">
      <div class="row">
        <div class="large-12 large-centered columns">
          <h5 class="subheader">Crea tu servicio, evento o promocion y date a conocer en todo el mundo.</h5>
        </div>
      </div>
      
    </section>
    <section class="contenido">
      
      <div class="row">
        <div class="large-12 columns">
          <div class="row">
            <div ng-repeat="i in [1,2,3]">
              <div class="large-4 columns">
              <img src="<?=base_url()?>recursos/img/defaultEvento.png">
              <div class="panel">
                <h5>This is a regular panel.</h5>
              </div>

            </div>
            </div>
            
          </div>
        </div>
      </div>

    </section>
  

    
   
  </body>
</html>
