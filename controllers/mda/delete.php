<?php

require_once('autoload.php');

$checklist = true;

$checklist = $checklist
	AND (isset($_POST['id']) AND strlen($_POST['id']) != 0)
;

if ($checklist == true)
{
	Mda::$params = $_POST;

	$status = Mda::delete();

	header('Location: ' . BASE . 'setting/mdas');
}

?>
