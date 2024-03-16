<?php
//paso 1: importar la libreria
    require "../config/conexion.php";

//paso 2 almacenar las variables

$idtype= $_POST["idtype"];
$identificacion = $_POST["identificacion"];
$tipo = $_POST["tipo"];
$fecha = $_POST["fecha"];
$celular = $_POST["celular"];
$descripcion = $_POST["descripcion"];

//paso 3 armar el sql en una variable

$sql_insertar = "INSERT INTO policia(idtype, identificacion, tipo, fecha, celular, descripcion, fecha_sys) 
VALUES('".$idtype."', '".$identificacion."', '.$tipo.', '".$fecha."', '.$celular.', '".$descripcion."', now() ) ";

//paso 4: enviar a la BD

    if ($dbh->query($sql_insertar))
{


   echo "Informacion registrada correctamente";

}
else
{

    echo "Error registrando la informacion";

}

?>