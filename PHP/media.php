<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função de Média</title>
</head>

<body>
    <h1>Funções</h1>


    <?php

    function CalcularMediaManu($notaManu)
    {
        $somadasnotas = array_sum($notaManu);
        $ContaDasNotas = count ($notaManu);
        $media = $somadasnotas/ $ContaDasNotas;
        return $media;
    }
    $notaManu =  array(7, 5, 7, 8, 9, 10);
    // $notaManu = $somadasnotas + $Mediaaluno + $ContaDasNotas;
    $media = calcularMediaManu($notaManu);
    echo "A média da Manuelle é " . $media;

    ?>

</body>

</html>