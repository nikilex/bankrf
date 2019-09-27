<?php session_start();
define('Guard',true);
require_once './classes/mysql.php';
require_once './classes/function.php'; 
$db = new db;

	$data = $_POST;

	function captcha_show(){
		$questions = array(
			1 => 'Столица России',
			2 => 'Столица США',
			3 => '2 + 3',
			4 => '15 + 14',
			5 => '45 - 10',
			6 => '33 - 3'
		);
		$num = mt_rand( 1, count($questions) );
		$_SESSION['captcha'] = $num;
		echo $questions[$num];
	}

	//если кликнули на button
	if ( isset($data['do_signup']) )
	{
    // проверка формы на пустоту полей
		$errors = array();
		if ( trim($data['login']) == '' )
		{
			$errors[] = 'Введите логин';
		}

		if ( trim($data['email']) == '' )
		{
			$errors[] = 'Введите Email';
		}

		if ( $data['pass'] == '' )
		{
			$errors[] = 'Введите пароль';
		}

		if ( $data['pass2'] != $data['pass'] )
		{
			$errors[] = 'Повторный пароль введен не верно!';
		}
/*
		//проверка на существование одинакового логина
		if ( R::count('users', "login = ?", array($data['login'])) > 0)
		{
			$errors[] = 'Пользователь с таким логином уже существует!';
		}
    
    //проверка на существование одинакового email
		if ( R::count('users', "email = ?", array($data['email'])) > 0)
		{
			$errors[] = 'Пользователь с таким Email уже существует!';
		}
*/
		//проверка капчи
		$answers = array(
			1 => 'москва',
			2 => 'вашингтон',
			3 => '5',
			4 => '29',
			5 => '35',
			6 => '30'
		);
		if ( $_SESSION['captcha'] != array_search( mb_strtolower($_POST['captcha']), $answers ) )
		{
			$errors[] = 'Ответ на вопрос указан не верно!';
		}


		if ( empty($errors) )
		{
			$query = $db -> query ("INSERT INTO `users`( `user_login`, `user_password`) VALUES ( '".filter($data['login'])."' ,
			'".password_hash($data['pass'], PASSWORD_DEFAULT)."')");
			//ошибок нет, теперь регистрируем
			/*$user = R::dispense('users');
			$user->login = $data['login'];
			$user->email = $data['email'];
			$user->password = password_hash($data['password'], PASSWORD_DEFAULT); //пароль нельзя хранить в открытом виде, мы его шифруем при помощи функции password_hash для php > 5.6
			R::store($user);*/
			echo '<div style="color:dreen;">Вы успешно зарегистрированы!</div><hr>';
		}else
		{
			echo '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';
		}

	}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//ru" 
  "http://www.w3.org/TR/html4/strict.dtd">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<meta name="theme-color" content="#000000">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700">
<title>Банк России. Опросы</title>


<body>
<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
  <div class="mdl-tabs__tab-bar">
      <a href="#login" class="mdl-tabs__tab is-active">Авторизация</a>
      <a href="#register" class="mdl-tabs__tab">Регистрация</a>
  </div>

  <div class="mdl-tabs__panel is-active" id="login">
    <div class="mdl-grid ">
	<form action="#">
		<div class="mdl-cell mdl-cell--12-col">
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="text" id="sample1">
				<label class="mdl-textfield__label" for="sample1">+7 (800) 000-00-00</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="password" id="sample1">
				<label class="mdl-textfield__label" for="sample1">Пароль</label>
			</div>
		</div>
	</form>
</div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
				  Войти
				</button>
			</div>
		</div>
  </div>
  
  <div class="mdl-tabs__panel" id="register">
    <div class="mdl-grid">
	<form action="#">
		<div class="mdl-cell mdl-cell--12-col">
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="text" id="sample1" name="phone">
				<label class="mdl-textfield__label" for="sample1">+7 (800) 000-00-00</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="text" id="sample1" name="name">
				<label class="mdl-textfield__label" for="sample1">Имя</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="text" id="sample1" name="sec_name">
				<label class="mdl-textfield__label" for="sample1">Фамилия</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="password" id="sample1" name="pass">
				<label class="mdl-textfield__label" for="sample1">Пароль</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="password" id="sample1" name="pass_ch">
				<label class="mdl-textfield__label" for="sample1">Подтверждение пароля</label>
			</div>
		</div>
	</form>
</div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
				  Зарегистрироваться
				</button>
			</div>
		</div>
</div>
		
</body>

<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</html>