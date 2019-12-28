<?php 
namespace App\Controller;

class ControllerHome {

	public function __construct(){
		echo "<h1>Home</h1>";
	}

	public function metodo1($parm1, $parm2, $parm3) {
		echo "<br><br> metodo1 - Hello 1";
		echo "<br><br> Parâmetros: <br>".
		"<strong>Parm1</strong> = {$parm1}<br>".
		"<strong>Parm2</strong> = {$parm2}<br>".
		"<strong>Parm3</strong> = {$parm3}";

	}	

	public function metodo2() {
		echo "<br><br> metodo2 - Hello 2";
	}

}