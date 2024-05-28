<?php
    // Accede al dato enviado desde el formulario
    $codigo = $_GET["ide"];

    //$conexion = mysqli_connect("127.0.0.1:3306","root","","biblioteca") or die("Problemas de coneccion");
    $conexion = mysqli_connect("127.0.0.1:3308","root","","form") or die("Problemas de coneccion");

    $sql = "delete from datos where id_Reser = $codigo";

    mysqli_query($conexion, $sql) or die("Problemas al eliminar el registro".mysqli_error($conexion));

    mysqli_close($conexion);

    header("Location: table.php");

?>