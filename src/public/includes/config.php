<?php 
define ("DB_HOST","localhost");
define ("DB_LOGIN","dk");
define ("DB_PASS","04071984");
define ("DB_BDD","dkblog");

$bdd = mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
mysql_select_db(DB_BDD);
mysql_query("SET NAMES 'utf8'"); 

 ?>