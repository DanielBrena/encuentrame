
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
                  <li>
                    <a href="#" class="button success">¿ Aun no tienes cuenta ?</a>
                  </li>
                  <li class=""><a href="<?=base_url()?>principal/registro" class="button">Registrate</a></li>
                  
                  
                </ul>
              
              </section>
            </nav>
          </div>
        </header>
        
      <div class="row">
        <div class="large-12 large-centered columns">
        <p></p>
        </div>
      </div>  

        <div class="row">

           <div class="large-12 columns">
        
              <div class="row">
            
                <div class="large-6 columns">
                  <h3 class="subheader">Bienvenido</h3>
                  <p>Su cuenta le da acceso a muchos servicios para su negocio, evento y sus promociones.</p>
                  <p>Tu puedes usar tu cuenta para crear servicios, eventos y promociones,
                    recibir estadisticas en tiempo real y mucho mas.</p>

                  <div class="row">
                    <div class="small-2 columns">
                     
                      <div class="panel">
                        <i class=" fi-marker size-72"></i>
                      </div>

                    </div>
                    <div class="small-2 columns">
                     
                      <div class="panel">
                        <i class=" fi-lock size-72"></i>
                      </div>

                    </div>
                    <div class="small-2 columns">
                     
                      <div class="panel">
                        <i class=" fi-graph-trend size-72"></i>
                      </div>

                    </div>
                    <div class="small-2 columns">
                     
                      <div class="panel">
                        <i class=" fi-graph-bar size-72"></i>
                      </div>

                    </div>
                    <div class="small-2 columns">
                     
                      <div class="panel">
                        <i class=" fi-graph-pie size-72"></i>
                      </div>

                    </div>
                    <div class="small-2 columns">
                     
                      <div class="panel">
                        <i class="fi-map size-72"></i>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="large-6 columns">
                   <h3 class="left">Acceder</h3>
                  <form name="form_registro" ng-controller="registroController"  ng-submit="submit()" >

          

                    <div class="row">
                      <div class="medium-12 colums">
                        <input type="email" name="correo" placeholder="ejemplo@dominio.com" ng-model="usuario.correo" required>
                      </div>
                    </div>

                    
                    <div class="row">
                      <div class="medium-12 colums">
                        <input type="password" name="contrasena" placeholder="Contraseña" ng-model="usuario.contrasena" required>
                      </div>
                    </div>
                    
                    <input type="submit" ng-disabled="form_registro.correo.$invalid && form_registro.contrasena.$invalid" class="button radius  expand" value="Acceder">
                  </form>
                </div>


              </div>
            </div>
        </div>

    
   
  </body>
</html>
