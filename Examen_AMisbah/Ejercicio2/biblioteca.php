<?php 
abstract class Persona{
    protected string $nombre;
    protected string $apellidos;

    public function __construct($nombre, $apellidos){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    abstract public function identificacion();
    public function obtenerNombreCompleto(){}
}

interface Gestionable{
    public function mostrarDatos();
}

class Autor extends Persona implements Gestionable{
    protected array $librospublicados = [];
//se llama al constructor padre
    public function __construct($nombre,$apellidos){
        parent::__construct($nombre,$apellidos);
    }

    public function identificacion(){
        return "El autor se llama: " . $this->nombre;
    }
    //se obtiene el nombre completo del autor 
    public function obtenerNombreCompleto(){
        return "El nombre del autor es: " .$this->nombre ." "   . $this->apellidos . "<br>" ;
    }
//los libros que metamos por cadena de texto se iran añadiendo al array que hemos creado
    public function publicarLibro($librospublicados){
        return $this->librospublicados[] = $librospublicados;
    }
//se utiliza el implode para indicar como separar los valores del array en este caso con una coma
    public function listarLibro(){
        return "Los libros de este autor son: " .implode(", ", $this->librospublicados) . "<br>";
    }
//esta funcion viene implementada desde la interfaz e indica todos los valores y te muestra todo lo que se ha recogido del objeto
    public function mostrarDatos(){
        return "El nombre del autor es: " . $this->obtenerNombreCompleto(). " y sus libros son: " . $this->listarLibro(); 
    }
//un destructor que elimina el objeto
    public function __destruct(){
        echo $this->nombre . " ha sido eliminado del sistema";
    }
}

$autor1 = new Autor("Miguel", "Gutierrez");
echo $autor1->obtenerNombreCompleto();

$autor1->publicarLibro("Sol y Luna");
$autor1->publicarLibro("Principito");

echo $autor1->listarLibro();

echo "<br>";

class Libro{
    protected string $titulo;
    private string $autor;
    private int $paginas;
    private bool $disponible;

    public function __construct($titulo, $autor, $paginas, $disponible){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->disponible = $disponible;
    }

    public function cambiarDisponibilidad(){
        if($this->disponible = true){
            echo "Si disponible";
        }else{
            echo "No Disponible";
        }
    }

    public function obtenerDetalles(){
        ;

        return "El libro: " .$this->titulo." del autor: ".$this->autor . " esta: " . $this->disponible . "<br>"; 
    }


    public function __destruct(){
        echo "El libro ". $this->titulo . " ha sido eliminado del sistema" . "<br>";
    }
}

$libro1 = new Libro("Maestro", "Juan Lopez", 777, false);

echo $libro1->obtenerDetalles();
echo $libro1->cambiarDisponibilidad();


class Biblioteca{
    private string $nombre;
    private array $coleccionLibros=[];

    public function __construct($nombre){
        $this->nombre = $nombre;
    }
    public function añadirLibros(Libro $titulo){
        return $this->coleccionLibros[]= $titulo;
    }

    public function listarLibro(){
        return implode(", ", $this->coleccionLibros) ."<br>";
    }


    public function __destruct(){
        echo "La biblioteca " . $this->nombre . " ha sido elimindada del sistema" . "<br>";
    }
    
}

$biblioteca1 = new Biblioteca("Biblioteca1");
$biblioteca1->añadirLibros("Edelvives");
echo $biblioteca1->listarLibro();




?>