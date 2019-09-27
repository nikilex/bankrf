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

<div class="mdl-grid pad-opros">
	<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-phone mdl-cell--middle shadow" style="border: 0px solid #937cfd87;  text-align:center;">
		<p class="text-color" align="center">Разрешить отрицатильные ставки?</p>
	</div>
	
	<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-phone mdl-cell--middle" style="border: 0px solid #937cfd87;  text-align:center;">
	<div class="mdl-cell mdl-cell--12-col-tablet mdl-cell--12-col-phone mdl-cell--middle" style="border: 0px solid #937cfd87;  text-align:center;">
				<img src="img/cb.png" style="width:70px;">
			</div>
		<div class="mdl-grid">
			<div id="opr2-yes" class="mdl-cell mdl-cell--2-col-tablet mdl-cell--2-col-phone mdl-cell--middle shadow2">
				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
			  <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
			  <span class="mdl-radio__label">Да</span>
			</label>
		
			</div>
			<div id="opr2-no" class="mdl-cell mdl-cell--2-col-tablet mdl-cell--2-col-phone mdl-cell--middle shadow2" >
				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
			  <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
			  <span class="mdl-radio__label">Нет</span>
			</label>
			</div>
			
		</div>
		
	</div>
	
		
	
	<div id="answer-yes" class="mdl-cell mdl-cell--6-col mdl-cell--8-col-phone mdl-cell--middle" style="border: 0px solid #937cfd87;  text-align:center;">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col-tablet mdl-cell--12-col-phone mdl-cell--middle" style="border: 0px solid #937cfd87;  text-align:center;">
				<h5>Расскажите почему Вы так решили</h5>
			</div>
			<div id="answer1" class="mdl-cell mdl-cell--12-col-tablet mdl-cell--6-col-phone mdl-cell--middle checkbox">
				<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
				  <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
				  <span class="mdl-checkbox__label">Мне понравилась эта инициатива</span>
				</label>
			</div>
			
			<div id="answer2" class="mdl-cell mdl-cell--12-col-tablet mdl-cell--6-col-phone mdl-cell--middle checkbox" >
				<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
				  <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
				  <span class="mdl-checkbox__label">Инициатива сможет увеличить мои капиталы</span>
				</label>
			</div>
			
			<div id="answer3" class="mdl-cell mdl-cell--12-col-tablet mdl-cell--6-col-phone mdl-cell--middle checkbox" >
				<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
				  <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input">
				  <span class="mdl-checkbox__label">Инициатива сократит время на решение задач</span>
				</label>
			</div>
			
		</div>
		
	</div>
	
	<div id="answer-no" class="mdl-cell mdl-cell--6-col mdl-cell--8-col-phone mdl-cell--middle" style="border: 0px solid #937cfd87;  text-align:center;">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col-tablet mdl-cell--12-col-phone mdl-cell--middle" style="border: 0px solid #937cfd87;  text-align:center;">
				<h5>Расскажите почему Вы так решили</h5>
			</div>
			<div id="answer1" class="mdl-cell mdl-cell--12-col-tablet mdl-cell--6-col-phone mdl-cell--middle checkbox">
				<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-4">
				  <input type="checkbox" id="checkbox-4" class="mdl-checkbox__input">
				  <span class="mdl-checkbox__label">Мне не понравилась инициатива</span>
				</label>
			</div>
			
			<div id="answer2" class="mdl-cell mdl-cell--12-col-tablet mdl-cell--6-col-phone mdl-cell--middle checkbox" >
				<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-5">
				  <input type="checkbox" id="checkbox-5" class="mdl-checkbox__input">
				  <span class="mdl-checkbox__label">Инициатива сильно ударит по моим капиталам</span>
				</label>
			</div>
			
			<div id="answer3" class="mdl-cell mdl-cell--12-col-tablet mdl-cell--6-col-phone mdl-cell--middle checkbox" >
				<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-6">
				  <input type="checkbox" id="checkbox-6" class="mdl-checkbox__input">
				  <span class="mdl-checkbox__label">Инициатива повлияет на скопление больших очередей</span>
				</label>
			</div>
			
		</div>
		
	</div>
	
	

	
	
	
	<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-phone mdl-cell--middle" style="text-align:center;">
		<button class="mdl-button mdl-js-button mdl-button--raised text-color">
		  Проголосовать
		</button>
	</div>
	
</div>

        


		
<?php 
return  array(
					'index'=>'Авиабилеты',
					
					);
?>
