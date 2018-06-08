<?php

if(isset($_POST['email'])||isset($_POST['password'])){
  if(!$_POST['email']||!$_POST['password']){
    $error = "Please enter an email and password";
    }
		else if(strlen($_POST['password']) < 8)
		{
			$error = "Password must contain atleast 8 characters";
		}
		else if($_POST['password'] !== $_POST['passwordConfirm']) //!== means password must also be case sensitive so if upper/lower used when assigned must same when inputted
		{
			$error = "Password does not match";
		}
	
    if(!$error){
      //NO ERRORS - let's create the account
      //Encrypt the password with a salt
      $encryptedPass = password_hash($_POST['password'],PASSWORD_DEFAULT);
      //INSERT DB
      $query = "INSERT INTO users (user_email, user_password, user_address) VALUES (:email, :password, :address)";
      $result = $DBH->prepare($query);
      $result->bindParam(':email', $_POST['email']);
      $result->bindParam(':password', $encryptedPass);
      $result->bindParam(':address', $_POST['address']);
      $result->execute();

      $to = $_POST['email'];//send to new users email
      $subject = "Welcome to Birds Eye View";

      $message = "
      <html>
      <head>
      <title>Welcome to Birds Eye View</title>
      </head>
      <body>
      <p>Welcome to Birds Eye View Share your experiances with us.</p>
      </body>
      </html>";

      //ALWAYS SET CONTENT-TYPE WHEN SENDING HTML EMAIL
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

      //MORE HEADERS
      $headers .= 'From:<emmj1_17@uni.worc.ac.uk>' . "\r\n";

      mail($to,$subject,$message,$headers);

      echo "<script> window.location.assign('index.php?p=registersuccess'); </script>";
    }
}
?>
<div class="row">
<div class="container col-lg-6 col-lg-offset-3">
  <h1>Register</h1>
  <form action="index.php?p=register" method="post">
    <?php if($error){
      echo '<div class="alert alert-danger" role="alert">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      <span class="sr-only">Error:</span>
      '.$error.'
      </div>';
    } ?>
    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="email" autofocus>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="password">
    </div>
    <div class="form-group">
      <label for="text">Re-enter Password:</label>
      <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm">
    </div>
    <!-- Google Places API uses this field -->
    <div class="form-group">
      <label for="text">Address</label>
      <input type="text" class="form-control" id="placesSearch" name="address">
    </div>

    <button type="submit" class="btn btn-success">Register</button>
  </form>
</div>
</div>
<script src="js/register.js"></script>
