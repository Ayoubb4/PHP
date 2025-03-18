<?php 
/* Crear una interfaz llamada Mostrable que contenga el método mostrar datos.
La clase Empleado debe implementar esta interfaz. Además, debe incluir la constante SUELDO_MINIMO y los métodos para:
Mostrar datos
Calcular sueldo
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

interface Mostrable{
    public function mostrarDatos();
}

class Empleado implements Mostrable{
    private string $nombre;
    private string $apellidos;
    private float $sueldo;
    private $telefonos = [];
    const SUELDO_MINIMO = 1000;

    public function __construct($nombre,$apellidos,$sueldo){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
    }

    public function obtenerNombreCompleto() {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function mostrarDatos() {
        return "Nombre: " . $this->nombre . " " . $this->apellidos . ", Sueldo: " . $this->sueldo . "€";
    }

    public function calcularSueldo()
    {
        return max(self::SUELDO_MINIMO, $this->sueldo);
    }

    public function añadirTelefonos($telefono){
        return $this->telefonos[]=$telefono;
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

$empleado4 = new Empleado("Juan", "Pérez", 1500);
$empleado4 = new Empleado("Juan", "Pérez", 1200);

echo "Nombre completo: " . $empleado4->obtenerNombreCompleto() . "<br>";
echo "Sueldo: " . $empleado4->calcularSueldo() . "<br>";

$empleado4->añadirTelefonos("123456789") . "<br>";
$empleado4->añadirTelefonos("987654321") . "<br>";

echo "Telefonos de " . $empleado4->obtenerNombreCompleto() . ": "  . "<br>". $empleado4->listarTelefonos() . "<br>";

$empleado4->vaciarTelefonos() . "<br>";

echo "Teléfonos después de vaciar: " . $empleado4->listarTelefonos() . "<br>";
echo $empleado4->mostrarDatos() . "<br>"; 

?>