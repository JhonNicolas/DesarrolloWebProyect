<?php
require_once "Conectar.php";
$con = fnConnect($msg);

if(isset($_POST["enviar"])){
        $nombre = $_POST['nombrep'];
        $descripcion = $_POST['descripcionp'];
        $precio = $_POST['preciop'];
        $imagen = addslashes(file_get_contents($_FILES['imagenp']['tmp_name']));
        $query = "insert into plato(nom_plato,descrip_plato,precioP,imagen) values('$nombre','$descripcion','$precio','$imagen')";
        $resultado = $con->query($query);
        if($resultado){
            echo '<div class="success">Registro completado</div>';
        }else{
            echo '<div class="alerta">Ingrese los datos correctos a los campos</div>';
        }   
    }
?>
