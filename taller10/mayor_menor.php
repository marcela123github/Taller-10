<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- CDN Bootstrap -->
    <link rel="stylesheet" href="calculadora.css">
    <title>Mayor o menor de edad</title>
</head>
<body>

   <br><br><h1>CALCULADORA DE EDAD</h1>

<a href="index.html#section-respuestas">
        <img class="home" src="img/hogar.png" alt="">
    </a>
    <div class="main-frame-cal">
    <form action="" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Edad</label>
            <input type="number" name="edad" class="form-control" id="exampleFormControlInput1" placeholder="Digite su edad">
        </div><br>
        <button type="submit" name="verificar" class="btn_btn-outline-info">Operar</button>
    </form>

    <?php

    $edad = 0;
    
    if (isset($_POST['verificar'])) {
        $edad = $_POST['edad'];

        if ($edad >= 18) {
            echo "<h1>Es mayor de edad</h1>";
        }
        else if (18 > $edad && 0 < $edad) {
            echo "<h1>Es menor de edad</h1>";
        }else{
            echo "<h1>No valido</h1>";
        }

    }

    ?>

    </div>
</body>
</html>