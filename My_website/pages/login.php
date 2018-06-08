
<?php

if(isset($_POST['email']) || isset($_POST['password'])){
	if(!$_POST['email'] || !$_POST['password']){
		$error = "Please enter an email and password";//if there is error print this out
	}

	if(!$error){
		//No errors - lets get the users account
$query = "SELECT * FROM users WHERE user_email = :email";
		$result = $DBH->prepare($query);
		$result->bindParam(':email', $_POST['email']);
		$result->execute();

		$row = $result->fetch(PDO::FETCH_ASSOC);

		if($row){
		    	//User found - let’s check the password
			if(password_verify($_POST['password'], $row['user_password'])){
				$_SESSION['loggedin'] = true;
		    		$_SESSION['userData'] = $row;

		    		echo "<script>window.location.assign('http://gravityfoot.worcestercomputing.com/My_website/index.php?p=loginsuccess');</script>";//on success user is taken here
			}else{
$error = "Username/Password Incorrect";//error message
			}
		    	
		}else{
		    	$error = "Username/Password Incorrect";//error message
		}

}
}

?>

<div class="row" style="margin-top: 20px;">
<h1 class="mb-3">Login and share your pictures</h1>
</div>

<div class="row" style="margin-top: 20px;">

<div class="card container mt-5 col-lg-6 col-lg-offset-3">
    <div class="card-body">
        
        <form action="index.php?p=login" method="post">
            <?php if($error){
            echo '<div class="alert alert-danger" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            '.$error.'
            </div>';//error message styled
            } ?>
		
            <div class="form-group">
				        
                <label for="email">Email address</label>

                <input type="email" class="form-control" id="email" name="email" placeholder="email" autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
        </form>
    </div>
</div>





</div>