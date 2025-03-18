<?php 
/* Crea una clase abstracta Trabajador con las propiedades: nombre y apellidos.
Incluir la constante SUELDO_MINIMO y un método para calcular el sueldo.
Luego, crear una clase Empleado que herede de Trabajador con las propiedades sueldo y teléfonos y con los métodos para:
Calcular sueldo
Obtener nombre completo
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

abstract class Trabajador{
    protected $nombre;
    protected $apellido;
    const SUELDO_MINIMO = 1000;

    public function __construct($nombre,$apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    abstract public function calcularSueldo();
}

class Empleado extends Trabajador{
    private $sueldo;
    private $telefonos = [];

    public function __construct($nombre,$apellido,$sueldo){
        parent::__construct($nombre,$apellido);
        $this->sueldo=$sueldo;
    }

    public function calcularSueldo()
    {
        return max(self::SUELDO_MINIMO, $this->sueldo);
    }

    public function obtenerNombreCompleto() {
        return $this->nombre . ' ' . $this->apellido;
    }

    public function añadirTelefonos($telefono){
        $this->telefonos[]=$telefono;
    }

    public function listarTelefonos(){
        return implode(", ", $this->telefonos);
    }

    public function vaciarTelefonos(){
        $this->telefonos = [];
    }

    public function __destruct(){
        echo $this->obtenerNombreCompleto(). " ha sido destruido";
    }
}

$empleado3 = new Empleado("Juan", "Pérez", 1200);

echo "Nombre completo: " . $empleado3->obtenerNombreCompleto() . "<br>";
echo "Sueldo: " . $empleado3->calcularSueldo() . "<br>";

$empleado3->añadirTelefonos("123456789") . "<br>";
$empleado3->añadirTelefonos("987654321") . "<br>";

echo "Telefonos de " . $empleado3->obtenerNombreCompleto() . ": "  . "<br>". $empleado3->listarTelefonos() . "<br>";

$empleado3->vaciarTelefonos() . "<br>";

echo "Teléfonos después de vaciar: " . $empleado3->listarTelefonos() . "<br>";

?>