<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hotel Reservations</title>
  <link rel="stylesheet" href="styles.css">
  <script src="js/slick/slick.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
  
  <!-- header -->

  <header>
  <nav id="navbar">
    <div class="container">
            <h1 class="logo"><a href="index.php"><img src="imagenes/Logo.png" alt=""></a></h1>
            <ul>
                <li><a class="current" href="index.php">Inicio</a></li>
                <li><a class="current" href="habitaciones.php">Habitaciones</a></li>
                <li><a class="current" href="estadia.php">Estadia</a></li>
                <li><a class="current" href="index.html">Salir</a></li>
            </ul>
          </div>
        </nav>  

        <div id="showcase">
          <div class="container">
              <div class="showcase-content">
                  <h1><span class="text-primary">Bienvenidos</span> al hotel Delta</h1>
                  <p class="lead">Podras disfrutar de la mejor experiencia junto a nosotros!</p>
                  <a class="btn" href="#resrevacion15">Servicios del hotel</a>
                </div>
          </div>
        </div> 
    
  </header>


  <!--  whatsapp flotante  -->
  
  <div>
    <a href="https://wa.me/5211234567890?text=Me%20gustaría%20saber%20el%20precio%20del%20coche" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
  </div>
  
  <!-- carrousel -->
  <h2 class="titulo_carrousel">Conoce un poco de nuestros servicios</h2>
 
  <div class="container">
    <br>
    <div id="theCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicadores -->
      <ol class="carousel-indicators">
        <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#theCarousel" data-slide-to="1"></li>
        <li data-target="#theCarousel" data-slide-to="2"></li>
        
      </ol>
  
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="imagenes/spa.jpg" alt="spa" width="600" height="424"> 
           <div class="carousel-caption d-none d-md-block">
    </div>
  </div>
  
       <div class="item">
          <img src="imagenes/gym.jpg" alt="gym" width="600" height="424">
           <div class="carousel-caption d-none d-md-block">
    </div>
        </div>
         <div class="item">
          <img src="imagenes/piscina.jpg" alt="piscina" width="600" height="424"> 
           <div class="carousel-caption d-none d-md-block">     
    </div>
        </div>
  
  
      <a class="left carousel-control" href="#theCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">anterior</span>
      </a>
      <a class="right carousel-control" href="#theCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">siguiente</span>
      </a>
    </div>
  </div>
  
  <!--  servicios del hotel  -->

  <div id="resrevacion15" class="serv_desc">
    <h2 class="titu_serv_desc">Podras disfrutar todos nuestros servicios</h2>
    <br><br>
    <div class="descrip_serv">
    <a class="serv2"> <b>Alojamiento:</b> Proporciona habitaciones o suites para que los huéspedes se hospeden durante su estadía.</a><br>
    <a class="serv1"> <b>Recepción las 24 horas:</b> Ofrece atención al cliente y servicios de recepción durante todo el día.</a><br>
    <a class="serv2"> <b>Servicio de habitaciones:</b> Permite a los huéspedes solicitar comida, bebidas u otros servicios en la comodidad de su habitación.</a><br>
    <a class="serv1"> <b>Restaurante y bar:</b> Ofrece opciones de comida y bebida en el lugar, que pueden incluir desayuno, almuerzo, cena y servicio de bar.</a><br>
    <a class="serv2"> <b>Conexión a internet:</b> Proporciona acceso a internet Wi-Fi o por cable en las áreas públicas y/o en las habitaciones.</a><br>
    <a class="serv1"> <b>Estacionamiento:</b> Ofrece áreas de estacionamiento para que los huéspedes puedan dejar sus vehículos.</a><br>
    <a class="serv2"> <b>Servicio de lavandería:</b> Brinda servicios de lavandería y limpieza en seco para la ropa de los huéspedes.</a><br>
    <a class="serv1"> <b>Gimnasio:</b> Cuenta con un área equipada con máquinas de ejercicio y equipo de entrenamiento para que los huéspedes se mantengan en forma durante su estadía.</a><br>
    <a class="serv2"> <b>Piscina:</b> Ofrece una piscina para que los huéspedes puedan relajarse y disfrutar durante su tiempo libre.</a><br>
    <a class="serv1"> <b>Spa:</b> Brinda servicios de spa y bienestar, como masajes, tratamientos faciales y corporales, sauna, jacuzzi, entre otros.</a><br>
    <a class="serv2"> <b>Servicio de conserjería:</b> Proporciona asistencia para organizar actividades, reservas de restaurantes, compra de boletos, información turística, entre otros.</a><br>
    <a class="serv1"> <b>Servicio de despertador:</b> Permite a los huéspedes solicitar una llamada de despertador en un horario específico.</a><br>
    <a class="serv2"> <b>Servicio de seguridad:</b> Garantiza la seguridad de los huéspedes y sus pertenencias a través de medidas de seguridad como cámaras de vigilancia, guardias de seguridad y acceso restringido.</a><br>
    </div>
  </div>
  
  <!--  footer y contacto  -->
  
  <footer id="footer">
    <div class="contact">
      <h3>Contacto</h3>
      <form id="contact-form">
        <input type="text" placeholder="Nombre" class="form-input">
        <input type="email" placeholder="Correo electrónico" class="form-input">
        <textarea placeholder="Mensaje" class="form-input"></textarea>
        <button type="submit" class="form-submit">Enviar</button>
      </form>
    </div>
    <div class="footer-info">
      <p>© 2023 DELTA SRL. Todos los derechos reservados.</p>
    </div>
  </footer>

  <!--  showcase animacion  -->
  <script>
     const showcaseContent = document.querySelector('.showcase-content');

    function fadeIn(element) {
     let opacity = 0;
     element.style.opacity = opacity;

     const animation = setInterval(function() {
       if (opacity >= 1) {
         clearInterval(animation);
       }
       element.style.opacity = opacity;
       opacity += 0.05;
       }, 100);
      }

     fadeIn(showcaseContent);
  </script>

</body>

</html>


   
  