<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header('Access-Control-Allow-Methods: GET,POST,PUT,DELETE');

$archivo=file("Archivos_Cargados/".$nombre_archivo);

//recorrer el archivo

foreach ($archivo as $linea) {

     $datos = explode("|",$linea);

     $aeropuertos[] = array('idaeropuerto'=>$datos[0], 'nombreaeropuerto'=> $datos[1], 'idregion'=> $datos[2]);
}

//crear el JSON

$json_string = json_encode($aeropuertos);
echo $json_string;








?>