<?php
// +---------------------------------------------------------------------------+
// | login.php																					|
// +---------------------------------------------------------------------------+
// | Copyright (c) Evgenii Shumeiko 2015-2016. All rights reserved.	|
// | Version       1.00 																		|
// | Last modified 28/03/2016                                          		  		|
// | Email      	no-reply@nicesay.ru                            					|
// | Site				nicesay.ru                                      						|
// +---------------------------------------------------------------------------+

if(!defined('Guard')) die(); 

$time = time();
if(isset($_GET['act']))
	$act = filter($_GET['act']);
else $act = '';

switch($act){

case 'login':
$email = filter($_POST['email']);
$password = filter($_POST['pass']);
$row = $db->super_query("SELECT id FROM `users` WHERE mail = '{$email}' and pass = '{$password}'");
if($row['id']){
$sid = md5($email).$password;
$db->super_query("INSERT INTO `session` SET sid = '{$sid}', uid = '{$row['id']}', date = '{$time}'");
setcookie ('sid', $sid, time()+604800,'/','.elbook.su');
setcookie ('sdate', time(), time()+604800,'/','.elbook.su');
header('Location: /');
} else header('Location: /auth?act=bad');
die();
break;

case 'logout':
$db->super_query("DELETE FROM `session` WHERE sid = '{$_COOKIE['sid']}' and date = '{$_COOKIE['sdate']}'");
setcookie("sid", "", 1, "/", ".elbook.su");
setcookie("sdate", "", 1, "/", ".elbook.su");
header('Location: /');

break;

default:
if(isset($_COOKIE['sid']) and $_COOKIE['sdate']){
$session = $db->super_query("SELECT uid FROM `session` WHERE sid = '{$_COOKIE['sid']}' and date = '{$_COOKIE['sdate']}'");
if($session['uid']){
$logged = true;
$user_info = $db->super_query("SELECT id, u_group, mail FROM `users` WHERE id = '{$session['uid']}'");
$user_id = $user_info['id'];
$user_mail = $user_info['mail'];
if($user_info['u_group'] == 1) $admin = true;
else $admin = false;
} else {
$user_id = false;
$user_mail = false;
setcookie("sid", "", 1, "/", ".elbook.su");
setcookie("sdate", "", 1, "/", ".elbook.su");
$login = false;
} 
}
}
?>