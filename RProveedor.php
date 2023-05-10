<?php
require "Conectar.php";
$con = fnConnect($msg);
$sql = "select p.nombreProv,	p.correo, p.RUC, p.telefono, p.direccion"
        . "from proveedores p;";
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
        $sqlinsert = "insert into proveedores(nombreProv, correo, RUC, telefono, direccion)values ('{$reg["idProv"]}','"
        . "{$reg["nombreProv"]}','{$reg["correo"]}','{$reg["RUC"]}','{$reg["telefono"]}',{$reg["direccion"]};";
                 //ejecutamos la consulta
        $respuesta = mysqli_query($con, $sqlinsert);
        if(!$respuesta){
            mysqli_query($con,"rollback");
            $error = "<p>Datos ingresados no son correctos...</p>";
            $error .= "<p>SQL: $sqlinsert </p>";
            return;
        }
        //hacemos permanente los cambios
        mysqli_query($con, "commit");
        $mensaje = "<p>Cliente registrado correctamente..</p>";
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
        <title>Restaurante Pihuicho</title>
        <link href="CSS-Login/EstiloHLogin.css.css" rel="stylesheet">
        <link href="CSS-Header/EstiloHContenedor.css" rel="stylesheet" type="text/css"/>
        <link href="CSS-Login/EstiloLogin.css" rel="stylesheet">
        <link href="CSS-Header/EstiloBotonSearch.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Catalogo/EstiloBLateral.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Catalogo/EstiloBFila.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        
    </head>
    <body>
        <header>
            <input type="checkbox" id="check"> 
            <label for="check">
                <i class="fas fa-bars" id="btn"></i>
                <i class="fas fa-times" id="cancel"></i>
            </label>
            <div class="sidebar">
                <h2>CATEGORIAS</h2>
                <ul>
                    <li><a href="CCarta.php"><i class="fas fa-qrcode"></i>Carta</a></li>
                    <li><a href="CBebidas.php"><i class="fas fa-qrcode"></i>Bebidas</a></li>
                    <li><a href="CPlatosT.php"><i class="fas fa-qrcode"></i>Platos Tipicos</a></li>
                    <li><a href="CPromociones.php"><i class="fas fa-qrcode"></i>Promociones</a></li>
                </ul>
            </div>
            
            <div class="logo">
                <a href="MenuPrincipal.php"><img src="Imagenes/IconoLogoGif.gif" alt=""/></a>
            </div>
            
            <div class="info-header">
                <nav>
                    <a href="RClientes.php" >Registrar Usuario</a>
                    <a href="InicioS.php" >Iniciar sesión</a>
                </nav>
            </div>            
        </header> 
       
        <main>
            <div class="login-box">
                <h2>Registro Proveedor</h2>
                <form>
                  <div class="user-box">
                    <input type="text" name="nombreProv" required="">
                    <label>Nombre</label>
                  </div>
                   <div class="user-box">
                    <input type="text" name="correo" required="">
                    <label>Correo</label>
                  </div> 
                  <div class="user-box">
                    <input type="text" name="RUC" required="">
                    <label>RUC</label>
                  </div> 
                  <div class="user-box">
                    <input type="text" name="telefono" required="">
                    <label>Numero</label>
                  </div>
                  <div class="user-box">
                    <input type="text" name="direccion" required="">
                    <label>Direccion</label>
                  </div>
                  <a href="#" name="enviar" id="enviar" value="Enviar">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Submit
                  </a>
                </form>
            </div>
        </main>   
        
        
        
    </body>
</html>



