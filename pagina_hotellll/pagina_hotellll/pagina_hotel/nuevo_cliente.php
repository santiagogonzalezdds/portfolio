<?php include("db.php")?>
<?php 

if (isset($_POST['guardar_registro'])){
    $nombre_usuario = $_POST['nombre_usuario'];
    $nombre_cliente = $_POST['nombre_cliente'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $telefono = $_POST['telefono'];
    $dni = $_POST['dni'];
   // die(var_dump($_POST));
    //echo $nombres;
    //echo $direccion;
}

    $query = "INSERT INTO tbl_registro_cliente (nombre_usuario,nombre_cliente,email,contraseña,telefono,dni) VALUES ('$nombre_usuario','$nombre_cliente','$email','$contraseña','$telefono','$dni')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Fallo en el query. Existe un problema en la base de datos.");
    }
    else{
        ?>
        <script>alert("Se Registro Correctamente");</script>
        <?php 
        
    }

    //si quisiera redireccionar a index directamente:
    ?>
    <script>
    window.location = "index.html";
    </script>
