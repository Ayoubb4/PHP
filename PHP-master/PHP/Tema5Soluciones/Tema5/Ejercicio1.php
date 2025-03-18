<?php
class Empleado {
    private string $nombre;
    private string $apellidos;
    private float $sueldo;
   

    public function __construct($nombre,$apellidos,$sueldo) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
    }

    public function getNombreCompleto() {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function calcularSueldo(): float {
        return $this->sueldo;
    }

    public function __destruct() {
        echo "Empleado {$this->nombre} {$this->apellidos} ha sido destruido.";
    }
}


?>
