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

<h2>Страница добавления статьи</h2>
<hr>
<div class="card">
	<div class="card-body">
		<form method="post" action="add_article">
			<div class="form-group">
				<input type="text" class="form-control" name="nameArt" placeholder="Заголовок статьи" required>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="author" placeholder="Автор статьи" required>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="date" placeholder="Дата публикации" required>
			</div>
			<div class="form-group">
				<textarea id="article" name="article" required>
					Пример текста...
				</textarea>
			</div>
			<div class="form-group">
				<label for="imgFile">Добавить изображение к статье</label>
				<input type="file" multiple="multiple" class="form-control-file" id="imgFile">
			</div>
			<div class="text-right">
			<button type="submit" class="btn btn-outline-success btn-lg">Сохранить</button>
			</div>
		</form>
	</div>
</div>

            
<?php 
if ($_POST['nameArt'] != '')
{
	$query = $db -> query("INSERT INTO `articles`(`name`, `text`, `date`, `author`) 
	VALUES (
	' ".$_POST['nameArt']." ',
	' ".$_POST['article']." ',
	' ".$_POST['date']." ',
	' ".$_POST['author']." ')");
	echo "<h1>Статья успешно добавлена</h1>";
}
return  array(
					'index'=>'Авиабилеты',
					
					);
?>
