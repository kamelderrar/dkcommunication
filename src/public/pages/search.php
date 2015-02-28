<?php 
if (isset($_POST['bouton'])) {
$sql = "SELECT * from articles WHERE * = '".$_GET['recherche']."'";
$req = mysql_query($sql);
$donnees=mysql_fetch_assoc($req);
}
echo $donnees['titre'];