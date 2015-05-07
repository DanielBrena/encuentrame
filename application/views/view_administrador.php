
<html class="no-js" ng-app="app" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Encuentrame</title>
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation.css" />
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/administrador.css">
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/nav.css">

    <script src="<?=base_url()?>recursos/js/vendor/jquery.js"></script>
    <script src="<?=base_url()?>recursos/js/angular.js"></script>
    <script src="<?=base_url()?>recursos/js/foundation.min.js"></script>
    <script src="<?=base_url()?>recursos/js/vendor/modernizr.js"></script>
    
    <script src="<?=base_url()?>recursos/js/principal.js"></script>
    <script src="<?=base_url()?>recursos/js/app.js"></script>
     <script src="<?=base_url()?>recursos/js/factory/factory.js"></script>
    <script src="<?=base_url()?>recursos/js/controller/administradorController.js"></script>
  </head>
  </body >
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
                  
                  <li class=""><a href="<?=base_url()?>usuario/logout" class="button">Salir</a></li>
                  
                  
                </ul>
              
              </section>
            </nav>
          </div>
        </header>
    
    <section id="contenido_info" class="contenido">
      <div class="row">
        <div class="large-12 large-centered columns ">
          <p class="subheader">Crea tu servicio, evento o promocion y date a conocer en todo el mundo.</p>
        </div>
      </div>
      
    </section>
    <section ng-controller="administradorController" class="contenido">
      
      <div class="row">
        <div class="large-12 columns">
          <div class="row">
          <!--  <div ng-repeat="i in [1,2,3]">-->
              <div   class="large-4 columns ">
                <div id="servicio" class="box" ng-click="mostrarForm">
                  <img src="<?=base_url()?>recursos/img/logo_servicio.png">
                  <div class="panel">
                    <h5>Crea tu servicio</h5>
                  </div>



                </div>

                <div id="form_servicio" class="box" ng-show="form_ser">
                  <h6>Servicio</h6>
                  <form action="">
                    
                    <div class="row">

                      <div class="small-12 columns">
                        <label>Selecciona la categoria
                          <select>
                            <option value="Cafeteria">Cafeteria</option>
                            <option value="Papeleria">Papeleria</option>
                           
                          </select>
                        </label>
                      </div>

                      <div class="small-12 columns">
                        <input type="text" placeholder="Nombre del servicio">
                      </div>

                      <div class="small-12 columns">
                        <input type="text" placeholder="Codigo postal">
                      </div>

                      <div class="small-12 columns">
                        <input type="text" placeholder="Ciudad / Estado">
                      </div>

                      <div class="small-12 columns">
                        <input type="text" placeholder="Telefono">
                      </div>
                      
                      <div class="small-12 columns">
                        <input type="submit" class="button radius  expand" value="Iniciar">
                      </div>


                    </div>
                    

                  </form>
                  
                </div>
                
              </div>

               <div  class="large-4 columns ">
                <img src="<?=base_url()?>recursos/img/defaultEvento.png">
                <div class="panel">
                  <h5>This is a regular panel.</h5>
              </div>
               </div>
               <div  class="large-4 columns">
                <img src="<?=base_url()?>recursos/img/defaultEvento.png">
                <div class="panel">
                  <h5>This is a regular panel.</h5>
              </div>

            <!--</div>-->
            </div>
            
          </div>
        </div>
      </div>

    </section>
  
  <script>
    /*$(document).ready(function(){
      $(".box").click(function(){
        $(this).slideToggle(function(){

        });
      });

      $("body").click(function(){
        $(".box").slideToggle(function(){

        });
      })
    });*/
  </script>
    
   
  </body>
</html>
