<?php
require "Conectar.php";
$con = fnConnect($msg);

if(isset($_POST["enviar"])){
        $nombre = $_POST['nombrep'];
        $precio = $_POST['preciop'];
        $imagen = addslashes(file_get_contents($_FILES['imagenp']['tmp_name']));
        $query = "insert into plato(nom_plato,precioP,imagen) values('$nombre','$precio','$imagen')";
        $resultado = $con->query($query);
        if($resultado){
            echo "Registrado";
        }else{
            echo'no funciono';
        }
        
    }


?>
