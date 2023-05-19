<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
        <title>Restaurante Pihuicho</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="CSS/Catalogo/EstiloBLateral.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Catalogo/EstiloBFila.css" rel="stylesheet" type="text/css"/>
        <link href="CSS-Main-Principal/EstiloMenuPrincipal.css" rel="stylesheet">
        <link href="CSS-Main-Principal/EstiloMVendidos.css" rel="stylesheet" type="text/css"/>
        <link href="CSS-Header/EstiloHContenedor.css" rel="stylesheet" type="text/css"/>
        <link href="CSS-Footer/EstiloPiePagina.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/EstiloPreguntasF.css" rel="stylesheet" type="text/css"/>
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
                    <a href="InicioA.php">Registro Usuario</a>
                    <a href="InicioC.php">Inicio Sesión</a>
                </nav>
            </div>            
        </header> 
        <main>
            <div class="fondoMain">
            <div class="contenedor-acordeon">
                <h2>Preguntas frecuentes</h2>
                <div class="acordeon">
                    <input  type="radio" name="acordeon" id="btn-acordeon1" class="btn-acordeon">
                    <label for="btn-acordeon1">
                        ¿En qué horario se puede ir a comer o cenar en el restaurante?
                    </label>
                    <div class="contenido-acordeon">
                        <p><b>Servicio del restaurante Pihuichos</b></p>
                        <p><b>Mediodía:</b> todos los días de 12:00 p.m. a 16:00 p.m.</p>
                        <p><b>Noche:</b> de martes a sábado de 19:30 p.m. a 22:30 p.m.</p>
                    </div>
                </div>
                <div class="acordeon">
                    <input  type="radio" name="acordeon" id="btn-acordeon2" class="btn-acordeon">
                    <label for="btn-acordeon2">
                        ¿En que días y horarios puedo hacer pedidos para delivery?
                    </label>
                    <div class="contenido-acordeon">
                        <p>Los pedidos se reciben de todos los días de 12:00 p.m. a 15:30 p.m. y en las noches de 19:30 p.m. a 22:00 p.m. Las entregas se realizan cuando es pagado el pedido.</p>
                    </div>
                </div>
                <div class="acordeon">
                    <input  type="radio" name="acordeon" id="btn-acordeon3" class="btn-acordeon">
                    <label for="btn-acordeon3">
                        ¿Cúando entregan mi pedido por delivery?
                    </label>
                    <div class="contenido-acordeon">
                        <p>El tiempo mínimo de entrega es de 40 minutos a un máximo de 1 hora despues de haber recibido el pedido por delivery.</p>
                    </div>
                </div>
                <div class="acordeon">
                    <input  type="radio" name="acordeon" id="btn-acordeon4" class="btn-acordeon">
                    <label for="btn-acordeon4">
                        ¿Podemos venir sin alguna reservación?
                    </label>
                    <div class="contenido-acordeon">
                        <p>Si, el restaurante está disponible para ingresar ya sea con reservaciones o no.</p>
                    </div>
                </div>
                <div class="acordeon">
                    <input  type="radio" name="acordeon" id="btn-acordeon5" class="btn-acordeon">
                    <label for="btn-acordeon5">
                        ¿Admiten mascotas en el restaurante?
                    </label>
                    <div class="contenido-acordeon">
                        <p>No, por razones de higiene, nuestros amigos de cuatro patas no pueden entrar al restaurante.</p>
                    </div>
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

