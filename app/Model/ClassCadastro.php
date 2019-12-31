<?php
namespace App\Model;

class ClassCadastro extends ClassConexao {

	private $conn;

	protected function incluir($nome, $sexo, $cidade) {

		$sql_insert = "INSERT INTO CADASTRO VALUES (:ID, :NOME, :SEXO, :CIDADE)";

		$id = 0;

		$this->conn = $this->getConn()->prepare($sql_insert);
		$this->conn->bindParam(":ID", 		$id, 		\PDO::PARAM_INT);
		$this->conn->bindParam(":NOME", 	$nome, 		\PDO::PARAM_STR);
		$this->conn->bindParam(":SEXO", 	$sexo, 		\PDO::PARAM_STR);
		$this->conn->bindParam(":CIDADE", 	$cidade,	\PDO::PARAM_STR);
		$this->conn->execute();
	}
}