<!DOCTYPE html>
<html>
	<head>
		<?php
            include 'head.php';
        ?>
		<title>Account Register | Zahlers</title>
		 <meta name="title" content="Account Register | Zahlers">
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
			       			<h1>Register</h1> 
			       			<h4>Already A Member? <a href="<?=$baseurl;?>sign-in.php" class="color">Sign In Here.</a></h4>
			       			<div class="sign-in-inputBox ">
			       				<div class="inputbox-holder col_50">
			       					<input type="text" name="fname" placeholder="First Name">
				       				<div class="error">
				       					<span>Please Enter Your First Name</span>
				       				</div>
			       				</div><div class="inputbox-holder col_50">
			       					<input type="text" name="lname" placeholder="Last Name">
				       				<div class="error">
				       					<span>Please Enter Your Last Name</span>
				       				</div>
			       				</div>
			       				<div class="inputbox-holder col_50">
			       					<input type="text" name="phoneNumber" placeholder="Phone Number">
				       				<div class="error">
				       					<span>Please Enter Your Phone Number</span>
				       				</div>
			       				</div><div class="inputbox-holder col_50">
			       					<input type="text" name="emailid" placeholder="Email Address">
				       				<div class="error">
				       					<span>Please Enter Your Email Address</span>
				       					<span>Please Enter A Valid Email Address</span>
				       				</div>
			       				</div>
			       				<div class="inputbox-holder col_50">
			       					<input type="text" name="phoneNumber" placeholder="City">
				       				<div class="error">
				       					<span>Please Enter Your City</span>
				       				</div>
			       				</div><div class="inputbox-holder col_50">
			       					<select>
			       						<option>Select Gender</option>
			       						<option>Male</option>
			       						<option>Female</option>
			       					</select>
				       				<div class="error">
				       					<span>Please Enter Your Email Address</span>
				       					<span>Please Enter A Valid Email Address</span>
				       				</div>
			       				</div>

			       				<div class="inputbox-holder col_50">
			       					<input type="text" name="password" placeholder="Password">
				       				<div class="error">
				       					<span>Please Enter Your Password</span>
				       				</div>
			       				</div><div class="inputbox-holder col_50">
			       					<input type="text" name="password" placeholder="Confirm Password">
				       				<div class="error">
				       					<span>Please Confirm Your Password</span>
				       				</div>
			       				</div>
			       				<div class="terms_check_holder">
	                                <input type="checkbox" class="termCheck" name="register_form_agreement" value="1" checked=""><p class="termCheckDetails">By signing up, I agree to Zahlers <a href="#" target="_blank" class="color">Terms of Service</a>, <a href="#" target="_blank" class="color">Privacy Policy </a>and <a href="#" target="_blank" class="color">Refunds and Cancellation</a> Policy.</p>
									<div class="error">
										<span>You Have Not Agreed To Our Terms of Service, Privacy Policy and Refunds and Cancellation Policy.</span>
									</div>
	                            </div>
			       				<div class="inputbox-holder inputBtn registerbtn_holder">
			       					<input type="submit" name="signin" value="Register">
			       				</div>
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