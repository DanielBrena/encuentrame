
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Encuentrame</title>
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation.css" />
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/foundation-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>recursos/css/principal.css">
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <script src="<?=base_url()?>recursos/js/jquery.js"></script>
    <script src="<?=base_url()?>recursos/js/foundation.min.js"></script>
    <script src="<?=base_url()?>recursos/js/vendor/modernizr.js"></script>
    <script src="<?=base_url()?>recursos/js/gmaps.js"></script>
    <script src="<?=base_url()?>recursos/js/principal.js"></script>
   
    <script>

    var map;
    $(document).ready(function(){
      
      map = new GMaps({
        div: '#mapas',
        lat: -12.043333,
        lng: -77.028333
      });

      GMaps.geolocate({
        success: function(position){
          map.setCenter(position.coords.latitude, position.coords.longitude);
        },
        error: function(error){
          //alert('Geolocation failed: '+error.message);
        },
        not_supported: function(){
          //alert("Your browser does not support geolocation");
        },
        always: function(){
          //alert("Done!");
        }
      });



    });
  
    </script>
  </head>
  <body>
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
                <!-- Right Nav Section -->
                <ul class="right">
                  <li class=""><a href="<?=base_url()?>principal/registro" class="button">Registrate</a></li>
                  <li class="active"><a href="<?=base_url()?>principal/acceder"  class="button success">Acceder</a></li>

                  
                </ul>
          
              <!-- Left Nav Section -->
              
              </section>
            </nav>
          </div>
        </header>


    <div class="row" >
      <div class="large-12 large-centered columns">
        <div data-magellan-expedition="fixed">
          <dl class="sub-nav">
            <dd data-magellan-arrival="build"><a href="#build">Servicios recientes</a></dd>
             <dd data-magellan-arrival="js"><a href="#js">Sericios mas buscados</a></dd>
             <dd data-magellan-arrival="js"><a href="#js">Eventos de la semana</a></dd>
             <dd data-magellan-arrival="js"><a href="#js">Mejores promociones</a></dd>
             <dd data-magellan-arrival="js"><a href="#js">Los mejores eventos</a></dd>
          </dl>
        </div>

      </div>

    </div>
    

    
  
    <!-- cabecera-->
    <div id="capa"></div>
    <div id="mapas"></div>

    <div id="cabecera" class="row">
      <div id="search" class="large-12 large-centered columns">
       
          <div id="info" class="large-centered columns">
            <h1> ¡ Encuentra los mejores servicios, ofertas y eventos de tu localidad !</h1>
          </div>
  
            <div  class="large-11 large-centered columns">
              <div class="row collapse">
                <div class="small-10 columns">
                  <input type="text" id="inp_search"  placeholder="Buscar tiendas, papeleria, plomeros, taxi, café...">
                </div>
                <div class="small-2 columns">
                  <a href="#"  id="btn_search" class="button secondary postfix fi-magnifying-glass size-72">
                  </a>
                </div>
              </div>
            </div>


          
        </div>
    </div>
    
    <!-- fin cabecera-->
    
    <div class="row">
      <div class="large-12 large-centered columns">
        <p></p>
        <a href="#" class="button tiny secondary right close">Ver más</a>
      </div>
    </div>  

    <div class="row">

      <div class="large-4 columns">
        <ul class="pricing-table service">
          <li class="title">Papeleria</li>

          <ul class="tabs" class="serviceTap" data-tab>
            <li class="tab-title active"><a href="#panel1">Información</a></li>
            <li class="tab-title"><a class="click_service_map" href="#panel2">Ubicación</a></li>  
          </ul>
          <div class="tabs-content">

            <div class="content active" id="panel1">
              <a class="th [radius]" href="#">
                <img src="<?=base_url()?>recursos/img/defaultService.png">
              </a>
            </div>

            <div class="content" id="panel2">
              <div id="map">
              </div>
            </div>
            
          </div>
          <li class="description">
            <p>La mejor papeleria de todas.</p>
          </li>
          

          
          <li class="cta-button"><a class="button" href="#">Visitar</a></li>
        </ul>
      </div>
      <div class="large-4 columns">
        <ul class="pricing-table service">
          <li class="title">Papeleria</li>

          <ul class="tabs" class="serviceTap" data-tab>
            <li class="tab-title active"><a href="#panel1">Información</a></li>
            <li class="tab-title"><a class="click_service_map" href="#panel2">Ubicación</a></li>  
          </ul>
          <div class="tabs-content">

            <div class="content active" id="panel1">
              <a class="th [radius]" href="#">
                <img src="<?=base_url()?>recursos/img/defaultService.png">
              </a>
            </div>

            <div class="content" id="panel2">
              <div id="map">
              </div>
            </div>
            
          </div>
          <li class="description">
            <p>La mejor papeleria de todas.</p>
          </li>
          
          <li class="cta-button"><a class="button" href="#">Visitar</a></li>
        </ul>
      </div>

      <div class="large-4 columns">
        <ul class="pricing-table service">
          <li class="title">Papeleria</li>

          <ul class="tabs" class="serviceTap" data-tab>
            <li class="tab-title active"><a href="#panel1">Información</a></li>
            <li class="tab-title"><a class="click_service_map" href="#panel2">Ubicación</a></li>  
          </ul>
          <div class="tabs-content">

            <div class="content active" id="panel1">
              <a class="th [radius]" href="#">
                <img src="<?=base_url()?>recursos/img/defaultService.png">
              </a>
            </div>

            <div class="content" id="panel2">
              <div id="map">
              </div>
            </div>
            
          </div>
          <li class="description">
            <p>La mejor papeleria de todas.</p>
          </li>
          
          <li class="cta-button"><a class="button" href="#">Visitar</a></li>
        </ul>
      </div>

    </div>

    <div class="row">
      <div class="large-12 large-centered columns">
        <p></p>
      </div>
    </div>  

    <div id="eventos" >
      <div class="row">
          <div class="large-6 columns">
              <h1 id="info_eventos" class="subheader"> ¡ Encuentra los mejores eventos de la semana !</h1>
          </div>
          <div id="box_eventos" class="large-6 columns">
              <ul id="box_evento" class="example-orbit-content" data-orbit>
                <li data-orbit-slide="headline-1">
                  <div>
                    <h2>Evento 1</h2>
                    <h3>lorem</h3>
                  </div>
                </li>
                <li data-orbit-slide="headline-2">
                  <div>
                    <h2>Evento 2</h2>
                    <h3>lorem</h3>
                  </div>
                </li>
                <li data-orbit-slide="headline-3">
                  <div>
                    <h2>Evento 3</h2>
                    <h3>lorem</h3>
                  </div>
                </li>
              </ul>
          </div>

      </div>
    
          
     
            
    </div>

     <div class="row">
      <div class="large-12 large-centered columns">
       <p></p>
        <a href="#" class="button tiny secondary right close">Ver más</a>
      </div>
    </div>  

    <div class="row">

      <div class="large-12 columns">
        
          <div class="row">
            
            <div class="large-3 columns">
              <img src="<?=base_url()?>recursos/img/defaultEvento.png">
               <div class="panel">
                <h5>This is a regular panel.</h5>
               
                
              </div>

            </div>
            <div class="large-3 columns">
              <img src="<?=base_url()?>recursos/img/defaultEvento.png">
               <div class="panel">
                <h5>This is a regular panel.</h5>
               
                
              </div>
            </div>
            <div class="large-3 columns">
              <img src="<?=base_url()?>recursos/img/defaultEvento.png">
               <div class="panel">
                <h5>This is a regular panel.</h5>
               
                
              </div>
            </div>
            <div class="large-3 columns">
              <img src="<?=base_url()?>recursos/img/defaultEvento.png">
               <div class="panel">
                <h5>This is a regular panel.</h5>
               
                
              </div>
            </div>

          </div>

      </div>
      
    </div>

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

   

    
    <script src="<?=base_url()?>recursos/js/vendor/jquery.js"></script>
    <script src="<?=base_url()?>recursos/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
