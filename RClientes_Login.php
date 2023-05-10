<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
        <title>Restaurante Pihuicho</title>
        <link href="CSS-Login/EstiloHLogin.css.css" rel="stylesheet">
        <link href="CSS-Header/EstiloHContenedor.css" rel="stylesheet" type="text/css"/>
        <link href="CSS-Login/EstiloLogin.css" rel="stylesheet">
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
                    <a href="RClientes.php">Registrar usuario</a>
                    <a href="RClientes_Login.php" >Iniciar sesión</a>
                </nav>
            </div>            
        </header> 
        
        <main>
            <div class="login-box">
                <h2>Inicio de sesión</h2>   
                <?php include 'Controlador/controlador_sesion_trab.php'; ?> 
                <form action="#" method="POST"> 
                   <div class="user-box">
                    <input type="email" name="correo_tra" required="">
                    <label>Correo</label>
                  </div> 
                  <div class="user-box">
                    <input type="password" name="contra_tra" required="">
                    <label>Contraseña</label>
                  </div>
                  <div class="boton-box">
                      <input type="submit" name="enviar" value="Iniciar sesion">
                  </div>  
                </form>
            </div>
        </main>   
    </body>
</html>