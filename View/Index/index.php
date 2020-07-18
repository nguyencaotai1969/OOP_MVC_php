<?php
$msg = "";
  if(isset($_SESSION["btnsubmit"])){
    header("location:?controller=index&action=index");
  }
?>

<!DOCTYPE html>
<html lang='en'>

<head>

  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Login</title>
</head>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
<link rel='stylesheet' href='css/login.css'>

<body>
  <div class='container'>
    <div id='loginbox' class='mainbox col-md-12 col-md-offset-12 col-sm-12 col-sm-offset-12'>
      <div class='panel panel-default'>
        <div class='panel-heading'>
          <div class='panel-title text-center'>
            <img id='profile-img' class='rounded-circle profile-img-card' src='img/hacker.png' />
            <p id='profile-name' class='profile-name-card'></p>
          </div>
        </div>
        <div class='panel-body'>
          <?php
if ( isset( $error ) ) {
    echo "<b style='color:red'>".$error.'</b>';
}

?>
          <form name='form' id='form' action="" class='form-horizontal' enctype='multipart/form-data' method='POST'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
              <input id='user' type='text' class='form-control' name='username' placeholder='Nhập UserName'>
              <input id='user' type='password' class='form-control' name='password' placeholder='Nhập Password'>
            </div>
            <div class='form-group'>
              <!-- Button -->
              <div class='col-sm-12 '>
                <button type='submit' name='btnsubmit' href='#' class='btn btn-primary pull-right glyphicon glyphicon-off'>
                  Log in</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<div id='particles'></div>
<Script src='js/script.js'></Script>

</html>