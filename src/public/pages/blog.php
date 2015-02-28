<div id="blog">
<?php 

$sql = "SELECT * from articles ORDER BY id DESC";
$req = mysql_query($sql);
while($donnees=mysql_fetch_assoc($req)){ 
?>

<div id="blog">
<h1><?php echo "{$donnees["titre"]}"; ?></h1>
<h2><?php echo date("j/n/Y",strtotime($donnees["date"])); ?></h2> 
<img src="<?php echo "{$donnees["contenu"]}"?>">
<button>Lire la suite<button>
</div>
<?php
};
?>
</div>
