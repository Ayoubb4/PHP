<?php 
    if(isset($_POST["color"])){
        $color = $_POST["color"];
        setcookie("color", $color, time() +3600);
    }elseif(isset($_POST["borrar"])){
        setcookie("color","",time()-3600);
    }else{
        if(isset($_COOKIE["color"])){
            $color = $_COOKIE["color"];
        }else {
            $color = "";
        }
    }

?>

<?php 
    if ($color) { ?>
    <p style = "color" <?php echo $color?>, ">Tu color preferido es: <?php echo $color ?></p>
    <p> Si deseas cambiarlo o borrarlo, puedes hacerlo a continuacion"
        <?php 
            }else{
        ?>
    <p> Selecciona tu color preferido </p>
        <?php 
            }
        ?> 
    }



?>

<!-- <form method="POST" action=""> -->
    <!-- ... -->