<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="../styles/bandera.svg" type="image/svg" />
        <title>KC suit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">
    </head>


    <body>

<?php


    include_once '../Modelo/dolar.inc.php';
    $pagina ;
?>

        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    KC Suit
                </a>
                <li class="navbar-brand"><i class="fas fa-dollar-sign"></i> Precio: <?php echo $precio_dolar['valor']?>
                </li>
            </div>
        </nav>
        <br>