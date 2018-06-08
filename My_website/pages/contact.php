<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='emmj1_17@uni.worc.ac.uk'; // send to this email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email; // information sent from corrosponding input fields below

		if(mail($to, $subject, $message, $headers)){
			echo '<div id="h7" class="alert alert-success"><h7>Message Sent! Thank you we appreciate your opinions</h7></div>';//success message
		}
		
		
		else{
			echo "Something went wrong!"; //error message
		}
	}
?>
<div class="row">
<h2><center>Get in touch, we cant wait to here from you!</center></h2>
</div><!-- end of row -->

<div class="row" style="margin-top: 20px;">

<div id="contactpic1">
    <img src="images/contactpic1.jpg"  alt="contact us" class="col-lg-4 col-lg-offset-1 col-md-3 col-md-offset-1 img-responsive hidden-xs hidden-sm">
</div>


 <div id="contactinfo" class="col-lg-5 col-lg-offset-2 col-md-3 col-md-offset-2 hidden-xs hidden-sm bullets">
     <h2>Contact Details</h2>
     <ul>
  <li><strong>Telephone:</strong><br> 07865577625<br></li>
  <li><strong>Email:</strong> Birdseyeview@Yahoo.co.uk<br></li>
  <li><strong>Address:</strong> <br>134 Groves Street<br>
       Greenlands<br>
         Redditch<br>
         WORCS, B986YP</li>
</ul>  
    
    </div>
</div>
<!-- end of row -->


<div class="row" style="margin-top: 20px;">
	<h2><center>Contact us!</center></h2>
<div class="container col-lg-10 col-lg-offset-1">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">

<div class="form-group form_width">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-6 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
  <div class="col-md-6 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="name" placeholder="Last Name" class="form-control"  type="text">
  </div>
  </div>
</div>
	
  <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
  <div class="col-md-6 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
  </div>
  </div>
</div>
	
<div class="form-group">
  <label class="col-md-4 control-label">Your Message</label>
  <div class="col-md-6 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
 <textarea class="form-control" name="msg" placeholder="Your message"></textarea>
  </div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
  <button type="submit" name="submit"class="btn btn-success" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
<!-- Button -->

</form>
</div>

	
</div><!-- end of row -->
    
