<?php
 	include("config.php");
 	include("includes/functions.php");
	session_start();
	$user = $_SESSION['a'];
	$type = $_SESSION['type'];
	$checkuser = "SELECT * FROM account WHERE User_Name = '$user'";
	$runuser = mysqli_query($connect, $checkuser);
	while($row = mysqli_fetch_row($runuser))
	{
		$username = "$row[3]";
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
						<h5>History</h5> <br>
							<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
								<thead>
									<tr>
										<th>Emp&nbsp;No</th>
										<th>Emp&nbsp;Name</th>
										<th>Schedule</th>
										<th>Audit&nbsp;Trail</th>
										<th>Host&nbsp;Name</th>
										<th>User&nbsp;Name</th>
										<th>Date</th>
										<th>Time</th>
									</tr>
								</thead>
								<?php
								$get = "SELECT * FROM history ORDER BY Date_AT DESC, Time DESC";
								$get_run = mysqli_query($connect, $get);
								while($row = mysqli_fetch_row($get_run)){
									$empno = "$row[1]";
									$empname = "$row[2]";
									$dept = "$row[3]";
									$sub = "$row[4]";
									$sect = "$row[5]";
									$stime = "$row[6]";
									$etime = "$row[7]";
									$day = "$row[8]";
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
										</tr>
									</tbody>";
								}
								?>
							</table><br><br>

							

						<br><br>
					</main>
				</div>
			</section>

			<div class="modal fade" id="editsched" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<center>
							<!-- <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Edit Employee Schedule</h4>
							</div> -->
							<div class="modal-body">
								<form class="form-horizontal form-group" role="form" name="formcreate" method="POST" action="">
									<label><b>Employee No</label><br>
									<input type = "text" name = "empno" id = "empno" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Employee Name</label><br>
									<input type = "text" name = "empname" id = "empname" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Department</label><br>
									<input type = "text" name = "dept" id = "dept" class= "text-center" style = 'width:217px;' /required><br>
									<label>Subject</label><br>
									<input type = "text" name = "subj" id = "subj" class= "text-center" style = 'width:217px;' /required><br>
									<label>Section</label><br>
									<input type = "text" name = "sect" id = "sect" class= "text-center" style = 'width:217px;' /required><br>
									<label>Start Time</label><br>
									<input type = "text" name = "stime" id = "stime" class= "text-center" style = 'width:217px;' /required><br>
									<label>End Time</label><br>
									<input type = "text" name="etime" id="etime" class= "text-center" style = 'width:217px;' /required><br>
									<label>Day</label><br>
									<input type = "text" name = "day" id = "day" class= "text-center" style = 'width:217px;' /required><br>
									<label>Lab</label><br>
									<input type = "text" name="lab" id="lab" class= "text-center" style = 'width:217px;' /required><br>
									<input type = "hidden" name="schedno" id="schedno" class= "text-center" style = 'width:217px;' /required><br>
									<input type="submit" class="btn btn-primary" value="Save" id="editsched" name= "Edit" style="width:217px; height: 45px;"  >
								</form>
							</div>
						</center>
					</div>
				</div>
			</div>

			<div class="modal fade" id="deletesched" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<center>
							<!-- <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Delete Employee Schedule</h4>
							</div> -->
							<div class="modal-body">
								<form class="form-horizontal form-group" role="form" name="formcreate" method="POST" action="">
									<label>Employee No</label><br>
									<input type = "text" name = "empno" id = "empno2" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Employee Name</label><br>
									<input type = "text" name = "empname" id = "empname2" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Department</label><br>
									<input type = "text" name = "dept" id = "dept2" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Subject</label><br>
									<input type = "text" name = "subj" id = "subj2" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Section</label><br>
									<input type = "text" name = "sect" id = "sect2" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Start Time</label><br>
									<input type = "text" name = "stime" id = "stime2" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>End Time</label><br>
									<input type = "text" name="etime" id="etime2" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Day</label><br>
									<input type = "text" name = "day" id = "day2" class= "text-center" style = 'width:217px;' /readonly><br>
									<label>Lab</label><br>
									<input type = "text" name="lab" id="lab2" class= "text-center" style = 'width:217px;' /readonly><br>
									<input type = "hidden" name="schedno" id="schedno2" class= "text-center" style = 'width:217px;' /readonly><br>
									<input type="submit" class="btn btn-danger" value="Delete" id="deletesched" name = "Delete" style="width:217px; height: 45px;"  >
								</form>
							</div>
						</center>
					</div>
				</div>
			</div>

			<div class="modal fade" id="a_sched" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<center>
							<!-- <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Delete Employee Schedule</h4>
							</div> -->
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
							<!-- <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Delete Employee Schedule</h4>
							</div> -->
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