<!DOCTYPE html>
<html>
	<head>
		<?php
            include 'head.php';
        ?>
		<title>Invite Friend | Zahlers</title>
		 <meta name="title" content="Invite Friend  | Zahlers">
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
			                        <li class="profile_holder "><a href="myprofile.php"><img src="images/icons/profle_folder.svg" /><p>Update My Profile</p></a></li><li class="orders_holder"><a href="past-order.php"><img src="images/icons/cart.svg" /><p>View Orders</p></a></li><li class="invite_holder activeMenu"><a href="invite-friend.php"><img src="images/icons/chat.svg" /><p>Invite Friend</p></a></li>
			                    </ul>
			                </div>
			            </div>
			        </div>
			        <div class="profile_details_holder">
			            <div class="profile_details">
			                <div class="profile_details_inner">
			                	<div class="accordionbtnHolder invite-friend">
			                		<button class="accordionBtn">Invite Friends</button>
			                	</div>
			                	<div class="Invitecontent">
			                		<p>Invite your friends to join Ace Blend</p>
			                		<div class="InvitecontentInputBox">
			                			<div class="inputbox-holder">
			                				<input type="text" name="" placeholder="Enter Email Address">
				                			<div class="error">
						       					<span>Please Enter Your Email Address</span>
						       					<span>Please Enter A Valid Email Address</span>
						       				</div>
			                			</div>
			                			<div class="inputbox-holder">
			                				<input type="submit" name="" value="Invite Friend">
				                		</div>
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
		</div>
	</body>
</html>