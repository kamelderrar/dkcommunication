<?php 

$sql = "DELETE FROM articles Where id = {$_GET["id"]}";
$req = mysql_query($sql);
die('<META HTTP-equiv="refresh" content=0;URL=./index.php?page=control>'); 

 ?>