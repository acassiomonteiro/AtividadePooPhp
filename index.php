<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>AtividadePooPhp</title>

</head>
<body>

<form action="index.php" method="post">
    <div>
        <label for="nome">Marca:</label>
        <input type="text" id="marca" />
    </div>
    <div>
        <label for="modelo">Modelo:</label>
        <input type="modelo" id="modelo" />
    </div>
    <div>
        <label for="ano">Ano:</label>
        <input type="ano" id="ano" />
    </div>
    <div>
        <label for="valorDiaria">Valor da diaria:</label>
        <input type="valorDiaria" id="valorDiaria" />
    </div>
    <div>
        <label for="valorDiaria">Valor da diaria:</label>
        <input type="valorDiaria" id="valorDiaria" />
    </div>
    <div>
        <label for="alugado">Alugado?:</label>
        <input type="alugado" id="alugado" />
    </div>

</form>

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