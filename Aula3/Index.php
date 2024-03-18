<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis, Constatantes e Operadores - Aula 03</title>
</head>
<body>
    <?php
        // Variáveis
        // $n1 = 12;
        // $n1 = 25;
        // $n1 = 12 + 13;
        // $n1 = "12" + "13";
        $n1 = "13 + 13";
        echo $n1;

        // Constantes
        define ("DESCONTO", 10);
        echo "</br>".DESCONTO;

        const TAXA = 5;
        echo "</br>".TAXA."</br>";

        // Operadores lógicos
        var_dump (true && true);
        var_dump (false && true);
        echo "</br>";
        var_dump (true || true);
        var_dump (false || true);
        echo "</br>";
        var_dump (!true);

        // Teoria em Prática
        echo 5 + 5, "</br>";
        var_dump ( 2 + 3 );
        echo "</br>";
        var_dump ( 1 + 1.5);
        echo "</br>";
        echo 10 - 2, "</br>";
        echo 10 * 2, "</br>";
        echo 10 / 2, "</br>";
        echo 10 % 2, "</br>";
        echo 2 ** 3;
    ?>
</body>
</html>
