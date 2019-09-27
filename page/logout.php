<?php 
if(!defined('Guard')) die(); 
session_destroy();
header ("Location: login.php")
?>