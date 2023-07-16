<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- CDN Bootstrap -->
    <title>Calculadora</title>
</head>

<body>
    <h1><br>Calculadora<br></h1>
    <h2><a href="index.html#section-respuestas"></a></h2>

    <div class="main-frame-cal">
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Número 1:</label>
                <input type="number" name="n1" class="form-control" id="exampleFormControlInput1" placeholder="Digite Número 1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Número 2:</label>
                <input type="number" name="n2" class="form-control" id="exampleFormControlInput2" placeholder="Digite Número 2">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Seleccione la operación:</label>
                <select class="form-control" name="tipo" id="exampleFormControlSelect1">
                    <option value="1">Suma</option>
                    <option value="2">Resta</option>
                    <option value="3">Multiplicación</option>
                    <option value="4">División</option>
                </select>
            </div>
            <br><button type="submit" name="resultado" class="btn_btn-outline-info">Resultado</button><br><br>
        </form>
        <?php
        if (isset($_POST['resultado'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $tipo = $_POST['tipo'];

            switch ($tipo) {
                case '1':
                    $result = $n1 + $n2;
                    break;
                case '2':
                    $result = $n1 - $n2;
                    break;
                case '3':
                    $result = $n1 * $n2;
                    break;
                case '4':
                    $result = $n1 / $n2;
                    break;
            }

            echo "<h2>".$result ."</h2>";
        }

        ?>

    </div>
</body>

</html>