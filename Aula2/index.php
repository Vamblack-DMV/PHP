<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos no PHP - Aula 02</title>
</head>
<body>
    <?php
        // Variável
        $var = "Pedro";
        $Var = "Maria";
        echo $var, " ", $Var, "</br>";
        
        // Array
        $lista = array (10, 20, 22.20, "Pedro");
        print_r ($lista);

        // // Criando objetos
        // $p1 = new Pessoa();
        // $p1 -> Cadastro();
        // $p1 -> nome = "Pedro";

        // // Teoria em Prática
        // $cliente = new Pessoa();
        // $cliente -> nome;
        // $cliente -> cpf;
        // $cliente -> idade;
        // $cliente -> endereco;

        // $cliente -> CadastroCliente();

        // $produto = new Estoque();
        // $protudo -> camisa;
        // $protudo -> cueca;
        // $protudo -> blusa;

        // $cliente = array("Pedro", 31231231231, 3199999999,"Rua Flor de Maio");
        ?>
</body>
</html>