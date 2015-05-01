
<html class="no-js" ng-app="app" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Encuentrame</title>
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation.css" />
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/servicio_configuracion.css">
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

    <section >
    
      
    <nav class="breadcrumbs ">
      <a href="#"></a>
      <a href="<?=base_url()?>servicio/informacion">Informacion</a>
      <a href="<?=base_url()?>servicio/productos">Productos</a>
      <a class="<?=base_url()?>servicio/estadisticas" href="#">Estadisticas</a>
      
    </nav>
     
    
    
      
    </section>
    
    <section class="panel" ng-controller="servicioConfiguracionController">
      <div class="row">
        <div class="large-12 columns">
          <div class="row">

            <form action="">
              <div class="row">
                <div class="small-6 small-centered columns">
                      <img class="th radius"src="<?=base_url()?>recursos/img/logo_servicio.png">
                      <p></p>
                </div>
              </div>

              <div class="row">
                <div class="small-12 columns">
                        <input type="text" placeholder="Nombre del servicio">
                </div>
              </div>


              <div class="row">
                <div class="small-12 columns">
                    <textarea placeholder="Descripcion"></textarea>
                </div>
              </div>

              <div class="row">
                <div class="small-12 columns">
                    <label>Categoria
                          <select>
                            <option value="Cafeteria">Cafeteria</option>
                            <option value="Papeleria">Papeleria</option>
                           
                          </select>
                        </label>
                </div>
              </div>

              

              <div class="row">
                <div class="small-12 columns">
                        <input type="text" ng-model="servicio.clave" ng-keyup="crear_etiquetas()" placeholder="Palabras clave">
                </div>
              </div>

              <div class="row">
                <div class="small-12 columns">
                  <div ng-repeat="e in etiquetas track by $index" class="small-4  columns etiqueta">
                  
                        <span ng-class-odd="'label success etiqueta'"  ng-class-even="'label etiqueta'" >{{e}}</span>
                    
                  </div>
                  

                    
                </div>
              </div>

              <input type="submit" ng-disabled="form_registro.usuario.$invalid" class="button radius  expand" value="Registrarse">

               

            </form>

          </div>
      </div>
    </section>
    
    
    <section >
       <div class="row" >
        <div ng-controller="servicioConfiguracionController" id="mapa"></div>
       </div>
      
    </section>

    <section >
         <div id="search" class="large-12  columns">
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
      </div>
    </section>
   
  
    
   
    
   
  </body>
</html>
