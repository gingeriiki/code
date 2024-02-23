<?php
 	include("config.php");
 	include("includes/functions.php");
	session_start();
	$user = $_SESSION['a'];
	$type = $_SESSION['type'];
	$userdept = $_SESSION['userdept'];

	date_default_timezone_set("Asia/Manila");
	$datetoday = date("M d, Y");
	$yeartoday = date("Y");	
	$host =  gethostbyaddr($_SERVER['REMOTE_ADDR']);
	$time = date("H:i:s");

	$checkuser = "SELECT * FROM account WHERE User_Name = '$user'";
	$runuser = mysqli_query($connect, $checkuser);
	while($row = mysqli_fetch_row($runuser))
	{
		$username = "$row[3]";
	}

	if(isset($_POST['Asched'])){
		$empno = $_POST["empno"];
		$empname = $_POST["empname"];
		$dept = $_POST["dept"];
		$subj = $_POST["subj"];
		$sect = $_POST["sect"];
		$stime = $_POST["stime"];
		$etime = $_POST["etime"];
		$date = $_POST["date"];
		$pendingno = $_POST["pendingno"];

		$stimee = date('H:i:s', strtotime($stime. ' +1 minutes'));
		$etimee = date('H:i:s', strtotime($etime. ' -1 minutes'));
		
		$sel = "SELECT * FROM tbl_lab_pending_up WHERE Pending_No = '$pendingno'";
		$sel2 = mysqli_query($connect, $sel);
		while($row = mysqli_fetch_row($sel2)){
			$day = "$row[8]";
			$lab = "$row[9]";
			$date = "$row[10]";
			$datedel = "$row[12]";
			$remarks = "$row[13]";
		}
		$schedule =  $day.", ".$lab.", ".$stime."-".$etime;

		$try = "SELECT * FROM tbl_lab WHERE Day = '$day' AND Lab = '$lab' AND '$stimee' BETWEEN Start_Time AND End_Time";
		$runtry = mysqli_query($connect, $try);
		if(mysqli_num_rows($runtry) == 0)
		{
			$try2 = "SELECT * FROM tbl_lab WHERE Day = '$day' AND Lab = '$lab' AND '$etimee' BETWEEN Start_Time AND End_Time";
			$runtry2 = mysqli_query($connect, $try2);
			if(mysqli_num_rows($runtry2) == 0)
			{
				$try3 = "SELECT * FROM tbl_lab_makeup WHERE Day = '$day' AND Lab = '$lab' AND '$stimee' BETWEEN Start_Time AND End_Time";
				$runtry3 = mysqli_query($connect, $try3);
				if(mysqli_num_rows($runtry3) == 0)
				{
					$try4 = "SELECT * FROM tbl_lab_makeup WHERE Day = '$day' AND Lab = '$lab' AND '$etimee' BETWEEN Start_Time AND End_Time";
					$runtry4 = mysqli_query($connect, $try4);
					if(mysqli_num_rows($runtry4) == 0)
					{
						$update = "UPDATE tbl_lab_pending_up SET Flag = 'false' WHERE Pending_No = '$pendingno'";
						mysqli_query($connect, $update);

				    	$ins = "INSERT INTO tbl_lab_makeup VALUES ('$empno', '$empname', '$dept', '$subj', '$sect', '$stime', '$etime', '$day', '$lab', '','$date','$datedel','true','$remarks')";
						mysqli_query($connect, $ins);

						$history = "INSERT INTO history VALUES('', '$empno','$empname','$schedule','Pending Unplanned Schedule(Approved)','$host','$username','$datetoday','$time')"; 
						mysqli_query($connect, $history);

						echo"<script>alert('$empname`s Pending Schedule Approve!');
						window.location='unplanned.php';</script>";
					}
					else
					{
						echo"<script>alert('Please check the start and end time of the schedule. It overlaps the existing schedule.');
						window.location='unplanned.php';</script>";
					}
				}
				else
				{
					echo"<script>alert('Please check the start and end time of the schedule. It overlaps the existing schedule.');
					window.location='unplanned.php';</script>";
				}
			}
			else
			{
				echo"<script>alert('Please check the start and end time of the schedule. It overlaps the existing schedule.');
				window.location='unplanned.php';</script>";
			}
		}
		else
		{
			echo"<script>alert('Please check the start and end time of the schedule. It overlaps the existing schedule.');
			window.location='unplanned.php';</script>";
		}
	}
	else if(isset($_POST['Dsched'])){
		$empname = $_POST["empname"];
		$pendingno = $_POST["pendingno"];
		$sel = "SELECT * FROM tbl_lab_pending_up WHERE Pending_No = '$pendingno'";
		$sel2 = mysqli_query($connect, $sel);
		while($row = mysqli_fetch_row($sel2)){
			$empno = "$row[1]";
			$stime = "$row[6]";
			$etime = "$row[7]";
			$day = "$row[8]";
			$lab = "$row[9]";
		}
		$schedule =  $day.", ".$lab.", ".$stime."-".$etime;
		$update = "UPDATE tbl_lab_pending_up SET Flag = 'false' WHERE Pending_No = '$pendingno'";
		mysqli_query($connect, $update);

		$history = "INSERT INTO history VALUES('', '$empno','$empname','$schedule','Pending Unplanned Schedule(Not Approved)','$host','$username','$datetoday','$time')";
		mysqli_query($connect, $history);

		echo"<script>alert('$empname`s Pending Schedule Not Approve!');
		window.location='unplanned.php';</script>";
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
						<h5>Unplanned Schedule/s</h5>
						<div class="tab">
							<button class="tablinks" onclick="openCity(event, 'CL1')">CL1</button>
							<button class="tablinks" onclick="openCity(event, 'CL2')">CL2</button>
							<button class="tablinks" onclick="openCity(event, 'CL3')">CL3</button>
							<button class="tablinks" onclick="openCity(event, 'CL4')">CL4</button>
							<!-- <button class="tablinks" onclick="openCity(event, 'CL5')">CL5</button>
							<button class="tablinks" onclick="openCity(event, 'CL6')">CL6</button>
							<button class="tablinks" onclick="openCity(event, 'CL7')">CL7</button> -->
							<button class="tablinks" onclick="openCity(event, 'CSS')">CSS</button>
						</div>

						<br>
						<div id="CL1" class="tabcontent">
							<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
								<thead>
									<tr>
										<th>Emp&nbsp;No</th>
										<th>Emp&nbsp;Name</th>
										<th>Department</th>
										<th>Subject</th>
										<th>Section</th>
										<th>Start&nbsp;Time</th>
										<th>End&nbsp;Time</th>
										<th>Day</th>
										<th>Lab</th>
										<th>Date&nbsp;Added</th>
										<th>Remarks</th>
									</tr>
								</thead>
								<?php
									$get = "SELECT * FROM tbl_lab_makeup WHERE Flag = 'true' AND Lab = 'CL1' ORDER BY Sched_No DESC";
									$get_run = mysqli_query($connect, $get);
									while($row = mysqli_fetch_row($get_run)){
										$empno = "$row[0]";
										$empname = "$row[1]";
										$dept = "$row[2]";
										$sub = "$row[3]";
										$sect = "$row[4]";
										$stime = "$row[5]";
										$etime = "$row[6]";
										$day = "$row[7]";
										$lab = "$row[8]";
										$dateadded = "$row[10]";
										$remarks = "$row[13]";
										echo "<tbody id='myTable'>
											<tr>
												<td>";echo $empno; echo"</td>
												<td>";echo $empname; echo"</td>
												<td>";echo $dept; echo"</td>
												<td>";echo $sub; echo"</td>
												<td>";echo $sect; echo"</td>
												<td>";echo $stime; echo"</td>
												<td>";echo $etime; echo"</td>
												<td>";echo $day; echo"</td>
												<td>";echo $lab; echo"</td>
												<td>";echo $dateadded; echo"</td>
												<td>";echo $remarks; echo"</td>
											</tr>
										</tbody>";
									}
								?>
							</table><br><br>

							<?php if($type == 'labcoordinator' || $type == 'admin'){ ?>
								<h5 style='margin-bottom: 17px;'>Pending Unplanned Schedule/s</h5>
								<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
									<thead>
										<tr>
											<th>Emp&nbsp;No</th>
											<th>Emp&nbsp;Name</th>
											<th>Department</th>
											<th>Subject</th>
											<th>Section</th>
											<th>Start&nbsp;Time</th>
											<th>End&nbsp;Time</th>
											<th>Date&nbsp;Added</th>
											<th>Sched&nbsp;No</th>
											<th>Remarks</th>
											<th>Action</th>
											<th></th>
										</tr>
									</thead>
									<?php
									if($type == 'admin')
									{
										$get = "SELECT * FROM tbl_lab_pending_up WHERE Lab = 'CL1' AND Flag = 'true' ORDER BY Start_Time ASC";
									}
									else if($type == 'labcoordinator')
									{
										$get = "SELECT * FROM tbl_lab_pending_up WHERE Lab = 'CL1' AND Flag = 'true' AND Department = '$userdept' ORDER BY Start_Time ASC";
									}
									$get_run = mysqli_query($connect, $get);
									while($row = mysqli_fetch_row($get_run)){
										$pendingno = "$row[0]";
										$empno = "$row[1]";
										$empname = "$row[2]";
										$dept = "$row[3]";
										$sub = "$row[4]";
										$sect = "$row[5]";
										$stime = "$row[6]";
										$etime = "$row[7]";
										$date = "$row[10]";
										$remarks = "$row[13]";
										echo "<tbody id='myTable'>
											<tr>
												<td>";echo $empno; echo"</td>
												<td>";echo $empname; echo"</td>
												<td>";echo $dept; echo"</td>
												<td>";echo $sub; echo"</td>
												<td>";echo $sect; echo"</td>
												<td>";echo $stime; echo"</td>
												<td>";echo $etime; echo"</td>
												<td>";echo $date; echo"</td>
												<td>";echo $pendingno; echo"</td>
												<td>";echo $remarks; echo"</td>
												<td>";
												if($type == 'labcoordinator' || $type == 'admin')
												{	echo "<input type='submit' class='btn btn-default a_sched' value = '✔' align = 'center'>";
													echo"</td>
													<td>";echo "<input type='submit' class='btn btn-default d_sched' value = '❌' align = 'center'>";
												}
												echo"</td>
											</tr>
										</tbody>";
									}?>
								</table>
								<?php
								}?>
						</div>

						<div id="CL2" class="tabcontent">
							<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
								<thead>
									<tr>
										<th>Emp&nbsp;No</th>
										<th>Emp&nbsp;Name</th>
										<th>Department</th>
										<th>Subject</th>
										<th>Section</th>
										<th>Start&nbsp;Time</th>
										<th>End&nbsp;Time</th>
										<th>Day</th>
										<th>Lab</th>
										<th>Date&nbsp;Added</th>
										<th>Remarks</th>
									</tr>
								</thead>
								<?php
									$get = "SELECT * FROM tbl_lab_makeup WHERE Flag = 'true' AND Lab = 'CL2' ORDER BY Sched_No DESC";
									$get_run = mysqli_query($connect, $get);
									while($row = mysqli_fetch_row($get_run)){
										$empno = "$row[0]";
										$empname = "$row[1]";
										$dept = "$row[2]";
										$sub = "$row[3]";
										$sect = "$row[4]";
										$stime = "$row[5]";
										$etime = "$row[6]";
										$day = "$row[7]";
										$lab = "$row[8]";
										$dateadded = "$row[10]";
										$remarks = "$row[13]";
										echo "<tbody id='myTable'>
											<tr>
												<td>";echo $empno; echo"</td>
												<td>";echo $empname; echo"</td>
												<td>";echo $dept; echo"</td>
												<td>";echo $sub; echo"</td>
												<td>";echo $sect; echo"</td>
												<td>";echo $stime; echo"</td>
												<td>";echo $etime; echo"</td>
												<td>";echo $day; echo"</td>
												<td>";echo $lab; echo"</td>
												<td>";echo $dateadded; echo"</td>
												<td>";echo $remarks; echo"</td>
											</tr>
										</tbody>";
									}
								?>
							</table><br><br>

							<?php if($type == 'labcoordinator' || $type == 'admin'){ ?>
								<h5 style='margin-bottom: 17px;'>Pending Unplanned Schedule/s</h5>
								<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
									<thead>
										<tr>
											<th>Emp&nbsp;No</th>
											<th>Emp&nbsp;Name</th>
											<th>Department</th>
											<th>Subject</th>
											<th>Section</th>
											<th>Start&nbsp;Time</th>
											<th>End&nbsp;Time</th>
											<th>Date&nbsp;Added</th>
											<th>Sched&nbsp;No</th>
											<th>Remarks</th>
											<th>Action</th>
											<th></th>
										</tr>
									</thead>
									<?php
									if($type == 'admin')
									{
										$get = "SELECT * FROM tbl_lab_pending_up WHERE Lab = 'CL2' AND Flag = 'true' ORDER BY Start_Time ASC";
									}
									else if($type == 'labcoordinator')
									{
										$get = "SELECT * FROM tbl_lab_pending_up WHERE Lab = 'CL2' AND Flag = 'true' AND Department = '$userdept' ORDER BY Start_Time ASC";
									}
									$get_run = mysqli_query($connect, $get);
									while($row = mysqli_fetch_row($get_run)){
										$pendingno = "$row[0]";
										$empno = "$row[1]";
										$empname = "$row[2]";
										$dept = "$row[3]";
										$sub = "$row[4]";
										$sect = "$row[5]";
										$stime = "$row[6]";
										$etime = "$row[7]";
										$date = "$row[10]";
										$remarks = "$row[13]";
										echo "<tbody id='myTable'>
											<tr>
												<td>";echo $empno; echo"</td>
												<td>";echo $empname; echo"</td>
												<td>";echo $dept; echo"</td>
												<td>";echo $sub; echo"</td>
												<td>";echo $sect; echo"</td>
												<td>";echo $stime; echo"</td>
												<td>";echo $etime; echo"</td>
												<td>";echo $date; echo"</td>
												<td>";echo $pendingno; echo"</td>
												<td>";echo $remarks; echo"</td>
												<td>";
												if($type == 'labcoordinator' || $type == 'admin')
												{	echo "<input type='submit' class='btn btn-default a_sched' value = '✔' align = 'center'>";
													echo"</td>
													<td>";echo "<input type='submit' class='btn btn-default d_sched' value = '❌' align = 'center'>";
												}
												echo"</td>
											</tr>
										</tbody>";
									}?>
								</table>
								<?php
								}?>
						</div>

						<div id="CL3" class="tabcontent">
							<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
								<thead>
									<tr>
										<th>Emp&nbsp;No</th>
										<th>Emp&nbsp;Name</th>
										<th>Department</th>
										<th>Subject</th>
										<th>Section</th>
										<th>Start&nbsp;Time</th>
										<th>End&nbsp;Time</th>
										<th>Day</th>
										<th>Lab</th>
										<th>Date&nbsp;Added</th>
										<th>Remarks</th>
									</tr>
								</thead>
								<?php
									$get = "SELECT * FROM tbl_lab_makeup WHERE Flag = 'true' AND Lab = 'CL3' ORDER BY Sched_No DESC";
									$get_run = mysqli_query($connect, $get);
									while($row = mysqli_fetch_row($get_run)){
										$empno = "$row[0]";
										$empname = "$row[1]";
										$dept = "$row[2]";
										$sub = "$row[3]";
										$sect = "$row[4]";
										$stime = "$row[5]";
										$etime = "$row[6]";
										$day = "$row[7]";
										$lab = "$row[8]";
										$dateadded = "$row[10]";
										$remarks = "$row[13]";
										echo "<tbody id='myTable'>
											<tr>
												<td>";echo $empno; echo"</td>
												<td>";echo $empname; echo"</td>
												<td>";echo $dept; echo"</td>
												<td>";echo $sub; echo"</td>
												<td>";echo $sect; echo"</td>
												<td>";echo $stime; echo"</td>
												<td>";echo $etime; echo"</td>
												<td>";echo $day; echo"</td>
												<td>";echo $lab; echo"</td>
												<td>";echo $dateadded; echo"</td>
												<td>";echo $remarks; echo"</td>
											</tr>
										</tbody>";
									}
								?>
							</table><br><br>

							<?php if($type == 'labcoordinator' || $type == 'admin'){ ?>
								<h5 style='margin-bottom: 17px;'>Pending Unplanned Schedule/s</h5>
								<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
									<thead>
										<tr>
											<th>Emp&nbsp;No</th>
											<th>Emp&nbsp;Name</th>
											<th>Department</th>
											<th>Subject</th>
											<th>Section</th>
											<th>Start&nbsp;Time</th>
											<th>End&nbsp;Time</th>
											<th>Date&nbsp;Added</th>
											<th>Sched&nbsp;No</th>
											<th>Remarks</th>
											<th>Action</th>
											<th></th>
										</tr>
									</thead>
									<?php
									if($type == 'admin')
									{
										$get = "SELECT * FROM tbl_lab_pending_up WHERE Lab = 'CL3' AND Flag = 'true' ORDER BY Start_Time ASC";
									}
									else if($type == 'labcoordinator')
									{
										$get = "SELECT * FROM tbl_lab_pending_up WHERE Lab = 'CL3' AND Flag = 'true' AND Department = '$userdept' ORDER BY Start_Time ASC";
									}
									$get_run = mysqli_query($connect, $get);
									while($row = mysqli_fetch_row($get_run)){
										$pendingno = "$row[0]";
										$empno = "$row[1]";
										$empname = "$row[2]";
										$dept = "$row[3]";
										$sub = "$row[4]";
										$sect = "$row[5]";
										$stime = "$row[6]";
										$etime = "$row[7]";
										$date = "$row[10]";
										$remarks = "$row[13]";
										echo "<tbody id='myTable'>
											<tr>
												<td>";echo $empno; echo"</td>
												<td>";echo $empname; echo"</td>
												<td>";echo $dept; echo"</td>
												<td>";echo $sub; echo"</td>
												<td>";echo $sect; echo"</td>
												<td>";echo $stime; echo"</td>
												<td>";echo $etime; echo"</td>
												<td>";echo $date; echo"</td>
												<td>";echo $pendingno; echo"</td>
												<td>";echo $remarks; echo"</td>
												<td>";
												if($type == 'labcoordinator' || $type == 'admin')
												{	echo "<input type='submit' class='btn btn-default a_sched' value = '✔' align = 'center'>";
													echo"</td>
													<td>";echo "<input type='submit' class='btn btn-default d_sched' value = '❌' align = 'center'>";
												}
												echo"</td>
											</tr>
										</tbody>";
									}?>
								</table>
								<?php
								}?>
						</div>

						<div id="CL4" class="tabcontent">
							<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
								<thead>
									<tr>
										<th>Emp&nbsp;No</th>
										<th>Emp&nbsp;Name</th>
										<th>Department</th>
										<th>Subject</th>
										<th>Section</th>
										<th>Start&nbsp;Time</th>
										<th>End&nbsp;Time</th>
										<th>Day</th>
										<th>Lab</th>
										<th>Date&nbsp;Added</th>
										<th>Remarks</th>
									</tr>
								</thead>
								<?php
									$get = "SELECT * FROM tbl_lab_makeup WHERE Flag = 'true' AND Lab = 'CL4' ORDER BY Sched_No DESC";
									$get_run = mysqli_query($connect, $get);
									while($row = mysqli_fetch_row($get_run)){
										$empno = "$row[0]";
										$empname = "$row[1]";
										$dept = "$row[2]";
										$sub = "$row[3]";
										$sect = "$row[4]";
										$stime = "$row[5]";
										$etime = "$row[6]";
										$day = "$row[7]";
										$lab = "$row[8]";
										$dateadded = "$row[10]";
										$remarks = "$row[13]";
										echo "<tbody id='myTable'>
											<tr>
												<td>";echo $empno; echo"</td>
												<td>";echo $empname; echo"</td>
												<td>";echo $dept; echo"</td>
												<td>";echo $sub; echo"</td>
												<td>";echo $sect; echo"</td>
												<td>";echo $stime; echo"</td>
												<td>";echo $etime; echo"</td>
												<td>";echo $day; echo"</td>
												<td>";echo $lab; echo"</td>
												<td>";echo $dateadded; echo"</td>
												<td>";echo $remarks; echo"</td>
											</tr>
										</tbody>";
									}
								?>
							</table><br><br>

							<?php if($type == 'labcoordinator' || $type == 'admin'){ ?>
								<h5 style='margin-bottom: 17px;'>Pending Unplanned Schedule/s</h5>
								<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
									<thead>
										<tr>
											<th>Emp&nbsp;No</th>
											<th>Emp&nbsp;Name</th>
											<th>Department</th>
											<th>Subject</th>
											<th>Section</th>
											<th>Start&nbsp;Time</th>
											<th>End&nbsp;Time</th>
											<th>Date&nbsp;Added</th>
											<th>Sched&nbsp;No</th>
											<th>Remarks</th>
											<th>Action</th>
											<th></th>
										</tr>
									</thead>
									<?php
									if($type == 'admin')
									{
										$get = "SELECT * FROM tbl_lab_pending_up WHERE Lab = 'CL4' AND Flag = 'true' ORDER BY Start_Time ASC";
									}
									else if($type == 'labcoordinator')
									{
										$get = "SELECT * FROM tbl_lab_pending_up WHERE Lab = 'CL4' AND Flag = 'true' AND Department = '$userdept' ORDER BY Start_Time ASC";
									}
									$get_run = mysqli_query($connect, $get);
									while($row = mysqli_fetch_row($get_run)){
										$pendingno = "$row[0]";
										$empno = "$row[1]";
										$empname = "$row[2]";
										$dept = "$row[3]";
										$sub = "$row[4]";
										$sect = "$row[5]";
										$stime = "$row[6]";
										$etime = "$row[7]";
										$date = "$row[10]";
										$remarks = "$row[13]";
										echo "<tbody id='myTable'>
											<tr>
												<td>";echo $empno; echo"</td>
												<td>";echo $empname; echo"</td>
												<td>";echo $dept; echo"</td>
												<td>";echo $sub; echo"</td>
												<td>";echo $sect; echo"</td>
												<td>";echo $stime; echo"</td>
												<td>";echo $etime; echo"</td>
												<td>";echo $date; echo"</td>
												<td>";echo $pendingno; echo"</td>
												<td>";echo $remarks; echo"</td>
												<td>";
												if($type == 'labcoordinator' || $type == 'admin')
												{	echo "<input type='submit' class='btn btn-default a_sched' value = '✔' align = 'center'>";
													echo"</td>
													<td>";echo "<input type='submit' class='btn btn-default d_sched' value = '❌' align = 'center'>";
												}
												echo"</td>
											</tr>
										</tbody>";
									}?>
								</table>
								<?php
								}?>
						</div>

						<div id="CSS" class="tabcontent">
							<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
								<thead>
									<tr>
										<th>Emp&nbsp;No</th>
										<th>Emp&nbsp;Name</th>
										<th>Department</th>
										<th>Subject</th>
										<th>Section</th>
										<th>Start&nbsp;Time</th>
										<th>End&nbsp;Time</th>
										<th>Day</th>
										<th>Lab</th>
										<th>Date&nbsp;Added</th>
										<th>Remarks</th>
									</tr>
								</thead>
								<?php
									$get = "SELECT * FROM tbl_lab_makeup WHERE Flag = 'true' AND Lab = 'CSS' ORDER BY Sched_No DESC";
									$get_run = mysqli_query($connect, $get);
									while($row = mysqli_fetch_row($get_run)){
										$empno = "$row[0]";
										$empname = "$row[1]";
										$dept = "$row[2]";
										$sub = "$row[3]";
										$sect = "$row[4]";
										$stime = "$row[5]";
										$etime = "$row[6]";
										$day = "$row[7]";
										$lab = "$row[8]";
										$dateadded = "$row[10]";
										$remarks = "$row[13]";
										echo "<tbody id='myTable'>
											<tr>
												<td>";echo $empno; echo"</td>
												<td>";echo $empname; echo"</td>
												<td>";echo $dept; echo"</td>
												<td>";echo $sub; echo"</td>
												<td>";echo $sect; echo"</td>
												<td>";echo $stime; echo"</td>
												<td>";echo $etime; echo"</td>
												<td>";echo $day; echo"</td>
												<td>";echo $lab; echo"</td>
												<td>";echo $dateadded; echo"</td>
												<td>";echo $remarks; echo"</td>
											</tr>
										</tbody>";
									}
								?>
							</table><br><br>

							<?php if($type == 'labcoordinator' || $type == 'admin'){ ?>
								<h5 style='margin-bottom: 17px;'>Pending Unplanned Schedule/s</h5>
								<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
									<thead>
										<tr>
											<th>Emp&nbsp;No</th>
											<th>Emp&nbsp;Name</th>
											<th>Department</th>
											<th>Subject</th>
											<th>Section</th>
											<th>Start&nbsp;Time</th>
											<th>End&nbsp;Time</th>
											<th>Date&nbsp;Added</th>
											<th>Sched&nbsp;No</th>
											<th>Remarks</th>
											<th>Action</th>
											<th></th>
										</tr>
									</thead>
									<?php
									if($type == 'admin')
									{
										$get = "SELECT * FROM tbl_lab_pending_up WHERE Lab = 'CSS' AND Flag = 'true' ORDER BY Start_Time ASC";
									}
									else if($type == 'labcoordinator')
									{
										$get = "SELECT * FROM tbl_lab_pending_up WHERE Lab = 'CSS' AND Flag = 'true' AND Department = '$userdept' ORDER BY Start_Time ASC";
									}
									$get_run = mysqli_query($connect, $get);
									while($row = mysqli_fetch_row($get_run)){
										$pendingno = "$row[0]";
										$empno = "$row[1]";
										$empname = "$row[2]";
										$dept = "$row[3]";
										$sub = "$row[4]";
										$sect = "$row[5]";
										$stime = "$row[6]";
										$etime = "$row[7]";
										$date = "$row[10]";
										$remarks = "$row[13]";
										echo "<tbody id='myTable'>
											<tr>
												<td>";echo $empno; echo"</td>
												<td>";echo $empname; echo"</td>
												<td>";echo $dept; echo"</td>
												<td>";echo $sub; echo"</td>
												<td>";echo $sect; echo"</td>
												<td>";echo $stime; echo"</td>
												<td>";echo $etime; echo"</td>
												<td>";echo $date; echo"</td>
												<td>";echo $pendingno; echo"</td>
												<td>";echo $remarks; echo"</td>
												<td>";
												if($type == 'labcoordinator' || $type == 'admin')
												{	echo "<input type='submit' class='btn btn-default a_sched' value = '✔' align = 'center'>";
													echo"</td>
													<td>";echo "<input type='submit' class='btn btn-default d_sched' value = '❌' align = 'center'>";
												}
												echo"</td>
											</tr>
										</tbody>";
									}?>
								</table>
								<?php
								}?>
						</div>



						<br><br>
					</main>
				</div>
			</section>

			<div class="modal fade" id="a_sched" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<center>
							<div class="modal-body">
								<form class="form-horizontal form-group" role="form" name="formcreate" method="POST" action="">
									<label>Employee No</label><br>
									<input type = "text" name = "empno" id = "empno3" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Employee Name</label><br>
									<input type = "text" name = "empname" id = "empname3" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Department</label><br>
									<input type = "text" name = "dept" id = "dept3" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Subject</label><br>
									<input type = "text" name = "subj" id = "subj3" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Section</label><br>
									<input type = "text" name = "sect" id = "sect3" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Start Time</label><br>
									<input type = "text" name = "stime" id = "stime3" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>End Time</label><br>
									<input type = "text" name="etime" id="etime3" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Date Added</label><br>
									<input type = "text" name = "date" id = "date3" class= "text-center" style = 'width:217px;' /readonly><br>
									<input type = "hidden" name="pendingno" id="pendingno3" class= "text-center" style = 'width:217px;' /readonly><br>
									<input type="submit" class="btn btn-primary" value="Approve Schedule" id="a_sched" name = "Asched" style="width:217px; height: 45px;"  >
								</form>
							</div>
						</center>
					</div>
				</div>
			</div>

			<div class="modal fade" id="d_sched" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<center>
							<div class="modal-body">
								<form class="form-horizontal form-group" role="form" name="formcreate" method="POST" action="">
									<label>Employee No</label><br>
									<input type = "text" name = "empno" id = "empno4" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Employee Name</label><br>
									<input type = "text" name = "empname" id = "empname4" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Department</label><br>
									<input type = "text" name = "dept" id = "dept4" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Subject</label><br>
									<input type = "text" name = "subj" id = "subj4" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Section</label><br>
									<input type = "text" name = "sect" id = "sect4" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Start Time</label><br>
									<input type = "text" name = "stime" id = "stime4" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>End Time</label><br>
									<input type = "text" name="etime" id="etime4" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Date Added</label><br>
									<input type = "text" name = "date" id = "date4" class= "text-center" style = 'width:217px;' /readonly><br>
									<input type = "hidden" name="pendingno" id="pendingno4" class= "text-center" style = 'width:217px;' /readonly><br>
									<input type="submit" class="btn btn-danger" value="Disapprove Schedule" id="d_sched" name = "Dsched" style="width:217px; height: 45px;"  >
								</form>
							</div>
						</center>
					</div>
				</div>
			</div>

		</div><!-- container //  -->
	</body>

	<?php include './includes/footer.php' ?>

</html>

	<?php include './includes/script.php' ?>