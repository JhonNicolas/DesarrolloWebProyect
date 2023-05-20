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
        <link href="CSS-Intranet/EstiloDashboard.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body> 
        
        <div id="mySidenav" class="sidenav">
            <p class="logo"><span>R</span>-Pihuicho</p>
            <a href="#" data-target="#Principal" class="icon-a"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp;Principal</a>
            <a href="#" data-target="#Proveedores" class="icon-a"><i class="fa-solid fa-truck-fast icons"></i>&nbsp;&nbsp;Pedidos</a>
            <a href="#" data-target="#Articulos" class="icon-a"><i class="fa fa-tasks icons"></i>&nbsp;&nbsp;Platos</a>
            <a href="#" data-target="#Clientes" class="icon-a"><i class="fa fa-user icons"></i>&nbsp;&nbsp;Datos de cuenta</a>
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
            <div class="col-div-3">
                <div class="box">
                    <p>67<br/><span>Trabajadores</span></p>
                    <i class="fa fa-users box-icon"></i>
                </div>
            </div>
            <div class="col-div-3">
                <div class="box">
                    <p>88<br/><span>Projects</span></p>
                    <i class="fa fa-list box-icon"></i>
                </div>
            </div>
            <div class="col-div-3">
                <div class="box">
                    <p>99<br/><span>Orders</span></p>
                    <i class="fa fa-shopping-bag box-icon"></i>
                </div>
            </div>
            <div class="col-div-3">
                <div class="box">
                    <p>78<br/><span>Tasks</span></p>
                    <i class="fa fa-tasks box-icon"></i>
                </div>
            </div>
            
            <div class="clearfix"></div>
            <br/><br/>
            
            <div class="col-div-10">
                <div class="box-8">
                    <div class="content-box">
                        <p>Últimos empleados registrados <span>Ver todo</span></p>
                        <br/>
                        <table>
                            <tr>
                                <th class="colorCabecera">ID</th>
                                <th class="colorCabecera">NOMBRE</th>
                                <th class="colorCabecera">APELLIDO</th>
                                <th class="colorCabecera">CORREO</th> 
                                <th class="colorCabecera">CONTRASEÑA</th> 
                                <th class="colorCabecera">DNI</th> 
                                <th class="colorCabecera">NUMERO</th> 
                                <th class="colorCabecera">CARGO</th>
                            </tr>
                            <?php
                            
                                $llenarsql="select t.ID_trab,t.nom_trab,t.ape_trab,t.correo,t.contra,t.dni_trab,t.numero_trab,t.cargo_trab from trabajadores t;";
                                
                               $busc= mysqli_query($con, $llenarsql);

                            if($busc -> num_rows >0){
                                while($mostrar= mysqli_fetch_array($busc)){

                            ?>
                            <tr>
                                <td><?php echo $mostrar['ID_trab']?></td>
                                <td><?php echo $mostrar['nom_trab']?></td>
                                <td><?php echo $mostrar['ape_trab']?></td>
                                <td><?php echo $mostrar['correo']?></td>
                                <td><?php echo $mostrar['contra']?></td>
                                <td><?php echo $mostrar['dni_trab']?></td>
                                <td><?php echo $mostrar['numero_trab']?></td>
                                <td><?php echo $mostrar['cargo_trab']?></td>
                            </tr>
                            <?php 
                            }}
                            ?>
                        </table>
                    </div>
                </div>
            </div><br>
            <div class="col-div-10">
                <div class="box-8">
                    <div class="content-box">
                        <p>Últimos clientes registrados <span>Ver todo</span></p>
                        <br/>
                        <table>
                            <tr>
                                <td class="colorCabecera">ID</td>
                                <td class="colorCabecera">NOMBRE</td>
                                <td class="colorCabecera">APELLIDO</td>
                                <td class="colorCabecera">CORREO</td> 
                                <td class="colorCabecera">CONTRASEÑA</td> 
                                <td class="colorCabecera">DNI</td> 
                                <td class="colorCabecera">NUMERO</td> 
                            </tr>
                            <?php
                                $llenarsql="select c.ID_cli,c.nom_cli,c.ape_cli,c.correo,c.contra,c.DNI_cli,c.cell_cli from clientes c;";
                                $busc= mysqli_query($con, $llenarsql);
                            if($busc -> num_rows >0){
                                while($mostrar= mysqli_fetch_array($busc)){
                            ?>
                            <tr>
                                <td><?php echo $mostrar['ID_cli']?></td>
                                <td><?php echo $mostrar['nom_cli']?></td>
                                <td><?php echo $mostrar['ape_cli']?></td>
                                <td><?php echo $mostrar['correo']?></td>
                                <td><?php echo $mostrar['contra']?></td>
                                <td><?php echo $mostrar['DNI_cli']?></td>
                                <td><?php echo $mostrar['cell_cli']?></td>
                            </tr>
                            <?php
                            }}
                            ?>
                        </table>
                    </div>
                </div>
            </div>      
            <div class="clearfix"></div>  
        </div>
            
            <div data-content id="empleados">
                
            </div>
            
            <div data-content id="proveedores">
                
            </div>
            
            <div data-content id="articulos">
                
            </div>
            
            <div data-content id="clientes">
                
            </div>
            
            <div data-content id="rproductos">
                
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