<?php

$nombre_archivo = $_FILES["nombrearchivo"]["name"];
$tipo_archivo = $_FILES["nombrearchivo"]["type"];
$tamano_archivo = $_FILES["nombrearchivo"]["size"];


echo "Nombre del archivo: ".$nombre_archivo."<br>";
echo "Tipo del archivo: ".$tipo_archivo."<br>";
echo "Tamaño del archivo: ".$tamano_archivo."<br>";


if ($tipo_archivo!="text/plain")
{
     echo "Formato de archivo no valido para cargar ";
}else {
     if (move_uploaded_file($_FILES["nombrearchivo"]["tmp_name"], "Archivos_Cargados/".$nombre_archivo)) {
          echo "El archivo a sido cargado exitosamente";
          $archivo = file("Archivos_Cargados/".$nombre_archivo);
          echo "<table border='1' align='center'>";
          echo "<thead><th>Indice</th><th>Codigo IATA</th><th>Nombre Aeropuerto</th><th>Id Region</th></thead>";

foreach ($archivo as $indice => $linea) {

     if (strpos($linea, '|')!== false)
     {
          $campos = explode("|", $linea); // convertir a un string  en  un vector


          echo "<tr>
          <td>$indice</td>
          <td>$campos[0]</td>
          <td>$campos[1]</td>
          <td>$campos[2]</td>
          </tr>";
     }
}

echo "</table>";
     }
     else {
          echo "El archivo a NO sido cargado ";
     }
}





?>