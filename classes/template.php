<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<meta name="theme-color" content="#000000">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
<!-- Uses a header that scrolls with the text, rather than staying
  locked at the top -->
<div class="mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--scroll">
    
  </header>
  <div class="mdl-layout__drawer nav">
    <span class="mdl-layout-title"><?php echo $_SESSION['logged_user']['name']; echo " ".$_SESSION['logged_user']['sec_name'];?></span>
	<hr>
    <nav class="mdl-navigation nav">
	<a class="mdl-navigation__link nav" href=".">Опросы</a>
      <a class="mdl-navigation__link nav" href="profile">Профиль</a>
      <a class="mdl-navigation__link nav" href="logout">Выйти</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here -->
			
			<?php 
			//$titleh = isset($titleh) ? '<h1>'.$titleh.'</h1>' : '';
			$content = isset($content) ? $content : 'Please create Content'; echo $content; ?>
			</div>
  </main>
</div>
			
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script defer src="js/script.js"></script>
</html>