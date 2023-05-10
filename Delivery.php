<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
        <title>Restaurante Pihuicho</title>
        <link href="CSS/Catalogo/EstiloBLateral.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Catalogo/EstiloBFila.css" rel="stylesheet" type="text/css"/>
        <link href="CSS-Main-Principal/EstiloMenuPrincipal.css" rel="stylesheet">
        <link href="CSS-Main-Principal/EstiloMasVendidos.css" rel="stylesheet">
        <link href="CSS-Header/EstiloHContenedor.css" rel="stylesheet">
        <link href="CSS-Header/EstiloBotonSearch.css" rel="stylesheet">
        <link href="CSS-Footer/EstiloPiePagina.css" rel="stylesheet">
        <link href="CSS/EstiloDeli.css" rel="stylesheet">
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
            
            <div class="Busqueda">
                <input type="text" placeholder="Buscar platos">
                <div class="btn">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            
            <div class="info-header">
                <nav>
                    <a href="InicioA.php">Registro Usuario</a>
                    <a href="InicioC.php">Inicio Sesión</a>
                </nav>
            </div>            
        </header> 
        
        <main>
            <div class="fondoMainD">
                <div class="card">
                    <div class="content-delivery">
                        <h2>Servicio de delivery</h2>
                        <p>Dedicado a servirte</p>
                        <a href="CCarta.php">¡Pide ya!</a>
                    </div>
                    <img src="Imagenes/IconDelivery.png">
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
