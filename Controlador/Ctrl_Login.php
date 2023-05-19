<?php
require "Conectar.php";
$con = fnConnect($msg);
$numeracion=0; //contador de registros

$error=null;
$mensaje=null;
    if(isset($_POST["enviar"])){
        //capturando datos
        $con = fnConnect($msg);
        $correo=$_POST["correo"];
        $contra=$_POST["contra"];
        $sqlconsult="SELECT ID_cli,correo,contra FROM clientes where correo='$correo' and contra='$contra';";
        $respuesta = mysqli_query($con, $sqlconsult);
        if(mysqli_num_rows($respuesta)==0){
            echo '<div class="alerta">Ingrese datos validos</div>';
        }else{
            session_start();
            $_SESSION['correo']=$correo;
            $filas= mysqli_num_rows($respuesta);
        } 
        
        $correo=$_POST["correo"];
        $contra=$_POST["contra"];               
        $sqlconsultad="SELECT ID_trab,correo,contra FROM trabajadores where correo='$correo' and contra='$contra';";
        $respuestaad = mysqli_query($con, $sqlconsultad);
        if(mysqli_num_rows($respuestaad)==0){
            echo '<div class="alerta">Ingrese datos validos</div>';
        }else{
            session_start();
            $_SESSION['correo']=$correo;
            $filasad= mysqli_num_rows($respuestaad);
        }
        
        if(isset($filas)){
            header("location:Intranet_cliente.php");
        }if(isset($filasad)){
            header("location:Intranet_trabajador.php");
        }else{
            echo '<div class="alerta">Ingrese datos validos</div>';         
        }
        
        
        //hacemos permanente los cambios
        mysqli_query($con, "commit");
        $mensaje = "<p>Cliente registrado correctamente..</p>";

    }
?>

