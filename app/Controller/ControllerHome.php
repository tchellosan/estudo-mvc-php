<?php 
namespace App\Controller;

use Src\Classes\ClassRender;

class ControllerHome extends ClassRender {

	public function __construct(){
		$this->setDir("home");
		$this->setTitle("Home");
		$this->setDescription("Estudo de MVC com PHP");
		$this->setKeywords("estudo, mvc, php, web");
		$this->renderLayout();
	}
}