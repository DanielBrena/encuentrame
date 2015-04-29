
<html class="no-js" ng-app="app" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Encuentrame</title>
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation.css" />
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/servicio_configuracion.css">
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
                    <label>Selecciona la categoria
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

               

            </form>

          </div>
      </div>
    </section>

    <section ng-controller="servicioConfiguracionController" id="mapa">
      
    </section>

    
   
    
   
  </body>
</html>
