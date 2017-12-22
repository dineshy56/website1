<!DOCTYPE html>
<html>
	<head>
		<?php
            include 'head.php';
        ?>
		<title>My Profile | Zahlers</title>
		 <meta name="title" content="My Profile  | Zahlers">
        <meta name="description" content="">
        <meta name="keywords" content="">
		
	</head>
	<body>
		<div class="mainHolder">
			<?php
            	include 'header.php';
	        ?>
	        <div class="myProfileHolder">
	        	<div class="myprofile_main"> 
					<div class="profile_nav transition">
			            <div class="profile_nav_inner">
			                <div class="profile_nav_inner_Holder">
			                    <img src="images/account/photo.jpg" class="profile_pic ">
			                    <h4>Jonna Dave</h4>
			                </div>
			                <div class="topMenuHolder">
			                    <ul>
			                        <li class="profile_holder activeMenu"><a href="myprofile.php"><img src="images/icons/profle_folder.svg" /><p>Update My Profile</p></a></li><li class="orders_holder"><a href="past-order.php"><img src="images/icons/cart.svg" /><p>View Orders</p></a></li><li class="invite_holder"><a href="invite-friend.php"><img src="images/icons/chat.svg" /><p>Invite Friend</p></a></li>
			                    </ul>
			                </div>
			            </div>
			        </div>
			        <div class="profile_details_holder">
			            <div class="profile_details">
			                <div class="profile_details_inner">
			                	<div class="accordionbtnHolder accordion myprofile">
			                		<button class="accordionBtn">Edit Profile</button>
			                	</div>
								<div class="content">
			                        <div class="contentHolder">
			                            <form>
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
						       				<div class="inputbox-holder inputBtn ">
						       					<input type="submit" name="save" value="Save">
						       				</div>
						                </form>
			                        </div>
			                      
			                    </div>

			                    
			                </div>
			                
			            </div>
			        </div>
				</div>
	        </div>
	        
	        <?php
	            include 'footer.php';
	        ?>

	        <script>
		    var acc = document.getElementsByClassName("accordion");
		    var i;

		    for (i = 0; i < acc.length; i++) {
		      acc[i].onclick = function() {
		        this.classList.toggle("active");
		        var content = this.nextElementSibling;
		        if (content.style.maxHeight){
		          content.style.maxHeight = null;
		        } else {
		          content.style.maxHeight = content.scrollHeight + "px";
		        } 
		      }
		    }
		</script>
		</div>
	</body>
</html>