<?php 
#Root directory
$localSite="estudo-mvc-php/";
define("DIRPAGE", "http://{$_SERVER['HTTP_HOST']}/{$localSite}");

if (substr($_SERVER['DOCUMENT_ROOT'],-1) == "/") {
	define("DIRREQ", "{$_SERVER['DOCUMENT_ROOT']}{$localSite}");
} else {
	define("DIRREQ", "{$_SERVER['DOCUMENT_ROOT']}/{$localSite}");
}

#Specific directory
define("DIRIMG", DIRPAGE."public/img/");
define("DIRCSS", DIRPAGE."public/css/");
define("DIRJS", DIRPAGE."public/js/");

#Databases
define("HOSTNAME", "localhost");
define("DATABASE", "mvcphp");
define("USER", "root");
define("PASSWORD", "");