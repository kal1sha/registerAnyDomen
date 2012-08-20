<?php
require_once "libs/class.mysql.php";
require_once "libs/class.utils.php";


$db = new Mysql('localhost', 'root', '1234', 'server');
$data = explode("&",$_GET['data']);
foreach($data as $value) {
	$value = explode("=", $value);
	$result[] = $value[1];
}
$result = $db->query("INSERT INTO `users` (`id`,`login`,`email`,`password`) VALUES (0,'".$result[0]."','".$result[1]."','".md5($result[2])."')");

if ($result) {
	$_GET['result'] = 'ok';
} else {
	$_GET['result'] = 'error';
}

$utils = new Utils();
$utils->output($_GET);
	
?>