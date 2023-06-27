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



</head>

<body>
  
  <!-- header -->

  <header>
    <nav id="navbar">
      <div class="container">
              <h1 class="logo"><a href="index.html"><img src="imagenes/Logo.png" alt=""></a></h1>
              <ul>
                  <li><a class="current" href="index.php">Inicio</a></li>
              </ul>
            </div>
          </nav>  
        <div id="showcase">
          <div class="container">
              <div class="showcase-content">
                  <h1><span class="text-primary">HABITACIONES</span></h1>
                  <p class="lead">Podras disfrutar de la mejor experiencia junto a nosotros!</p>
                  <a class="btn" href="index.phh">Inicio</a>
              </div>
          </div>
        </div> 
    
  </header>
   
  <!--  habitaciones del hotel  -->

  <div class="serv_desc">
    <h2 class="titu_serv_desc" class="titu_serv_desc2" >Habitaciones disponibles del hotel:</h2><br><br>
    <div class="descrip_serv">
    <a class="serv2" class="serv3"> <b>Habitación individual:</b> Habitación diseñada para una sola persona con una cama individual.</a><br>
    <a class="serv1" class="serv3"> <b>Habitación doble:</b> Habitación con una cama doble o dos camas individuales, adecuada para dos personas.</a><br>
    <a class="serv2" class="serv3"> <b>Habitación twin:</b> Habitación con dos camas individuales, ideal para dos personas que prefieren camas separadas.</a><br>
    <a class="serv1" class="serv3"> <b>Habitación matrimonial:</b> Habitación con una cama grande, como una cama queen o king, adecuada para parejas.</a><br>
    <a class="serv2" class="serv3"> <b>Habitación triple:</b> Habitación que puede acomodar a tres personas, generalmente con una combinación de camas dobles e individuales.</a><br>
    <a class="serv1" class="serv3"> <b>Suite junior:</b> Una habitación más amplia que incluye una zona de estar separada y, a veces, un dormitorio independiente.</a><br>
    <a class="serv2" class="serv3"> <b>Suite ejecutiva:</b> Una suite de lujo con áreas de estar y dormitorio separadas, y a menudo comodidades adicionales como un área de trabajo o un balcón.</a><br>
    <a class="serv1" class="serv3"> <b>Habitación familiar:</b> Habitación diseñada para alojar a familias, con espacio adicional y configuraciones de camas adecuadas para varios miembros de la familia.</a><br>
    <a class="serv2" class="serv3"> <b>Habitación accesible:</b> Habitación especialmente adaptada para personas con discapacidades, con características como pasillos más anchos, barras de apoyo en el baño y duchas accesibles.</a><br>
    </div>
  </div>

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