<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscritos</title>
    <link rel="icon" type="image/jpg" href="../img/favicon.jpg">
    <link rel="stylesheet" href="../css/navBar.css">
    <link rel="stylesheet" href="../css/navBar.css">
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
    $conexion = mysqli_connect("127.0.0.1:3308","root","","form") or die("Problemas de coneccion");
  //$conexion = mysqli_connect("127.0.0.1:3308","root","","biblioteca") or die("Problemas de coneccion");
    $sql = "select * from prestamo";

    $respuesta = mysqli_query($conexion,$sql) or die("Error al conectar con la tabla 'Libro'".mysqli_error($conexion));

    if (!$respuesta) {
      echo "sin registros";
    }else {

    ?>
          <form class="hello" action="" method="">
      <table border="1">
        <thead>
          <h2>Consultas de datos</h2>
        <tr>
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
            <td><?php echo $datos['nombre']?></td>
            <td><?php echo $datos['edad']?></td>
            <td><?php echo $datos['sexo']?></td>
            <td><?php echo $datos['otro']?></td>
            <td><?php echo $datos['celular1']?></td>
            <td><?php echo $datos['celular2']?></td>
            <td><?php echo $datos['paquete']?></td>
            <td><?php echo $datos['alergias']?></td>
            <td><?php echo $datos['tiposAlergias']?></td>
            <td><?php echo $datos['correo']?></td>
            
            <td><?php echo "<a href='borrarPrestamo.php?ide=".$datos['id_prestamo']." ' onclick='return confirmar()'>BORRAR</a>";?></td>
          </tr>
          <?php
        }//While
        mysqli_close($conexion);
      }
          ?>
        </tbody>
      </table>
    </form>

    
    
</body>
</html>
