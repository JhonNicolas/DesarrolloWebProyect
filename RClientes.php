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
                    <a href="RClientes.php">Registrar usuario</a>
                    <a href="InicioS.php" >Iniciar sesión</a>
                </nav>
            </div>            
        </header> 
        
        <main>
            <div class="login-box">
                <h2>Registro Cliente</h2>
                <form>
                  <div class="user-box">
                    <input type="text" name="nom_cli" required="">
                    <label>Nombre</label>
                  </div>
                  <div class="user-box">
                    <input type="text" name="ape_cli" required="">
                    <label>Apellido</label>
                  </div>  
                   <div class="user-box">
                    <input type="text" name="correo_cli" required="">
                    <label>Correo</label>
                  </div> 
                  <div class="user-box">
                    <input type="password" name="contra_cli" required="">
                    <label>Contraseña</label>
                  </div>
                  <div class="user-box">
                    <input type="text" name="DNI_cli" required="">
                    <label>DNI</label>
                  </div> 
                  <div class="user-box">
                    <input type="text" name="cell_cli" required="">
                    <label>Numero</label>
                  </div>  
                    
                  <a href="#" name="enviar" id="enviar" value="Enviar">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Registrar Cliente
                    
                  </a>
                    
                   
                </form>
            </div>
        </main>   
        
        
        
    </body>
</html>

