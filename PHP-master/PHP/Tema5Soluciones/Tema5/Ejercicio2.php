<?php
class Empleado {
    private string $nombre;
    private string $apellidos;
    private float $sueldo;
    const SUELDO_MINIMO = 1000;

    public function __construct($nombre, $apellidos, $sueldo) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
    }

    public static function getNombreCompleto($empleado) {
        return $empleado->nombre . ' ' . $empleado->apellidos;
    }

    public static function calcularSueldo($empleado) {
        return $empleado->sueldo;
    }

    public function __destruct() {
        echo "Empleado {$this->nombre} {$this->apellidos} ha sido destruido.";
    }
}
?>

