<?php 
/* Tabla tareas id, titulo, descripcion, estado, default pendiente */

$servidor = "localhost";
$usuario = "root";
$contraseña = "";

$conexion = new mysqli($servidor,$usuario,$contraseña);
if($conexion->connect_error){
    die("Echo ". $conexion->connect_error);
}
echo "Conectado correctamente <br>";

$sql="CREATE DATABASE IF NOT EXISTS asignatura";
if($conexion->query($sql)  === TRUE){
    echo "BBDD creado OK<br>";
}else{
    echo "Error" . $conexion->error;
}

$conexion->select_db("asignatura");


$sql="CREATE TABLE IF NOT EXISTS tareas (id INT (4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, titulo VARCHAR (30), descripcion VARCHAR (250), estado VARCHAR (200) DEFAULT 'pendiente')";
if($conexion->query($sql)  === TRUE){
    echo "Tabla creada OK<br>";
}else{
    echo "Error" . $conexion->error;
}


class Tarea{
    private $id;
    private $titulo;
    private $descripcion;
    private $estado;

    public function __construct($id,$titulo,$descripcion,$estado){
                $this->id = $id;
                $this->titulo = $titulo;
                $this->descripcion = $descripcion;
                $this->estado = $estado;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id= $id;
    }


    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo= $titulo;
    }


    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion= $descripcion;
    }


    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado= $estado;
    }

    public function guardarTarea($conexion){
        $sql = "INSERT INTO tareas (titulo,descripcion,estado) VALUES (?,?,?)";

        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('sss', $this->titulo, $this->descripcion, $this->estado);
        $stmt->execute();
        $this->id = $stmt->insert_id;
    }

    public function obtenerTarea($conexion){
        $sql = "SELECT * FROM tareas";
        
        $resultado = $conexion->query($sql);
        if($resultado->num_rows > 0){
            while($fila = $resultado->fetch_assoc()){
                echo "Id: {$fila['id']}, Titulo:{$fila['titulo']}, Descripcion: {$fila['descripcion']}, Estado: {$fila['estado']} <br>"; 
            }
        }
    }

    public function actualizarEstado($conexion,$nuevoestado){
        $sql = "UPDATE tareas SET estado = ? WHERE id = ?";

        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('si', $nuevoestado, $this->id);
        $stmt->execute();
    }

    public function eliminarTarea($conexion){
        $sql = "DELETE FROM tareas WHERE id = ?";
    
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('i', $this->id);
    
        if($stmt->execute()){
            echo "Tarea eliminada";
        } else {
            echo "No se ha eliminado la tarea";
        }
    }
}

$tarea1 = new Tarea(2,"Matematicas","Restas", "Pendiente");
$tarea1->guardarTarea($conexion);
$tarea1->obtenerTarea($conexion);
$tarea1->actualizarEstado($conexion,"Completado");
$tarea1->eliminarTarea($conexion);


?>