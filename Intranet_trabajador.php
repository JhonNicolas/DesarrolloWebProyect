<?php
session_start();
require "Conectar.php";
$con = fnConnect($msg);
$user_Correo=$_SESSION['correo'];
$sql="SELECT * FROM trabajadores inner join cargo on trabajadores.cargo_trab = cargo.ID_cargo where correo='$user_Correo';";
$numeracion=0; //contador de registros
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
        <link href="CSS-Intranet/EstiloDashboard.css" rel="stylesheet" type="text/css"/>
        <link href="CSS-Intranet/EstiloBuscarRegistra.css" rel="stylesheet" type="text/css"/>
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
            <a href="#" data-target='#RProductos'class="icon-a"><i class="fa fa-shopping-bag icons"></i>&nbsp;&nbsp;Registro Platos</a>
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
                    $numeracion++;
                ?>
                    <p><?php say($numeracion); ?><br/><span>Trabajadores</span></p>
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
                
                <div class="contenedor-botones">
                    <form action="#" method="POST">
                        <div class="boton-box2">
                            <input type="text" name="busqueda" placeholder="Búsqueda">
                            <input type="submit" name="enviar" value="Buscar">
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
                            <?php
                            if(!isset($_POST['enviar'])){
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
                                }   }
                            }else if(isset($_POST['enviar'])){
                                $buscarEmpleado=$_POST['busqueda'];
                                $sqlbuscar=$con->query("SELECT * FROM trabajadores WHERE ID_trab LIKE '%$buscarEmpleado%' OR nom_trab LIKE '%$buscarEmpleado%' OR ape_trab LIKE '%$buscarEmpleado%' "
                                        . "OR correo LIKE '%$buscarEmpleado%' OR contra LIKE '%$buscarEmpleado%' OR dni_trab LIKE '%$buscarEmpleado%' OR numero_trab LIKE '%$buscarEmpleado%' OR cargo_trab LIKE '%$buscarEmpleado%' ");
                                while($row = $sqlbuscar->fetch_array()){
                            ?>
                            <tr>
                                <td><?php echo $row['ID_trab']?></td>
                                <td><?php echo $row['nom_trab']?></td>
                                <td><?php echo $row['ape_trab']?></td>
                                <td><?php echo $row['correo']?></td>
                                <td><?php echo $row['contra']?></td>
                                <td><?php echo $row['dni_trab']?></td>
                                <td><?php echo $row['numero_trab']?></td>
                                <td><?php echo $row['cargo_trab']?></td>
                            </tr>
                            <?php 
                                }   }
                            ?>
                        </table>  
                     </div>
                </div>
                </div>          
                <div class="clearfix"></div>
            </div>
            
            <div data-content id="proveedores">
                
                <div class="contenedor-botones">
                    <form action="#" method="POST">
                        <div class="boton-box2">
                            <input type="text" name="busqueda2" placeholder="Búsqueda">
                            <input type="submit" name="enviar2" value="Buscar">
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
                            <?php
                            if(!isset($_POST['enviar2'])){
                               $llenarsql2="select p.idProv, p.nombreProv,p.correo, p.RUC, p.telefono, p.direccion from proveedores p;";
                               $busc2= mysqli_query($con, $llenarsql2);

                            if($busc2 -> num_rows >0){
                                while($mostrar2= mysqli_fetch_array($busc2)){
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
                            }else 
                                if(isset($_POST['enviar2'])){
                                $buscarProveedor=$_POST['busqueda2'];
                                $sqlbuscar=$con->query("SELECT * FROM proveedores WHERE idProv LIKE '%$buscarProveedor%' OR nombreProv LIKE '%$buscarProveedor%' OR correo LIKE '%$buscarProveedor%'"
                                        ."OR RUC LIKE '%$buscarProveedor%' OR telefono LIKE '%$buscarProveedor%' OR direccion LIKE '%$buscarProveedor%' ");
                                while($row = $sqlbuscar->fetch_array()){
                            ?>
                            <tr>
                                <td><?php echo $row['idProv']?></td>
                                <td><?php echo $row['nombreProv']?></td>
                                <td><?php echo $row['correo']?></td>
                                <td><?php echo $row['RUC']?></td>
                                <td><?php echo $row['telefono']?></td>
                                <td><?php echo $row['direccion']?></td>
                            </tr>
                            <?php 
                            }   } 
                            ?>
                        </table>
                        
                    </div>
                </div>
                </div>
                <div class="clearfix"></div>
            </div>
            
            <div data-content id="articulos">
                <div class="contenedor-botones">
                    <form action="#" method="POST">
                        <div class="boton-box2">
                            <input type="text" name="busqueda2" placeholder="Búsqueda">
                            <input type="submit" name="enviar2" value="Buscar">
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
                            <?php
                            
                               $llenarsql="select a.ID_Articulo, a.nom_articulo, a.cantidad, a.Cproducto, a.Encargado, a.precioA, a.Proveedor, a.CProducto 
                                            from Articulo a;";
                               $busc= mysqli_query($con, $llenarsql);

                            if($busc -> num_rows >0){
                                while($mostrar= mysqli_fetch_array($busc)){

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
                            }}
                            ?>
                        </table>
                        
                    </div>
                </div>
                </div>
                <div class="clearfix"></div>
            </div>
            
            <div data-content id="clientes">
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
            
       <div data-content id="rproductos">
            <h1>REGISTRO PLATO</h1>
            <div class="contenedor">
                <!-- Añadir -->
                <div class="añadir">
                    <h2>Añadir</h2>
                    <form>
                        <label>Nombre del producto</label>
                        <input type="text" id="productoAñadir" name="nombreDelProducto">

                        <label>Valor del producto</label>
                        <input type="number" id="valorAñadir">

                        <label>Existencia</label>
                        <input type="number" id="existenciaAñadir">

                        <label>Url Imagen</label>
                        <input type="text" id="ImagenAñadir">

                        <input class="button" type="button" id="botonAñadir" value="Añadir">
                    </form>
                </div>
                <!-- Editar -->
                <div class="editar">
                    <h2>Editar</h2>
                    <form>
                        <label>Nombre del producto</label>
                        <select id="productoEditar">
                            <option value="">---</option>
                        </select>

                        <label>Atributo</label>
                        <select id="atributoEditar">
                            <option value="">---</option>
                        </select>

                        <label>Nuevo valor</label>
                        <input type="text" id="nuevoAtributo">

                        <input class="button" type="button" id="botonEditar" value="Editar">
                    </form>
                </div>

                <!-- Eliminar -->
                <div class="eliminar">
                    <h2>Eliminar</h2>

                    <form>
                        <label>Nombre del producto</label>
                        <select id="productoEliminar">
                            <option value="">---</option>
                        </select>
                        <input class="button" type="button" id="botonEliminar" value="Eliminar">
                    </form>
                </div>
            </div>

            <!-- Mostrar el mensaje -->
            <div class="contenedorMensaje">
                <div id="mensaje"></div>
            </div>

            <!-- Productos -->
            <div class="contenedorProductos">
                <h2>Platos</h2>
                <div class="mostrarProductos" id="mostrarProductos">

                </div>
            </div>
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
        
    </body>
</html>
<?php 
    }else {
        header("location:InicioS.php");
    }
?>