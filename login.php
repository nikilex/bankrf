<?php

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

  <div class="mdl-tabs__panel is-active" id="login" style="text-align: center;">
    <div class="mdl-grid " style="text-align: center;">
	<form action="#">
		<div class="mdl-cell mdl-cell--12-col" >
			<div class="mdl-textfield mdl-js-textfield" >
				<input class="mdl-textfield__input" type="text" id="login_phone">
				<label class="mdl-textfield__label" for="login_phone">+7 (800) 000-00-00</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="password" id="login_pass">
				<label class="mdl-textfield__label" for="login_pass">Пароль</label>
			</div>
		</div>
	</form>
</div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="but_login">
				  Войти
				</button>
			</div>
		</div>
  </div>
  
  <div class="mdl-tabs__panel" id="register" >
    <div class="mdl-grid">
	<form action="#">
		<div class="mdl-cell mdl-cell--12-col">
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="text" id="phone" required>
				<label class="mdl-textfield__label" for="sample1">+7 (800) 000-00-00</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="text" id="name" required>
				<label class="mdl-textfield__label" for="sample1">Имя</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="text" id="sec_name" required>
				<label class="mdl-textfield__label" for="sample1">Фамилия</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="text" id="nik" required>
				<label class="mdl-textfield__label" for="sample1">Псевдоним</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="password" id="pass" required>
				<label class="mdl-textfield__label" for="sample1">Пароль</label>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--12-col">
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="password" id="pass_ch" required>
				<label class="mdl-textfield__label" for="sample1">Подтверждение пароля</label>
			</div>
		</div>
	</form>
</div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="reg">
				  Зарегистрироваться
				</button>
			</div>
		</div>
</div>
		
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script defer src="js/auth.js"></script>
</html>