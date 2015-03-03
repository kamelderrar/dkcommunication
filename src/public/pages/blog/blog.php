<?php 
$sql = "SELECT * from articles ORDER BY id DESC";
$req = mysql_query($sql);
while($donnees=mysql_fetch_assoc($req)){ 
?>

<div id="blog">
	<div class="extrait_blog">
		<div class="row">
			<div class="col-lg-6">	
				<div class="illustration">
				<!-- <img src="img/illustrations/service_client.jpg"> -->
				<?php echo "<img src='img/illustrations/{$donnees["illustration"]}'/>"?>
				</div>
			</div>
			<div class="col-lg-6 	">	
				<h1><?php echo "{$donnees["titre"]}"; ?></h1>
				<h3><?php echo date("j/n/Y",strtotime($donnees["date"])); ?> | <?php echo "{$donnees["categorie"]}"; ?></h3> 
				<h4><?php echo "{$donnees["description"]}"; ?></h4>
				<a href="index.php?page=blog/articles&id=<?php echo $donnees['id'];?>"><button class="btn btn-success">Lire la suite</button></a>
			</div>
		</div>
	</div>
	<?php } ?>

</div>

