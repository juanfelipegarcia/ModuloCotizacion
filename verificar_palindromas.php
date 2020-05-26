<?php
date_default_timezone_set("UTC");

$Texto = $_POST["texto"];
echo "El texto es : ".$Texto;
echo "<br>";

$fraseInvertida = strrev($Texto);

if ( $Texto == $fraseInvertida)
{
    echo "la palabra es PALINDROMA.";
}
else{
    echo "la palabra NO es PALINDROMA";
}
echo "<br>";

$cantidadLetras = strlen($Texto);
echo "La cantidad de caracteres en el Texto es : " . $cantidadLetras;
echo "<br>";

function contarVocales($cadena)
{
  $vocalesEncontradas = 0;
  //se convierte la cadena a minusculas:
  $cadena = strtolower($cadena);
  //se recorre la cadena desde 0 hasta su longitud -1
  //se pone la longitud dentro una varialble para evitar multiples llamadas
  //a strlen() en cada iteracción:
  $longitud = strlen($cadena);

  for ($indice = 0; $indice < $longitud; $indice++)
  {
    if (in_array($cadena[$indice], ["a","e","i","o","u"]))
    {
      $vocalesEncontradas++;
    }
  }
  return $vocalesEncontradas;
}

$cantidadVocales = contarVocales($Texto);
echo "numero vocales es: " . $cantidadVocales;
echo "<br>";

$Mayusculas = strtoupper($Texto);
echo "El texto en mayusculas es : " . $Mayusculas;
echo "<br>";

//reemplazar vocales por x:

$cadena = $Texto;
$cadena2 = "";

$cadena2 = str_replace("a","x",$Texto);
$cadena2 = str_replace("e","x",$cadena2);
$cadena2 = str_replace("i","x",$cadena2);
$cadena2 = str_replace("o","x",$cadena2);
$cadena2 = str_replace("u","x",$cadena2);
echo "El nuevo Texto es : " . $cadena2;
echo "<br>";

echo "La Fecha del sistema es : " . date('d-m-Y');
echo "<br>";

?>