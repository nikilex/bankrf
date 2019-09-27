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
		<p class="text-color" align="center">Пусть будет простой опрос с вопросами</p>
	</div>
	
	<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-phone mdl-cell--middle" style="border: 0px solid #937cfd87;  text-align:center;">
			
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col-tablet mdl-cell--12-col-phone mdl-cell--middle" style="border: 0px solid #937cfd87;  text-align:center;">
				<h5>Вопрос по общественным вопросам 1</h5>
			</div>
			<div id="answer1" class="mdl-cell mdl-cell--2-col-tablet mdl-cell--2-col-phone mdl-cell--middle">
				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
			  <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
			  <span class="mdl-radio__label">Да</span>
			</label>
		
			</div>
			<div id="answer2" class="mdl-cell mdl-cell--2-col-tablet mdl-cell--2-col-phone mdl-cell--middle" >
				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
			  <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
			  <span class="mdl-radio__label">Нет</span>
			</label>
			</div>
		</div>
		<hr>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col-tablet mdl-cell--12-col-phone mdl-cell--middle" style="border: 0px solid #937cfd87;  text-align:center;">
				<h5>Вопрос по общественным вопросам 2</h5>
			</div>
			<div id="answer1" class="mdl-cell mdl-cell--2-col-tablet mdl-cell--2-col-phone mdl-cell--middle ">
				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
			  <input type="radio"  id="option-3" class="mdl-radio__button" name="options2" value="1" checked>
			  <span class="mdl-radio__label">Да</span>
			</label>
		
			</div>
			<div id="answer2" class="mdl-cell mdl-cell--2-col-tablet mdl-cell--2-col-phone mdl-cell--middle" >
				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
			  <input type="radio" id="option-4" class="mdl-radio__button" name="options2" value="2">
			  <span class="mdl-radio__label">Нет</span>
			</label>
			</div>
		</div>
		<hr>
		
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col-tablet mdl-cell--12-col-phone mdl-cell--middle" style="border: 0px solid #937cfd87;  text-align:center;">
				<h5>Вопрос по общественным вопросам 3</h5>
			</div>
			<div id="answer1" class="mdl-cell mdl-cell--2-col-tablet mdl-cell--2-col-phone mdl-cell--middle ">
				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-5">
			  <input type="radio"  id="option-5" class="mdl-radio__button" name="options3" value="1" checked>
			  <span class="mdl-radio__label">Да</span>
			</label>
		
			</div>
			<div id="answer2" class="mdl-cell mdl-cell--2-col-tablet mdl-cell--2-col-phone mdl-cell--middle" >
				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-6">
			  <input type="radio" id="option-6" class="mdl-radio__button" name="options3" value="2">
			  <span class="mdl-radio__label">Нет</span>
			</label>
			</div>
		</div>
		<hr>
		
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
