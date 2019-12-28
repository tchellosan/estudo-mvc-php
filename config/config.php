<?php 
#Root directory
$localSite="projetomvc/";
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
define("DATABASE", "mvc");
define("USER", "root");
define("PASSWORD", "");