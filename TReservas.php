<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
        <title>TABLA ADMINISTRADORES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="CSS-Header/EstiloHContenedor.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Catalogo/EstiloBLateral.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Catalogo/EstiloBFila.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <header>
       <body class="p-5 m-0 border-0 bd-example">                 
            <div class="logo">
                <a href="MenuPrincipal.php"><img src="Imagenes/IconoLogoGif.gif" alt=""/></a>
            </div>
            
            <div class="info-header">
                <nav>
                    <a href="MenuPrincipal.php">Tienda</a>
                    <a href="#">Proveedores</a>
                    <a href="CPromociones.php">Promociones</a>
                    <a href="InicioS.php">Login</a>
                </nav>
            </div> 
        </header> 
    
    

        <h1 align="left">TABLA DE CLIENTES</h1>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" _msthash="1940757" _msttexthash="381446">Registros</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" _msthidden="A" _msthiddenattr="1813266" _mstaria-label="320099">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" _msthash="1150123" _msttexthash="300144">Registros de trabajadores </a>
                            <ul class="dropdown-menu" _msthidden="3">
                                <li _msthidden="1"><a class="dropdown-item" href="TClientes.php" _msthash="1722032" _msttexthash="76466" _msthidden="2">Clientes</a></li>
                                <li _msthidden="1"><a class="dropdown-item" href="TTrabajadores.php" _msthash="1722214" _msttexthash="232752" _msthidden="1">Trabajadores</a></li>
                                <li _msthidden="1"><a class="dropdown-item" href="TProveedores.php" _msthash="1722214" _msttexthash="232752" _msthidden="1">Proveedores</a></li>
                                <li _msthidden="1"><a class="dropdown-item" href="TAdmin.php" _msthash="1722214" _msttexthash="232752" _msthidden="1">Administradores</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" _msthash="1150123" _msttexthash="300144">Registro de inventario</a>
                            <ul class="dropdown-menu" _msthidden="3">
                                <li><a class="dropdown-item" href="TInsumosC.php">INSUMOS PLATOS</a></li>
                                <li><a class="dropdown-item" href="TLimpieza.php">LIMPIEZA</a></li>
                                <li><a  class="dropdown-item" href="TMaterialesC.php">MATERIALES DE COCINA</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="TReservas.php" role="button" data-bs-toggle="dropdown" aria-expanded="false" _msthash="1150123" _msttexthash="300144">Reservas</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
            
       <table class="table table-dark table-striped table-hover " id="tblProductos">
                <tr class="Lineas">
                    <th colspan="8" class="colorCabecera"> Lista de Reservas </th>                   
                </tr>
                <tr>
                    <td class="colorCabecera">Nº</td>
                    <td class="colorCabecera">ID</td>
                    <td class="colorCabecera">NOMBRE</td>
                    <td class="colorCabecera">APELLIDO</td>
                    <td class="colorCabecera">NUMERO</td>
                    <td class="colorCabecera">PERSONAS</td>
                    <td class="colorCabecera">HORA DE RESERVA</td>
                    <td class="colorCabecera">DIA</td>
                </tr>
                <?php

                ?>


            </table>

        </form>
  </body>
  
</html>
