<?php 
    session_start();
?>

<?php 
/*     $_SESSION['nombre'] = 'Pedro';
    $_SESSION['edad'] = '45';
    
    echo $_SESSION['edad'];

    session_destroy(); */

/*     $array = array("Pedro","45","Madrid") ;
    $_SESSION['usuario'] = $array;
    echo $_SESSION['usuario'][0];

    var_dump($_SESSION['usuario']) ;
 */

/*     $array = array("nombre"=>"Pedro", "edad"=>"45","ciudad"=>"Madrid") ;
    $_SESSION['usuario'] = $array;
    echo $_SESSION['usuario']['edad']; */

    $_SESSION['nombre'] = 'Pedro';
    $_SESSION['edad'] = '45';
    $_SESSION['ciudad'] = 'Madrid';

    echo'Bienvenido' . $_SESSION['nombre'];
        unset($_SESSION['nombre']);
        echo'Bienvenido ' . $_SESSION['nombre'];
        echo'La edad es: ' . $_SESSION['edad'];
    session_destroy();

?>