<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    $a = $_GET['base'];
    echo "Base: ", $a;

    echo "<br>";
    $b = $_GET['altura'];
    echo "Altura: ", $b;

    echo "<br>";

    echo "Área: ",$a * $b;

    echo "<br>";

    echo "Perímetro: ", $a + $a + $b + $b;
?>


</body> 
</html>