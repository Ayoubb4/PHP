<?php 
/* Crear una clase Empresa con las propiedades nombre y trabajadores. Incluir la constante SUELDO_MINIMO y añadir los métodos para: 
Añadir trabajadores 
Calcular el coste total de las nóminas de todos los trabajadores
Listar los datos de los trabajadores.
Destructor
Objetivo:
Nombre: …….     Sueldo: …….  Teléfono: ………
Nombre: ……..    Sueldo: …….  Teléfono: ……..
Coste total en nóminas: ……….
……. ha sido destruido.
 */


 class Empleado {
    private string $nombre;
    private string $apellido;
    private float $sueldo;
    private array $telefonos = [];

    const SUELDO_MINIMO = 1000;

    public function __construct($nombre, $apellido, $sueldo) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sueldo = max(self::SUELDO_MINIMO, $sueldo);
    }

    public function calcularSueldo() {
        return $this->sueldo;
    }

    public function obtenerNombreCompleto() {
        return $this->nombre . ' ' . $this->apellido;
    }

    public function añadirTelefono($telefono) {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos() {
        if (empty($this->telefonos)) {
            return "Sin teléfonos";
        } else {
            return implode(", ", $this->telefonos);
        }
    }

    public function vaciarTelefonos() {
        $this->telefonos = [];
    }

    public function __destruct() {
        echo $this->obtenerNombreCompleto() . " ha sido destruido.\n";
    }
}

class Empresa {
    private string $nombre;
    private array $trabajadores = [];

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function añadirTrabajador(Empleado $empleado) {
        $this->trabajadores[] = $empleado;
    }

    public function calcularCosteTotalNominas() {
        $costeTotal = 0;
        foreach ($this->trabajadores as $empleado) {
            $costeTotal += $empleado->calcularSueldo();
        }
        return $costeTotal;
    }

    public function listarTrabajadores() {
        foreach ($this->trabajadores as $empleado) {
            echo "Nombre: " . $empleado->obtenerNombreCompleto() . 
                 " | Sueldo: " . $empleado->calcularSueldo() . 
                 " | Teléfono(s): " . $empleado->listarTelefonos() . "\n";
        }
    }

    public function __destruct() {
        echo "La empresa " . $this->nombre . " ha sido destruida.\n";
    }
}

// Crear empresa
$empresa = new Empresa("Tech Solutions");

// Crear empleados
$empleado1 = new Empleado("Juan", "Pérez", 1200);
$empleado2 = new Empleado("Ana", "García", 1400);

// Añadir teléfonos
$empleado1->añadirTelefono("123456789");
$empleado2->añadirTelefono("987654321");
$empleado2->añadirTelefono("654321987");

// Añadir empleados a la empresa
$empresa->añadirTrabajador($empleado1);
$empresa->añadirTrabajador($empleado2);

// Mostrar datos de los trabajadores
$empresa->listarTrabajadores();

// Mostrar el coste total en nóminas
echo "Coste total en nóminas: " . $empresa->calcularCosteTotalNominas() . "\n";

// Vaciar teléfonos de un empleado y mostrarlo
$empleado2->vaciarTelefonos();
echo "Teléfonos después de vaciar de " . $empleado2->obtenerNombreCompleto() . ": " . $empleado2->listarTelefonos() . "\n";



?>