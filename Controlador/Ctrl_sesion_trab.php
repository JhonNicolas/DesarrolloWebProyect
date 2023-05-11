<?php
require "Conectar.php";
$con = fnConnect($msg);
$numeracion=0; //contador de registros

$error=null;
$mensaje=null;
    if(isset($_POST["enviar"])){
        //capturando datos
        session_start();
        $correo_tra=$_POST["correo_tra"];
        $contra_tra=$_POST["contra_tra"];   
        $_SESSION["correo_tra"]=$correo_tra;
        $con = fnConnect($msg);
        $sqlconsult="SELECT ID_trab,correo_trab,contra_trab FROM trabajadores where correo_trab='$correo_tra' and contra_trab='$contra_tra';";
        //ejecutamos la consulta
        $respuesta = mysqli_query($con, $sqlconsult);
        $filas= mysqli_num_rows($respuesta);
        if($filas){
            header("location:Intranet_trabajador.php");
        }else{
            echo '<div class="alerta">Los datos ingresados no son los correctos</div>';
        }
        //hacemos permanente los cambios
        mysqli_query($con, "commit");
        $mensaje = "<p>Cliente registrado correctamente..</p>";
    }
?>

