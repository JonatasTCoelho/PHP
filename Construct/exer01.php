    <?php

    class Pessoa{
        public $nome;
        public $peso;
        public $idade;
        public $altura;
        public $imc;
            public function consultar_nome($nome){
                if(is_string($nome)){
                    $this->nome = $nome;
                    $this->sobrenome = $sobrenome;
                }else{
                    echo "Erro";
                }
            }

            public function consultar_idade($idade){
                if(is_int($idade)){
                    $this->idade = $idade;
                }
            }

            public function calculo_IMC($peso, $altura){
                if(is_numeric($idade, $altura)){
                    $imc = $peso / ($altura ** 2);
                    echo "Seu IMC é: ", $imc;
                }
            }
    }

    $pessoa1 = new Pessoa();
    $pessoa1->nome = 'Anderson';
    $pessoa1->idade = 18;
    $pessoa1->altura = 1.85;
    $pessoa1->peso = 95;

    print 'Nome: '.$pessoa1->nome. '<br>'; 
    print 'Idade: '.$pessoa1->idade. '<br>';
    print 'Altura: '.$pessoa1->altura. '<br>';
    print 'Peso: '.$pessoa1->peso. '<br>';
    print '<hr>';

    $pessoa2 = new Pessoa();
    $pessoa2->nome = 'Paulo';
    $pessoa2->idade = 19;
    $pessoa2->altura = 1.65;
    $pessoa2->peso = 65;

    print 'Nome: '.$pessoa2->nome. '<br>'; 
    print 'Idade: '.$pessoa2->idade. '<br>';
    print 'Altura: '.$pessoa2->altura. '<br>';
    print 'Peso: '.$pessoa2->peso. '<br>';
    print '<hr>';

    $pessoa3 = new Pessoa();
    $pessoa3->nome = 'Túlio';
    $pessoa3->idade = 26;
    $pessoa3->altura = 1.70;
    $pessoa3->peso = 70;

    print 'Nome: '.$pessoa3->nome. '<br>'; 
    print 'Idade: '.$pessoa3->idade. '<br>';
    print 'Altura: '.$pessoa3->altura. '<br>';
    print 'Peso: '.$pessoa3->peso. '<br>';
    print '<hr>';

    $pessoa4 = new Pessoa();
    $pessoa4->nome = 'Matheus';
    $pessoa4->idade = 20;
    $pessoa4->altura = 1.80;
    $pessoa4->peso = 88;

    print 'Nome: '.$pessoa4->nome. '<br>'; 
    print 'Idade: '.$pessoa4->idade. '<br>';
    print 'Altura: '.$pessoa4->altura. '<br>';
    print 'Peso: '.$pessoa4->peso. '<br>';
    print '<hr>';

    $pessoa5 = new Pessoa();
    $pessoa5->nome = 'Ricardo';
    $pessoa5->idade = 52;
    $pessoa5->altura = 1.78;
    $pessoa5->peso = 79;

    print 'Nome: '.$pessoa5->nome. '<br>'; 
    print 'Idade: '.$pessoa5->idade. '<br>';
    print 'Altura: '.$pessoa5->altura. '<br>';
    print 'Peso: '.$pessoa5->peso. '<br>';
    print '<hr>';
    ?>