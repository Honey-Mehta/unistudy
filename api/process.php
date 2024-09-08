<?php
header("Content-type: application/json; charset=utf-8");
include('../common/config.php');
include('function.php');

$object = new unistudy($conn);
if(isset($_GET['action']) && $_GET['action']=='signup')
{
	$object->signup();
}


if(isset($_GET['action']) && $_GET['action']=='show_universities')
{
	$object->show_universities();
}


?>