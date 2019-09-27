<?php session_start();

require_once './classes/mysql.php';
require_once './classes/function.php'; 
$db = new db;
if(!defined('Guard')) die(); 

$date = $_POST;
if (isset($data))
{
	
	$query = $db -> query("
	INSERT INTO `user`
	(`phone`, `name`, `sec_name`, `pass`) 
	VALUES 
	( 
	".$data['phone']." , 
	".$data['name']." , 
	".$data['sec_name']." , 
	".$data['pass']." ");
}

return  array(
					
					
					);
?>
