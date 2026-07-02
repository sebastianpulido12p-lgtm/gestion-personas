<?php
require_once "persona.php";

class estudiante extends persona 
{
public function saludar()
{
    return "Mi nombre es: " . $this->nombre . " " . $this->apellido . " tengo " . $this->edad . " años. Mi correo es: " . $this->correo . " y soy " . $this->ocupacion . "<br>";
}
}