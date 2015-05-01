
<html class="no-js" ng-app="app" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Encuentrame</title>
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation.css" />
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/servicio_producto.css">
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
    <script src="<?=base_url()?>recursos/js/controller/servicioProductoController.js"></script>
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

    <section>
    
      
    <nav class="breadcrumbs ">
      <a href="#"></a>
      <a href="<?=base_url()?>servicio/informacion">Informacion</a>
      <a href="<?=base_url()?>servicio/productos">Productos</a>
      <a class="<?=base_url()?>servicio/estadisticas" href="#">Estadisticas</a>
      
    </nav>

    </section>

    <section class="contenido">
      
    </section >
      
      <div class="row">
        
        <div  class="large-11 large-centered columns">

         

          <div class="row collapse">
            <div class="small-10 columns">
              <input type="text" id="inp_search"  placeholder="Busca tu producto, si no, agregalo.">
            </div>

            <div class="small-2 columns">
              <a href="#"  id="btn_search" class="button secondary postfix fi-magnifying-glass size-72">
              </a>
            </div>
            <div>
              <div >
                <label>Busqueda local</label>
                <input id="checkbox1" type="checkbox"><label for="checkbox1">Mis productos</label>
                
              </div>
            </div>
            <div>
             <div class="row collapse">
                <div class="small-3 large-2 columns">
                  <span class="prefix"> $ </span>
                </div>
                <div class="small-9 large-10 columns">
                  <input type="number" min="0.0" value="0.0" placeholder="Precio">
                </div>
              </div>
            </div>
            
          </div>
          
        </div>
        
      </div>

    <section>
      <p></p>
    </section>
    
 

    <section class="contenido">
     <div class="row">
      <div class="large-12 columns" >
        <div class="row">
            <div ng-repeat="i in [1,2,3,4]">
              <div   class="large-4 columns ">

                <div id="servicio" class="box_producto">
                  
                  <div class="img text-center">
                    <img  src="<?=base_url()?>recursos/img/producto_a.png">
                  </div>
                  
                  <div class="panel precio">
                    <h3 class="text-center">Coca-Cola</h3>
                    <h5 class="text-center">$100.00</h5>
                  </div>



                </div>
              </div>
            </div>
        </div>


      </div>
   
      </div>
    </section>
    
    
    
   
  </body>
</html>
