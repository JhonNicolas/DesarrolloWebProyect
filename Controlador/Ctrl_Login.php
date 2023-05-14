<?php
require "Conectar.php";
$con = fnConnect($msg);
$numeracion=0; //contador de registros

$error=null;
$mensaje=null;
    if(isset($_POST["enviar"])){
        //capturando datos
        session_start();
        $con = fnConnect($msg);
        
        $correo_cli=$_POST["correo"];
        $contra_cli=$_POST["contra"];   
        $_SESSIONCLI["correo"]=$contra_cli;
        $sqlconsult="SELECT c.ID_cli,c.correo,c.contra FROM clientes c where correo='$correo_cli' and contra='$contra_cli';";
        
        $correo_tra=$_POST["correo"];
        $contra_tra=$_POST["contra"];   
        $_SESSIONAD["correo"]=$correo_tra;
        $sqlconsultad="SELECT t.ID_trab,t.correo,t.contra FROM trabajadores t where correo='$correo_tra' and contra='$contra_tra';";
        
        //ejecutamos la consulta CLIENTE
        $respuesta = mysqli_query($con, $sqlconsult);
        $filas= mysqli_num_rows($respuesta);
        
        //ejecutamos la consulta EMPLEADO
        $respuestaad = mysqli_query($con, $sqlconsultad);
        $filasad= mysqli_num_rows($respuestaad);
        
        
        if($filas){
            header("location:Intranet_cliente.php");
        }if($filasad){
            header("location:Intranet_trabajador.php");
        }else{
            echo '<div class="alerta">Los datos ingresados no son los correctos</div>';
        }
      

        //hacemos permanente los cambios
        mysqli_query($con, "commit");
        $mensaje = "<p>Cliente registrado correctamente..</p>";

    }
?>

