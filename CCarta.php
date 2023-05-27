<?php
session_start();
require_once "Conectar.php";
$con = fnConnect($msg);
$userCorreo=$_SESSION['correo'];
$sqlcliente="SELECT * FROM clientes where correo='$userCorreo';";
$numeracion=0; //contador de registros
$respu = mysqli_query($con, $sqlcliente);
    while($datos=$respu->fetch_assoc()){
        $idcli = $datos['ID_cli'];
        $nombrecli = $datos['nom_cli'];
        $correocli = $datos['correo'];
    }
if(($_SESSION['correo'])!=''){    
?>
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
                <?php if(isset($nombrecli)){    
                ?>
                <nav>
                    <a href="Intranet_cliente.php" target="blank"><?php echo 'Hola ';echo $nombrecli ?></a>
                    <a href="Controlador/Ctrl_CerrarSesion.php">Cerrar Sesión</a>
                </nav>
                <?php 
                    }else{
                        $sqlcliente="SELECT * FROM trabajadores where correo='$userCorreo';";
                        $respu = mysqli_query($con, $sqlcliente);
                        if($respu -> num_rows >0){
                        while($mostrar= mysqli_fetch_array($respu)){
                ?>
                <nav>
                    <a href="Intranet_trabajador.php" target="blank"><?php echo 'Hola ';echo $mostrar['nom_trab'] ?></a>
                    <a href="Controlador/Ctrl_CerrarSesion.php">Cerrar Sesión</a>
                </nav>
                 <?php 
                    }  }  }   
                 ?>
                
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
        
        <div class="pricing-header px-3 py-3 pt-md-1 pb-md-4 my-4 mx-auto text-center">
            <h1 class="display-4 mt-4">CARTA</h1>
        </div>

        <div class="container" id="lista-productos">
            
            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">AGUAJE</h4>
                    </div>
                    <div class="card-body">
                        <img src="Imagenes/IProductos/CCarta/0.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">15.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Vaso de aguaje con hielo </li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="1">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CHICHA MORADA </h4>
                    </div>
                    <div class="card-body">
                        <img src="Imagenes/IProductos/CCarta/1.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">20.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Chicha morada en una jarra de 1L.</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="2">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CHICHA MORADA</h4>
                    </div>
                    <div class="card-body">
                        <img src="Imagenes/IProductos/CCarta/2.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">10.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Clasica chicha morada con hielo en un vaso de 500ml</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="3">Comprar</a>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">MASATO</h4>
                    </div>
                    <div class="card-body">
                        <img src="Imagenes/IProductos/CCarta/221.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">15.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Vaso de masato con hielo</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="4">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">COCA COLA</h4>
                    </div>
                    <div class="card-body">
                        <img src="Imagenes/IProductos/CCarta/3.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">2.50</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Botella de gaseosa de 1.5L.</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="5">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">COCA COLA</h4>
                    </div>
                    <div class="card-body">
                        <img src="Imagenes/IProductos/CCarta/5.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">2.50</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Botella de gaseosa de 500ml</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="6">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">FANTA</h4>
                    </div>
                    <div class="card-body">
                        <img src="Imagenes/IProductos/CCarta/6.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">10.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Bebida gaseosa roja de 3L.</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="4">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">FANTA</h4>
                    </div>
                    <div class="card-body">
                        <img src="Imagenes/IProductos/CCarta/Caldo.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">2.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Bebida gaseosa naranja personal de 400ml.</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="5">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">FANTA</h4>
                    </div>
                    <div class="card-body">
                        <img src="Imagenes/IProductos/CCarta/Chicharron.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">11.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Bebida gaseosa naranja de 3L.</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="6">Comprar</a>
                    </div>
                </div>
            </div>
            
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">INKA COLA</h4>
                    </div>
                    <div class="card-body">
                        <img src="Imagenes/IProductos/CCarta/Parihuela.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">3.50</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Gaseosa de 1.5L.</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="4">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">INCA KOLA</h4>
                    </div>
                    <div class="card-body">
                        <img src="Imagenes/IProductos/CCarta/causa.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">7.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Gaseosa de 2.5L.</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="5">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">INCA KOLA</h4>
                    </div>
                    <div class="card-body">
                        <img src="Imagenes/IProductos/CCarta/tacacho.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">S/. <span class="">2.50</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Gaseosa personal de 500ml</li>
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
<?php
}else {
        header("location:InicioS.php");
    }?>
</html>