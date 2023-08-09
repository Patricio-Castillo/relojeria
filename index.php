<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilos-index.css">
    <title>Castillo relojes</title>
</head>

<body>
    <!-- HEADER -->
    <header>
        <h1><span class="castillo">Castillo</span> relojes</h1>
        <nav>
            <ul>
                <a href="php/catalogo.php">
                    <li>Catalogo</li>
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
        <div class="banner">
            <div class="banner-sup">

            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veritatis vero qui aliquid molestiae?
                Commodi ipsa, vel fugiat magni amet enim omnis, magnam voluptas assumenda cupiditate repudiandae sequi
                maiores quisquam, quos eius temporibus dolor fuga nesciunt id veniam cumque consectetur. Quidem dolor
                quod quia tempore, ullam quam cum deleniti sequi.
            </p>
            <a href="php/catalogo.php" class="ver-catalogo ver2">Ver catálogo</a>

        </div>

        <!-- MAS VENDIDOS -->

        <p class="sugerencias">Mas vendidos</p>


        <div class="mas-vendidos">
            <?php
            require('php/conexion.php');
            mysqli_select_db($conexion, 'relojeria');
            $relojes = mysqli_query($conexion, "SELECT * FROM relojes LIMIT 3");
            while ($resultados = mysqli_fetch_assoc($relojes)) {
                echo
                    '<div class="articulo">
                    <a href="php/producto.php?id='.$resultados['sku'].'"><img src="' . $resultados['ruta1'] . '" alt="Imagen no disponible" class="img-articulo"></a>
<br>
                    <h3 class="descripcion">' . $resultados['descripcion'] . '</h3>
                    <p class="genero">Para: ' . $resultados['genero'] . '</p>
                    <p class="precio">Precio:  <span class="prec-ng">MXN$' . $resultados['precio'] . '</span></p>
                    <p class="stock"> Stock: ' . $resultados['stock'] . '</p>
                    </div>';

            }
            ?>







        </div>

        <a href="php/catalogo.php" class="ver-catalogo">Mostrar todo</a>



        <!--SUGERENCIAS  -->
        <p class="sugerencias">Sugerencias</p>

        <section>

            <div class="sugerido">

                <img src="imagenes/Relojes-de-cuarzo-de-pulsera-de-lujo-para-mujer-reloj-magn-tico-para-mujer-vestido-deportivo.jpg_.webp"
                    alt="imagen no disponible" class="img-sug">

            </div>

            <div class="sugerido">
                <div class="des-sug">
                    <h3 class="nombre">Relojes de cuarzo de pulsera de lujo para mujer, reloj magnético, vestido
                        deportivo para mujer, reloj de pulsera de esfera rosa, reloj femenino</h3><br>
                    <p class="precio"><span class="prec-ng">Precio MXN $199</span></p>
                </div>
            </div>

            <div class="sugerido">
                <div class="des-sug">
                    <h3 class="nombre">Reloj de pulsera de cuarzo para hombre y mujer, cronógrafo de lujo, de acero
                        inoxidable, para negocios</h3><br>
                    <p class="precio"><span class="prec-ng">Precio MXN $250</span></p>
                </div>
            </div>

            <div class="sugerido">
                <img src="imagenes/Reloj-de-pulsera-de-cuarzo-para-hombre-y-mujer-cron-grafo-de-lujo-de-acero-inoxidable.jpg_.webp"
                    alt="imagen no disponible" class="img-sug">
            </div>
        </section>
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