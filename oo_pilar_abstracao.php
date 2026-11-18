<?php 

//modelo
class Funcionario {
    
    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    // getter e setters (overloading / sobrecarregar)
    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    function __get($atributo) {
        return $this->$atributo;
    }

    //setters
    /* 
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }
    */

    //getters
    /*  
    function getNome() {
        return $this->nome;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getNumFilhos() {
        return $this->numFilhos;
    }
    */

    //métodos
    function resumirCadFunc() {
        return $this->__get('nome');// . " possui " . $this->__get('numFilhos') . " filhos";

    }

    function modificarNumFilhos($numFilhos) {
        //afetar um atributo do objeto
        $this->numFilhos = $numFilhos;
    }

}

$y = new Funcionario();
$y->__set('nome', "Fabricio");
$y->__set('telefone', "1111");
$y->__set('numFilhos', 1);
$y->__set('cargo', "Ag. Administrativo");
$y->__set('salario', 5000);

$y->resumirCadFunc();

/* 
echo "Nome: " . $y->__get('nome');
echo '<br />';
echo "Telefone: " . $y->__get('telefone');
echo '<br />';
echo "Número de Filhos: " . $y->__get('numFilhos');
echo '<br />';
echo "Cargo: " . $y->__get('cargo');
echo '<br />';
echo "Salário: " . $y->__get('salario');
 */

/* 
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
*/

?>