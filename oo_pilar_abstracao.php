<?php 

//modelo
class Funcionario {
    
    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    //setters
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }

    //getters
    function getNome() {
        return $this->nome;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getNumFilhos() {
        return $this->numFilhos;
    }


    //métodos
    function resumirCadFunc() {
        return "O telefone de $this->nome é $this->telefone, e ela possui $this->numFilhos filhos";

    }

    function modificarNumFilhos($numFilhos) {
        //afetar um atributo do objeto
        $this->numFilhos = $numFilhos;
    }

}




$y = new Funcionario();
$y->setNome('Thamyres');
$y->setTelefone(111111);
$y->setNumFilhos(2);

echo $y->resumirCadFunc();

echo '<hr />';
echo 'Resumo do Cadastro de Funcionário';
echo '<br />';
echo "Nome: " . $y->getNome();
echo '<br />';
echo "Telefone: " . $y->getTelefone();
echo '<br />';
echo "Número de Filhos: " . $y->getNumFilhos();

echo '<hr />';

$x = new Funcionario();
$x = new Funcionario();
$x->setNome('Fabricio');
$x->setTelefone(22222);
$x->setNumFilhos(3);

echo $x->resumirCadFunc();

echo '<hr />';
echo 'Resumo do Cadastro de Funcionário';
echo '<br />';
echo "Nome: " . $x->getNome();
echo '<br />';
echo "Telefone: " . $x->getTelefone();
echo '<br />';
echo "Número de Filhos: " . $x->getNumFilhos();


?>