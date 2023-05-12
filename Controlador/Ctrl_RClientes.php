<?php
require "Conectar.php";
$con = fnConnect($msg);
$sql = "select c.nom_cli,c.ape_cli, c.correo_cli, c.contra_cli,
	c.DNI_cli, c.cell_cli  from clientes c;";
$lista= mysqli_query($con, $sql);
$numeracion=0; //contador de registros

$error=null;
$mensaje=null;
    if(isset($_POST["enviar"])){
        //capturando datos
        $reg["nom_cli"] = $_POST["nom_cli"];
        $reg["ape_cli"] = $_POST["ape_cli"];
        $reg["correo_cli"] = $_POST["correo_cli"];
        $reg["contra_cli"] = $_POST["contra_cli"];
        $reg["DNI_cli"] = $_POST["DNI_cli"];
        $reg["cell_cli"] = $_POST["cell_cli"];
        InsertarCliente($reg, $mensaje, $error);
    }
    function InsertarCliente($reg, &$mensaje, &$error){
        $con = fnConnect($msg);
        mysqli_query($con, "start transaction");
        $sqlinsert = "insert into clientes(nom_cli,ape_cli,correo_cli,contra_cli,DNI_cli,cell_cli)values ('"
        . "{$reg["nom_cli"]}','{$reg["ape_cli"]}','{$reg["correo_cli"]}','{$reg["contra_cli"]}',{$reg["DNI_cli"]},{$reg["cell_cli"]});";
                 //ejecutamos la consulta
        $respuesta = mysqli_query($con, $sqlinsert);
        if($respuesta==0){
            echo '<div class="alerta">Ingrese los datos correctos a los campos</div>';
            mysqli_query($con,"rollback");
            $error = "<p>Datos ingresados no son correctos...</p>";
            $error .= "<p>SQL: $sqlinsert </p>";
            return;
        }
        if($respuesta==1){
            echo '<div class="success">Registro completado</div>';
        }
        //hacemos permanente los cambios
        mysqli_query($con, "commit");
        $mensaje = "<p>Trabajador registrado correctamente..</p>";
    }
?>
