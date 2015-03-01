<a href="./index.php?page=blog/add"><button class="btn btn-success">Créer une news</button></a>
<p></p>
<?php 
$sql = "SELECT * from articles ORDER BY id DESC";
$req = mysql_query($sql);
while($donnees=mysql_fetch_assoc($req)){ 
?>


<div class="row">
	<div class="control">
	<div class="col-lg-5">
		<?php echo "{$donnees["titre"]}";?>
	</div>
	<div class="col-lg-2">
		<a href="index.php?page=blog/articles&id=<?php echo $donnees['id'];?>"><button class="btn btn-success">Lire l'article</button></a>
	</div>
	<div class="col-lg-2">
		<a href="./index.php?page=blog/edit&id=<?php echo $donnees['id'];?>"><button class="btn btn-primary">Modifier</button></a>
	</div>
	<div class="col-lg-2">
		<a href="./index.php?page=blog/control&id=<?php echo $donnees["id"];?>&supp=ok"><button class="btn btn-danger">Supprimer</button></a>
	</div>
	</div>
</div>

<?php
};
?>

<?php 

if(isset($_GET['supp']))
{
	$requete2="DELETE FROM `dkblog`.`articles` WHERE `articles`.`id` = '".$_GET['id']."'";
	mysql_query($requete2)or die(mysql_error());
}

 ?>