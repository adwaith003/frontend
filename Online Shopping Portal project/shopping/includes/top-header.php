<?php 
//session_start();

?>

<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">

<?php if(strlen($_SESSION['login']))
    {   ?>
				<li><a href="#"><i class="icon fa fa-user"></i>Welcome -<?php echo htmlentities($_SESSION['username']);?></a></li>
				<?php } ?>

					<li><a href="my-account.php"><i class="icon fa fa-user"></i>My Account</a></li>
					<li><a href="my-wishlist.php"><i class="icon fa fa-heart"></i>Wishlist</a></li>
					<li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
		     		<li><a href="https://ajaisankar.github.io/Feedback/"><i class="icon fa fa-feedback"></i>FAQ's</a></li> 
					 <li><a href="https://returnpolicygreensphere.nicepage.io/?version=005c6ac3-7cd3-4acc-9dc8-4a128ba9cb0f&uid=3d7ed44a-9af0-4572-8d98-c8fb5d46fbfd"><i class="icon fa fa-feedback"></i>Return Policy</a></li>  
					<?php if(strlen($_SESSION['login'])==0)
    {   ?>
<li><a href="login.php"><i class="icon fa fa-sign-in"></i>Login</a></li>
<?php }
else{ ?>
	
				<li><a href="logout.php"><i class="icon fa fa-sign-out"></i>Logout</a></li>
				<?php } ?>	
				</ul>
			</div><!-- /.cnt-account -->

<div class="cnt-block">
				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
						<a href="track-orders.php" class="dropdown-toggle" ><span class="key">Track Order</b></a>
						
					</li>

				
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->