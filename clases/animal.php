<?php 

class animal
{
    public $nombre;
    public $edad;
    public $raza;

    public function __construct($nombre, $edad, $raza)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->raza = $raza;
    }

    public function saludar()
    {
        return "Mi nombre es: " . $this->nombre . " tengo " . $this->edad . " años. Mi raza es: " . $this->raza . "<br>";
        
    }
}
