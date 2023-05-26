<?php
session_start();
require "Conectar.php";
$con = fnConnect($msg);
$userCorreo=$_SESSION['correo'];
$sqlcliente="SELECT * FROM clientes where correo='$userCorreo';";
$numeracion=0; //contador de registros
$respu = mysqli_query($con, $sqlcliente);
    while($datos=$respu->fetch_assoc()){
        $idcli = $datos['ID_cli'];
        $codadmin = $datos['COD_admin'];
        $nombrecli = $datos['nom_cli'];
        $apecli = $datos['ape_cli'];
        $correocli = $datos['correo'];
        $contracli = $datos['contra'];
        $dnicli = $datos['DNI_cli'];
        $numerocli = $datos['cell_cli'];
    }
if(($_SESSION['correo'])!=''){    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
        <title>Restaurante Pihuicho</title>    
        <link href="CSS-Intranet/EstiloDash.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body> 
        
        <div id="mySidenav" class="sidenav">
            <p class="logo"><span>R</span>-Pihuicho</p>
            <a href="#" data-target="#Principal" class="icon-a"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp;Principal</a>
            <a href="#" data-target="#Proveedores" class="icon-a"><i class="fa-solid fa-truck-fast icons"></i>&nbsp;&nbsp;Mis pedidos</a>
            <a href="#" data-target="#Articulos" class="icon-a"><i class="fa fa-tasks icons"></i>&nbsp;&nbsp;Platos</a>
            <a href="#" data-target="#Clientes" class="icon-a"><i class="fa fa-user icons"></i>&nbsp;&nbsp;Mis datos</a>
            <a href="#" data-target='#RProductos'class="icon-a"><i class="fa fa-shopping-bag icons"></i>&nbsp;&nbsp;Proximamente</a>
            <a href="Controlador/Ctrl_CerrarSesion.php" name="cerrar" class="icon-a"><i class="fa-solid fa-right-from-bracket icons"></i>&nbsp;&nbsp;Cerrar sesión</a>
        </div>
        <header>   
        <div id="main">
            <div class="head">
                <div class="col-div-6">
                    <span style="font-size: 30px; cursor: pointer;color: white;" class="nav">
                    &#9776;</span>
                    <span style="font-size: 30px; cursor: pointer;color: white;" class="nav2">
                     &#9776;</span>
                </div>
                
                <div class="col-div-6">
                    <div class="profile">
                        <img src="Imagenes/User-Avatar.png" class="pro-img">    
                        <p><?php echo $nombrecli ?><span><?php echo $correocli ?></span></p>
                    </div>
                 </div>
                <div class="clearfix"></div>
            </div>
        </div>    
        </header>    
        <main>  
            <div data-content id="principal" class="active">    
            
            <div class="col-div-10">
                <div class="box-8">
                    <div class="content-box">
                        <p class="p1">¡Bienvenido a Restaurant Pihuichos!</p>
                        <a href="MenuPrincipal.php"><img src="Imagenes/info/loguito.gif" alt=""/></a>
                        <p class="p2">La mejor opción en platos turísticos y comida marina.</p>
                    </div>
                </div>
            </div><br>     
            <div class="clearfix"></div>  
        </div>
                        
            <div data-content id="proveedores">
                Proximamente2...
            </div>
            
            <div data-content id="articulos">
                Proximament3...
            </div>
            
            <div data-content id="clientes">
                <div class="col-div-10">
                    <div class="box-8">
                        <div class="content-box">
                            <p class="p1"> Mis datos de usuario </p>
                            <?php
                                   $sqldatos="select * from clientes where correo='$userCorreo';;";
                                   $buscdatos= mysqli_query($con, $sqldatos);
                                if($buscdatos -> num_rows >0){
                                    while($mostrar= mysqli_fetch_array($buscdatos)){

                                ?>
                                <div class="contenedor-datoscliente">
                                    <p class="p3">Nombre: <p class="p4"> <?php echo $mostrar['nom_cli']?> </p><br>
                                    <p class="p3"> Apellido: <p class="p4"> <?php echo $mostrar['ape_cli']?> </p><br>
                                    <p class="p3"> Correo: <p class="p4"> <?php echo $mostrar['correo']?> </p><br>
                                    <p class="p3"> Contraseña: <p class="p4"> <?php echo $mostrar['contra']?> </p><br>
                                    <p class="p3"> DNI: <p class="p4"> <?php echo $mostrar['DNI_cli']?> </p><br>
                                    <p class="p3"> Celular: <p class="p4"> <?php echo $mostrar['cell_cli']?> </p><br>
                                </div>        
                                <?php 
                                }}
                                ?>                  
                        </div>
                    </div>
                </div><br>
            </div>
            
            <div data-content id="rproductos">
                Proximamente4...
            </div>
            
        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script type="text/javascript">
            $("main").css('margin-left','300px');
            $("main").css('transition','0.5s');
            $(".nav").click(function(){
               $("#mySidenav").css('width','70px');
               $("#main").css('margin-left','70px');
               $(".logo").css('visibility','hidden');
               $(".logo span").css('visibility','visible');
               $(".logo span").css('margin-left','-10px');
               $(".icon-a").css('visibility','hidden');
               $(".icons").css('visibility','visible');
               $(".icons").css('margin-left','-8px');
               $(".nav").css('display','none');
               $(".nav2").css('display','block');
               $("main").css('margin-left','70px');
               
            });
            $(".nav2").click(function(){
               $("#mySidenav").css('width','300px');
               $("#main").css('margin-left','300px');
               $(".logo").css('visibility','visible');
               $(".logo span").css('visibility','visible');
               $(".icon-a").css('visibility','visible');
               $(".icons").css('visibility','visible');
               $(".nav").css('display','block');
               $(".nav2").css('display','none');
               $("main").css('margin-left','300px');
            });
        </script>
        
        <script defer> 
            const targets = document.querySelectorAll('[data-target]')
            const content = document.querySelectorAll('[data-content]')
            targets.forEach(target => {
                target.addEventListener('click', () => {
                        content.forEach(c => {
                        c.classList.remove('active')
                    })
                    const t = document.querySelector(target.dataset.target)
                    t.classList.add('active')
                })
            })
        </script>
        
    </body>
</html>
<?php 
    }else {
        header("location:InicioS.php");
    }
?>