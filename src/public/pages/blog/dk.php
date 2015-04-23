<div class="container" style="margin-top:40px">
      <div class="row">
        <div class="col-md-4 col-md-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="titre_connect"> Admin connect</h2>
            </div>
            <div class="panel-body">
              <form role="form" action="./index.php?page=blog/connect" method="POST">
                <fieldset>
                  <div class="row">
                    <div class="center-block">
                      <img class="profile-img"
                        src="img/flaticons/png/blog1.png" alt="dk communication & marketing">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                          </span> 
                          <input class="form-control" placeholder="login"  id="login" name="login" type="text" autofocus>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="glyphicon glyphicon-lock"></i>
                          </span>
                          <input class="form-control" placeholder="Password" name="password" id="password" type="password" value="">
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="submit" name="submit" id="submit"  class="btn btn-lg btn-primary btn-block" value="ok">
                      </div>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
                </div>
        </div>

</div>
<?php

if (isset($_POST['submit'])) {
  $login=$_POST['login'];
  $password=$_POST['password'];

  if ($password!="" && $login!="") {
    if ($password==="04071984" && $login==="dkcom") {
      echo '<br><a href="./index.php?page=blog/control"><button class="btn btn-success">Accès control </button></a>'.PHP_EOL;
    }
  }else{
    echo "Veuillez remplir les champs login et password !!";
  }
  
}


 ?>     
