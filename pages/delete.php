<?php
    // Accede al dato enviado desde el formulario

    $codigo = $_GET["ide"];

    $servername = "localhost";
    $username = "id22167588_root";
    $password = "Azul-Rojo12";
    $dbname = "id22167588_registros";


    $conexion = mysqli_connect($servername,$username,$password,$dbname) or die("Problemas de coneccion: " . mysqli_connect_error());
 
    $sql = "delete from registro where id_Reser = $codigo";

    mysqli_query($conexion, $sql) or die("Problemas al eliminar el registro".mysqli_error($conexion));

    mysqli_close($conexion);

    header("Location: table.php");

?>