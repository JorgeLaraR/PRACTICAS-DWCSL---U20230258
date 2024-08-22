<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h2>Bonos de empleados.</h2>
    <form method="post">
        <label for="nombre">Nombre del empleado:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="anos">Años trabajando:</label>
        <input type="number" id="anos" name="anos" required><br><br>

        <input type="submit" value="Calcular Bono">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nombre = htmlspecialchars($_POST['nombre']);

        $anos = intval($_POST['anos']);

        if ($anos >= 10) {
            $bono = 2000.00;
        } elseif ($anos >= 5) {
            $bono = 1000.00;
        } elseif ($anos >= 3) {
            $bono = 700.00;
        } elseif ($anos >= 2) {
            $bono = 500.00;
        } else {
            $bono = 0.00;
        }

        echo "<h3>Resultados:</h3>";
        echo "<p>Nombre del empleado: $nombre</p>";
        echo "<p>Años trabajando: $anos</p>";
        echo "<p>Bono correspondiente: $" . number_format($bono, 2) . "</p>";
    }
    ?>
</body>
</html>