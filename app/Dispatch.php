<?php 
namespace App;

use Src\Classes\ClassRoutes;

class Dispatch extends ClassRoutes {

	private $method;
	private $param = [];
	private $objeto;

	protected function getMethod() { return $this->method; }
	
	public function setMethod($method) { $this->method = $method; }	

	protected function getParam() { return $this->param; }
	
	public function setParam($param) { $this->param[array_keys($param)[0]] = array_values($param)[0]; }
	//public function setParam($param) { $this->param[] = $param; }

	public function __construct(){
		self::addController();
	}

	public function addController() {
		
		$namespace = "App\\Controller\\{$this->getRota()}";
		$this->objeto = new $namespace;

		if (isset($this->parserUrl()[1])) {
			self::addMethod();
		}

	} 

	public function addMethod() {
		
		if (method_exists($this->objeto, $this->parserUrl()[1])) {
			$this->setMethod("{$this->parserUrl()[1]}")	;
			self::addParam();
			call_user_func_array([$this->objeto, $this->getMethod()], $this->getParam());
		} 

	} 

	public function addParam(){

		if (count($this->parserUrl()) > 2) {
			foreach ($this->parserUrl() as $key => $value) {
				//echo "<br>".$key." => ".$value;

				if ($key > 1) {
					$this->setParam([$key => $value]);
					//$this->setParam($value);
				}
			}
		}

		//var_dump($this->getParam());
	} 
}