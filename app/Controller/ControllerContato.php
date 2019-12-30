<?php 
namespace App\Controller;

use Src\Classes\ClassRender;

class ControllerContato extends ClassRender {

	public function __construct(){
		$this->setDir("contato");
		$this->setTitle("Contato");
		$this->setDescription("Entre em contato conosco");
		$this->setKeywords("contato, telefone, email");
		$this->renderLayout();
	}
}