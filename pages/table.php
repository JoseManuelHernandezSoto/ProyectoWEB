<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscritos</title>
    <link rel="icon" type="image/jpg" href="../img/favicon.jpg">
    <link rel="stylesheet" href="../css/navBar.css">
    <link rel="stylesheet" href="../css/navBar.css">
    <link rel="stylesheet" href="../css/table.css">
</head>
<body>
     <!-- Barra de navegacion -->
    <nav class="navbar">
        <div class="container">
            <a href="#"><img src="../img/logo.png"></a>
            <ul class="nav-links">
                <li><a href="../index.html" class="nav-button">Inicio</a></li>
                <li><a href="" class="nav-button">Acerca de</a></li>
                <li><a href="./tourist_places.html" class="nav-button">Lugares turisticos</a></li>
                <li><a href="./typical_food.html" class="nav-button">Comida tipica</a></li>
                <li><a href="./contact_number.html" class="nav-button">Contacto del creador</a></li>
                <li><a href="./form.php" class="nav-button">Formulario de registro</a></li>
                <li class="nav-dropdown">
                    <a href="#" class="nav-button">Extras</a>
                    <ul class="dropdown-content">
                        <li><a href="./videos.html">Videos</a></li>
                        <li><a href="./login.html">Admin</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
      <!-- Lista de productos -->

    <?php
    //Se crean las variables que se van a necesitar para realizar la coaneccin a la base de datos
$servername = "localhost";
$username = "id22167588_root";
$password = "Azul-Rojo12";
$dbname = "id22167588_registros";


    $conexion = mysqli_connect($servername,$username,$password,$dbname) or die("Problemas de coneccion: " . mysqli_connect_error());
    $sql = "select * from registro";

    $respuesta = mysqli_query($conexion,$sql) or die("Error al conectar con la tabla 'registro'".mysqli_error($conexion));

    if (!$respuesta) {
      echo "sin registros";
    }else {

    ?>
    <div class="form">
    <form>
    <p class="title">Consultas de datos</p>
      <table class="tabla" border="1">
        <thead>
          
        <tr>
            <th>No. Reservacion: </th>
            <th>Nombre: </th>
            <th>Edad: </th>
            <th>Sexo: </th>
            <th>Otro: </th>
            <th>Celular: </th>
            <th>Celular de Emergencias: </th>
            <th>Direccion: </th>
            <th>Paquete: </th>
            <th>Alergias: </th>
            <th>Tipo de alergias: </th>
            <th>Correo: </th>
      </tr>
        </thead>
        <tbody>
          <?php
           while($datos=mysqli_fetch_assoc($respuesta)){
          ?>

          <tr>
            <td><?php echo $datos['id_Reser']?></td>
            <td><?php echo $datos['nombre']?></td>
            <td><?php echo $datos['edad']?></td>
            <td><?php echo $datos['sexo']?></td>
            <td><?php echo $datos['otro']?></td>
            <td><?php echo $datos['celular']?></td>
            <td><?php echo $datos['celular2']?></td>
            <td><?php echo $datos['paquete']?></td>
            <td><?php echo $datos['alergias']?></td>
            <td><?php echo $datos['tiposAlergias']?></td>
            <td><?php echo $datos['correo']?></td>
            
            <td><?php echo "<a href='delete.php?ide=".$datos['id_Reser']." ' onclick='return confirmar()'>BORRAR</a>";?></td>
          </tr>
          <?php
        }//While
        mysqli_close($conexion);
      }
          ?>
        </tbody>
      </table>
    </form>
    </div>
</body>
</html>
