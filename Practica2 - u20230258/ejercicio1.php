<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h2>Ingresar tres números:</h2>
    <form method="post">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>

        <label for="num3">Número 3:</label>
        <input type="number" id="num3" name="num3" required><br><br>

        <input type="submit" value="Evaluar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num1 = intval($_POST['num1']);

        $num2 = intval($_POST['num2']);

        $num3 = intval($_POST['num3']);

        $mayor = max($num1, $num2, $num3);

        $menor = min($num1, $num2, $num3);

        echo "<h3>Resultados:</h3>";
        echo "<p>Mayor número: $mayor</p>";
        echo "<p>Menor número: $menor</p>";
    }
    ?>
</body>
</html>