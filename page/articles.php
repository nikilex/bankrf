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



if (isset($_GET['part'])){
	$page = $_GET['part'];
}else $page = 1;
$kol = 3;  //количество записей для вывода
$art = ($page * $kol) - $kol; // определяем, с какой записи нам выводить
$result = $db ->query("SELECT * FROM articles LIMIT $art,$kol");

$res = $db -> super_query("SELECT COUNT(*) as total FROM articles");

$str_pag = ceil($res['total']/ $kol);

?>

<h2>Менеджер статей</h2>
<hr>

<div class="card">
	<div class="card-body">
	<form method="post" action="add_article">
		<button type="submit" class="btn btn-outline-success btn-lg">Добавить статью</button>
	</fortm>
	<br>
	<br>
		<table class="table">
		  <thead>
			<tr>
			  <th scope="col">#</th>
			  
			  <th scope="col">Наименование</th>
			  <th scope="col">Краткий текст</th>
			  <th scope="col">Изображение</th>
			</tr>
		  </thead>
		  <tbody>
			  <?php 
				$query = $db -> query("SELECT * FROM articles");
				foreach ($result as $value)
				{
					echo "
					<tr>
					  <th scope='row'>".$value['id']."</th>
					  
					  <td><a href='edit_article?id=".$value['id']."'>".$value['name']."</a></td>
					  <td>".substr($value['text'],0,200)."...</td>
					  <td>".$value['img']."</td>
					</tr>
					";
				}
			  ?>
		  </tbody>
		</table>
		<nav aria-label="...">
		  <ul class="pagination">
			<?php 
				if ($page==1) {
					 echo '<li class="page-item disabled">
							  <span class="page-link">Назад</span>
							</li>';
				} else {
					$r = $page - 1;
					 echo '<li class="page-item">
							  <a class="page-link" href="/admin/articles?part='.$r.'">Назад</a>
						</li>';
				}
			
				for ($i = 1; $i <= $str_pag; $i++){
					if ($page == $i) { 
					echo '<li class="page-item active">
								  <span class="page-link">
									'.$i.'
									<span class="sr-only">(current)</span>
								  </span>
							</li>';
					} else echo '<li class="page-item"><a class="page-link" href="/admin/articles?part='.$i.'">'.$i.'</a></li>'; 
				}
			
				if (($page+1) > $str_pag) {
					 echo '<li class="page-item disabled">
							  <span class="page-link">Вперёд</span>
							</li>';
				} else {
					$r = $page +1;
					 echo '<li class="page-item">
							  <a class="page-link" href="/admin/articles?part='.$r.'">Вперед</a>
						</li>';
				}
			?>
			
		  </ul>
		</nav>
	</div>
</div>

						

            
<?php 

return  array(
					'index'=>'Авиабилеты',
					
					);
?>
