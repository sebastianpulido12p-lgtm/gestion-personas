<?php 

require_once("../clases/persona.php");

$persona1 = new persona("Sebastian", 18, "sebastian@gmail.com", "pulido");
$persona2 = new persona("kakaroto", 20, "kakaroto@gmail.com", "usumaki");



echo $persona1->saludar();
echo $persona2->saludar();

?>
