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

        function trocarMarcha() {
            echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
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

        function trocarMarcha() {
            echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
        }
    }

    class Caminhao extends Veiculo{

    }

    $carro = new Carro('ABC1234', 'Branca');
    $moto = new Moto('DEF5678', 'Preta');
    $caminhao = new Caminhao('GHI9999', 'Azul');
   
    $carro->trocarMarcha();
    echo '<br />';
    $moto->trocarMarcha();
    echo '<br />';
    $caminhao->trocarMarcha();
