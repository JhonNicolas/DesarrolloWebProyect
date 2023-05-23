<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
    <title>Restaurante Pihuicho</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="cssCarro/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/popper.min.js" type="text/javascript"></script>    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="cssCarro/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
    
    <link href="CSS/Catalogo/EstiloBFila.css" rel="stylesheet" type="text/css"/>
    <link href="CSS-Header/EstiloHContenedor.css" rel="stylesheet" type="text/css"/>
    <link href="CSS-Footer/EstiloPiePagina.css" rel="stylesheet" type="text/css"/>
</head>

<body>

    <header>
        <div class="container">
            <div class="row align-items-stretch justify-content-between">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-green">
                    
                    <div class="logo">
                <a href="MenuPrincipal.php"><img src="Imagenes/IconoLogoGif.gif" alt=""/></a>
            </div>
            
            <div class="info-header">
                <nav>
                    <a href="MenuPrincipal.php">Tienda</a>
                    <a href="RClientes.php">Registrate</a>
                    <a href="InicioS.php">Login</a>
                </nav>
            </div> 
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <img src="Imagenes/cart.jpeg" class="nav-link dropdown-toggle img-fluid" height="70px"
                                    width="70px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"></img>
                                <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                    <table id="lista-carrito" class="table">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
                                    <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar Compra</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
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
                            </ul>
                        </li>
                        <li><a href="Contacto.php">Contacto</a></li>
                    </ul>
                </nav> 
            </div>   
        
        <div class="pricing-header px-3 py-3 pt-md-1 pb-md-4 my-4 mx-auto text-center">
            <h1 class="display-4 mt-4">PLATOS TIPICOS</h1>
        </div>

        <div class="container" id="lista-productos">
            
            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">ENSALADA DE CHONTA</h4>
                    </div>
                    <div class="card-body">
                        <img src="Imagenes/IProductos/CPlatosT/ensde chonta.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">25</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Esta deliciosa entrada muy consumida en nuestro país es una rica ensalada a base de 
                                chonta o palmito con alguna variedad de vegetales que hacen de ella muy deliciosa. </li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="1">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">INCHICAPI </h4>
                    </div>
                    <div class="card-body">
                        <img src="Imagenes/IProductos/CPlatosT/inchicapi.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">20</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Este plato típico se ha ido ganando su lugar con el paso del tiempo dentro de la gastronomía peruana
                            por la intensidad de su aroma.</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="2">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">JUANES</h4>
                    </div>
                    <div class="card-body">
                        <img src="Imagenes/IProductos/CPlatosT/juane.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">30</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Este típico plato de la gastronomía peruana es uno de los más conocidos. 
                            Está hecho a base de arroz, gallina y huevos.</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="3">Comprar</a>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">PATARASHCA</h4>
                    </div>
                    <div class="card-body">
                        <img src="Imagenes/IProductos/CPlatosT/patarashca.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">20</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>El plato típico Patarashca, es una comida a base de pescado a la parrilla acompañado</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="4">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">PICADILLO DE PAICHE</h4>
                    </div>
                    <div class="card-body">
                        <img src="Imagenes/IProductos/CPlatosT/picdepaiche.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">35</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Clasico plato muy reconocido en el país</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="5">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">TACACHO CON CECINA</h4>
                    </div>
                    <div class="card-body">
                        <img src="Imagenes/IProductos/CPlatosT/tacacho.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">35</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Este es otro plato típico muy conocido y rápido de preparar de la Amazonía peruana.</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="6">Comprar</a>
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
    
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/sweetalert2.min.js" type="text/javascript"></script>
    <script src="js/carrito.js" type="text/javascript"></script>
    <script src="js/pedido.js" type="text/javascript"></script>
</body>

</html>