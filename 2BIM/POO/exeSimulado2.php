<!DOCTYPE html>
<html>
<body>

<?php
class Cadastro {
	public $nome;
	protected $cpf;
	private $idade;
	
	public function __construct($nome) {
		$this->nome = $nome;
	}
	
	public function setIdade($idade) {
		if(is_numeric($idade) && $idade > 18) {
			$this->idade = $idade;
		} else {
			echo "<font color=red>IDADE INVÁLIDA</font><br>";
		}
	}
	
	public function getIdade() {
		return $this->idade;
	}
}

class PessoaFisica extends Cadastro {
	public $email;
	
	public function __construct($email, $nome) {
		$this->email = $email;
		parent::__construct($nome);
	}
	
	public function setCPF($cpf) {
		if(is_numeric($cpf)) {
			$this->cpf = $cpf;
			echo "O cpf de $this->nome é $this->cpf, e seu email é $this->email<br>";
		} else {
			echo "<font color=red>VALOR INVÁLIDO. O cpf de $this->nome é $this->cpf, e seu email é $this->email</font><br>";
		}
	}
}
?>

<?php
	$c1 = new Cadastro("Caio Felipe");
    $c2 = new Cadastro("Roberto");
    $c3 = new Cadastro("Ricardo");
    
    $c1->setIdade(20);
    $c2->setIdade(4);
    $c3->setIdade(23);
    
    echo "O $c1->nome tem ".$c1->getIdade()." anos.<br>";
    echo "O $c1->nome tem ".$c2->getIdade()." anos.<br>";
    echo "O $c1->nome tem ".$c3->getIdade()." anos.<br><br>";
    
    $p1 = new PessoaFisica("josefina@mail.c", "Josefina");
    $p2 = new PessoaFisica("priscila@mail.c", "Priscila");
    $p3 = new PessoaFisica("dalila@mail.c", "Dalila");
    
    $p1->setCPF(3232);
    $p2->setCPF("aa");
    $p3->setCPF(123);
    
?>

</body>
</html>
