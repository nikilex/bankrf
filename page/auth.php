<?php
// +---------------------------------------------------------------------------+
// | auth.php																					|
// +---------------------------------------------------------------------------+
// | Copyright (c) Evgenii Shumeiko 2015-2016. All rights reserved.	|
// | Version       1.00 																		|
// | Last modified 28/03/2016                                          		  		|
// | Email      	no-reply@nicesay.ru                            					|
// | Site				nicesay.ru                                      						|
// +---------------------------------------------------------------------------+
if(!defined('Guard')) die(); 

$act = isset($_GET['act']) ? $_GET['act'] : '';

switch($act){
	case 'bad':
		echo 'Проверьте правильность ввода E-mail и пароля.';
		return  array(
					'index'=>'1',
					'title' => 'Ошибка',
					'titleh' => 'Ошибка входа');
	break;
}



?>