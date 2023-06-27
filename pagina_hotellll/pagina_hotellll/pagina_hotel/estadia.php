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
            <h1 class="logo"><a href="index.html"><img src="imagenes/Logo.png" alt=""></a></h1>
            <ul>
                <li><a class="current" href="index.php">Inicio</a></li>
                <li><a class="current" href="habitaciones.php">Habitaciones</a></li>
            </ul>
          </div>
        </nav>  
  </header>

 <!-- reservacion -->
  <br>
  <div class="reservation-form animate-section" >
    <h2>Reserva tu estadía</h2>
    <form id="reservation-form" action="#" method="post">
      <div class="form-group">
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required>
      </div>
  
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
  
      <div class="form-group">
        <label for="fecha_llegada">Fecha de llegada:</label>
        <input type="date" id="fecha_llegada" name="fecha_llegada" required>
      </div>
  
      <div class="form-group">
        <label for="fecha_salida">Fecha de salida:</label>
        <input type="date" id="fecha_salida" name="fecha_salida" required>
      </div>
  
      <div class="form-group">
        <label for="num_habitaciones">Número de habitaciones:</label>
        <input type="number" id="num_habitaciones" name="num_habitaciones" min="1"  required>
      </div>
  
      <div class="form-group">
        <label for="num_personas">Número de personas:</label>
        <input type="number" id="num_personas" name="num_personas" min="1"  required>
      </div>
  
      <div class="form-group">
        <label for="comentarios">Comentarios adicionales:</label>
        <textarea id="comentarios" name="comentarios"></textarea>
      </div>

  <br><br>
  <div> <button type="submit">Enviar reserva</button></div>
    </form>

  </div>
</body>

</html>