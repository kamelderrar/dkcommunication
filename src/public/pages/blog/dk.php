
 <form class="form-horizontal" method="post" action="./index.php?page=blog/dk">
  <div class="form-group">
    <label for="login" class="col-sm-2 control-label">Login</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="login" name ="login">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" id="submit" class="btn btn-default">ok</button>
    </div>
  </div>
</form>

<?php


if (isset($_POST['submit'])) {
	$login=$_POST['login'];
	$password=$_POST['password'];

	if ($password!="" && $login!="") {
		if ($password==="04071984" && $login==="dkcom") {
			echo '<a href="./index.php?page=blog/control"><button class="btn btn-success">Accès control </button></a>'.PHP_EOL;
		}
	}else{
		echo "pas bon";
	}
	
}


 ?>
