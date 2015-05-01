<div id="articles">
<?php
$sql = "SELECT * from articles WHERE id = '".$_GET['id']."'";
$req = mysql_query($sql);
while($donnees=mysql_fetch_assoc($req)){ 
?>
<div id="blog">
<div class="row">
	<div class="article_blog">
	<div class="col-lg-9">
		<h1><?php echo "{$donnees["titre"]}"; ?></h1>
		<h3><?php echo date("j/n/Y",strtotime($donnees["date"])); ?> | <?php echo "{$donnees["categorie"]}"; ?></h3> 
		<div class="container">
		<?php echo "<img src='img/illustrations/{$donnees["illustration"]}'/>"?>
		</div>
		</div>
	<div class="col-lg-3">
			<div class="bloccategories">
	<div class="categories">

		<h4>Catégories</h4>
<?php
$sql2 = "SELECT DISTINCT categorie from articles";
$req2 = mysql_query($sql2);
while($donnees2=mysql_fetch_assoc($req2)){  
	$donnees2["categorie"]=$donnees2["categorie"]
?>
		<a href="./index.php?page=blog/blog_categorie&categorie=<?php echo strtolower($donnees2["categorie"]);?>"><?php echo  "{$donnees2["categorie"]}"; ?></a><br>				
<?php
};
?>
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
	</div>		</div>

	
</div>
	</div>		
<div class="row">
<div class="col-lg-12">

	<p><?php echo "{$donnees["contenu"]}"; ?></p> 

</div>
</div>
		

<?php
};
?>





</div>

