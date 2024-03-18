<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Controle - Aula 04</title>
</head>
<body>
    <?php
        if(false){
            echo "verdadeiro";
        } else {
            echo "falso";
        }
        echo "<hr>";

        const valor = 5;
        $cont = 0;
        while ($cont < valor) {
            $cont += 1;
            echo $cont;
        }
        echo "<hr>";

        $cont = 0;
        do {
            $cont += 2;
            echo $cont;
        } while ($cont < valor);
        echo "<hr>";

        for ($contador = 1 ; $contador < 10; $contador ++) {
            echo $contador;
        }
        echo "<hr>";

        for (; $cont < 10 ; $cont ++) {
            echo $cont;
        }
        echo "<hr>";

        $array = ["Maria", "Pedro", "João", "Carlos"];
        foreach ($array as $valor) {
            echo "$valor </br>";
        }
        echo "<hr>";

        $cont = 0;
        for (;; $cont ++) {
            if ($cont > 7) {
                break;
            }
            echo $cont;
        }
        echo "<hr>";

        $cont = 0;
        for (;; $cont ++) {
            if ($cont % 2 === 0) {
                continue;
            }
            if ($cont > 10) {
                break;
            }
            echo $cont;
        }
        echo "<hr>";

        echo "<h3>Trabalhando com Função</h3>";
        // Função
        function somaSalario ($salario) {
            return $salario + 150;
        }

        $salario = somaSalario (1500);
        echo $salario;

        echo "<h3>Trabalhando com Case</h3>";
        $opcao = 3;
        switch ($opcao) {
            case 1:
                echo "Opção número 1";
                break;
            case 2:
                echo "Opção número 2";
                break;
            case 3:
                echo "Opção número 3";
                break;
            default:
                echo "Opção Inválida";
        }
    ?>  
</body>
</html>