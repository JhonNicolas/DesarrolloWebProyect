<?php
session_start();
require_once "Conectar.php";
$con = fnConnect($msg); 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
        <title>Restaurante Pihuicho</title>
        <link href="CSS/Catalogo/EstiloBFila.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Catalogo/EstiloC.css" rel="stylesheet" type="text/css"/>
        <link href="CSS-Footer/EstiloPiePagina.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Catalogo/EstiloBLateral.css" rel="stylesheet" type="text/css"/>
        <link href="CSS-Header/EstiloHContenedor.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" >
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>  
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
                </ul>
            </div>
            
            <div class="logo">
                <a href=MenuPrincipal.php><img src="Imagenes/IconoLogoGif.gif" alt=""/></a>
            </div>
                        
            <div class="info-header">
                <?php 
                    if(empty(($_SESSION['correo']))){
                ?>
                <nav>
                    <a href="MenuPrincipal.php">Tienda</a>
                    <a href="Proveedores.php">Proveedores</a>
                    <a href="InicioS.php">Login</a>
                </nav>
                <?php 
                    }else if(isset($_SESSION['correo'])){
                    $userCorreo=$_SESSION['correo'];
                    $sqlcliente="SELECT * FROM clientes where correo='$userCorreo';";
                    $respu = mysqli_query($con, $sqlcliente);
                    if($respu -> num_rows >0){
                        while($mostrar= mysqli_fetch_array($respu)){
                ?>
                <nav>
                    <a href="Intranet_cliente.php" target="blank"><?php echo 'Hola ';echo $mostrar['nom_cli'] ?></a>
                    <a href="Controlador/Ctrl_CerrarSesion.php">Cerrar Sesión</a>
                </nav>
                 <?php 
                    }  }  }   
                 ?>
              </div> 
        </header> 
        
        <main>
        <div class="container">
            <div class="card">
                <figure>
                    <img src="Imagenes/info/efec.jpg" alt=""/>
                </figure>
                <div class="contenido">
                    <h3>EFECTIVO</h3>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/info/plin.jpg" alt=""/>
                </figure>
                <div class="contenido">
                    <h3>PLIN</h3>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/info/yape.jpg" alt=""/>
                </figure>
                <div class="contenido">
                    <h3>YAPE</h3>
                </div>
            </div>
        </div>
      </main>      
      <footer class="footer">
            <div class="container-f">
                <div class="footer-row">
                    <div class="footer-links">
                        <h4>Restaurant</h4>
                        <ul>
                            <li><a href="Nosotros.php">Nosotros</a></li>
                            <li><a href="NuestraTienda.php">Nuestra tienda</a></li>
                            <li><a href="RTrabajador.php">Trabaja con nosotros</a></li>
                        </ul>
                    </div>
                    <div class="footer-links">
                        <h4>Ayuda</h4>
                        <ul>
                            <li><a href="MediosPago.php">Medios de pagos</a></li>
                            <li><a href="PreguntasFrecuentes.php">Preguntas frecuentes</a></li>
                        </ul>
                    </div>
                    <div class="footer-links">
                        <h4>Servicios</h4>
                        <ul>
                            <li><a href="Proveedores.php">Proveedores</a></li>
                            <li><a href="Delivery.php">Delivery</a></li>
                            <li><a href="Reservas.php">Reservaciones</a></li>
                            
                        </ul>
                    </div>
                    <div class="footer-links">
                        <h4>Síguenos</h4>
                        <div class="social-link">
                            <a href="https://acortar.link/dxoBc1"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>        

    </body>
</html>
