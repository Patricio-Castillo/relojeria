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
        <div class="alta">
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

                <label for="categoria">Categoria</label>
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