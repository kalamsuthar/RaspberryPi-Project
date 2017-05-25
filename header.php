<style>

.navbar {
  background-color:#021C1E;
  background-image: none;
  background-repeat: no-repeat;
 }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/bootstrap.js"></script>




<nav class="navbar navbar-inverse navbar-fixed-top ">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header">
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
			<a class="navbar-brand" href="index.php">piOT</a>
		</div>
		<div class="collapse navbar-collapse" id="header">
      <ul class="nav navbar-nav">
                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a>
                    </li>

                    <li><a href="about_us.php"><i class="fa fa-user"></i> About</a>
                    </li>

			

</ul>

  <ul class="nav navbar-nav navbar-right ">
				<?php
				session_start();
				if(!isset($_SESSION['user_id'])){
					echo '<li><a href="register-page.php"><span class="glyphicon glyphicon-user"></span> Sign-Up</a></li>';
					echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
				}
				else {
					echo '<li><a href="members-page.php">Hello ' .$_SESSION['username'].'</a></li>';
          echo '<li><a href="change_password.php"><span class="glyphicon glyphicon-edit"></span> Change Password</a></li>';
					echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
				}
	            ?>
			</ul>
		</div>
	</div>
</nav>
