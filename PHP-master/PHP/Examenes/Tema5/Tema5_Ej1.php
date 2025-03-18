<?php 
/* Crea una clase Empleado con las propiedades: nombre, apellidos y sueldo.
Además, se debe incluir una constante llamada SUELDO_MINIMO que define el sueldo mínimo para los empleados en 1000 €.
Encapsula las propiedades mediante getters/setters y añade métodos para:
- Obtener su nombre completo 
- Calcular el sueldo 
- Destructor
Objetivo:  	
Nombre completo
Sueldo: ……….
……. ha sido destruido.
*/

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

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }

    public function getNombreCompleto() {
        return "El nombre completo es: " . $this->nombre . " " . $this->apellidos;
    }

    public function calcularSueldo() {
        return $this->sueldo;
    }

    public function __destruct() {
        echo "Empleado {$this->nombre} {$this->apellidos} ha sido destruido.";
    }
}

$empleado1 = new Empleado("Miguel", "Lopez", 800);
echo $empleado1->getNombreCompleto() . "\n";
echo "Sueldo: " . $empleado1->calcularSueldo() . " €\n";

?>
