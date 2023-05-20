<?php
require "Conectar.php";
$con = fnConnect($msg);
$sql = "select p.nombreProv,p.correo, p.RUC, p.telefono, p.direccion from proveedores p;";
$lista= mysqli_query($con, $sql);
$numeracion=0; //contador de registros

$error=null;
$mensaje=null;
    if(isset($_POST["enviar"])){
        //capturando datos
        $reg["nombreProv"] = $_POST["nombreProv"];
        $reg["correo"] = $_POST["correo"];
        $reg["RUC"] = $_POST["RUC"];
        $reg["telefono"] = $_POST["telefono"];
        $reg["direccion"] = $_POST["direccion"];
        InsertarProveedor($reg, $mensaje, $error);
    }
    function InsertarProveedor($reg, &$mensaje, &$error){
        $con = fnConnect($msg);
        mysqli_query($con, "start transaction");
        $sqlinsert = "insert into proveedores(nombreProv, correo, RUC, telefono, direccion)"
                . "values ('{$reg["nombreProv"]}','{$reg["correo"]}','{$reg["RUC"]}',"
                . "'{$reg["telefono"]}','{$reg["direccion"]}');";
                 //ejecutamos la consulta
        $respuesta = mysqli_query($con, $sqlinsert);
        if($respuesta==0){
            echo '<div class="alerta">No se pudo registrar</div>';
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
        $mensaje = "<p>Proveedor registrado correctamente..</p>";
    }
?>
