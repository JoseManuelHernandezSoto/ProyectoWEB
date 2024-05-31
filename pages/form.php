<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
    <link rel="icon" type="image/jpg" href="../img/favicon.jpg">
    <link rel="stylesheet" href="../css/basic_format.css">
    <link rel="stylesheet" href="../css/navBar.css">
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
       <!-- Barra de navegacion -->
       <nav class="navbar">
        <div class="container">
            <a href="#"><img src="../img/logo.png"></a>
            <ul class="nav-links">
                <li><a href="../index.html" class="nav-button">Inicio</a></li>
                <li><a href="./about_amsterdam.html" class="nav-button">Acerca de</a></li>
                <li><a href="./tourist_places.html" class="nav-button">Lugares turisticos</a></li>
                <li><a href="./typical_food.html" class="nav-button">Comida tipica</a></li>
                <li><a href="./contact_number.html" class="nav-button">Contacto del creador</a></li>
                <li><a href="" class="nav-button">Formulario de registro</a></li>
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

    <div class="form">
        <p class="title"> Registro de Cliente </p>
        <br>

        <p class="text">
            <header>
                <p>Disfruta de la mejor experiencia en amsterdam con el mejor equipo que podrias conocer!!!</p>
            </header>
            <br>
                <h2>Inscripción</h2>
                <p>Para inscribirte en nuestra cartera de clientes, por favor completa el siguiente formulario:</p>
                <br>
        </p>

        <!-- Tabla de registro -->
        <form class="" action="form.php" method="post">
        <table id="tabla">
  <tr>
    <td>Nombre Completo:</td>
    <td colspan="3"><input type="text" name="nombre" onkeypress="return soloLetras(event)" required></td>
  </tr>
  
  <tr>
    <td>Edad</td>
    <td colspan="3"><input type="number" name="edad" maxlength="2" min="18" max="60"  required></td>
  </tr>
  
  <tr>
    <td>Sexo</td>
    <td>
      <select class="" name="sexo" id="sexo" required>
        <option value="1" disabled selected value>Elige una opcion:</option>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
        <option value="otro">Otro</option>
      </select>
    </td>
    <td>Comentarios Extras:</td>
    <td><input type="text" name="otro" id="otro" value=""></td>
  </tr>
  
  <tr>
    <td>Celular</td>
    <td><input type="number" name="celular" required></td>
    <td>Celular Emergencias</td>
    <td><input type="number" name="celular2" required></td>
  </tr>
  
  <tr>
    <td>Domicilio</td>
    <td colspan="3"><input type="text" name="domicilio" required></td>
  </tr>
  
  <tr>
    <td>Paquete</td>
    <td>
      <select class="" name="paquete" id="paquete" required>
        <option value="1" disabled selected value>Elige una opcion:</option>
        <option value="basico">Paquete Basico</option>
        <option value="premium">Paquete Premium</option>
        <option value="turista">Paquete Turista</option>
      </select>
    </td>
    <td>Alergias</td>
    <td>
      <select class="" name="alergias" id="alergias" onchange="mostrarTextbox()" required >
        <option value="1" disabled selected value>Elige una opcion:</option>
        <option value="si">Si</option>
        <option value="no">No</option>
      </select>
    </td>
  </tr>
  
  <tr class="prueba">
    <td colspan="4">
      <div id="textboxAlergias" style="display: none;">
        <label for="detallesAlergias">Detalles de Alergias:</label>
        <textarea id="detallesAlergias" name="detallesAlergias" rows="5"></textarea>
      </div>
    </td>
  </tr>
  
  <tr>
    <td>Correo Electronico</td>
    <td colspan="3"><input type="text" name="correo" required></td>
  </tr>
</table>

<input type="submit" name="registro">
</form>
</div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/Principal.js"></script>

     <!-- Conexion a base de datos -->
<?php
//Se crean las variables que se van a necesitar para realizar la coaneccin a la base de datos
$servername = "localhost";
$username = "id22167588_root";
$password = "Azul-Rojo12";
$dbname = "id22167588_registros";

if (isset($_POST['registro'])) {
    if(empty($_REQUEST['nombre'] || $_REQUEST['edad'] || $_REQUEST['sexo'] || $_REQUEST['celular'] || $_REQUEST['celular2'] || $_REQUEST['domicilio'] || $_REQUEST['paquete'] || $_REQUEST['alergias'] || $_REQUEST['detallesAlergias'] || $_REQUEST['correo'])) {
        echo '<script language="javascript">alert("Por favor rellenar todos los campos");</script>';
    } else {
        $conexion = mysqli_connect($servername,$username,$password,$dbname) or die("Problemas de coneccion: " . mysqli_connect_error());

        $nombre = strtoupper($_POST['nombre']);
        $edad  = $_POST['edad'];
        $sexo  = strtoupper($_POST['sexo']);
        $otro = strtoupper($_POST['otro']);
        $celular = $_POST['celular'];
        $celular2 = $_POST['celular2'];
        $domicilio = strtoupper($_POST['domicilio']);
        $paquete = strtoupper($_POST['paquete']);
        $alergias = strtoupper($_POST['alergias']);
        $tiposAlergias = strtoupper($_POST['detallesAlergias']);
        $correo = $_POST['correo'];
        
        $sql = "INSERT INTO registro(nombre,edad,sexo,celular,celular2,domicilio,paquete,alergias,tipoAlergia,correo,otro) VALUES ('$nombre', '$edad', '$sexo','$celular','$celular2','$domicilio','$paquete','$alergias','$tiposAlergias','$correo','$otro')";

        if (mysqli_query($conexion,$sql)) {
            echo '<script language="javascript">alert("cliente registrado correctamente");</script>';
        } else {
            echo "Error al insertar datos: " . mysqli_error($conexion);
        }

        mysqli_close($conexion);
    }
}//Agregar clientes
?>

 <script>
  // aqui desplegamos si es que tiene una alergia le despliega un textbox para que escriba cual tiene
    function mostrarTextbox(select) {
        var select = document.getElementById('alergias');
      var textboxAlergias = document.getElementById('textboxAlergias');

      if (select.value === 'si') {
        textboxAlergias.style.display = 'block';
      } else {
        textboxAlergias.style.display = 'none';
      }
    }
// valida que solo podamos utilizar letras en los textbox
    function soloLetras(evt){
  let letra = (evt.which) ? evt.which : evt.keyCode;

  if (letra == 8){
    return true;
  }else if (letra == 32) {
    return true;
  }else if (letra>=97 && letra<=122) {
    return true;
  }else {
    return false;
  }
}
  </script>
</body>
</html>


 
