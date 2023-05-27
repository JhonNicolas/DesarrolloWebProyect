<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
        <title>Restaurante Pihuicho</title>
        <link href="CSS-Header/EstiloHContenedor.css" rel="stylesheet" type="text/css"/>
        <link href="CSS-Login/EstiloLoginnn.css" rel="stylesheet">
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
                <?php 
                    if(empty(($_SESSION['correo']))){
                ?>
                <nav>
                    <a href="MenuPrincipal.php">Tienda</a>
                    <a href="RClientes.php">Registrar usuario</a>
                    <a href="InicioS.php" >Iniciar sesión</a>
                </nav>
                <?php 
                    }else if(isset($_SESSION['correo'])){   
                    require_once "Conectar.php";
                    $con = fnConnect($msg);     
                    $userCorreo=$_SESSION['correo'];
                    $sqlcliente="SELECT * FROM trabajadores where correo='$userCorreo';";
                    $respu = mysqli_query($con, $sqlcliente);
                    if($respu -> num_rows >0){
                        while($mostrar= mysqli_fetch_array($respu)){
                ?>
                <nav>
                    <a href="Intranet_cliente.php" target="blank"><?php echo 'Hola ';echo $mostrar['nom_trab'] ?></a>
                    <a href="Controlador/Ctrl_CerrarSesion.php">Cerrar Sesión</a>
                </nav>
                 <?php 
                    }  }  }   
                 ?>
            </div>            
        </header> 
       
        <main>
            <div class="contenedor-proveedor">
                <div class="login-box">
                    <h2>Registro Proveedor</h2>
                    <?php include 'Controlador/Ctrl_RProveedores.php';?>
                    <form action="#" method="POST">
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
                      <div class="boton-box">
                          <input type="submit" name="enviar" value="Registrar Trabajador" id="enviar">
                      </div>
                    </form>

                </div>
            </div>    
        </main>     
    </body>
</html>



