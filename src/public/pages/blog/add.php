<form role="form" action="./index.php?page=blog/add" method="POST">
  <div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" class="form-control" id="titre"name="titre"  >
  </div>
   <div class="form-group">
  <label for="categorie">Catégorie</label>
  <select class="form-control" name="categorie"id="categorie">
	  <option name="communication" id="communication">Communication</option>
	  <option name="marketing" id="marketing">Marketing</option>
	  <option name="print" id="print">Print</option>
	  <option name="web" id="web">Web</option>
  </select>
 </div>
  <div class="form-group">
    <label for="illustration">Illustration</label>
    <input type="file" id="illustration"name="illustration" >
  </div>
  <div class="form-group" >
    <label for="description">Desciption</label>
    <textarea  id="description" name="description"rows="3" class="col-lg-12"></textarea>
  </div>
  <div class="form-group" >
    <label for="contenu">Contenu</label>
    <textarea  id="contenu" name="contenu"rows="20" class="col-lg-12"></textarea>
  </div>
   <button type="submit" class="btn btn-success"  id="submit"name="submit">Publier</button>
</form>

<?php 


if (isset($_POST['submit'])) {
  $errors=[];
  $titre = $_POST['titre'];
  $illustration =$_POST['illustration'];
  $categorie = $_POST['categorie'];
  $contenu = $_POST['contenu'];
  $description = $_POST['description'];

    if (empty($titre)) {
      array_push($errors,"Champs titre vide!!");
    }
    if (empty($contenu)) {
      array_push($errors,"Champs contenu vide!!");
    }
      if (empty($description)) {
      array_push($errors,"Champs description vide!!");
    }

    var_dump($errors);


/*if(empty($errors)){

}*/

if($errors!=""){
    echo "<ul>";
    foreach ($errors as $key => $error) {
      echo "<li>" . $error . "</li>";
    };
    echo "</ul>";
};


if(empty($errors)){
    $sql="INSERT INTO `dkblog`.`articles` (`titre`, `illustration`, `contenu`, `categorie`, `description`) VALUES ('$titre','$illustration','$contenu','$categorie',`description`)" or die(mysql_error()); ;
    $req= mysql_query($sql)or die(mysql_error());
    echo "Enregistrement effectuée";
}};


 ?>
