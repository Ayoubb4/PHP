<?php

abstract class Trabajador {
    protected $nombre;
    protected $apellidos;
    const SUELDO_MINIMO = 1000;

    public function __construct($nombre, $apellidos) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    abstract public function calcularSueldo();
}

class Empleado extends Trabajador {
    private $sueldo;
    private $telefonos = [];

    public function __construct($nombre, $apellidos, $sueldo) {
        parent::__construct($nombre, $apellidos);
        $this->sueldo = $sueldo;
    }

    public function calcularSueldo() {
        return max(self::SUELDO_MINIMO, $this->sueldo);
    }

    public function obtenerNombreCompleto() {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function anadirTelefono($telefono) {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos() {
        return implode(', ', $this->telefonos);
    }

    public function vaciarTelefonos() {
        $this->telefonos = [];
    }

    public function __destruct() {
        echo $this->obtenerNombreCompleto() . " ha sido destruido.";
    }
}

$empleado = new Empleado("Juan", "Pérez", 1200);

echo "Nombre completo: " . $empleado->obtenerNombreCompleto();
echo "Sueldo: " . $empleado->calcularSueldo();

$empleado->anadirTelefono("123456789");
$empleado->anadirTelefono("987654321");

echo "Teléfonos de " . $empleado->obtenerNombreCompleto() . ": " . $empleado->listarTelefonos();

$empleado->vaciarTelefonos();

echo "Teléfonos después de vaciar: " . $empleado->listarTelefonos();


?>
