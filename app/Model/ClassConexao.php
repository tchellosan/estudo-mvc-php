<?php 
namespace App\Model;

abstract class ClassConexao {

	public function getConn(){
		try {
			return new \PDO("mysql:host=".HOSTNAME.";dbname=".DATABASE.";charset=utf8",USER,PASSWORD);
		} catch(\PDOException $e) {
			return $e->getMessage();
		}
	}	
}