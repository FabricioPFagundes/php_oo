<?php 

//modelo
class Funcionario {
    
    //atributos
    public $nome = "Fabricio";
    public $telefone = 999068609;
    public $numFilhos = 2;

    //métodos
    function resumirCadFunc() {
        return "$this->nome possui $this->numFilhos filhos";

    }

    function modificarNumFilhos($numFilhos) {
        //afetar um atributo do objeto
        $this->numFilhos = $numFilhos;
    }

}

$y = new Funcionario();
echo $y->resumirCadFunc();

echo '<br />';

$y->modificarNumFilhos(3);
echo $y->resumirCadFunc();

echo '<hr />';

$x = new Funcionario();
echo $x->resumirCadFunc();

echo '<br />';

$y->modificarNumFilhos(1);
echo $y->resumirCadFunc();


?>