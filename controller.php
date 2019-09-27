<?php session_start();
define('Guard',true);
require_once './classes/mysql.php';
require_once './classes/function.php'; 
$db = new db;
if(!defined('Guard')) die(); 

$data = $_POST;
if (isset($data['reg']))
{
	$query = $db -> query("INSERT INTO `user`(`phone`, `name`, `sec_name`, `pass`,`nik`) VALUES (
	'".$data['phone']."',
	'".$data['name']."',
	'".$data['sec_name']."',
	'".$data['pass']."',
	'".$data['nik']."')");
} else {
	echo "Ничего не пришло";
}

if (isset($data['login']))
{
	$user = $db -> super_query("SELECT * FROM user WHERE phone=".$data['phone']."");
	if ( $data['pass'] == $user['pass'] )
			{
				$_SESSION['logged_user'] = $user;
			}
}
return  array(
					
					
					);
?>
