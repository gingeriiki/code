<?php
 	include("config.php");
	session_start();
	$user = $_SESSION['a'];
	$type = $_SESSION['type'];

	if(isset($_POST['changepass']))
  	{
  		$oldpassword = $_POST["oldpassword"];
		$newpassword = $_POST["newpassword"];
		$confirmpassword = $_POST["confirmpassword"];
		
		if($newpassword == $confirmpassword)
		{
			$sql = "SELECT * from account where User_Name = '$user'";
			$sqll = mysqli_query($connect, $sql);
			While($row = mysqli_fetch_row($sqll))
			{
				$pass = "$row[1]";
				if($oldpassword == $pass)
				{
					$ssql = "UPDATE account set Password = '$newpassword' where User_Name = '$user'";
					$ssqll = mysqli_query($connect, $ssql);
					echo"<script>alert('Password successfully changed!');
					window.location='changepassword.php';</script>";
				}
				else
				{
					echo"<script>alert('Please Match The Old Password!');
					window.location='changepassword.php';</script>";
				}
			}
		}
		else
		{
			echo"<script>alert('Please Match The New Password!');
			window.location='changepassword.php';</script>";
		}
  	}
?>

<html>
	<?php include './includes/head.php' ?>

	<body class="bg-light">
		<img class="wave" src="images/background.jpg"> <br><br><br><br>
		<div class="container">
			<section class="section-content py-3">
				<div class="row">
					<?php include './includes/nav.php' ?>
					<main class="col-lg-9">

					<div class = "col-md-10" style = "margin-left:-50px;">
						<center>
							<form class="form-horizontal form-login" role="form" method="POST" action="">
								<center><h4 class="modal-title"><b>Change Password</b></h4></center><br>
								<input type = "password" placeholder = "Old Password" name = "oldpassword" style="border-color: gray;" required><br>
								<input type = "password" placeholder = "New Password"  name = "newpassword" style="border-color: gray;" required><br>
								<input type = "password" placeholder = "Confirm Password"  name = "confirmpassword" style="border-color: gray;" required><br><br>
								<button class = "btn btn-success" name = "changepass">Submit</button>
							</form>
						</center>
					</div>

					</main>
				</div>
			</section>

			</div><!-- container //  -->
	</body>
	<footer style = "background-color:#337ab7;color:white;height:94px;margin-top:80px;"><br>
		<p align = "center">
		Rogationist College<br>
		Km.52 Aguinaldo Highway, Lalaan II, Silang, Cavite<br>
		Developed by RC MIS Team
		</p>
	</footer>
</html>