<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="edadexacta.css">
    <title>Edad exacta</title>
</head>
<body>
    <br><br><h1>EDAD EXACTA</h1>
    <a href="index.html#section-respuestas"></a>   
    <div class="main-frame-cal">
    <form method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Seleecione su fecha de nacimiento:</label>
            <input type="date" name="f_n" class="form-control" id="exampleFormControlInput1">
        </div>
        <br><button type="submit" name="verificar" class="btn-danger">Enviar</button>
    </form>

    <?php
    if (isset($_POST['verificar'])) {
        $f_n = new DateTime($_POST['f_n']);
       
        $date2 = new DateTime(date("y-m-d"));

        $diff = $f_n->diff($date2);

        $edad_actual = $diff->y;
        $edad_meses = $diff->m;
        $edad_dias = $diff->d;

        echo "años: ".$edad_actual." meses: ".$edad_meses." dias: ".$edad_dias;

    }

    ?>

    </div>
</body>
</html>