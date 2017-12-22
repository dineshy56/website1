<!DOCTYPE html>
<html>
	<head>
		<?php
            include 'head.php';
        ?>
		<title>Past order | Zahlers</title>
		 <meta name="title" content="Past order  | Zahlers">
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
			                        <li class="profile_holder "><a href="myprofile.php"><img src="images/icons/profle_folder.svg" /><p>Update My Profile</p></a></li><li class="orders_holder activeMenu"><a href="past-order.php"><img src="images/icons/cart.svg" /><p>View Orders</p></a></li><li class="invite_holder"><a href="invite-friend.php"><img src="images/icons/chat.svg" /><p>Invite Friend</p></a></li>
			                    </ul>
			                </div>
			            </div>
			        </div>
			        <div class="profile_details_holder">
			            <div class="profile_details">
			                <div class="profile_details_inner">
			                	<div class="accordionbtnHolder past-order">
			                		<button class="accordionBtn">My Past Orders</button>
			                	</div>
			                	<div class="orders_details_holder">
			                		<div class="orders_details_head">
			                			<ul>
			                				<li class="date"><h5>Date</h5>
			                				</li><li class="order_number"><h5>Order Number</h5>
			                				</li><li class="order_status"><h5>Order Status</h5>
			                				</li><li class="total"><h5>Total</h5>
			                				</li><li class="invoice"><h5>Invoice</h5>
			                				</li><li class="acc_click"></li>

			                			</ul>
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