<?php 
if (isset($_POST['recherche'])) {
	if ($_POST['recherche'] !== "") {
		$sql = "SELECT * from articles WHERE  titre  LIKE '%".$_POST['recherche']."%'  
											OR description LIKE '%".$_POST['recherche']."%' " ;
$req = mysql_query($sql);
		$req = mysql_query($sql);
			echo "Résultat de votre recherche : '".$_POST['recherche']."'<br>";
		while ($donnees=mysql_fetch_assoc($req)) {
			?>
			<hr>
<div class="resultatrecherche">
	<div class="row">
		<div class="control">
			<div class="col-lg-5">
				<span class="text-primary"><?php echo "{$donnees["titre"]} ";?></span>

			</div>
			<div class="col-lg-5">
				<?php echo "{$donnees["description"]}";?>
			</div>	
			<div class="col-lg-2">
				<a href="index.php?page=blog/articles&id=<?php echo $donnees['id'];?>"><button class="btn btn-success">Lire l'article</button></a>
			</div>
		</div>
	</div>
</div>

<?php 
		if (empty($donnees)) {
echo "aucun résultat"; 
} }
			
	}else{
		echo "veuillez remplir le champ de recherche <br>";
	}	
}


?>




