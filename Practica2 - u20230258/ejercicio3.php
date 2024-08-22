<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h2>Tipos de Triángulos.</h2>
    <form method="post">
        <label for="lado1">Lado 1:</label>
        <input type="number" id="lado1" name="lado1" required><br><br>

        <label for="lado2">Lado 2:</label>
        <input type="number" id="lado2" name="lado2" required><br><br>

        <label for="lado3">Lado 3:</label>
        <input type="number" id="lado3" name="lado3" required><br><br>

        <input type="submit" value="Identificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado1 = intval($_POST['lado1']);

        $lado2 = intval($_POST['lado2']);

        $lado3 = intval($_POST['lado3']);

        if (($lado1 + $lado2 > $lado3) && ($lado1 + $lado3 > $lado2) && ($lado2 + $lado3 > $lado1)) {
            if ($lado1 == $lado2 && $lado2 == $lado3) {
                echo "<h3>El triángulo es Equilátero.</h3>";
            } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
                echo "<h3>El triángulo es Isósceles.</h3>";
            } else {
                echo "<h3>El triángulo es Escaleno.</h3>";
            }
        } else {
            echo "<h3>Los valores ingresados no forman un triángulo válido.</h3>";
        }
    }
    ?>
</body>
</html>