<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
        <title>Restaurante Pihuicho</title>
        <link href="CSS/Catalogo/EstiloBLateral.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Catalogo/EstiloBFila.css" rel="stylesheet" type="text/css"/>
        <link href="CSS-Main-Principal/EstiloMenuPrincipal.css" rel="stylesheet">
        <link href="CSS-Main-Principal/EstiloMVendidos.css" rel="stylesheet">
        <link href="CSS-Header/EstiloHContenedor.css" rel="stylesheet">
        <link href="CSS-Footer/EstiloPiePagina.css" rel="stylesheet">
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
                </ul>
            </div>
            
            <div class="logo">
                <a href="MenuPrincipal.php"><img src="Imagenes/IconoLogoGif.gif" alt=""/></a>
            </div>
                        
            <div class="info-header">
                <nav>
                    <a href="MenuPrincipal.php">Tienda</a>
                    <a href="Proveedores.php">Proveedores</a>
                    <a href="InicioS.php">Login</a>
                </nav>
            </div>            
        </header> 
        
        <main>
            <div class="Principal-Main">
                <div class="banner">
                    <div class="capa"></div>
                    <div class="Info">
                        <h1>Bienvenidos a Restaurant Pihuichos</h1>
                        <p>La mejor opción en platos turísticos y comida marina.</p>
                        <a href="CCarta.php">Ver nuestros platos</a>
                    </div>
                </div>
            
            <div class="Barra-main">
                <nav>
                    <ul class="menu-horizontal">
                        <li><a href="MenuPrincipal.php">Inicio</a></li>
                        <li><a href="Nosotros.php">Nosotros</a></li>
                        <li>
                            <a href="#">Producto</a>
                            <ul class="menu-vertical">
                                <li><a href="CCarta.php">Carta</a></li>
                                <li><a href="CBebidas.php">Bebidas</a></li>
                                <li><a href="CPlatosT.php">Platos Tipicos</a></li>
                            </ul>
                        </li>
                        <li><a href="Contacto.php">Contacto</a></li>
                    </ul>
                </nav> 
            </div> 
            
                <h1 class="title">Nuestros platos más vendidos</h1>
                <div class="container-platos">
                    <div class="card">
                        <img src="Imagenes/Fideos.jpg">
                        <h4>Fetuccini con lomo saltado</h4>
                        <p>Deliciosos fettuccinis a la huancaina que son acompañados con un jugoso lomo saltado</p>
                        <a href="#">Ver más</a>
                    </div>
                    <div class="card">
                        <img src="Imagenes/RondaMarina.jpg">
                        <h4>Ronda marina</h4>
                        <p>Deléitate con nuestro plato estrella. Este delicioso plato es para compartirlo en familia</p>
                        <a href="#">Ver más</a>
                    </div>
                    <div class="card">
                        <img src="Imagenes/Chifa.jpg">
                        <h4>Arroz chaufa de mariscos</h4>
                        <p>Platillo muy popular y delicioso que combina el arroz chaufa y el arroz con mariscos.</p>
                        <a href="#">Ver más</a>
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
