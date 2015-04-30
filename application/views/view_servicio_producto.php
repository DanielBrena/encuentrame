
<html class="no-js" ng-app="app" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Encuentrame</title>
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation.css" />
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/servicio_producto.css">
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="<?=base_url()?>recursos/js/vendor/jquery.js"></script>
    <script src="<?=base_url()?>recursos/js/angular.js"></script>
    <script src="<?=base_url()?>recursos/js/foundation.min.js"></script>
    <script src="<?=base_url()?>recursos/js/vendor/modernizr.js"></script>
        <script src="<?=base_url()?>recursos/js/gmaps.js"></script>

    <script src="<?=base_url()?>recursos/js/principal.js"></script>
    <script src="<?=base_url()?>recursos/js/app.js"></script>
     <script src="<?=base_url()?>recursos/js/factory/factory.js"></script>
    <script src="<?=base_url()?>recursos/js/controller/servicioProductoController.js"></script>
  </head>
  </body  >

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

    <section>
    
      
    <nav class="breadcrumbs ">
      <a href="#"></a>
      <a href="<?=base_url()?>servicio/informacion">Informacion</a>
      <a href="<?=base_url()?>servicio/productos">Productos</a>
      <a class="<?=base_url()?>servicio/estadisticas" href="#">Estadisticas</a>
      
    </nav>
     
    
    
      
    </section>
    
    
    <section class="contenido">
     <div class="row">
      <div class="large-12 large-centered columns" ></div>
        <div ng-repeat="i in [1,2,4]">
          <div class="large-4 columns">

            <div class="panel  box_producto">
              <div class="row">
                <div class="small-9 small-centered columns">
                  <h5>This is a regular panel.</h5>
                </div>
              </div>
              
              <p>It has an easy to override visual style, and is appropriately subdued.</p>
            </div>
            

          </div>

        </div>

      </div>
    </section>
    
    
    
   
  </body>
</html>
