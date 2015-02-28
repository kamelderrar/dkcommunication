<form  role="form" action="./index.php?page=connect" method="post" class="form-horizontal" >
 <div class="form-group">	
	<label for="login"class="col-sm-2 control-label">Identifiant</label>
	<div class="col-sm-10">
	<input type="text" id="login" name="login" class="form-control">
	</div>	
	<label for="pass"class="col-sm-2 control-label">Mot de passe</label>
	<div class="col-sm-10">
	<input type="password" name="pass" id="pass"class="form-control">
	</div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
	<input type="submit" value="Se connecter" class="btn-success">
	<input type="reset" value="Effacer"class="btn-danger">
	</div>
 </div>
</form>
<?php 
if (isset($_POST['submit'])) {
	if (($_POST['login'] == "kamel") AND ($_POST['pass']== "1234")) {
		echo'cool';
		header("location :./index.php?page=add");
	}else{
		echo'veuillez renseigner un identifiant';
	}
	if ($_POST['pass']== "1234") {
		echo('cool');
	}else{
		echo'veuillez renseigner un mot de passe';
	}
}



 ?>
