<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>AtividadePooPhp</title>

</head>
<body>

<?php

    require_once 'Veiculo.php';
    $c1 = new veiculo;
    $c1->marca = "bmw";
    $c1->modelo = "i7";
    $c1->ano = "2019";
    $c1->valorDiaria = "R$220,00"
    $c1->alugado = "sim"

    var_dump($c1);

?>

</body>
</html>