<?php
session_start();
require "Conectar.php";
$con = fnConnect($msg);
$user_Correo=$_SESSIONCLI['correo'];
$sql="SELECT * FROM trabajadores inner join cargo on trabajadores.cargo_trab = cargo.ID_cargo where correo='$user_Correo';";
$respuesta = mysqli_query($con, $sql);
 $numeracion=0; //contador de registros
    while($data=$respuesta->fetch_assoc()){
        $idtrab = $data['ID_trab'];
        $codadmin = $data['COD_admin'];
        $nombretrab = $data['nom_trab'];
        $apetrab = $data['ape_trab'];
        $correotrab = $data['correo'];
        $contratrab = $data['contra'];
        $dnitrab = $data['dni_trab'];
        $numerotrab = $data['numero_trab'];
        $cargotrab = $data['cargo_trab'];
        $idcargo = $data['ID_cargo'];
        $nombrecargo = $data['nombre_cargo'];
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
            <a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i>&nbsp;&nbsp;Tasks</a>
        </div>
        <header   
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
                        <p><?php echo $nombretrab ?><span><?php echo $nombrecargo ?></span></p>
                    </div>
                 </div>
                <div class="clearfix"></div>
            </div>
        </header>    
        <main>    
        <div class="container-fluid">
        <input class="form-control me-2 light-table-filter" data-table="table_id" placeholder="Buscar Cliente"><br>  
        </div><br>
        
            <div class="col-div-12">
                <div class="box-8">
                    <div class="content-box">
                        <p>Clientes registrados <span>Ver todo</span></p>
                        <table class="table table-dark table-striped table-hover table_id" id="tblClientes">
                            <thead>
                                <tr>
                                    <td class="colorCabecera">ID</td>
                                    <td class="colorCabecera">NOMBRE</td>
                                    <td class="colorCabecera">APELLIDO</td>
                                    <td class="colorCabecera">CORREO</td> 
                                    <td class="colorCabecera">CONTRASEÑA</td> 
                                    <td class="colorCabecera">DNI</td> 
                                    <td class="colorCabecera">NUMERO</td> 
                                </tr>
                            </thead>  
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
        <script src="js/buscador.js" type="text/javascript"></script>
    </body>
</html>