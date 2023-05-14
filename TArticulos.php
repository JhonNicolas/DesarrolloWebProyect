<?php
require "Conectar.php";
$con = fnConnect($msg);
$sql = "select a.ID_Articulo, a.nom_articulo, a.cantidad, a.Cproducto, a.Encargado, a.precioA, a.Proveedor, a.CProducto 
    from Articulo a;";
$lista= mysqli_query($con, $sql);
$numeracion=0; //contador de registros

$error=null;
$mensaje=null;
    if(isset($_POST["enviar"])){
        //capturando datos
        $reg["ID_Articulo"] = $_POST["ID_Articulo"];
        $reg["nom_articulo"] = $_POST["nom_articulo"];
        $reg["cantidad"] = $_POST["cantidad"];
        $reg["Cproducto"] = $_POST["Cproducto"];
        $reg["Encargado"] = $_POST["Encargado"];
        $reg["precioA"] = $_POST["precioA"];
        $reg["Proveedor"] = $_POST["Proveedor"];
        InsertarProducto($reg, $mensaje, $error);
    }
    function InsertarProducto($reg, &$mensaje, &$error){
        $con = fnConnect($msg);
        mysqli_query($con, "start transaction");
        $sqlinsert = "insert into Articulo(ID_Articulo, nom_articulo, cantidad,Cproducto, Encargado, precioA, Proveedor)
                values('{$reg["ID_Articulo"]}','{$reg["nom_articulo"]}','{$reg["cantidad"]}','{$reg["Cproducto"]}',
                '{$reg["Encargado"]}','{$reg["precioA"]}',{$reg["Proveedor"]}');";
                 //ejecutamos la consulta
       $respuesta = mysqli_query($con, $sqlinsert);
        if(!$respuesta){
            mysqli_query($con,"rollback");
            $error = "<p>Datos ingresados no son correctos...</p>";
            $error .= "<p>SQL: $sqlinsert </p>";
            return;
        }
        //hacemos permanente los cambios
        mysqli_query($con, "commit");
        $mensaje = "<p>Cliente registrado correctamente..</p>";
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
        <title>TABLA CLIENTES</title>
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
        
        <h1 align="left">ARTICULOS</h1>
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
                                <li><a class="dropdown-item" href="TArticulos.php">Articulos</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="TReservas.php" role="button" data-bs-toggle="dropdown" aria-expanded="false" _msthash="1150123" _msttexthash="300144">Reservas</a>
                            <ul class="dropdown-menu" _msthidden="3">
                                <li><a class="dropdown-item" href="TReservas.php">Reservas</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav><br>
        
        
        
        <div class="container-fluid">
            <input class="form-control me-2 light-table-filter" data-table="table_id" placeholder="Buscar Trabajador"><br>
            
        </div>
        <table class="table table-dark table-striped table-hover table_id" id="tblProductos">
            <thead>
                <tr class="Lineas">
                    <th colspan="7" class="colorCabecera"> LISTA DE ARTICULOS </th>                   
                </tr>
                <tr>
                    <td class="colorCabecera">ID</td>
                    <td class="colorCabecera">NOMBRE</td>
                    <td class="colorCabecera">CANTIDAD</td>
                    <td class="colorCabecera">CATEGORIA DE P.</td>
                    <td class="colorCabecera">ENCARGADO</td>
                    <td class="colorCabecera">COSTO (S/.)</td>
                    <td class="colorCabecera">PROVEEDOR</td> 
                </tr>
            </thead>    
            <tbody>
        <?php

        $busc= mysqli_query($con, $sql);

        if($busc -> num_rows >0){
            while($row= mysqli_fetch_array($busc)){
        ?> 
                
        <tr>
            <td ><?php echo $row['ID_Articulo']; ?></td>
            <td ><?php echo $row['nom_articulo']; ?></td>
            <td ><?php echo $row['cantidad']; ?></td>
            <td ><?php echo $row['Cproducto']; ?></td>
            <td ><?php echo $row['Encargado']; ?></td>
            <td ><?php echo $row['precioA']; ?></td>
            <td ><?php echo $row['Proveedor']; ?></td>
        </tr>
            
        <?php
}
}

?>

</table>       
    <button class="btn btn-outline-info" type="submit" name="enviar"> <a href="RArticulos.php"><b>Registrar Articulo</b></a> </button> 
  </body>
        <script src="js/buscador.js" type="text/javascript"></script>
</html>

