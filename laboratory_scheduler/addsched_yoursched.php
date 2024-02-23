<?php
 	include("config.php");
 	include("includes/functions.php");
	session_start();
	$user = $_SESSION['a'];
	$type = $_SESSION['type'];
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
						<h5>Schedule/s</h5>
						<div class="tab">
							<button class="tablinks" onclick="openCity(event, 'yoursched')">Schedule/s</button>
							<button class="tablinks" onclick="openCity(event, 'unplanned')">Unplanned Schedule/s</button>
							<button class="tablinks" onclick="openCity(event, 'pendingsched')">Pending Schedule/s</button>
						</div>

						<br>
						<div id="yoursched" class="tabcontent">
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
									</tr>
								</thead>
								<?php
								$get = "SELECT * FROM tbl_lab WHERE Employee_No = '$user' ORDER BY Lab ASC, Start_Time ASC";
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
										</tr>
									</tbody>";
								}
								?>
							</table><br><br>
						</div>

						<div id="unplanned" class="tabcontent">
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
										<th>Date</th>
										<th>Remarks</th>
									</tr>
								</thead>
								<?php
								$get = "SELECT * FROM tbl_lab_makeup WHERE Employee_No = '$user' AND Flag = 'true' ORDER BY Lab ASC, Start_Time ASC";
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
									$date = "$row[10]";
									$rem = "$row[13]";
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
											<td>";echo $date; echo"</td>
											<td>";echo $rem; echo"</td>
										</tr>
									</tbody>";
								}
								?>
							</table><br><br>
						</div>

						<div id="pendingsched" class="tabcontent">
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
									</tr>
								</thead>
								<?php
								$get = "SELECT * FROM tbl_lab_pending WHERE Employee_No = '$user' AND Flag = 'true' ORDER BY Start_Time ASC";
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
									$lab = "$row[9]";
									echo "<tbody id='myTable'>
										<tr>
											<td>";echo $empno; echo"</td>
											<td>";echo $empname; echo"</td>
											<td>";echo $dept; echo"</td>
											<td>";echo $sub; echo"</td>
											<td>";echo $sect; echo"</td>
											<td><b>";echo $stime; echo"</b></td>
											<td><b>";echo $etime; echo"</b></td>
											<td><b>";echo $day; echo"</b></td>
											<td><b>";echo $lab; echo"</b></td>
										</tr>
									</tbody>";
								}
								?>
							</table><br><br>
						</div>

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
									<input type="submit" class="btn btn-danger" value="Delete" id="create" name = "Delete" style="width:217px; height: 45px;"  >
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