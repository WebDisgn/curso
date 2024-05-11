<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de dos números</title>
    <link rel="stylesheet" href="suma.css">
</head>
<body>
    <h2>Suma de dos números</h2>
    <form method="post">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1"><br><br>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2"><br><br>
        <input type="submit" value="Sumar">
    </form>
    <a href="index.php">inicio</a>
    <?php
    // Verifica si se han enviado los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtiene los valores de los números del formulario
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        
        // Realiza la suma
        $resultado = $num1 + $num2;

        // Muestra el resultado
        echo "<h3>El resultado de la suma es: $resultado</h3>";
    }
    ?>
</body>
</html>
