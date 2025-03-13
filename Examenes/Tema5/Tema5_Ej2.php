<?php 
/* Convertir los métodos anteriores de la clase Empleado en estáticos y añadir la constante SUELDO_MINIMO. También se debe añadir una propiedad telefonos, y los siguientes métodos para:
Añadir los números de teléfono
Listar los teléfonos
Vaciar los teléfonos.
Destructor
Objetivo:
Nombre completo
Sueldo: ……….
Teléfonos de ………..: ……… , ……… 
Teléfonos después de vaciar: ……..
……. ha sido destruido.
 */

class Empleado{
    private string $nombre;
    private string $apellidos;
    private float $sueldo;

    private array $telefonos = [];

    const SUELDO_MINIMO = 1000;

    public function __construct($nombre, $apellidos, $sueldo){
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->sueldo=$sueldo;
    }

    public static function getNombreCompleto($empleado){
        return "El nombre completo es: " . $empleado->nombre . " ". $empleado->apellidos;
    }

    public static function calcularSueldo($empleado){
        return $empleado->sueldo;
    }

    public static function añadirTelefonos($empleado,$telefonos){
        return $empleado->telefonos[]=$telefonos;
    }

    public static function listarTelefono($empleado){
        return implode(", ", $empleado->telefonos);
    }

    public static function vaciarTelefonos($empleado){
        return $empleado->telefonos=[];
    }


    public function __destruct() {
        echo "{$this->nombre} {$this->apellidos} ha sido destruido.";
    }
    
}

$empleado2 = new Empleado("Juan", "Guti", 1500);

echo Empleado::getNombreCompleto($empleado2) . "<br>";
echo Empleado::calcularSueldo($empleado2) . "<br>";

Empleado::añadirTelefonos($empleado2, "789456123");
Empleado::añadirTelefonos($empleado2, "987654321");

echo Empleado::listarTelefono($empleado2) . "<br>";    

Empleado::vaciarTelefonos($empleado2);








?>