<?php 
$titre = $_POST['titre'];
$illustration =$_POST['illustration'];
$contenu = $_POST['contenu'];
$categorie = $_POST['categorie'];
$sql = "SELECT * from articles WHERE id = '".$_GET['id']."'";
$req = mysql_query($sql);
while($donnees=mysql_fetch_assoc($req)){ 
?>


<form role="form" action="./index.php?page=blog/edit" method="post">
  <div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" class="form-control" name="titre" id="titre" value="<?php echo "{$donnees["titre"]}"; ?>" >
  </div>
   <div class="form-group">
  <label for="categorie">Catégorie</label>
  <select class="form-control" name="categorie"id="categorie" value="">
    <option name="web" id="web"><?php echo "{$donnees['categorie']}"; ?></option>
	  <option name="communication" id="communication">Communication</option>
	  <option name="marketing" id="marketing">Marketing</option>
	  <option name="print" id="print">Print</option>
	  <option name="web" id="web">Web</option>
  </select>
 </div>
  <div class="form-group">
    <label for="illustration">Illustration</label>
    <input type="file" name="illustration" id="illustration"value="<?php echo "{$donnees["illustration"]}"; ?>">
  </div>
  <div class="form-group" >
    <label for="contenu">Contenu</label>
    <textarea name="contenu" id="contenu"rows="20" class="col-lg-12"value=""><?php echo "{$donnees["contenu"]}"; ?></textarea>
  </div>
   <button type="submit" class="btn btn-success" name="submit">Modifier l'article</button>
</form>
<a href="./index.php?page=blog/control" class="btn btn-default">Menu de contrôle</a>
<?php }; ?>

<?php 
if (isset($_POST['submit'])) {
  $sql2 = "UPDATE `articles` SET titre='".$titre."',`description`='".$description."',`contenu`='".$contenu."',`illustration`='".$illustration."',`categorie`= '".$categorie."' WHERE id = '".$_GET['id']."'";
  $req2 = mysql_query($sql2) or die(mysql_error());
  echo "Modification effectuée";
}


 ?>