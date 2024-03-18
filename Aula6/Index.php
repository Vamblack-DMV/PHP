<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Orientação a Objetos - Aula 06</title>
</head>
<body>
    <?php
        // Bloco 1
        // class Pessoa {
        //     // Atributos
        //     public $nome = "Pedro";
        //     public $idade = 26;
        //     public $endereco = "Rua Flor de Maio";

        //     // Métodos
        //     function imprimirPessoa () {
        //         return "Nome: {$this -> nome}</br>Idade: {$this -> idade}</br>Endereço: {$this -> endereco}";
        //     }
        // }

        // $p1 = new Pessoa ();
        // echo $p1 -> imprimirPessoa ();

        // Bloco 2
        // class Pessoa {
        //     // Atributos
        //     public $nome = "Pedro";
        //     public $idade = 18;
        //     public $sexo = "M";

        //     // Métodos
        //     function fazerAniversário ($idade) {
        //         $this -> idade + 1;
        //     }
        // }

        // class Aluno extends Pessoa{
        //     // Atributos
        //     public $matricula = 1;
        //     public $curso = "Informática";

        //     // Métodos
        //     function cancelarMatricula ($matricula) {
        //         $this -> matricula = null;
        //     }
        // }

        // $p1 = new Pessoa ();
        // $a1 = new Aluno ();

        // echo "Impressão da Classe Pessoa:</br>";
        // print_r ($p1);
        // echo "<hr>";
        // echo "Impressão da Classe Aluno:</br>";
        // print_r ($a1);

        // Teoria em Prática
        class Pessoa {
            // Atributos
            private $nome;
            private $idade;
            private $sexo;

            // Recebendo os Valores
            public function getNome () { return $this -> nome; }
            public function getIdade () { return $this -> idade; }
            public function getSexo () { return $this -> sexo; }

            // Modificando os Valores
            public function setNome ($n) { $this -> nome = $n; }
            public function setIdade ($i) { $this -> idade = $i; }
            public function setSexo ($s) { $this -> sexo = $s; }
        }

        $p1 = new Pessoa ();

        $p1 -> setNome ("Pedro");
        $p1 -> setNome ("Maria");

        echo $p1 -> getNome ();
    ?>
</body>
</html>