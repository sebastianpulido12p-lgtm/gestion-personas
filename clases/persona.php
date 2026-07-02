<?php

class persona 
{
    public $nombre;
    public $edad;
    public $correo;
    public $apellido;
    public $ocupacion;

    public function __construct($nombre, $edad, $correo, $apellido, $ocupacion = "")
    { 
       $this->nombre = $nombre;
       $this->edad = $edad;
       $this->correo = $correo;
       $this->apellido = $apellido;
       $this->ocupacion = $ocupacion;
    }

    public function saludar()
    {
        return "Mi nombre es: " . $this->nombre . " " . $this->apellido . " tengo " . $this->edad . " años. Mi correo es: " . $this->correo . "<br>";
    }

}
