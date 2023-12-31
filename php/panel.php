<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilos-panel.css">
    <title>Castillo relojes</title>
</head>

<body>
    <!-- HEADER -->
    <header>
        <nav>
            <ul>
                <a href="">
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
        <img src="" alt="">
        <h1><span class="castillo">Castillo</span> relojes</h1>
    </header>

    <!-- MAIN -->
    <main>
        <!-- ALTA -->
        <div class="alta">
            <form action="#" method="POST" enctype="multipart/form-data">
                <input type="file" name="img1" id="img1"><br>
                <input type="file" name="img2" id="img2"><br>
                <input type="file" name="img3" id="img3"><br>
                <input type="file" name="img4" id="img4"><br>


                <input type="text" name="sku" id="sku" placeholder="Sku"><br>


                <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion"><br>


                <input type="text" name="precio" id="precio" placeholder="Precio"><br>


                <select name="genero" id="genero">
                    <option value="Caballero">Caballero</option>
                    <option value="Dama">Dama</option>
                </select><br>


                <select name="categoria" id="categoria">
                    <option value="relojes">Relojes</option>
                    <option value="pulseras">Pulseras</option>
                    <option value="collares">Collares</option>
                </select><br>


                <input type="text" name="stock" id="stock" placeholder="Stock"><br>

                <input type="submit" value="subir" name="subir">
            </form>
        </div>

        <?php
        if (isset($_POST["subir"])) {
            $nombre = $_FILES['img1']['name'];
            if ($nombre) {


                $nombre2 = $_FILES['img2']['name'];
                $nombre3 = $_FILES['img3']['name'];
                $nombre4 = $_FILES['img4']['name'];
                $sku = $_POST['sku'];
                $descripcion = $_POST['descripcion'];
                $precio = $_POST['precio'];
                $genero = $_POST['genero'];
                $categoria = $_POST['categoria'];
                $stock = $_POST['stock'];
                $tmp1 = $_FILES['img1']['tmp_name'];
                $tmp2 = $_FILES['img2']['tmp_name'];
                $tmp3 = $_FILES['img3']['tmp_name'];
                $tmp4 = $_FILES['img4']['tmp_name'];
                $carpeta="imagenes/";    
            
                $rutas=array($carpeta.$nombre,$carpeta.$nombre2,$carpeta.$nombre3,$carpeta.$nombre4,);
                $urls = array($tmp1, $tmp2, $tmp3, $tmp4);
                $nombres = array($nombre, $nombre2, $nombre3, $nombre4);
                

                $comprobar = strlen($sku) * strlen($descripcion) * strlen($precio) * strlen($genero) * strlen($categoria) * strlen($stock);

                require('conexion.php');
                mysqli_select_db($conexion, 'relojeria');

                if ($comprobar > 0) {
                    if (!file_exists('../imagenes')) {
                        mkdir('../imagenes', 0777, true);
                        for ($i = 0; $i < count($urls); $i++) {
                            if (move_uploaded_file($urls[$i], '../imagenes/' . $nombres[$i])) {
                            }
                            $subir = mysqli_query($conexion, "INSERT INTO relojes (sku, descripcion, precio, genero, categoria, stock, ruta1, ruta2, ruta3, ruta4 )VALUES('$sku','$descripcion',$precio,'$genero','$categoria', $stock, '$rutas[0]','$rutas[1]','$rutas[2]','$rutas[3]')");
                            echo "carga exitosa";
                        }

                    } else if (file_exists('../imagenes')) {
                            for ($i = 0; $i < count($urls); $i++) {
                            if (move_uploaded_file($urls[$i], '../imagenes/' . $nombres[$i])) {
                                 }
                            }

                            $subir = mysqli_query($conexion, "INSERT INTO relojes (sku, descripcion, precio, genero, categoria, stock, ruta1, ruta2, ruta3, ruta4 )VALUES('$sku','$descripcion',$precio,'$genero','$categoria', $stock, '$rutas[0]','$rutas[1]','$rutas[2]','$rutas[3]')");
                            echo "carga exitosa";
                    }

                } else {
                    echo '
                    <script>
                        alert("favor de llenar todos los campos");
                    </script>';
                }

            } else {
                echo "favor de subir la primera imagen";
            }
        }
        ?>












        <!-- EDITAR -->
        <div class="edit">
            <form action="#" method="post" enctype="multipart/form-data">
                <input type="file" name="img1" id="img1"><br>
                <input type="file" name="img2" id="img2"><br>
                <input type="file" name="img3" id="img3"><br>
                <input type="file" name="img4" id="img4"><br>

                <label for="sku">Sku </label>
                <input type="text" name="sku" id="sku"><br>

                <label for="descripcion">Descripción </label>
                <input type="text" name="descripcion" id="descripcion"><br>

                <label for="precio">Precio </label>
                <input type="text" name="precio" id="precio"><br>

                <label for="genero">Genero </label>
                <select name="genero" id="genero">
                    <option value="Caballero">Caballero</option>
                    <option value="Dama">Dama</option>
                </select><br>

                <label for="categoria">Categoria </label>
                <select name="categoria" id="categoria">
                    <option value="relojes">relojes</option>
                    <option value="pulseras">pulseras</option>
                    <option value="collares">collares</option>
                </select><br>

                <label for="stock">Stock </label>
                <input type="text" name="stock" id="stock"><br>

                <input type="submit" value="subir">
            </form>
        </div>
        <!-- BAJA -->
        <div class="baja">

        </div>
    </main>


    <!-- FOOTER -->
    <footer>
        <table>
            <td>
                <tr>
                    <a href="">
                        <p>Fromas de pago</p>
                    </a>
                </tr>
                <tr>
                    <a href="">
                        <p>Preguntas frecuentes</p>
                    </a>
                </tr>
                <tr>
                    <a href="">
                        <p></p>
                    </a>
                </tr>
                <tr>
                    <a href="">
                        <p></p>
                    </a>
                </tr>
            </td>
            <td>
                <tr>
                    <a href="">
                        <p></p>
                    </a>
                </tr>
                <tr>
                    <a href="">
                        <p>Contacto</p>
                    </a>
                </tr>
                <tr>
                    <a href="">
                        <p>Acerca de</p>
                    </a>
                </tr>
                <tr>
                    <a href="">
                        <p>Terminos y condiciones</p>
                    </a>
                </tr>
            </td>

            <p class="derechos"> Derechos reservados 2023</p>
        </table>
    </footer>
</body>

</html>