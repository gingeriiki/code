<?php
 	include("config.php");
	session_start();
	$user = $_SESSION['a'];
	$type = $_SESSION['type'];
	$userdept = $_SESSION['userdept'];

	if($_SESSION['b'] != 1)
	{
		echo"<script>window.location='index.php';</script>";
	}

	date_default_timezone_set("Asia/Manila");
	$datetoday = date("M d, Y");
	$yeartoday = date("Y");	
	$host =  gethostbyaddr($_SERVER['REMOTE_ADDR']);
	$time = date("H:i:s");

	if(isset($_POST['addsched'])){
		if($type == 'labcoordinator' || $type == 'admin' ){
			$empno = $_POST["empno"];
			$dept = $_POST["dept"];
			// $dept = $userdept;
			$lab = $_POST["lab"];
			$date = $_POST["date"];
			$day = date('D', strtotime($date));
			$date = date('M d, Y', strtotime($date));
			$datedel = date('M d, Y', strtotime($date));
			// $datedel = date('M d, Y', strtotime($date.'+1 days'));
			$sect = $_POST["sect"];
			$subj = $_POST["subj"];
			$stime = $_POST["stime"];
			$etime = $_POST["etime"];
			$schedule =  $day.", ".$lab.", ".$stime."-".$etime;
			$remarks = $_POST["remarks"];
			$sel = "SELECT * FROM account WHERE Employee_No = '$empno'";
			$sel_run = mysqli_query($connect, $sel);
			while($row = mysqli_fetch_row($sel_run)){
				$empname = "$row[3]";
			}

			$stimee = date('H:i:s', strtotime($stime. ' +1 minutes'));
			$etimee = date('H:i:s', strtotime($etime. ' -1 minutes'));

			$try = "SELECT * FROM tbl_lab WHERE Day = '$day' AND Lab = '$lab' AND '$stimee' BETWEEN Start_Time AND End_Time";
			$runtry = mysqli_query($connect, $try);
			if(mysqli_num_rows($runtry) == 0)
			{
				$try2 = "SELECT * FROM tbl_lab WHERE Day = '$day' AND Lab = '$lab' AND '$etimee' BETWEEN Start_Time AND End_Time";
				$runtry2 = mysqli_query($connect, $try2);
				if(mysqli_num_rows($runtry2) == 0)
				{
					$try3 = "SELECT * FROM tbl_lab WHERE Day = '$day' AND Lab = '$lab' AND Start_Time  BETWEEN '$stimee' AND '$etimee'";
					$runtry3 = mysqli_query($connect, $try3);
					if(mysqli_num_rows($runtry3) == 0)
					{
						$try4 = "SELECT * FROM tbl_lab WHERE Day = '$day' AND Lab = '$lab' AND End_Time  BETWEEN '$stimee' AND '$etimee'";
						$runtry4 = mysqli_query($connect, $try4);
						if(mysqli_num_rows($runtry4) == 0)
						{
							$try5 = "SELECT * FROM tbl_lab_makeup WHERE Day = '$day' AND Lab = '$lab' AND '$stimee' BETWEEN Start_Time AND End_Time AND Flag = 'true'";
							$runtry5 = mysqli_query($connect, $try5);
							if(mysqli_num_rows($runtry5) == 0)
							{
								$try6 = "SELECT * FROM tbl_lab_makeup WHERE Day = '$day' AND Lab = '$lab' AND '$etimee' BETWEEN Start_Time AND End_Time AND Flag = 'true'";
								$runtry6 = mysqli_query($connect, $try6);
								if(mysqli_num_rows($runtry6) == 0)
								{
									$try7 = "SELECT * FROM tbl_lab_makeup WHERE Day = '$day' AND Lab = '$lab' AND Start_Time BETWEEN '$stimee' AND '$etimee' AND Flag = 'true'";
									$runtry7 = mysqli_query($connect, $try7);
									if(mysqli_num_rows($runtry7) == 0)
									{
										$try8 = "SELECT * FROM tbl_lab_makeup WHERE Day = '$day' AND Lab = '$lab' AND End_Time BETWEEN '$stimee' AND '$etimee' AND Flag = 'true'";
										$runtry8 = mysqli_query($connect, $try8);
										if(mysqli_num_rows($runtry8) == 0)
										{	
											$ins="INSERT INTO tbl_lab_makeup VALUES ('$empno', '$empname', '$dept', '$subj', '$sect', '$stime', '$etime', '$day', '$lab', '', '$date', '$datedel', 'true', '$remarks')";
											mysqli_query($connect, $ins);

											$history = "INSERT INTO history VALUES('', '$empno','$empname','$schedule','Add Unplanned Schedule','$host','$user','$datetoday','$time')"; 
											mysqli_query($connect, $history);

											echo"<script>alert('$empname`s Unplanned Schedule Added!');
											window.location='addsched_unofficial.php';</script>";
										}
										else
										{
											echo"<script>alert('Please check the start or end time of the schedule. It overlaps the existing schedule.');
											window.location='addsched_unofficial.php';</script>";
										}
									}
									else
									{
										echo"<script>alert('Please check the start or end time of the schedule. It overlaps the existing schedule.');
										window.location='addsched_unofficial.php';</script>";
									}
								}
								else
								{
									echo"<script>alert('Please check the start or end time of the schedule. It overlaps the existing schedule.');
									window.location='addsched_unofficial.php';</script>";
								}
							}
							else
							{
								echo"<script>alert('Please check the start or end time of the schedule. It overlaps the existing schedule.');
								window.location='addsched_unofficial.php';</script>";
							}
						}
						else
						{
							echo"<script>alert('Please check the start or end time of the schedule. It overlaps the existing schedule.');
							window.location='addsched_unofficial.php';</script>";
						}
					}
					else
					{
						echo"<script>alert('Please check the start or end time of the schedule. It overlaps the existing schedule.');
							window.location='addsched_unofficial.php';</script>";
					}
				}
				else
				{
					echo"<script>alert('Please check the start or end time of the schedule. It overlaps the existing schedule.');
					window.location='addsched_unofficial.php';</script>";
				}
			}
			else
			{
				echo"<script>alert('Please check the start or end time of the schedule. It overlaps the existing schedule.');
				window.location='addsched_unofficial.php';</script>";
			}
		}
		else{
			$empno = $user;
			$dept = $_POST["dept"];
			// $dept = $userdept;
			$lab = $_POST["lab"];
			$date = $_POST["date"];
			$day = date('D', strtotime($date));
			$date = date('M d, Y', strtotime($date));
			$datedel = date('M d, Y', strtotime($date));
			// $datedel = date('M d, Y', strtotime($date.'+1 days'));
			$sect = $_POST["sect"];
			$subj = $_POST["subj"];
			$stime = $_POST["stime"];
			$etime = $_POST["etime"];
			$schedule =  $day.", ".$lab.", ".$stime."-".$etime;
			$remarks = $_POST["remarks"];
			$sel = "SELECT * FROM account WHERE Employee_No = '$empno'";
			$sel_run = mysqli_query($connect, $sel);
			while($row = mysqli_fetch_row($sel_run)){
				$empname = "$row[3]";
			}

			$datetoday = date("M d, Y");
			$stimee = date('H:i:s', strtotime($stime. ' +1 minutes'));
			$etimee = date('H:i:s', strtotime($etime. ' -1 minutes'));
			
			$try = "SELECT * FROM tbl_lab WHERE Day = '$day' AND Lab = '$lab' AND '$stimee' BETWEEN Start_Time AND End_Time";
			$runtry = mysqli_query($connect, $try);
			if(mysqli_num_rows($runtry) == 0)
			{
				$try2 = "SELECT * FROM tbl_lab WHERE Day = '$day' AND Lab = '$lab' AND '$etimee' BETWEEN Start_Time AND End_Time";
				$runtry2 = mysqli_query($connect, $try2);
				if(mysqli_num_rows($runtry2) == 0)
				{
					$try3 = "SELECT * FROM tbl_lab WHERE Day = '$day' AND Lab = '$lab' AND Start_Time BETWEEN '$stimee' AND '$etimee'";
					$runtry3 = mysqli_query($connect, $try3);
					if(mysqli_num_rows($runtry3) == 0)
					{
						$try4 = "SELECT * FROM tbl_lab WHERE Day = '$day' AND Lab = '$lab' AND End_Time BETWEEN '$stimee' AND '$etimee'";
						$runtry4 = mysqli_query($connect, $try4);
						if(mysqli_num_rows($runtry4) == 0)
						{
							$try5 = "SELECT * FROM tbl_lab_makeup WHERE Day = '$day' AND Lab = '$lab' AND '$stimee' BETWEEN Start_Time AND End_Time  AND Flag = 'true'";
							$runtry5 = mysqli_query($connect, $try5);
							if(mysqli_num_rows($runtry5) == 0)
							{
								$try6 = "SELECT * FROM tbl_lab_makeup WHERE Day = '$day' AND Lab = '$lab' AND '$etimee' BETWEEN Start_Time AND End_Time AND Flag = 'true'";
								$runtry6 = mysqli_query($connect, $try6);
								if(mysqli_num_rows($runtry6) == 0)
								{
									$try7 = "SELECT * FROM tbl_lab_makeup WHERE Day = '$day' AND Lab = '$lab' AND Start_Time BETWEEN '$stimee' AND '$etimee' AND Flag = 'true'";
									$runtry7 = mysqli_query($connect, $try7);
									if(mysqli_num_rows($runtry7) == 0)
									{
										$try8 = "SELECT * FROM tbl_lab_makeup WHERE Day = '$day' AND Lab = '$lab' AND End_Time BETWEEN '$stimee' AND '$etimee' AND Flag = 'true'";
										$runtry8 = mysqli_query($connect, $try8);
										if(mysqli_num_rows($runtry8) == 0)
										{
											$ins="INSERT INTO tbl_lab_pending_up VALUES ('', '$empno', '$empname', '$dept', '$subj', '$sect', '$stime', '$etime', '$day', '$lab', '$date', 'true', '$datedel', '$remarks')";
											mysqli_query($connect, $ins);

											$history = "INSERT INTO history VALUES('', '$empno','$empname','$schedule','Add Unplanned Schedule(Pending)','$host','$empname','$datetoday','$time')"; 
											mysqli_query($connect, $history);

											echo"<script>alert('Your Unplanned Schedule is Added, Wait for The Approval of Lab Coordinator!');
											window.location='addsched_unofficial.php';</script>";
										}
										else
										{
											echo"<script>alert('Please check the start or end time of the schedule. It overlaps the existing schedule.');
												window.location='addsched_unofficial.php';</script>";
										}
									}
									else
									{
										echo"<script>alert('Please check the start or end time of the schedule. It overlaps the existing schedule.');
											window.location='addsched_unofficial.php';</script>";
									}
								}
								else
								{
									echo"<script>alert('Please check the start or end time of the schedule. It overlaps the existing schedule.');
										window.location='addsched_unofficial.php';</script>";
								}
							}
							else
							{
								echo"<script>alert('Please check the start or end time of the schedule. It overlaps the existing schedule.');
									window.location='addsched_unofficial.php';</script>";
							}
						}
						else
						{
							echo"<script>alert('Please check the start or end time of the schedule. It overlaps the existing schedule.');
								window.location='addsched_unofficial.php';</script>";
						}
					}
					else
					{
						echo"<script>alert('Please check the start or end time of the schedule. It overlaps the existing schedule.');
							window.location='addsched_unofficial.php';</script>";
					}
				}
				else
				{
					echo"<script>alert('Please check the start or end time of the schedule. It overlaps the existing schedule.');
						window.location='addsched_unofficial.php';</script>";
				}
			}
			else
			{
				echo"<script>alert('Please check the start or end time of the schedule. It overlaps the existing schedule.');
					window.location='addsched_unofficial.php';</script>";
			}


			// $ins="INSERT INTO tbl_lab_makeup VALUES ('$empno', '$empname', '$dept', '$subj', '$sect', '$stime', '$etime', '$day', '$lab', '', '$date', '$datedel', 'true', '$remarks')";
			// mysqli_query($connect, $ins);
			// echo"<script>alert('$empname`s Unplanned Schedule Added!');
			// window.location='addsched_unofficial.php';</script>";
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
								<center><h4 class="modal-title"><b>Add Unplanned Schedule</b></h4></center>
								<?php
									if($type == 'labcoordinator' || $type == 'admin' )
									{
									?>
									<input list = "browsers" placeholder = "Employee Name" name = "empno" style="border-color: gray;" required>
										<datalist id="browsers">
										<?php
											$sql="SELECT * from account where User_Type != 'admin'";
											$sqll = mysqli_query($connect, $sql);
											While($row = mysqli_fetch_row($sqll))
											{
												$empno = "$row[2]";
												$name = "$row[3]";
												echo "<option value='";echo $empno;echo"'>";echo $name; echo"</option>";
											}
										?>
										</datalist>
									</input>
								<?php	
									}
								?>
								<select name="dept" id="dept" style = "width:310px; height:45px; margin-bottom: 10px; margin-top: 10px; border-radius:6px; border-color: gray;   text-align:center;" required>
									<option value="">Department
									<option value="JHS">JHS
									<option value="SHS">SHS
									<option value="COL">COL
								</select><br>
								<select name="lab" id="lab" style = "width:310px; height:45px; margin-bottom: 10px; margin-top: 10px; border-radius:6px; border-color: gray;  text-align:center;" required>
									<option value="">Computer Laboratory
									<option value="CL1">CL 1
									<option value="CL2">CL 2
									<option value="CL3">CL 3
									<option value="CL4">CL 4
									<option value="CL5">CL 5
									<option value="CL6">CL 6
									<option value="CL7">CL 7
									<option value="CSS">CSS
								</select><br>
								<input type = "date" placeholder = "date"  name = "date" style="border-color: gray;" required><br>
								<input type = "text" placeholder = "Section"  name = "sect" style="border-color: gray;" required><br>
								<input type = "text" placeholder = "Subject"  name = "subj" style="border-color: gray;" required><br>
								<input type = "time" placeholder = "Start Time"  name = "stime" style="border-color: gray;" required><br>
								<input type = "time" placeholder = "End Time"  name = "etime" style="border-color: gray;" required><br>
								<input type = "textarea" placeholder = "Remarks"  name = "remarks" style="border-color: gray;" required><br><br>
								<button class = "btn btn-success" name = "addsched">Submit</button>
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

	<?php include './includes/script.php' ?>