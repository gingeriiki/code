<?php
 	include("config.php");
	session_start();
	$user = $_SESSION['a'];
	$type = $_SESSION['type'];

	if($_SESSION['b'] != 1)
	{
		echo"<script>window.location='index.php';</script>";
	}

	if(isset($_POST['editacc'])){
		$empno = $_POST["empno"];
		$empname = $_POST["empname"];
		$dept = $_POST["dept"];

		if($dept != 'JHS' && $dept != 'SHS' && $dept != 'COL'){
			echo"<script>alert('Please Input Correct Department!');
			window.location='accounts.php';</script>";
		}
		else
		{
			$update="UPDATE account SET Department = '$dept', Employee_Name = '$empname' WHERE Employee_No = '$empno'";
			mysqli_query($connect, $update);
			echo"<script>alert('Edited!');
			window.location='accounts.php';</script>";
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

					<h5>Accounts per Department</h5>
					<div class="tab">
						<button class="tablinks" onclick="openCity(event, 'jhs')">JHS</button>
						<button class="tablinks" onclick="openCity(event, 'shs')">SHS</button>
						<button class="tablinks" onclick="openCity(event, 'col')">COL</button>
					</div>


					<div id="jhs" class="tabcontent">
						<table id = "myUL" class = "table table-striped tables" style="background-color:white; margin-left: -10px;">
							<thead>
								<tr>
									<th>Employee&nbsp;No</th>
									<th>Employee&nbsp;Name</th>
									<th>Department</th>
									<th>Action</th>
									<th></th>
								</tr>
							</thead>
							<?php 
								$get = "SELECT * FROM account WHERE User_Name != 'admin' and Department = 'JHS' ORDER BY Employee_Name ASC";
								$get_run = mysqli_query($connect, $get);
								while($row = mysqli_fetch_row($get_run))
								{
									$empno = "$row[2]";
									$empname = "$row[3]";
									$dept = "$row[4]";

									echo "<tbody id='myTable'>
										<tr>
											<td>";echo $empno; echo"</td>
											<td>";echo $empname; echo"</td>
											<td>";echo $dept; echo"</td>
											<td>";echo "<input type='submit' class='btn btn-default editaccount' value = '✎' align = 'center'>";
											echo"</td>
												<td><a href = 'deleteaccount.php?empno=$empno'>";echo "<input type='button' class='btn btn-default delsched' value = '❌' align = 'center'  onclick='clicked(event)'> ";
											echo"</a></td>
										</tr>
									</tbody>";
								}
							?>
						</table>
					</div>

					<div id="shs" class="tabcontent">
						<table id = "myUL" class = "table table-striped tables" style="background-color:white; margin-left: -10px;">
							<thead>
								<tr>
									<th>Employee&nbsp;No</th>
									<th>Employee&nbsp;Name</th>
									<th>Department</th>
									<th>Action</th>
									<th></th>
								</tr>
							</thead>
							<?php 
								$get = "SELECT * FROM account WHERE User_Name != 'admin' and Department = 'SHS' ORDER BY Employee_Name ASC";
								$get_run = mysqli_query($connect, $get);
								while($row = mysqli_fetch_row($get_run))
								{
									$empno = "$row[2]";
									$empname = "$row[3]";
									$dept = "$row[4]";

									echo "<tbody id='myTable'>
										<tr>
											<td>";echo $empno; echo"</td>
											<td>";echo $empname; echo"</td>
											<td>";echo $dept; echo"</td>
											<td>";echo "<input type='submit' class='btn btn-default editaccount' value = '✎' align = 'center'>";
											echo"</td>
												<td><a href = 'deleteaccount.php?empno=$empno'>";echo "<input type='button' class='btn btn-default delsched' value = '❌' align = 'center'  onclick='clicked(event)'> ";
											echo"</td>
										</tr>
									</tbody>";
								}
							?>
						</table>
					</div>

					<div id="col" class="tabcontent">
						<table id = "myUL" class = "table table-striped tables" style="background-color:white; margin-left: -10px;">
							<thead>
								<tr>
									<th>Employee&nbsp;No</th>
									<th>Employee&nbsp;Name</th>
									<th>Department</th>
									<th>Action</th>
									<th></th>
								</tr>
							</thead>
							<?php 
								$get = "SELECT * FROM account WHERE User_Name != 'admin' and Department = 'COL' ORDER BY Employee_Name ASC";
								$get_run = mysqli_query($connect, $get);
								while($row = mysqli_fetch_row($get_run))
								{
									$empno = "$row[2]";
									$empname = "$row[3]";
									$dept = "$row[4]";

									echo "<tbody id='myTable'>
										<tr>
											<td>";echo $empno; echo"</td>
											<td>";echo $empname; echo"</td>
											<td>";echo $dept; echo"</td>
											<td>";echo "<input type='submit' class='btn btn-default editaccount' value = '✎' align = 'center'>";
											echo"</td>
												<td><a href = 'deleteaccount.php?empno=$empno'>";echo "<input type='button' class='btn btn-default delsched' value = '❌' align = 'center'  onclick='clicked(event)'> ";
											echo"</td>
										</tr>
									</tbody>";
								}
							?>
						</table>
					</div>

					<div class="modal fade" id="editaccount" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<center>
									<div class="modal-body">
										<form class="form-horizontal form-group" role="form" name="formcreate" method="POST" action="">
											<label>Employee No</label><br>
											<input type = "text" name = "empno" id = "empno" class= "text-center" style = 'width:217px;' /readonly><br>
											<label>Employee Name</label><br>
											<input type = "text" name = "empname" id = "empname" class= "text-center" style = 'width:217px;' /required><br>
											<label>Department</label><br>
											<input type = "text" name = "dept" id = "dept" class= "text-center" style = 'width:217px;' /required><br>
											<input type="submit" class="btn btn-primary" value="Save" id="create" name="editacc" style="width:217px; height: 45px;"  >
										</form>
									</div>
								</center>
							</div>
						</div>
					</div>

					</main>
				</div>
			</section>

			</div><!-- container //  -->

	</body>

	<?php include './includes/footer.php' ?>
	
</html>

	<?php include './includes/script.php' ?>