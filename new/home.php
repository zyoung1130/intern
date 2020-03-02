<?php
session_start();
require_once("user.login.php");
$login = new USER();

if(isset($_POST["fr_login"])){
  $userid = strip_tags($_POST["fr_email"]);
  $userpass = strip_tags($_POST["fr_password"]);

  $success = $login->S_user_login($userid,$userpass);
  if($success != "")
  {
    if($success == 1){
      $_SESSION["userid"] = $userid;
      header("Location: index.php");
    }
    else
    if($success == 0){
      header("Location: index.php");
    }
  }
  else
  {
    echo"Userid or Password was incorrect.";
  }

}
 ?>
<html>
<head>
</head>
<body>
  <form action="" method="POST">
  <input class="form-control" name="fr_email" placeholder="Email" required="" autofocus />
  <input type="password" class="form-control" name="fr_password" placeholder="Password" required="" />

  <button type="submit" name="fr_login" class="btn btn-default">
                	<i class="glyphicon glyphicon-log-in"></i> &nbsp; SIGN IN
				</button>
  </form>
</body>
</html>
