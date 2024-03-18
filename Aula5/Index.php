<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções - Aula 05</title>
</head>
<body>
    <?php
        echo "Função Soma com entrada 5 e 10:</br>";
        function soma($a, $b) {
            return $a + $b;
        }
        echo soma(5, 10);
        echo "<hr>";

        echo "Função de Apresentação de textos</br>";
        function saudacao() {
            echo "Seja Bem Vindo!";
        }
        echo saudacao();
        echo "<hr>";

        echo "Função anônima com entrada 10 e 8</br>";
        $soma = function ($a, $b) {
            return $a + $b;
        };
        echo $soma(10, 8);
        echo "<hr>";

        echo "Função com entradas padões, modelo = 0.7 e cor = Azul</br>";
        function caneta($modelo="0.7", $cor="Azul") {
            return "Modelo: ".$modelo.",</br> Cor: ".$cor."</br>";
        }
        echo caneta();
        echo caneta("0.5", "Verde");
        echo caneta(null, null);
        echo "<hr>";

        echo "Imprimindo textos de formas diferentes</br>";
        function menssagem () {
            return "Olá Mundo!</br>";
        }
        menssagem();
        $msg = menssagem ();
        echo $msg;
        echo menssagem ();
        var_dump(menssagem());

        function messagem ($nome="Mundo") {
            return "Olá $nome!"."</br>";
        }
        messagem ();
        echo messagem ();
        var_dump(messagem ("Pedro") );

        function mensagem ($nome=10) {
            return $nome;
        }
        mensagem ();
        echo mensagem()."</br>";
        var_dump(mensagem ()."</br>" );
        var_dump(mensagem (10.35)."</br>" );
        var_dump(mensagem (true) );
        echo "<hr>";

        echo "Função Cadastrar Cliente</br>";
        function cadastroCLiente ($nome, $idade, $endereco) {
            return $array = [$nome, $idade, $endereco];
        }

        function imprimirCadastos ($array) {
            print_r ($array);
        }

        $cliente = cadastroCLiente ("Pedro", 15, "Rua Flor de Maio");

        imprimirCadastos($cliente);
    ?>
</body>
</html>