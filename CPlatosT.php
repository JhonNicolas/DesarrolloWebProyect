<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
        <title>Restaurante Pihuicho</title>
        <link href="CSS/Catalogo/EstiloBLateral.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Catalogo/EstiloBFila.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Catalogo/EstiloC.css" rel="stylesheet" type="text/css"/>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        
        <link href="CSS-Header/EstiloHContenedor.css" rel="stylesheet">
        <link href="CSS-Header/EstiloBotonSearch.css" rel="stylesheet">
        <link href="CSS-Header/EstiloBarraMenu.css" rel="stylesheet">
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
                    <a href="MenuPrincipal.php">Tienda</a>
                    <a href="Proveedores.php">Proveedores</a>
                    <a href="CPromociones.php">Promociones</a>
                    <a href="InicioS.php">Login</a>
                </nav>
            </div> 
            
        </header>
        
        <main>
            
           <div class="Barra-main">
                <nav>
                    <ul class="menu-horizontal">
                        <li><a href="Menu.php">Inicio</a></li>
                        <li><a href="Nosotros.php">Nosotros</a></li>
                        <li>
                            <a href="#">Producto</a>
                            <ul class="menu-vertical">
                                <li><a href="CCarta.php">Carta</a></li>
                                <li><a href="CBebidas.php">Bebidas</a></li>
                                <li><a href="CPlatosT.php">Platos Tipicos</a></li>
                                <li><a href="CPromociones.php">Promociones</a></li>
                            </ul>
                        </li>
                        <li><a href="Contacto.php">Contacto</a></li>
                    </ul>
                </nav> 
            </div>   
            <div class="container">
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CPlatosT/ensde chonta.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Caldo de Gallina</h3>
                        <p>Clasico plato muy reconocido en el país</p><br>
                        <h3>S/.10</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CPlatosT/inchicapi.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Inchicapi</h3>
                        <p>Este plato típico se ha ido ganando su lugar con el paso del tiempo dentro de la gastronomía peruana
                            por la intensidad de su aroma.</p><br>
                        <h3>S/.10</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CPlatosT/juane.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Juane</h3>
                        <p>Este típico plato de la gastronomía peruana es uno de los más conocidos. 
                            Está hecho a base de arroz, gallina y huevos.</p><br>
                        <h3>S/.10</h3>
                       <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>

                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CPlatosT/patarashca.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Patarashca</h3>
                        <p>El plato típico Patarashca, es una comida a base de pescado a la parrilla acompañado</p><br>
                        <h3>S/.10</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CPlatosT/picdepaiche.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Picadillo de Paiche</h3>
                        <p>Clasico plato muy reconocido en el país</p><br>
                        <h3>S/.10</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                </div>

            <div class="container">
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CPlatosT/tacacho.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Tacacho con cecina</h3>
                        <p>Este es otro plato típico muy conocido y rápido de preparar de la Amazonía peruana.</p><br>
                        <h3>S/.10</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CPlatosT/timbuche.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Timbuche</h3>
                        <p>El plato típico está hecha a base de pescado deshilachado, y no cualquier pescado sino del Paiche el 
                            cual es uno de los pescados más celebrados de la gastronomía amazónica. </p><br>
                        <h3>S/.10</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
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

