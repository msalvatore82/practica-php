<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en PHP</title>
</head>
<body>
    <h1>Formulario en PHP</h1>
    <form method="POST" action="recibir.php">
    <p>
        <label for="nombre" aria-placeholder="nombre" >NOMBRE</label>
        <input type="text" name="nombre" />
    </p>
    <p>
        <label for="apellido">APELIIDO </label>
        <input type="text" name="apellido"/>
    </p>
        <input type="submit" value="enviar datos">
    </form>
</body>
</html>