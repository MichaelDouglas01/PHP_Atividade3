<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $peso = $_GET['peso'];

    $altura = $_GET['altura'];
    
    $resultado = round($peso / ($altura * $altura),2);

    echo "O seu IMC é: ", $resultado; 
    echo "<br><br>";

    if ($resultado > 25 ){
        echo "Você está acima do peso!";
    }
    
    else if ($resultado <= 25){
        echo "Você está saudável!";
    }


    ?>
    
</body>
</html>