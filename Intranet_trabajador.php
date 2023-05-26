<?php
session_start();
require "Conectar.php";
$con = fnConnect($msg);
$user_Correo=$_SESSION['correo'];
$sql="SELECT * FROM trabajadores inner join cargo on trabajadores.cargo_trab = cargo.ID_cargo where correo='$user_Correo';";
$respuesta = mysqli_query($con, $sql);
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
if(($_SESSION['correo'])!=''){    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
        <title>Restaurante Pihuicho</title>    
        <link href="CSS-Intranet/EstiloDashb.css" rel="stylesheet" type="text/css"/>
        <link href="CSS-Intranet/EstiloBuscarRegistrar.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="CSS/StyleAdProduct.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body> 
        
        <div id="mySidenav" class="sidenav">
            <p class="logo"><span>R</span>-Pihuicho</p>
            <a href="#" data-target="#Principal" class="icon-a"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp;Principal</a>
            <a href="#" data-target="#Empleados" class="icon-a"><i class="fa fa-users icons"></i>&nbsp;&nbsp;Empleados</a>
            <a href="#" data-target="#Proveedores" class="icon-a"><i class="fa-solid fa-truck-fast icons"></i>&nbsp;&nbsp;Proveedores</a>
            <a href="#" data-target="#Articulos" class="icon-a"><i class="fa fa-tasks icons"></i>&nbsp;&nbsp;Articulos</a>
            <a href="#" data-target="#Clientes" class="icon-a"><i class="fa fa-user icons"></i>&nbsp;&nbsp;Clientes</a>
            <a href="#" data-target='#Rplatos'class="icon-a"><i class="fa fa-shopping-bag icons"></i>&nbsp;&nbsp;Registro Platos</a>
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
                        <p><?php echo $nombretrab ?><span><?php echo $nombrecargo ?></span></p>
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
                        <?php
                         $contandoEmp=$con->query("select * from trabajadores;");
                         $rowEmp= mysqli_num_rows($contandoEmp);
                        ?>
                        <p><?php echo $rowEmp; ?><br/><span>Empleados</span></p>
                        <i class="fa fa-users box-icon"></i>  
                    </div>
                </div>

                <div class="col-div-3">
                    <div class="box">
                        <?php
                        $contandoProv=$con->query("select * from proveedores;");
                        $rowProv= mysqli_num_rows($contandoProv);
                       ?>
                        <p><?php echo $rowProv; ?><br/><span>Proveedores</span></p>
                        <i class="fa-solid fa-truck-fast icons"></i>
                    </div>
                </div>

                <div class="col-div-3">
                    <div class="box">
                        <?php
                        $contandoArt=$con->query("select * from articulo;");
                        $rowart=mysqli_num_rows($contandoArt);
                       ?>
                        <p><?php echo $rowart; ?><br/><span>Articulos</span></p>
                        <i class="fa fa-tasks box-icon"></i>
                    </div>
                </div>
                
                <div class="col-div-3">
                    <div class="box">
                        <?php
                        $contandoPla=$con->query("select * from plato;");
                        $rowpla=mysqli_num_rows($contandoPla);
                        ?>
                        <p><?php echo $rowpla; ?><br/><span>Platos</span></p>
                        <i class="fa fa-shopping-bag box-icon"></i>
                    </div>
                </div>
                
                <div class="clearfix"></div>
                <br/><br/>

                <div class="col-div-10">
                    <div class="box-8">
                        <div class="content-box">
                            <p>Últimos empleados registrados <span><a data-target="#Empleados">Ver todo</a></span></p>
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
                                   $llenarsql="select * from trabajadores order by ID_trab desc limit 10;";
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
                            <p>Últimos clientes registrados <span><a data-target="#Clientes">Ver todo</a></span></p>
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
                                    $llenarsql="select * from clientes order by ID_cli desc limit 10;";
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
                </div><br>                       
                <div class="clearfix"></div>
            </div>
                        
            <div data-content id="empleados">                
                <div class="contenedor-botones">
                    <form action="#" method="POST">
                        <div class="boton-box2">
                            <input  class="light-table-filter" data-table="table_id" placeholder="Buscando...">
                        </div>
                    </form>    
                    <div class="boton-box">
                        <a href="RTrabajador.php" target="blank">Registrar empleado</a>
                    </div>
                </div>
                
                <div class="col-div-12">
                <div class="box-8">
                    <div class="content-box">
                        <p>Empleados registrados</p>
                        <br/>
                        <table class="table table-dark table-striped table-hover table_id" id="tblProductos">
                            <thead>
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
                            </thead>    
                            <tbody>
                            <?php
                            $sqlEmp = "select * from trabajadores inner join cargo on trabajadores.cargo_trab=cargo.ID_cargo;";
                            $buscEmp= mysqli_query($con, $sqlEmp);
                            if($buscEmp -> num_rows >0){
                                while($row= mysqli_fetch_array($buscEmp)){
                            ?> 
                            <tr>
                                <td ><?php echo $row['ID_trab']; ?></td>
                                <td ><?php echo $row['nom_trab']; ?></td>
                                <td ><?php echo $row['ape_trab']; ?></td>
                                <td ><?php echo $row['correo']; ?></td>
                                <td ><?php echo $row['contra']; ?></td>
                                <td ><?php echo $row['dni_trab']; ?></td>
                                <td ><?php echo $row['numero_trab']; ?></td>
                                <td ><?php echo $row['nombre_cargo']; ?></td>
                            </tr>
                            <?php
                                }
                            }
                            ?>
                        </table>  
                     </div>
                </div>
                </div>          
                <div class="clearfix"></div>
                <br>
            </div>
            
            <div data-content id="proveedores">                
                <div class="contenedor-botones">
                    <form action="#" method="POST">
                        <div class="boton-box2">
                            <input  class="light-table-filter" data-table="table_id" placeholder="Buscando...">
                        </div>
                    </form>    
                    <div class="boton-box">
                        <a href="RProveedor.php" target="blank">Registrar proveedor</a>
                    </div>
                </div>
                
                <div class="col-div-12">
                    <div class="box-8">
                        <div class="content-box">
                            <p>Proveedores registrados</p>
                            <br/>
                             <table class="table table-dark table-striped table-hover table_id" id="tblProveedores">
                                <thead>
                                    <tr>
                                        <th class="colorCabecera">ID</th>
                                        <th class="colorCabecera">NOMBRE</th>
                                        <th class="colorCabecera">CORREO</th>
                                        <th class="colorCabecera">RUC</th> 
                                        <th class="colorCabecera">NUMERO</th>
                                        <th class="colorCabecera">DIRECCION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                   $sqlProv="select p.idProv, p.nombreProv,p.correo, p.RUC, p.telefono, p.direccion from proveedores p;";
                                   $busProv= mysqli_query($con, $sqlProv);
                                    if($busProv -> num_rows >0){
                                        while($mostrar2= mysqli_fetch_array($busProv)){
                                ?>
                                <tr>
                                    <td><?php echo $mostrar2['idProv']?></td>
                                    <td><?php echo $mostrar2['nombreProv']?></td>
                                    <td><?php echo $mostrar2['correo']?></td>
                                    <td><?php echo $mostrar2['RUC']?></td>
                                    <td><?php echo $mostrar2['telefono']?></td>
                                    <td><?php echo $mostrar2['direccion']?></td>
                                </tr>
                                <?php 
                                    }   }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <br>
            </div>
            
            <div data-content id="articulos">
                <div class="contenedor-botones">
                    <form action="#" method="POST">
                        <div class="boton-box2">
                            <input  class="light-table-filter" data-table="table_id" placeholder="Buscando...">
                        </div>
                    </form>   
                    <div class="boton-box">
                        <a href="RArticulos.php" target="blank">Registrar articulo</a>
                    </div>
                </div>
                <div class="col-div-12">
                    <div class="box-8">
                        <div class="content-box">
                            <p>Artículos registrados</p>
                            <br/>
                             <table class="table table-dark table-striped table-hover table_id" id="tblProveedores">
                                <thead>
                                    <tr>
                                        <th class="colorCabecera">ID</th>
                                        <th class="colorCabecera">NOMBRE</th>
                                        <th class="colorCabecera">CANTIDAD</th>
                                        <th class="colorCabecera">CATEGORIA DE P.</th>
                                        <th class="colorCabecera">ENCARGADO</th>
                                        <th class="colorCabecera">COSTO (S/.)</th>
                                        <th class="colorCabecera">PROVEEDOR</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                   $sqlArt="select a.ID_Articulo, a.nom_articulo, a.cantidad, a.Cproducto, a.Encargado, a.precioA, a.Proveedor, a.CProducto 
                                                from Articulo a;";
                                   $buscArt= mysqli_query($con, $sqlArt);
                                    if($buscArt -> num_rows >0){
                                        while($mostrar= mysqli_fetch_array($buscArt)){
                                ?>
                                <tr>
                                    <td ><?php echo $mostrar['ID_Articulo'] ?></td>
                                    <td ><?php echo $mostrar['nom_articulo'] ?></td>
                                    <td ><?php echo $mostrar['cantidad'] ?></td>
                                    <td ><?php echo $mostrar['Cproducto'] ?></td>
                                    <td ><?php echo $mostrar['Encargado'] ?></td>
                                    <td ><?php echo $mostrar['precioA'] ?></td>
                                    <td ><?php echo $mostrar['Proveedor'] ?></td>
                                </tr>
                                <?php 
                                    }   }
                                ?>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <br>
            </div>
            
            <div data-content id="clientes">
                <div class="contenedor-botones">
                    <form action="#" method="POST">
                        <div class="boton-box2">
                            <input  class="light-table-filter" data-table="table_id" placeholder="Buscando...">
                        </div>
                    </form>   
                    <div class="boton-box">
                        <a href="RClientes.php" target="blank">Registrar cliente</a>
                    </div>
                </div>
                <div class="col-div-12">
                    <div class="box-8">
                        <div class="content-box">
                            <p>Clientes registrados</p>
                            <table class="table table-dark table-striped table-hover table_id" id="tblClientes">
                                <thead>
                                    <tr>
                                        <th class="colorCabecera">ID</th>
                                        <th class="colorCabecera">NOMBRE</th>
                                        <th class="colorCabecera">APELLIDO</th>
                                        <th class="colorCabecera">CORREO</th> 
                                        <th class="colorCabecera">CONTRASEÑA</th> 
                                        <th class="colorCabecera">DNI</th> 
                                        <th class="colorCabecera">NUMERO</th> 
                                    </tr>
                                </thead>  
                                <?php
                                    $sqlCli="select c.ID_cli,c.nom_cli,c.ape_cli,c.correo,c.contra,c.DNI_cli,c.cell_cli from clientes c;";
                                    $buscCli= mysqli_query($con, $sqlCli);
                                    if($buscCli -> num_rows >0){
                                        while($mostrar= mysqli_fetch_array($buscCli)){
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
                                    }   }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>            
                <div class="clearfix"></div>
                <br>
            </div>
            
       <div data-content id="rplatos">
            <div class="contenedor-botones">
                    <form action="#" method="POST">
                        <div class="boton-box2">
                            <input  class="light-table-filter" data-table="table_id" placeholder="Buscando...">
                        </div>
                    </form>   
                    <div class="boton-box">
                        <a href="RPlatos.php" target="blank">Registrar plato</a>
                    </div>
                </div>
                <div class="col-div-12">
                    <div class="box-8">
                        <div class="content-box">
                            <p>Platos registrados</p>
                            <table class="table table-dark table-striped table-hover table_id" id="tblClientes">
                                <thead>
                                    <tr>
                                        <th class="colorCabecera">ID</th>
                                        <th class="colorCabecera">NOMBRE</th>
                                        <th class="colorCabecera">DESCRIPCION</th>
                                        <th class="colorCabecera">PRECIO</th>
                                        <th class="colorCabecera">IMAGEN</th> 
                                    </tr>
                                </thead>  
                                <?php
                                    $sqlPla="select p.ID_plato,p.nom_plato,p.descrip_plato,p.precioP,p.imagen from plato p;";
                                    $buscPla= mysqli_query($con, $sqlPla);
                                    if($buscPla -> num_rows >0){
                                        while($mostrar= mysqli_fetch_array($buscPla)){
                                ?>
                                <tr>
                                    <td><?php echo $mostrar['ID_plato']?></td>
                                    <td><?php echo $mostrar['nom_plato']?></td>
                                    <td><?php echo $mostrar['descrip_plato']?></td>   
                                    <td><?php echo $mostrar['precioP']?></td>
                                    <td><img height="50px" width="80px" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']); ?>"/></td>
                                </tr>
                                <?php
                                    }   }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>            
                <div class="clearfix"></div>
                <br>
        </div>
            
        </main>
        <script src="js/RegAdPlato.js" type="text/javascript"></script>
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
        <script src="js/buscador.js" type="text/javascript"></script>
    </body>   
</html>
<?php 
    }else {
        header("location:InicioS.php");
    }
?>