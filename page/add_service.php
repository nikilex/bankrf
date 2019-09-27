<?php 
// +---------------------------------------------------------------------------+
// | main.php																					|
// +---------------------------------------------------------------------------+
// | Copyright (c) Evgenii Shumeiko 2015-2016. All rights reserved.	|
// | Version       1.00 																		|
// | Last modified 28/03/2016                                          		  		|
// | Email      	no-reply@nicesay.ru                            					|
// | Site				nicesay.ru                                      						|
// +---------------------------------------------------------------------------+
if(!defined('Guard')) die(); 
?>

<h2>Страница добавления услуги</h2>
<hr>
<div class="card">
	<div class="card-body">
		<form method="post" action="add_service">
			<div class="form-group">
				<input type="text" class="form-control" name="name" placeholder="Название услуги" required>
			</div>
			<div class="form-group">
				<textarea id="article" name="text" required>
					Пример текста...
				</textarea>
			</div>
			<div class="form-group">
				<label for="imgFile">Изображение</label>
				<input type="file" multiple="multiple" class="form-control-file" id="imgFile">
			</div>
			<div class="text-right">
			<button type="submit" class="btn btn-outline-success btn-lg">Сохранить</button>
			</div>
		</form>
	</div>
</div>

            
<?php 
if ($_POST['name'] != '')
{
	$query = $db -> query("INSERT INTO `services`(`name`, `text`, `img`) 
	VALUES (
	' ".$_POST['name']." ',
	' ".addslashes($_POST['text'])." ',
	'img/buttons/1ovos.jpg')");
	echo "<h1>Услуга успешно добавлена</h1>";
}
return  array(
					'index'=>'Авиабилеты',
					
					);
?>
