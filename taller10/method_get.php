<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="datospersonales.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- CDN Bootstrap -->
    <title>Datos personales</title>
</head>
<body>
    <br><br><br><br><h1 style="text-align: center;">Datos personales</h1><br><br>
    <a href="index.html#section-respuestas"></a>
    <div class="main-frame-cal">
    <form action="" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Nombre">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Apellido">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Cédula</label>
            <input type="text" name="cc" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Cédula"><br>
        </div>
        <button class="btn btn-primary" type="reset">Limpiar</button>
        <button type="submit" name="verificar" class="btn btn-outline-info">Evíar</button>
    </form><br><br>

    <?php
    if (isset($_POST['verificar'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cc'];

        echo "Nombre: ".$nombre."<br>";
        echo "Apellido: ".$apellido."<br>";
        echo "Cédula: ".$cedula."<br>";
    }
    ?>

    </div>
</body>
</html>