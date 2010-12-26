<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
$controllerObj=$controller;

$bf = null;
$bfo = null;

if ($controller->getFileID() > 0) { 
	$bf = $controller->getFileObject();
}

?>

<?php
include($this->getBlockPath().'/form.php');
?>
