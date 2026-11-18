<?php

    class Veiculo {
        public $placa = null;
        public $cor = null;

        //METODOS
        function acelerar() {
            echo 'Acelerando';
        }

        function freiar() {
            echo 'Freiando';
        }
    }

    class Carro extends Veiculo {
        public $teto_solar = true;

        //METODOS
        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar() {
            echo 'Teto solar aberto';
        }

        function alterarPosicaoVolante() {
            echo 'Volante esta girando';
        }
    }

    class Moto extends Veiculo {
        public $contra_peso_guidao = true;

        //METODOS
        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar() {
            echo 'Empinando';
        }
    }

    $carro = new Carro('ABC1234', 'Branca');
    //echo $carro->acelerar();

    //echo '<br />';

    $moto = new Moto('DEF5678', 'Preta');
    //echo $moto->empinar();

    echo '<pre>';
    print_r($carro);
    
    echo '<br />';
    
    print_r($moto);
    echo '</pre>';

    echo '<hr />';

    $carro->abrirTetoSolar();
    echo '<br />';
    $carro->acelerar();
    echo '<br />';
    $carro->freiar();

    echo '<hr />';

    $moto->empinar();
    echo '<br />';
    $moto->acelerar();
    echo '<br />';
    $moto->freiar();


?>