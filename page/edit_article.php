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

if (isset($_GET['id'])){
$query = $db -> super_query("SELECT * FROM articles WHERE id=".$_GET['id']."");
} else $query = "Что то пошло не так";

if ($_POST['nameArt'] != '')	
{
	$query = $db -> query("UPDATE `articles` 
	SET 
	`name`='".$_POST['nameArt']."',
	`text`='".addslashes($_POST['article'])."',
	`author`='".$_POST['author']."',
	`date`='".$_POST['date']."'
	WHERE id=".$_GET['id']."");
	echo "<h1>Статья успешно обновлена</h1>";
	$query = $db -> super_query("SELECT * FROM articles WHERE id=".$_GET['id']."");
}

?>

<h2>Страница редактирования статьи</h2>
<hr>
<div class="card">
	<div class="card-body">
		<form method="post" action="edit_article?id=<?php echo $_GET['id'];?>">
			<div class="form-group">
				<?php 
						echo '<input type="text" class="form-control" name="nameArt" value="'.$query['name'].'" placeholder="Экология - это...">';
				?>
				
			</div>
			<div class="form-group">
				<?php 
						echo '<input type="text" class="form-control" name="author" value="'.$query['author'].'" placeholder="Автор статьи">';
				?>
			</div>
			<div class="form-group">
				<?php 
						echo '<input type="text" class="form-control" name="date" value= "'.$query['date'].'"  placeholder="Дата публикации">';
				?>
			</div>
			
			<div class="form-group">
				<textarea id="article" name="article">
					<?php 
						echo $query['text'];
					?>
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

return  array(
					'index'=>'Авиабилеты',
					
					);
?>
