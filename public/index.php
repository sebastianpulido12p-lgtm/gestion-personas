<?php 

require_once("../clases/persona.php");

$persona1 = new persona();
$persona2 = new persona();


$persona1->nombre = "Sebastian";
$persona1->edad = 18;
$persona1->correo = "sebastian@gmail.com";
$persona1->apellido = "pulido";

$persona2->nombre = "kakaroto";
$persona2->edad = 20;
$persona2->correo = "kakaroto@gmail.com";
$persona2->apellido = "usumaki";



echo $persona1->saludar();
echo $persona2->saludar();

?>
