<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1>Funções</h1>
 
<?php

function calcularPerimetroRetangulo($lado1, $lado2, $lado3, $lado4) {
    $perimetro = ($lado1 + $lado2 + $lado3 + $lado4);
    return $perimetro;
}
 
 
$lado1 = 5;
$lado2 = 10;
$lado3 = 5;
$lado4 = 10;
$resultado = calcularPerimetroRetangulo($lado1, $lado2, $lado3, $lado4);
echo "O perímetro do retângulo é: " . $resultado . " unidades lineares";
?>
 
</body>
</html>
