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
                        <img src="Imagenes/IProductos/CBebidas/chicha vaso.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Chicha Morada</h3>
                        <p>Clasica chicha morada con hielo en un vaso de 500ml</p><br>
                        <h3>S/.10</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ..." target="blanck">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CBebidas/chicha morada.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Chicha Morada</h3>
                        <p>Chicha morada en una jarra de 1L.</p><br>
                        <h3>S/.20</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ..." target="blanck">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CBebidas/aguaje.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Aguaje</h3>
                        <p>Vaso de aguaje con hielo</p><br>
                        <h3>S/.10</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir Caldo de Gallina" target="blanck">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CBebidas/masato.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Masato</h3>
                        <p>Vaso de masato con hielo</p><br>
                        <h3>S/.10</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir Caldo de Gallina" target="blanck">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CBebidas/coca 500.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Coca Cola</h3>
                        <p>Botella de gaseosa de 500ml.</p><br>
                        <h3>S/.2.50</h3>
                       <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ..." target="blanck">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                </div>

            <div class="container">
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CBebidas/coca 1.5l.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Coca Cola</h3>
                        <p>Botella de gaseosa de 1.5L.</p><br>
                        <h3>S/.7</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ..." target="blanck">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CBebidas/fanta 3l roja.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Fanta</h3>
                        <p>Bebida gaseosa roja de 3L.</p><br>
                        <h3>S/.10</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ..." target="blanck">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CBebidas/fanta 400.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Fanta</h3>
                        <p>Bebida gaseosa naranja personal de 400ml.</p><br>
                        <h3>S/.1.5</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ..." target="blanck">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CBebidas/fanta3l.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Fanta</h3>
                        <p>Bebida gaseosa naranja de 3L.</p><br>
                        <h3>S/.10</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ..." target="blanck">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CBebidas/ink 1.5.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Inka Cola</h3>
                        <p>Gaseosa de 1.5L.</p><br>
                        <h3>S/.7</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir Caldo de Gallina" target="blanck">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                
            </div>

            <div class="container">
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CBebidas/sprite.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>NOMBRE</h3>
                        <p>DESCRIPCION</p><br>
                        <h3>S/.10</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ..." target="blanck">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CBebidas/sprite2.5.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Sprite</h3>
                        <p>Gaseosa de 2.5L.</p><br>
                        <h3>S/.10</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ..." target="blanck">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CBebidas/sprite3l.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Sprite</h3>
                        <p>Gaseosa de 3L.</p><br>
                        <h3>S/.12</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir Caldo de Gallina" target="blanck">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CBebidas/inka 2.5l.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Inka Cola</h3>
                        <p>Gaseosa de 2.5L.</p><br>
                        <h3>S/.13</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ..." target="blanck">
                            <i class="bi bi-whatsapp"></i> Pedido</a>
                    </div>
                </div>
                <div class="card">
                    <figure>
                        <img src="Imagenes/IProductos/CBebidas/inka cola.jpg" alt=""/>
                    </figure>
                    <div class="contenido">
                        <h3>Inka Cola</h3>
                        <p>Gaseosa personal de 500ml.</p><br>
                        <h3>S/.2.50</h3>
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ..." target="blanck">
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

