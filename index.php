<?php session_start();
// +---------------------------------------------------------------------------+
// | index.php																				|
// +---------------------------------------------------------------------------+
// | Copyright (c) Evgenii Shumeiko 2015-2016. All rights reserved.	|
// | Version       1.00 																		|
// | Last modified 28/03/2016                                          		  		|
// | Email      	no-reply@nicesay.ru                            					|
// | Site				nicesay.ru                                      						|
// +---------------------------------------------------------------------------+
// ini_set('display_errors',1);
// error_reporting(E_ALL); 
define('Guard',true);
require_once './classes/mysql.php';
//require './classes/db.php';
require_once './classes/function.php'; 
// $admin = true;
$db = new db;
if ( isset ($_SESSION['logged_user']) )
{
$server_time = intval($_SERVER['REQUEST_TIME']);
$route = isset($_GET['page']) ? filter($_GET['page']) : 'main.php';
$file = "./page/".$route;
$file = file_exists($file) ? $file : './page/404.php';
ob_start();
$data = require $file;
$content = ob_get_clean();
extract(isset($data['index']) ? $data : array('title' => 'Добро Пожаловать'));
require './classes/template.php'; 
} else header('Location: /login.php');
/*
<?php 
	require 'db.php';
?>

<?php if ( isset ($_SESSION['logged_user']) ) : ?>
	Авторизован! <br/>
	Привет, <?php echo $_SESSION['logged_user']->login; ?>!<br/>

	<a href="logout.php">Выйти</a>

<?php else : ?>
Вы не авторизованы<br/>
<a href="/login.php">Авторизация</a>
<a href="/signup.php">Регистрация</a>
<?php endif; ?>
*/
