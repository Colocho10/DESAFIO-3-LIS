<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximumscale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Venta de autos</title>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Autos disponibles</h1>
            </header>
            <div class="row">
                <form action="" method="post">
                    <label for="marca">Selecciona una marca:</label>
                    <select name="marca" id="marca">
                        <option value="Peugeot">Peugeot</option>
                        <option value="Renault">Renault</option>
                        <option value="BMW">BMW</option>
                        <option value="Toyota">Toyota</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Mostrar información</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $marcaSeleccionada = $_POST["marca"];
                    function elautoloader($classname)
                    {
                        include_once("class/" . $classname . ".class.php");
                    }
                    spl_autoload_register("elautoloader");
                    $movil[0] = new auto("Peugeot", "307", "Gris", "img/peugeot.jpg");
                    $movil[1] = new auto("Renault", "Clio", "Rojo", "img/renaultclio.jpg");
                    $movil[2] = new auto("BMW", "X3", "Negro", "img/bmwserie6.jpg");
                    $movil[3] = new auto("Toyota", "Avalon", "Blanco", "img/toyota.jpg");
                    $movil[4] = new auto();

                    foreach ($movil as $auto) {
                        if ($auto->marca === $marcaSeleccionada) {
                            $auto->mostrar();
                        }
                    }
                }
                ?>
            </div>
        </div>
    </body>
</html>