<?php
require "Conectar.php";
$con = fnConnect($msg);
$numeracion=0; //contador de registros

$error=null;
$mensaje=null;
    if(isset($_POST["enviar"])){
        //capturando datos
        session_start();
        $correo_cli=$_POST["correo_cli"];
        $contra_cli=$_POST["contra_cli"];   
        $_SESSION["correo_cli"]=$contra_cli;
        $con = fnConnect($msg);
        $sqlconsult="SELECT ID_cli,correo_cli,contra_cli FROM clientes where correo_cli='$correo_cli' and contra_cli='$contra_cli';";
        //ejecutamos la consulta
        $respuesta = mysqli_query($con, $sqlconsult);
        $filas= mysqli_num_rows($respuesta);
        if($filas){
            header("location:Intranet_cliente.php");
        }else{
            echo '<div class="alerta">Los datos ingresados no son los correctos</div>';
        }
        //hacemos permanente los cambios
        mysqli_query($con, "commit");
        $mensaje = "<p>Cliente registrado correctamente..</p>";
    }
?>

