<?php

interface Mostrable {
    public function mostrarDatos(); 
}

class Empleado implements Mostrable {
    private string $nombre;
    private string $apellidos;
    private float $sueldo;
    const SUELDO_MINIMO = 1000;

    public function __construct($nombre, $apellidos, $sueldo) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
    }

    public function mostrarDatos() {
        return "Nombre: " . $this->nombre . " " . $this->apellidos . ", Sueldo: " . $this->sueldo . "€";
    }

    public function calcularSueldo() {
        return $this->sueldo;
    }

    public function __destruct() {
        echo "Empleado {$this->nombre} {$this->apellidos} ha sido destruido.\n";
    }
}

$empleado1 = new Empleado("Juan", "Pérez", 1500);
echo $empleado1->mostrarDatos() . "\n"; 
?>


