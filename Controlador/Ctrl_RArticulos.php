<?php
require "Conectar.php";
$con = fnConnect($msg);
$sql = "select a.nom_articulo, a.cantidad, a.Cproducto, a.Encargado, a.precioA,
         a.Proveedor from Articulo a;";
$lista= mysqli_query($con, $sql);

$consultaprov = "select idProv,nombreProv from proveedores;";
$Listaprov = mysqli_query($con,$consultaprov);
$consultatrab = "select ID_trab,nom_trab from trabajadores;";
$Listatrab = mysqli_query($con,$consultatrab);
$consultacp = "select ID_cat, nombre_cat from Cproducto;";
$Listacp = mysqli_query($con,$consultacp);


$numeracion=0; //contador de registros

$error=null;
$mensaje=null;
    if(isset($_POST["enviar"])){
        //capturando datos
        $reg["nom_articulo"] = $_POST["nom_articulo"];
        $reg["cantidad"] = $_POST["cantidad"];
        $reg["Cproducto"] = $_POST["Cproducto"];
        $reg["Encargado"] = $_POST["Encargado"];
        $reg["precioA"] = $_POST["precioA"];
        $reg["Proveedor"] = $_POST["Proveedor"];
        InsertarProducto($reg, $mensaje, $error);
    }
    function InsertarProducto($reg, &$mensaje, &$error){
        $con = fnConnect($msg);
        mysqli_query($con, "start transaction");
        $sqlinsert = "insert into Articulo(nom_articulo, cantidad,Cproducto, Encargado, precioA, Proveedor)
                values('{$reg["nom_articulo"]}','{$reg["cantidad"]}','{$reg["Cproducto"]}',
                '{$reg["Encargado"]}','{$reg["precioA"]}','{$reg["Proveedor"]}');";
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
        $mensaje = "<p>Articulo registrado correctamente..</p>";
    }
?>
