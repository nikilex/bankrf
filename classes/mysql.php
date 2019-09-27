<?php
// +---------------------------------------------------------------------------+
// | mysql.php																				|
// +---------------------------------------------------------------------------+
// | Copyright (c) Evgenii Shumeiko 2015-2016. All rights reserved.	|
// | Version       1.00 																		|
// | Last modified 26/03/2016                                          		  		|
// | Email      	no-reply@nicesay.ru                            					|
// | Site				nicesay.ru                                      						|
// +---------------------------------------------------------------------------+
if(!defined('Guard')) die();

class db {

var $db_id = false;
var $query_num = 0;
var $mysql_error = '';
var $mysql_error_num = 0;
var $query_id = false;

	
function connect(){
$db_data = array('host'=>'localhost','name'=>'kaz','user'=>'root','pass'=>'');
$db_location = explode(":", $db_data['host']);
if(isset($db_location[1])) $this->db_id = @mysqli_connect($db_location[0], $db_data['user'], $db_data['pass'], $db_data['name'], $db_location[1]);
else $this->db_id = @mysqli_connect($db_location[0], $db_data['user'], $db_data['pass'], $db_data['name']);
if(!$this->db_id) $this->display_error(mysqli_connect_error(), '1');
mysqli_query($this->db_id, "SET NAMES 'utf8'");
return true;
}
function safesql( $source ){
		if ($this->db_id) return mysqli_real_escape_string ($this->db_id, $source);
		else return mysql_escape_string($source);
}	
function query($query){
if(!$this->db_id) $this->connect();
if(!($this->query_id = mysqli_query($this->db_id, $query))){
$this->mysql_error = mysqli_error($this->db_id);
$this->mysql_error_num = mysqli_errno($this->db_id);
$this->display_error($this->mysql_error, $this->mysql_error_num, $query);
}
$this->query_num ++;
return $this->query_id;
}
	
function get_row($query_id = ''){
if($query_id == '') $query_id = $this->query_id;
return @mysqli_fetch_assoc($query_id);
}
	
function super_query($query, $multi = false){

if(!$multi){
$this->query($query);
$data = $this->get_row();
$this->free();	
return $data;
} else {
$this->query($query);
$rows = array();
while($row = $this->get_row()){ $rows[] = $row; }
$this->free();			
return $rows;
}

}

function num_rows($query_id = ''){
if($query_id == '') $query_id = $this->query_id;
return mysqli_num_rows($query_id);
}
	
function insert_id(){
return mysqli_insert_id($this->db_id);
}

function free($query_id = ''){
if($query_id == '') $query_id = $this->query_id;
@mysqli_free_result($query_id);
}

function close(){
@mysqli_close($this->db_id);
}

function display_error($error, $error_num, $query = ''){
if($query){
$query = preg_replace("/([0-9a-f]){32}/", "********************************", $query);
$query_str = "$query";
}

echo '<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Ошибка</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
<font size="4">Ошибка сервера, попробуйте обновить страницу позже.</font> 
'.$error.'
'.$error_num.'
'.$query_str.'
</body>
</html>';
exit();
}

}
?>