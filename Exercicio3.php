<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$login = $_GET['Login'];

$senha = $_GET['Senha'];

if ($login == "etecia" && $senha == "etecia238"){

    echo "Autenticação  Realizada  Com  Sucesso!";
}
else{
    
    echo "Você Não Tem Permissão de Visualizar Essa Página!";
}

?>

</body>
</html>