<?php
 	include("config.php");
	session_start();
	$_SESSION['b'] = 0;
	
	if(isset($_POST['loginbutton']))
  	{
  		$a = $_POST['username'];
		$b = $_POST['password'];

		$sql = "SELECT * FROM account WHERE User_Name = '$a'";
		$sqll = mysqli_query($connect, $sql);
		if(mysqli_num_rows($sqll) > 0)
		{
			$row = mysqli_fetch_assoc($sqll);
			if($b  == $row["Password"])
			{
				$_SESSION['type'] = $row["User_Type"];
				$_SESSION['userdept'] = $row["Department"];
				$_SESSION['a'] = $a;
				$_SESSION['b'] = 1;
				echo"<script>window.location='adminindex.php';</script>";
			}
			else
			{
				echo"<script>alert('Wrong Password!');
				window.location='index.php';</script>";
			}
		}
		else
		{
			echo"<script>alert('Username does not Exist!');
			window.location='index.php';</script>";
		}
		// $sql = "SELECT * FROM account WHERE User_Name = '$a'";
		// $sqll = mysqli_query($connect, $sql);
		// While($row = mysqli_fetch_row($sqll))
		// {
		// 	$users = "$row[0]";
		// 	$pass = "$row[1]";
		// 	$type = "$row[5]";
		// }

		// if($users == 'admin')
		// {
		// 	if($b == $pass)
		// 	{
		// 		$_SESSION['a'] = $a;
		// 		$_SESSION['type'] = $type;
		// 		$_SESSION['b'] = 1;
		// 		echo"<script>window.location='adminindex.php'</script>";
		// 	}
		// 	else
		// 	{
		// 		echo"<script>alert('Admin's Password is Incorrect');
		// 		window.location='index.php';</script>";
		// 	}
		// }
		// else
		// {
		// 	if($type == 'labcoordinator')
		// 	{
		// 		if($b == $pass)
		// 		{
		// 			$_SESSION['a'] = $a;
		// 			$_SESSION['type'] = $type;
		// 			$_SESSION['b'] = 1;
		// 			echo"<script>window.location='adminindex.php'</script>";
		// 		}
		// 		else
		// 		{
		// 			echo"<script>alert('User's ID or Password is Incorrect');
		// 			window.location='index.php';</script>";
		// 		}
		// 	}
		// 	else
		// 	{
		// 		if($b == $pass)
		// 		{
		// 			$_SESSION['a'] = $a;
		// 			$_SESSION['type'] = $type;
		// 			$_SESSION['b'] = 1;
		// 			echo"<script>window.location='adminindex.php'</script>";
		// 		}
		// 		else
		// 		{
		// 			echo"<script>alert('User's ID or Password is Incorrect');
		// 			window.location='index.php';</script>";
		// 		}
		// 	}
		// }
  	}
?>

<html>
	<head>
		<title>Comp Lab Scheduler</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="refresh" content="300" url="<?php echo $_SERVER['PHP_SELF']; ?>">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel = "icon" type = "image/png" href = "images/rclogo.png" />
        	<script type="text/javascript" src="date_time.js"></script>
		<script src="script.js"></script>
		
		<style>

			body {
			  	background-color: lightblue;
			}

		td{
			padding:10px;
		}
		th{
			text-align:center;
		}
			.form-login{
						margin-top:-10px;
						background-color:white;
						padding-bottom:30px;
						padding-left:20px;
						padding-right:20px;
						padding-top:30px;
						border-radius:5px;
						border-color:#d2d2d2;
						box-shadow:0px 0px 20px grey;
						width:350px;
					}

			.wave{
				position: fixed;
				bottom: 0;
				left: 0;
				height: 100%;
				width:100%;
				z-index: -1;
			}

			input{
					width:100%;
					padding:10px;
					margin:10px 0;
					
					display:inline-block;
					border:1px solid #ccc;
					border-radius:7px;
					text-align:center;
					font-size:15px;
					}
			.logo{width:30%;height:80px;}
			@media screen and (max-width: 767px) {
				.logo{width:100%;height:10%;}
			}
			@media screen and (min-width: 768px) and (max-width: 1024px){
				.logo{width:80%;height:10%;}
			}
		</style>
	</head>
	<header> <center>
			<img src="images/lablogo2.png" style ="width: 530px; height: 150px;" class = "logo">
</center>
	</header>
	
	<body>
		<img class="wave" src="images/background.jpg">
		<div class="container">
			<div class = "row">
				<div class="col-md-12">
					<center> </br>
						<form class="form-horizontal form-login" role="form" name="form1" action='' method='POST'>
							<img src="images/rclogo.png" style="width:100px;height:121px;"></br></br>
							<label name="text123">Employee No</label>
							<input type="text" name="username" autofocus /required>
							<label name="pass">Password</label>
							<input type="password" name="password" /required> <br>
							<!-- <p><a href="#" class = "forgotpassword"style = "float:left;">Forgot Password?</a></p> -->
							<br>
							<input type="submit" class="btn btn-primary" value="Log In" name="loginbutton">
						</form>
						<!-- <p>Don't have an Account?<a href="#" class = "signup"> Sign up</a></p> -->
					</center>
				</div>
			</div>
		</div>
	</body>
	<footer style = "background-color:#337ab7;color:white;height:94px;margin-top:121px;"><br>
		<p align = "center">
		Rogationist College<br>
		Km.52 Aguinaldo Highway, Lalaan II, Silang, Cavite<br>
		Developed by RC MIS Team
		</p>
	</footer>
</html>