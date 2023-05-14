<?php
require "Conectar.php";
$con = fnConnect($msg);
$sql = "select t.nom_trab, t.ape_trab, t.correo,t.contra,
    t.dni_trab, t.numero_trab, t.cargo_trab from trabajadores t;";
$lista= mysqli_query($con, $sql);

$consultacar = "select ID_cargo,nombre_cargo from cargo;";
$Listacar = mysqli_query($con,$consultacar);
$numeracion=0; //contador de registros

$error=null;
$mensaje=null;
    if(isset($_POST["enviar"])){
        //capturando datos
        $reg["nom_trab"] = $_POST["nom_trab"];
        $reg["ape_trab"] = $_POST["ape_trab"];
        $reg["correo"] = $_POST["correo"];
        $reg["contra"] = $_POST["contra"];
        $reg["dni_trab"] = $_POST["dni_trab"];
        $reg["numero_trab"] = $_POST["numero_trab"];
        $reg["cargo_trab"] = $_POST["cargo_trab"];
        InsertarTrabajador($reg, $mensaje, $error);
    }
    function InsertarTrabajador($reg, &$mensaje, &$error){
        $con = fnConnect($msg);
        mysqli_query($con, "start transaction");
        $sqlinsert = "insert into trabajadores(nom_trab, ape_trab, correo, contra, dni_trab,numero_trab,cargo_trab)
                values('{$reg["nom_trab"]}','{$reg["ape_trab"]}',
                '{$reg["correo"]}','{$reg["contra"]}',{$reg["dni_trab"]},{$reg["numero_trab"]},'{$reg["cargo_trab"]}');";
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
