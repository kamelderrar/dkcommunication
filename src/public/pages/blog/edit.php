<form role="form" action="./index.php?page=add" method="post">
  <div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" class="form-control" name="titre" id="titre" value="<?php $donnees['titre']; ?>" >
  </div>
   <div class="form-group">
  <label for="categorie">Catégorie</label>
  <select class="form-control" name="categorie"id="categorie" value="<?php $donnees['categorie']; ?>">
	  <option name="communication" id="communication">Communication</option>
	  <option name="marketing" id="marketing">Marketing</option>
	  <option name="print" id="print">Print</option>
	  <option name="web" id="web">Web</option>
  </select>
 </div>
  <div class="form-group">
    <label for="illustration">Illustration</label>
    <input type="file" name="illustration" id="illustration"value="<?php $donnees['illustration']; ?>">
  </div>
  <div class="form-group" >
    <label for="contenu">Contenu</label>
    <textarea name="contenu" id="contenu"rows="20" class="col-lg-12"value="<?php $donnees['contenu']; ?>"></textarea>
  </div>
   <button type="submit" class="btn btn-success" name="submit">Publier</button>
</form>

<?php 
$titre = $_POST['titre'];
$illustration =$_POST['illustration'];
$contenu = $_POST['contenu'];
$categorie = $_POST['categorie'];

$sql1 ="SELECT * from articles Where id={$_GET["id"]}";
$req=mysql_query($sql1)or die(mysql_error());

/*$sql="INSERT INTO `dkblog`.`articles` (`titre`, `illustration`, `contenu`,`categorie`) VALUES ('$titre','$illustration','$contenu','$categorie')";

$req=mysql_query($sql)or die(mysql_error());*/
 ?>