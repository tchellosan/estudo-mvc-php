<?php 
header("Content-Type: text/html; charset=utf-8");

require_once("../config/config.php");

require_once("../src/vendor/autoload.php");

echo DIRPAGE;
echo "<hr>";
echo DIRREQ;
echo "<hr>";
echo DIRIMG;
echo "<hr>";
?>
<img src="<?php echo DIRIMG.'deserto.jpg'; ?>" alt="Deserto Windows">