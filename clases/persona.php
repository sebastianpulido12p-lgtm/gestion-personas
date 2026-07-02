<?php

class persona 
{
    public $nombre;
    public $edad;
    public $correo;
    public $apellido;

    public function saludar()
    {
        return "Mi nombre es: " . $this->nombre . " " . $this->apellido . " tengo " . $this->edad . " años. Mi correo es: " . $this->correo . "<br>";
        return "Mi nombre es: " . $this->nombre . " " . $this->apellido . "tengo" . $this->edad . "años. Mi correo es: " . $this->correo . "<br>";
    }    

}