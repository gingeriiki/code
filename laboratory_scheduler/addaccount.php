<?php
 	include("config.php");
	session_start();
	$user = $_SESSION['a'];
	$type = $_SESSION['type'];

	if($_SESSION['b'] != 1)
	{
		echo"<script>window.location='index.php';</script>";
	}

	if(isset($_POST['addaccount']))
  	{
  		$empno = $_POST["empno"];
		$empname = $_POST["empname"];
		$empname = strtoupper($empname);
		$depttype = $_POST["depttype"];
		$usertype = $_POST["usertype"];
		
		$sel = "SELECT * FROM account WHERE Employee_No = '$empno'";
		$sel_2 = mysqli_query($connect, $sel);
		if(mysqli_num_rows($sel_2) == 0)
	    {
	    	$ins = "INSERT INTO account VALUES('$empno', 'rogate', '$empno', '$empname', '$depttype', '$usertype', '')";
	    	mysqli_query($connect, $ins);
			echo"<script>alert('$empname`s Account Added!');
			window.location='addaccount.php';</script>";
	    }
	    else
		{
			echo"<script>alert('Account Already Exist!');
			window.location='addaccount.php';</script>";
		}
  	}
?>

<html>
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
								<center><h4 class="modal-title"><b>Add User</b></h4></center>
								<input type = "number" placeholder = "Employee No"  name = "empno" style="border-color: gray;" required><br>
								<input type = "text" placeholder = "Employee Name"  name = "empname" style="border-color: gray;" required><br>
								<select name="depttype" id="depttype" style = "width:310px; height:45px; margin-bottom: 10px; margin-top: 10px; border-radius:6px; border-color: gray; text-align:center;" required>
									<option value="" style="text-align:center; font-color: gray;">Department
									<option value="JHS">JHS
									<option value="SHS">SHS
									<option value="COL">COL
								</select><br>
								<select name="usertype" id="usertype" style = "width:310px; height:45px; margin-bottom: 10px; margin-top: 10px; border-radius:6px; border-color: gray; text-align:center;" required>
									<option value="" style="text-align:center; color: gray;">Account type
									<!-- <option value="principal">Principal -->
									<option value="labcoordinator">Lab Coordinator
									<option value="teacher">Teacher
								</select><br><br>
								<button class = "btn btn-success" name = "addaccount">Submit</button>
							</form>
						</center>
					</div>

					</main>
				</div>
			</section>

			</div><!-- container //  -->
	</body>

	<?php include './includes/footer.php' ?>
	
</html>