<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina contactos</h1>

    <h2>Formulario de Contacto</h2>
    <form method="post" action="enviar_formulario.php">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="email">Correo Electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
    <a href="index.php">inicio</a>
</body>
</html>