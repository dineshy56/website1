<!DOCTYPE html>
<html>
	<head>
		<?php
            include 'head.php';
        ?>
		<title>Account Sign In | Zahlers</title>
		 <meta name="title" content="Account Sign In | Zahlers">
        <meta name="description" content="">
        <meta name="keywords" content="">
		
	</head>
	<body>
		<div class="mainHolder">
			<?php
            include 'header.php';
	        ?>
	       <div class="sign-in-holder">
	       		<div class="sign-in-content">
	       			<div class="table">
	       				<div class="table_cell">
			       			<h1>Sign In</h1>
			       			<h4>Not a member? <a href="<?=$baseurl;?>register.php" class="color">Register here.</a></h4>
			       			<div class="sign-in-inputBox">
			       				<div class="inputbox-holder">
			       					<input type="text" name="emailid" placeholder="Enter Your Email ID">
				       				<div class="error">
				       					<span>Please Enter Your Email Address</span>
				       					<span>Please Enter A Valid Email Address</span>
				       				</div>
			       				</div>
			       				<div class="inputbox-holder">
			       					<input type="text" name="password" placeholder="Enter Your Password">
				       				<div class="error">
				       					<span>Please Enter Your Password</span>
				       				</div>
			       				</div>
			       				<div class="inputbox-holder inputBtn">
			       					<input type="submit" name="signin" value="Sign In">
			       				</div>
			       			</div>
			       			<div class="pageLinkHolder">
			       				<a href="#"><span>Forgot Password?</span></a>
			       				<a href="<?=$baseurl;?>register.php"><span>Create An Account</span></a>
			       			</div>
			       			<div class="socialSeperator">
			       				<span>OR</span>
			       			</div>	
			       			<div class="socialBTNHolder">
			       				<div class="col_50">
			       					<a href="#">
			       						<div class="facebookBtn"><p>Login/Register With Facebook</p></div>
			       					</a>
			       				</div><div class="col_50">
			       					<a href="#">
			       						<div class="googleplusBtn"><p>Login/Register With Google</p></div>
			       					</a>
			       				</div>
			       				
			       			</div>
			       		</div>
			       	</div>
	       		</div>
	       </div>
	        
	        <?php
	            include 'footer.php';
	        ?>
		</div>
	</body>
</html>