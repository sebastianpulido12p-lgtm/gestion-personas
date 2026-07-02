<?php 

require_once("../clases/persona.php");
require_once("../clases/animal.php");

$persona1 = new persona("Sebastian", 18, "sebastian@gmail.com", "pulido");
$persona2 = new persona("kakaroto", 20, "kakaroto@gmail.com", "usumaki");

$animal1 = new animal("Tobby", 2, "Golden Retriever");
$animal2 = new animal("Tomas", 3, "Pitbull");

echo $persona1->saludar();
echo $persona2->saludar();
echo "<br><br>";
echo $animal1->saludar();
echo $animal2->saludar();

?>
