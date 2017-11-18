<?php 
define ("DB_HOST","localhost");
define ("DB_LOGIN","");
define ("DB_PASS","");
define ("DB_BDD","");

$bdd = mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
mysql_select_db(DB_BDD);
mysql_query("SET NAMES 'utf8'"); 

 ?>
