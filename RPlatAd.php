<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link href="CSS/StyleAdProduc.css" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    
</head>

<body>
    <header id="header">
        <h1>REGISTRO PLATO</h1>
    </header>

    <main>
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
            <h2>Productos</h2>
            <div class="mostrarProductos" id="mostrarProductos">
                
            </div>
        </div>
        </div>
    </main>
    <script src="js/RegAdPlat.js" type="text/javascript"></script>
</body>

</html>