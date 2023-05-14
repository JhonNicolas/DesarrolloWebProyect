<?php
session_start();
require "Conectar.php";
$con = fnConnect($msg);
$userCorreo=$_SESSIONCLI['correo'];
$sqlcliente="SELECT * FROM clientes where correo='$userCorreo';";
$respu = mysqli_query($con, $sqlcliente);
    while($datos=$respu->fetch_assoc()){
        $idcli = $data['ID_cli'];
        $codadmin = $data['COD_admin'];
        $nombrecli = $data['nom_cli'];
        $apecli = $data['ape_cli'];
        $correocli = $data['correo'];
        $contracli = $data['contra'];
        $dnicli = $data['DNI_cli'];
        $numerocli = $data['cell_cli'];
    }
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
            <a href="Intranet_trabajador.php" class="icon-a"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp;Principal</a>
            <a href="Intranet_trab_btn_empleados.php" class="icon-a"><i class="fa fa-users icons"></i>&nbsp;&nbsp;Empleados</a>
            <a href="#" class="icon-a"><i class="fa-solid fa-truck-fast icons"></i>&nbsp;&nbsp;Proveedores</a>
            <a href="#" class="icon-a"><i class="fa fa-shopping-bag icons"></i>&nbsp;&nbsp;Orders</a>
            <a href="#" class="icon-a"><i class="fa fa-tasks icons"></i>&nbsp;&nbsp;Inventory</a>
            <a href="Intranet_trab_btn_clientes.php" class="icon-a"><i class="fa fa-user icons"></i>&nbsp;&nbsp;Clientes</a>
            <a href="#" name="cerrar" class="icon-a"><i class="fa-solid fa-right-from-bracket icons"></i>&nbsp;&nbsp;Tasks</a>
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
        </header>    
        <main>    
            <div class="col-div-3">
                <div class="box">
                    <p>67<br/><span>Customers</span></p>
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
            
            <div class="col-div-8">
                <div class="box-8">
                    <div class="content-box">
                        <p>Últimos empleados registrados <span>Ver todo</span></p>
                        <br/>
                        <table>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Cargo</th>
                            </tr>
                            <tr>
                                <td>Alfreds Futterkiste</td>
                                <td>Alfreds</td>
                                <td>Futterkiste</td>
                            </tr>
                            <tr>
                                <td>Alfreds Futterkiste</td>
                                <td>Alfreds</td>
                                <td>Futterkiste</td>
                            </tr>
                            <tr>
                                <td>Alfreds Futterkiste</td>
                                <td>Alfreds</td>
                                <td>Futterkiste</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-div-8">
                <div class="box-8">
                    <div class="content-box">
                        <p>Últimos clientes registrados <span>Ver todo</span></p>
                        <br/>
                        <table>
                            <tr>
                                <th>Company</th>
                                <th>Contact</th>
                                <th>Country</th>
                            </tr>
                            <tr>
                                <td>Alfreds Futterkiste</td>
                                <td>Alfreds</td>
                                <td>Futterkiste</td>
                            </tr>
                            <tr>
                                <td>Alfreds Futterkiste</td>
                                <td>Alfreds</td>
                                <td>Futterkiste</td>
                            </tr>
                            <tr>
                                <td>Alfreds Futterkiste</td>
                                <td>Alfreds</td>
                                <td>Futterkiste</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            
<!--        <div class="col-div-4">
                <div class="box-4">
                    <div class="content-box">
                        <p>Total Sale <span>View All</span></p>
                        <div class="circle-wrap">
                            <div class="circle">
                                <div class="mask full">
                                    <div class="fill"></div>
                                </div>
                                <div class="mask half">
                                    <div class="fill"></div>
                                </div>
                                <div class="inside-circle">70%</div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>      
-->  
            
            <div class="clearfix"></div>
            
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
        
    </body>
</html>