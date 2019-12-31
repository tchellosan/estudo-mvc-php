<?php 
namespace App\Controller;

use Src\Classes\ClassRender;
use App\Model\ClassCadastro;

class ControllerCadastro extends ClassCadastro  {

	private $nome;
	private $sexo;
	private $cidade;

	public function __construct(){
		$render = new ClassRender();
		$render->setDir("cadastro");
		$render->setTitle("Faça o seu cadastro");
		$render->setDescription("Dados cadastrais");
		$render->setKeywords("cadastro, id, nome, sexo, cidade");
		$render->renderLayout();
	}

	public function cadastrarCliente(){

		if (isset($_POST['nome'])) {
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
		}		

		if (isset($_POST['sexo'])) {
			$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_SPECIAL_CHARS);
		}		

		if (isset($_POST['cidade'])) {
			$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
		}

		$this->incluir($nome, $sexo, $cidade);

		echo "<br>Inclusão realizada com sucesso";
	}

	public function consultarCliente(){

		if (isset($_POST['id'])) {
			$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
		}		

		$rs = $this->consultar($id);

		$this->nome = $rs['NOME'];
		$this->sexo = $rs['SEXO'];
		$this->cidade = $rs['CIDADE'];

		echo "Nome: ".$this->nome."<br>";
		echo "Sexo: ".$this->sexo."<br>";
		echo "Cidade: ".$this->cidade."<br>";

		echo "<br>Consulta realizada com sucesso";
	}

}