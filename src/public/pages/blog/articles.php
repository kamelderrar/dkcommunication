<div id="articles">
<?php 

$sql = "SELECT * from articles WHERE id = '".$_GET['id']."'";
$req = mysql_query($sql);
while($donnees=mysql_fetch_assoc($req)){ 
?>
<div id="articles">
<div class="row">

	<div class="col-lg-9">
		<div class="article_blog">
		<h1><?php echo "{$donnees["titre"]}"; ?></h1>
		<h3><?php echo date("j/n/Y",strtotime($donnees["date"])); ?> | <?php echo "{$donnees["categorie"]}"; ?></h3> 
		<div class="container">
		<?php echo "<img src='img/illustrations/{$donnees["illustration"]}'/>"?>
		</div>	
		<p><?php echo "{$donnees["contenu"]}"; ?></p> 

		</div>
		<?php
		};
		?>
	</div>
	<div class="col-lg-3 col-lg-offset-12">
	<div class="bloccategories">
	<div class="categories">
		<h4>Catégories</h4>
		<a href="#">Communication</a><br>
		<a href="#">Marketing</a><br>
		<a href="#">Web</a><br>
		<a href="#">Print</a><br>

	</div>
	<div class="motscles">
		<h4>Mots clés</h4>
		<a href="#">Stratégie</a><br>
		<a href="#">Opportunités</a><br>
		<a href="#">Design</a><br>
		<a href="#">Tendance</a><br>


		<a href="#">Communication</a><br>
		<a href="#">Marketing</a><br>
		<a href="#">Web</a><br>
		<a href="#">Print</a><br>

	</div>
	</div>
	</div>
</div>
</div>