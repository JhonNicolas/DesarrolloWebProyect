<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
        <title>Restaurante Pihuicho</title>
        <link href="CSS-Login/EstiloHLogin.css.css" rel="stylesheet">
        <link href="CSS-Header/EstiloHContenedor.css" rel="stylesheet" type="text/css"/>
        <link href="CSS-Login/EstiloLogin2.css" rel="stylesheet">
        <link href="CSS/Catalogo/EstiloBLateral.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Catalogo/EstiloBFila.css" rel="stylesheet" type="text/css"/>
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
                    <a href="RClientes.php" >Registrar Usuario</a>
                    <a href="InicioS.php" >Iniciar sesión</a>
                </nav>
            </div>            
        </header> 
       
        <main>
            <div class="login-box">
                <h2>Registro de Articulos</h2>
                <?php include 'Controlador/Ctrl_RArticulos.php';?>
                <form action="#" method="POST">
                  <div class="user-box">
                    <input type="text" name="nom_articulo" required="">
                    <label>Nombre Compra</label>
                  </div>
                    <div class="user-box">
                    <input type="text" name="cantidad" required="">
                    <label>Cantidad</label>
                  </div>
                  <div class="user-box">
                      <label>Categoria de Producto</label><br><br>
                      <select class="select-box" name="Cproducto">
                         <?php while ($row = mysqli_fetch_assoc($Listacp)) { ?>
                                <option value="<?php echo $row["ID_cat"]?>">
                                  <?php echo $row["nombre_cat"]?>  
                                </option>                        
                       <?php } ?>
                      </select> 
                  </div>  <br>                     
                    <div class="user-box">
                      <label>Encargado</label><br><br>
                      <select class="select-box" name="Encargado">
                         <?php while ($row = mysqli_fetch_assoc($Listatrab)) { ?>
                                <option value="<?php echo $row["nom_trab"]?>">
                                  <?php echo $row["nom_trab"]?>  
                                </option>                        
                       <?php } ?>
                      </select> 
                  </div>  <br> 
                    <div class="user-box">
                    <input type="text" name="precioA" required="">
                    <label>Costo</label>
                  </div>
                    <div class="user-box">
                      <label>Proveedor</label><br><br>
                      <select class="select-box" name="Proveedor">
                         <?php while ($row = mysqli_fetch_assoc($Listaprov)) { ?>
                                <option value="<?php echo $row["idProv"]?>">
                                  <?php echo $row["nombreProv"]?>  
                                </option>                        
                       <?php } ?>
                    </select>    
                  </div>  
                  <div class="boton-box">
                      <input type="submit" name="enviar" value="Registrar Articulo" id="enviar">
                  </div>
                </form>
            </div>
        </main>   
        
        
        
    </body>
</html>

