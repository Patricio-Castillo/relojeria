<main>

</main>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilos-productos.css">
    <link rel="stylesheet" href="../estilos/estilos-index.css">
    <link rel="stylesheet" href="../estilos/estilos-catalogo.css">
    <title>Castillo relojes</title>
</head>

<body>
    <!-- HEADER -->
    <header>
        <h1><span class="castillo">Castillo</span> relojes</h1>
        <nav>
            <ul>
                <a href="../index.php">
                    <li>Inicio</li>
                </a>
                <a href="">
                    <li>Categorias</li>
                </a>
                <a href="">
                    <li>Nosotros</li>
                </a>
            </ul>
        </nav>



    </header>


    <!-- MAIN -->
    <main>


        <!--catalogo  -->


        <div id="productos">
            <?php
            require('conexion.php');
            mysqli_select_db($conexion, 'relojeria');
           
            $consulta = mysqli_query($conexion, "SELECT * FROM relojes WHERE sku='".$_GET['id']."'");
            while ($resultados = mysqli_fetch_assoc($consulta)) {
                echo
                    '
            <img src="../' . $resultados['ruta1'] . '" alt="Imagen no disponible" class="img-articulo"></a>
            <div class="desc-fin">
            <h3 class="descripcion-fin">' . $resultados['descripcion'] . '</h3><br>
            <p class="precio">Precio:  <span class="prec-ng2">MXN$' . $resultados['precio'] . '</span></p>
            <p class="genero">Para: ' . $resultados['genero'] . '</p>
            <p class="stock"> Stock: ' . $resultados['stock'] . '</p>
            </div>
            <div class="mas-img">
            <img src="../' . $resultados['ruta1'] . '" alt="n" class="otra-img">
            <img src="../' . $resultados['ruta2'] . '" alt="n" class="otra-img">
            <img src="../' . $resultados['ruta3'] . '" alt="n" class="otra-img">
            <img src="../' . $resultados['ruta4'] . '" alt="n" class="otra-img">
            </div>
            <div></div>';
            }
            ?>
        
        </div>


        <p class="sugerencias">Sugerencias</p>
        <div id="section">
        
            <?php
            require('conexion.php');
            mysqli_select_db($conexion, 'relojeria');
            $consulta = mysqli_query($conexion, "SELECT * FROM relojes");
            while ($resultados = mysqli_fetch_assoc($consulta)) {
                echo
            '<div class="articulo">
            <a href="producto.php?id='.$resultados['sku'].'"><img src="../' . $resultados['ruta1'] . '" alt="Imagen no disponible" class="img-articulo"></a><br>
            <h3 class="descripcion2">' . $resultados['descripcion'] . '</h3>
            <p class="precio">Precio:  <span class="prec-ng">MXN$' . $resultados['precio'] . '</span></p>
            <p class="genero">Para: ' . $resultados['genero'] . '</p>
            <p class="stock"> Stock: ' . $resultados['stock'] . '</p>
            </div>';
            }
            ?>

        </div>
    <script src="../js/producto.js"></script>
    </main>


    <!-- FOOTER -->
    <footer>
        <table>
            <tr>
                <td>
                    <a href="">
                        Fromas de pago
                    </a>
                </td>
                <td>
                    <a href="">
                        Contacto
                    </a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="">
                        Preguntas frecuentes
                    </a>
                </td>
                <td>
                    <a href="">
                        Acerca de
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="">
                        Terminos y condiciones
                    </a>
                </td>
                <td>
                    <a href="">
                        <p></p>
                    </a>
                </td>
            </tr>
        </table>
        <p class="derechos"> Derechos reservados 2023</p>
        </table>
    </footer>
</body>

</html>