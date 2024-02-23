<?php 
	include "config.php";

	function loadCL1()
	{
	  	global $connect;
	  	$get = "SELECT * FROM tbl_availunits WHERE Lab_Name = 'CL1'";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$units = "$row[1]";
		}
		echo "<b>Available Units:</b> $units <br>";
		echo "<b>PC Specs:</b> <br>";
			$get = "SELECT * FROM tbl_pcspecs WHERE Lab_Name = 'CL1'";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$specs = "$row[1]";
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$specs <br>";
			}
		echo "<b>Installed Applications:</b> <br>";
			$get = "SELECT * FROM tbl_installedapps WHERE Lab_Name = 'CL1'";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$apps = "$row[1]";
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$apps <br>";
			}
	}

	function loadCL1admin()
	{
	  	global $connect;
	  	$get = "SELECT * FROM tbl_availunits WHERE Lab_Name = 'CL1'";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$units = "$row[1]";
		}
		echo "<b>Available Units:</b> $units <br>";
		echo "<b>PC Specs:</b> <br>";
			$get = "SELECT * FROM tbl_pcspecs WHERE Lab_Name = 'CL1'";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$specs = "$row[1]";
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$specs <br>";
			}
		echo "<b>Installed Applications:</b> <br>";
			$get = "SELECT * FROM tbl_installedapps WHERE Lab_Name = 'CL1'";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$apps = "$row[1]";
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$apps <br>";
			}
	}

	function loadCL2()
	{
	  	global $connect;
	  	$get = "SELECT * FROM tbl_availunits WHERE Lab_Name = 'CL2'";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$units = "$row[1]";
		}
		echo "<b>Available Units:</b> $units <br>";
		echo "<b>PC Specs:</b> <br>";
			$get = "SELECT * FROM tbl_pcspecs WHERE Lab_Name = 'CL2'";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$specs = "$row[1]";
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$specs <br>";
			}
		echo "<b>Installed Applications:</b> <br>";
			$get = "SELECT * FROM tbl_installedapps WHERE Lab_Name = 'CL2'";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$apps = "$row[1]";
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$apps <br>";
			}
	}

	function loadCL3()
	{
	  	global $connect;
	  	$get = "SELECT * FROM tbl_availunits WHERE Lab_Name = 'CL3'";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$units = "$row[1]";
		}
		echo "<b>Available Units:</b> $units <br>";
		echo "<b>PC Specs:</b> <br>";
			$get = "SELECT * FROM tbl_pcspecs WHERE Lab_Name = 'CL3'";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$specs = "$row[1]";
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$specs <br>";
			}
		echo "<b>Installed Applications:</b> <br>";
			$get = "SELECT * FROM tbl_installedapps WHERE Lab_Name = 'CL3'";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$apps = "$row[1]";
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$apps <br>";
			}
	}

	function loadCL4()
	{
	  global $connect;
	  	$get = "SELECT * FROM tbl_availunits WHERE Lab_Name = 'CL4'";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$units = "$row[1]";
		}
		echo "<b>Available Units:</b> $units <br>";
		echo "<b>PC Specs:</b> <br>";
			$get = "SELECT * FROM tbl_pcspecs WHERE Lab_Name = 'CL4'";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$specs = "$row[1]";
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$specs <br>";
			}
		echo "<b>Installed Applications:</b> <br>";
			$get = "SELECT * FROM tbl_installedapps WHERE Lab_Name = 'CL4'";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$apps = "$row[1]";
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$apps <br>";
			}
	}

	function loadCL5()
	{
	  	global $connect;
	  	$get = "SELECT * FROM tbl_availunits WHERE Lab_Name = 'CL5'";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$units = "$row[1]";
		}
		echo "<b>Available Units:</b> $units <br>";
		echo "<b>PC Specs:</b> $units <br>";
		echo "<b>Installed Applications:</b> <br>";

		$get = "SELECT * FROM tbl_installedapps WHERE Lab_Name = 'CL5'";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$apps = "$row[1]";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$apps <br>";
		}
	}

	function loadCL6()
	{
	  	global $connect;
	  	$get = "SELECT * FROM tbl_availunits WHERE Lab_Name = 'CL6'";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$units = "$row[1]";
		}
		echo "<b>Available Units:</b> $units <br>";
		echo "<b>PC Specs:</b> $units <br>";
		echo "<b>Installed Applications:</b> <br>";

		$get = "SELECT * FROM tbl_installedapps WHERE Lab_Name = 'CL6'";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$apps = "$row[1]";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$apps <br>";
		}
	}

	function loadCL7()
	{
	  	global $connect;
	  	$get = "SELECT * FROM tbl_availunits WHERE Lab_Name = 'CL7'";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$units = "$row[1]";
		}
		echo "<b>Available Units:</b> $units <br>";
		echo "<b>PC Specs:</b> $units <br>";
		echo "<b>Installed Applications:</b> <br>";

		$get = "SELECT * FROM tbl_installedapps WHERE Lab_Name = 'CL7'";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$apps = "$row[1]";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$apps <br>";
		}
	}

	function loadCSS()
	{
	  	global $connect;
	  	$get = "SELECT * FROM tbl_availunits WHERE Lab_Name = 'CSS'";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$units = "$row[1]";
		}
		echo "<b>Available Units:</b> $units <br>";
		echo "<b>PC Specs:</b> $units <br>";
		echo "<b>Installed Applications:</b> <br>";

		$get = "SELECT * FROM tbl_installedapps WHERE Lab_Name = 'CSS'";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$apps = "$row[1]";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$apps <br>";
		}
	}

	function loadMonCL1()
	{
	  global $connect;

	  echo" <table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
		<thead>
			<tr>
				<th>Employee&nbsp;No</th>
				<th>Faculty&nbsp;Name</th>
				<th>Department</th>
				<th>Subject</th>
				<th>Section</th>
				<th>Start&nbsp;Time</th>
				<th>End&nbsp;Time</th>
				<th>Action</th>
			</tr>
		</thead> ";
		$get = "SELECT * FROM tbl_lab WHERE Lab = 'CL1' AND Day = 'Mon' ORDER BY Start_Time ASC";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$empno = "$row[0]";
			$empname = "$row[1]";
			$dept = "$row[2]";
			$sub = "$row[3]";
			$sect = "$row[4]";
			$stime = "$row[5]";
			$etime = "$row[6]";
			$schedno = "$row[9]";
			echo "<tbody id='myTable'>
				<tr>
					<td>";echo $empno; echo"</td>
					<td>";echo $empname; echo"</td>
					<td>";echo $dept; echo"</td>
					<td>";echo $sub; echo"</td>
					<td>";echo $sect; echo"</td>
					<td><b>";echo $stime; echo"</b></td>
					<td><b>";echo $etime; echo"</b></td>
					<td>";echo "<input type='submit' class='btn btn-default editsched' value = '✎' align = 'center'>";
					echo"</td>
					<td><a href = 'delete_sched.php?schedno=$schedno'>";echo "<input type='button' class='btn btn-default' value = '❌' align = 'center'></a></td>";
					echo"</td>
				</tr>
			</tbody>";
		}
		echo "</table>

		
		
		<br><br>
		<h5 style='margin-bottom: 17px;'>Pending Schedules</h5>
		<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
			<thead>
				<tr>
					<th>Employee&nbsp;No</th>
					<th>Faculty&nbsp;Name</th>
					<th>Department</th>
					<th>Subject</th>
					<th>Section</th>
					<th>Start&nbsp;Time</th>
					<th>End&nbsp;Time</th>
					<th>Date&nbsp;Added</th>
					<th>Action</th>
					<th></th>
				</tr>
			</thead> ";

			$get = "SELECT * FROM tbl_lab_pending WHERE Lab = 'CL1' AND Day = 'Mon' ORDER BY Start_Time ASC";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$empno = "$row[0]";
				$empname = "$row[1]";
				$dept = "$row[2]";
				$sub = "$row[3]";
				$sect = "$row[4]";
				$stime = "$row[5]";
				$etime = "$row[6]";
				echo "<tbody id='myTable'>
					<tr>
						<td>";echo $empno; echo"</td>
						<td>";echo $empname; echo"</td>
						<td>";echo $dept; echo"</td>
						<td>";echo $sub; echo"</td>
						<td>";echo $sect; echo"</td>
						<td><b>";echo $stime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td>";echo "<input type='submit' class='btn btn-default approvesched' value = '✔' align = 'center'>";
					echo"</td>
						<td>";echo "<input type='submit' class='btn btn-default disapprovedsched' value = '❌' align = 'center'>";
					echo"</td>
					</tr>
				</tbody>";
			}
		echo "</table>";
	}

	function loadMonCL2()
	{
	  global $connect;

	  echo" <table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
		<thead>
			<tr>
				<th>Employee&nbsp;No</th>
				<th>Faculty&nbsp;Name</th>
				<th>Department</th>
				<th>Subject</th>
				<th>Section</th>
				<th>Start&nbsp;Time</th>
				<th>End&nbsp;Time</th>
				<th>Action</th>
			</tr>
		</thead> ";
		$get = "SELECT * FROM tbl_lab WHERE Lab = 'CL2' AND Day = 'Mon' ORDER BY Start_Time ASC";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$empno = "$row[0]";
			$empname = "$row[1]";
			$dept = "$row[2]";
			$sub = "$row[3]";
			$sect = "$row[4]";
			$stime = "$row[5]";
			$etime = "$row[6]";
			echo "<tbody id='myTable'>
				<tr>
					<td>";echo $empno; echo"</td>
					<td>";echo $empname; echo"</td>
					<td>";echo $dept; echo"</td>
					<td>";echo $sub; echo"</td>
					<td>";echo $sect; echo"</td>
					<td><b>";echo $stime; echo"</b></td>
					<td><b>";echo $etime; echo"</b></td>
					<td>";echo "<input type='submit' class='btn btn-default editsched' value = '✎' align = 'center'>";
				echo"</td>
					<td>";echo "<input type='submit' class='btn btn-default delsched' value = '❌' align = 'center'>";
				echo"</td>
				</tr>
			</tbody>";
		}
		echo "</table>

		<br><br>
		<h5 style='margin-bottom: 17px;'>Pending Schedules</h5>
		<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;''>
			<thead>
				<tr>
					<th>Employee&nbsp;No</th>
					<th>Faculty&nbsp;Name</th>
					<th>Department</th>
					<th>Subject</th>
					<th>Section</th>
					<th>Start&nbsp;Time</th>
					<th>End&nbsp;Time</th>
					<th>Date&nbsp;Added</th>
					<th>Action</th>
					<th></th>
				</tr>
			</thead> ";

			$get = "SELECT * FROM tbl_lab_pending WHERE Lab = 'CL2' AND Day = 'Mon' ORDER BY Start_Time ASC";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$empno = "$row[0]";
				$empname = "$row[1]";
				$dept = "$row[2]";
				$sub = "$row[3]";
				$sect = "$row[4]";
				$stime = "$row[5]";
				$etime = "$row[6]";
				echo "<tbody id='myTable'>
					<tr>
						<td>";echo $empno; echo"</td>
						<td>";echo $empname; echo"</td>
						<td>";echo $dept; echo"</td>
						<td>";echo $sub; echo"</td>
						<td>";echo $sect; echo"</td>
						<td><b>";echo $stime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td>";echo "<input type='submit' class='btn btn-default approvesched' value = '✔' align = 'center'>";
					echo"</td>
						<td>";echo "<input type='submit' class='btn btn-default disapprovedsched' value = '❌' align = 'center'>";
					echo"</td>
					</tr>
				</tbody>";
			}
		echo "</table>";
	}

	function loadMonCL3()
	{
	  global $connect;

	  echo" <table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
		<thead>
			<tr>
				<th>Employee&nbsp;No</th>
				<th>Faculty&nbsp;Name</th>
				<th>Department</th>
				<th>Subject</th>
				<th>Section</th>
				<th>Start&nbsp;Time</th>
				<th>End&nbsp;Time</th>
				<th>Action</th>
			</tr>
		</thead> ";
		$get = "SELECT * FROM tbl_lab WHERE Lab = 'CL3' AND Day = 'Mon' ORDER BY Start_Time ASC";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$empno = "$row[0]";
			$empname = "$row[1]";
			$dept = "$row[2]";
			$sub = "$row[3]";
			$sect = "$row[4]";
			$stime = "$row[5]";
			$etime = "$row[6]";
			echo "<tbody id='myTable'>
				<tr>
					<td>";echo $empno; echo"</td>
					<td>";echo $empname; echo"</td>
					<td>";echo $dept; echo"</td>
					<td>";echo $sub; echo"</td>
					<td>";echo $sect; echo"</td>
					<td><b>";echo $stime; echo"</b></td>
					<td><b>";echo $etime; echo"</b></td>
					<td>";echo "<input type='submit' class='btn btn-default editsched' value = '✎' align = 'center'>";
				echo"</td>
					<td>";echo "<input type='submit' class='btn btn-default delsched' value = '❌' align = 'center'>";
				echo"</td>
				</tr>
			</tbody>";
		}
		echo "</table>

		<br><br>
		<h5 style='margin-bottom: 17px;'>Pending Schedules</h5>
		<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;''>
			<thead>
				<tr>
					<th>Employee&nbsp;No</th>
					<th>Faculty&nbsp;Name</th>
					<th>Department</th>
					<th>Subject</th>
					<th>Section</th>
					<th>Start&nbsp;Time</th>
					<th>End&nbsp;Time</th>
					<th>Date&nbsp;Added</th>
					<th>Action</th>
					<th></th>
				</tr>
			</thead> ";

			$get = "SELECT * FROM tbl_lab_pending WHERE Lab = 'CL3' AND Day = 'Mon' ORDER BY Start_Time ASC";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$empno = "$row[0]";
				$empname = "$row[1]";
				$dept = "$row[2]";
				$sub = "$row[3]";
				$sect = "$row[4]";
				$stime = "$row[5]";
				$etime = "$row[6]";
				echo "<tbody id='myTable'>
					<tr>
						<td>";echo $empno; echo"</td>
						<td>";echo $empname; echo"</td>
						<td>";echo $dept; echo"</td>
						<td>";echo $sub; echo"</td>
						<td>";echo $sect; echo"</td>
						<td><b>";echo $stime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td>";echo "<input type='submit' class='btn btn-default approvesched' value = '✔' align = 'center'>";
					echo"</td>
						<td>";echo "<input type='submit' class='btn btn-default disapprovedsched' value = '❌' align = 'center'>";
					echo"</td>
					</tr>
				</tbody>";
			}
		echo "</table>";
	}

	function loadMonCL4()
	{
	  global $connect;

	  echo" <table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
		<thead>
			<tr>
				<th>Employee&nbsp;No</th>
				<th>Faculty&nbsp;Name</th>
				<th>Department</th>
				<th>Subject</th>
				<th>Section</th>
				<th>Start&nbsp;Time</th>
				<th>End&nbsp;Time</th>
				<th>Action</th>
			</tr>
		</thead> ";
		$get = "SELECT * FROM tbl_lab WHERE Lab = 'CL4' AND Day = 'Mon' ORDER BY Start_Time ASC";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$empno = "$row[0]";
			$empname = "$row[1]";
			$dept = "$row[2]";
			$sub = "$row[3]";
			$sect = "$row[4]";
			$stime = "$row[5]";
			$etime = "$row[6]";
			echo "<tbody id='myTable'>
				<tr>
					<td>";echo $empno; echo"</td>
					<td>";echo $empname; echo"</td>
					<td>";echo $dept; echo"</td>
					<td>";echo $sub; echo"</td>
					<td>";echo $sect; echo"</td>
					<td><b>";echo $stime; echo"</b></td>
					<td><b>";echo $etime; echo"</b></td>
					<td>";echo "<input type='submit' class='btn btn-default editsched' value = '✎' align = 'center'>";
				echo"</td>
					<td>";echo "<input type='submit' class='btn btn-default delsched' value = '❌' align = 'center'>";
				echo"</td>
				</tr>
			</tbody>";
		}
		echo "</table>

		<br><br>
		<h5 style='margin-bottom: 17px;'>Pending Schedules</h5>
		<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;''>
			<thead>
				<tr>
					<th>Employee&nbsp;No</th>
					<th>Faculty&nbsp;Name</th>
					<th>Department</th>
					<th>Subject</th>
					<th>Section</th>
					<th>Start&nbsp;Time</th>
					<th>End&nbsp;Time</th>
					<th>Date&nbsp;Added</th>
					<th>Action</th>
					<th></th>
				</tr>
			</thead> ";

			$get = "SELECT * FROM tbl_lab_pending WHERE Lab = 'CL4' AND Day = 'Mon' ORDER BY Start_Time ASC";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$empno = "$row[0]";
				$empname = "$row[1]";
				$dept = "$row[2]";
				$sub = "$row[3]";
				$sect = "$row[4]";
				$stime = "$row[5]";
				$etime = "$row[6]";
				echo "<tbody id='myTable'>
					<tr>
						<td>";echo $empno; echo"</td>
						<td>";echo $empname; echo"</td>
						<td>";echo $dept; echo"</td>
						<td>";echo $sub; echo"</td>
						<td>";echo $sect; echo"</td>
						<td><b>";echo $stime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td>";echo "<input type='submit' class='btn btn-default approvesched' value = '✔' align = 'center'>";
					echo"</td>
						<td>";echo "<input type='submit' class='btn btn-default disapprovedsched' value = '❌' align = 'center'>";
					echo"</td>
					</tr>
				</tbody>";
			}
		echo "</table>";
	}

	function loadMonCL5()
	{
	  global $connect;

	  echo" <table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
		<thead>
			<tr>
				<th>Employee&nbsp;No</th>
				<th>Faculty&nbsp;Name</th>
				<th>Department</th>
				<th>Subject</th>
				<th>Section</th>
				<th>Start&nbsp;Time</th>
				<th>End&nbsp;Time</th>
				<th>Action</th>
			</tr>
		</thead> ";
		$get = "SELECT * FROM tbl_lab WHERE Lab = 'CL5' AND Day = 'Mon' ORDER BY Start_Time ASC";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$empno = "$row[0]";
			$empname = "$row[1]";
			$dept = "$row[2]";
			$sub = "$row[3]";
			$sect = "$row[4]";
			$stime = "$row[5]";
			$etime = "$row[6]";
			echo "<tbody id='myTable'>
				<tr>
					<td>";echo $empno; echo"</td>
					<td>";echo $empname; echo"</td>
					<td>";echo $dept; echo"</td>
					<td>";echo $sub; echo"</td>
					<td>";echo $sect; echo"</td>
					<td><b>";echo $stime; echo"</b></td>
					<td><b>";echo $etime; echo"</b></td>
					<td>";echo "<input type='submit' class='btn btn-default editsched' value = '✎' align = 'center'>";
				echo"</td>
					<td>";echo "<input type='submit' class='btn btn-default delsched' value = '❌' align = 'center'>";
				echo"</td>
				</tr>
			</tbody>";
		}
		echo "</table>

		<br><br>
		<h5 style='margin-bottom: 17px;'>Pending Schedules</h5>
		<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;''>
			<thead>
				<tr>
					<th>Employee&nbsp;No</th>
					<th>Faculty&nbsp;Name</th>
					<th>Department</th>
					<th>Subject</th>
					<th>Section</th>
					<th>Start&nbsp;Time</th>
					<th>End&nbsp;Time</th>
					<th>Date&nbsp;Added</th>
					<th>Action</th>
					<th></th>
				</tr>
			</thead> ";

			$get = "SELECT * FROM tbl_lab_pending WHERE Lab = 'CL5' AND Day = 'Mon' ORDER BY Start_Time ASC";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$empno = "$row[0]";
				$empname = "$row[1]";
				$dept = "$row[2]";
				$sub = "$row[3]";
				$sect = "$row[4]";
				$stime = "$row[5]";
				$etime = "$row[6]";
				echo "<tbody id='myTable'>
					<tr>
						<td>";echo $empno; echo"</td>
						<td>";echo $empname; echo"</td>
						<td>";echo $dept; echo"</td>
						<td>";echo $sub; echo"</td>
						<td>";echo $sect; echo"</td>
						<td><b>";echo $stime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td>";echo "<input type='submit' class='btn btn-default approvesched' value = '✔' align = 'center'>";
					echo"</td>
						<td>";echo "<input type='submit' class='btn btn-default disapprovedsched' value = '❌' align = 'center'>";
					echo"</td>
					</tr>
				</tbody>";
			}
		echo "</table>";
	}

	function loadMonCL6()
	{
	  global $connect;

	  echo" <table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
		<thead>
			<tr>
				<th>Employee&nbsp;No</th>
				<th>Faculty&nbsp;Name</th>
				<th>Department</th>
				<th>Subject</th>
				<th>Section</th>
				<th>Start&nbsp;Time</th>
				<th>End&nbsp;Time</th>
				<th>Action</th>
			</tr>
		</thead> ";
		$get = "SELECT * FROM tbl_lab WHERE Lab = 'CL6' AND Day = 'Mon' ORDER BY Start_Time ASC";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$empno = "$row[0]";
			$empname = "$row[1]";
			$dept = "$row[2]";
			$sub = "$row[3]";
			$sect = "$row[4]";
			$stime = "$row[5]";
			$etime = "$row[6]";
			echo "<tbody id='myTable'>
				<tr>
					<td>";echo $empno; echo"</td>
					<td>";echo $empname; echo"</td>
					<td>";echo $dept; echo"</td>
					<td>";echo $sub; echo"</td>
					<td>";echo $sect; echo"</td>
					<td><b>";echo $stime; echo"</b></td>
					<td><b>";echo $etime; echo"</b></td>
					<td>";echo "<input type='submit' class='btn btn-default editsched' value = '✎' align = 'center'>";
				echo"</td>
					<td>";echo "<input type='submit' class='btn btn-default delsched' value = '❌' align = 'center'>";
				echo"</td>
				</tr>
			</tbody>";
		}
		echo "</table>

		<br><br>
		<h5 style='margin-bottom: 17px;'>Pending Schedules</h5>
		<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;''>
			<thead>
				<tr>
					<th>Employee&nbsp;No</th>
					<th>Faculty&nbsp;Name</th>
					<th>Department</th>
					<th>Subject</th>
					<th>Section</th>
					<th>Start&nbsp;Time</th>
					<th>End&nbsp;Time</th>
					<th>Date&nbsp;Added</th>
					<th>Action</th>
					<th></th>
				</tr>
			</thead> ";

			$get = "SELECT * FROM tbl_lab_pending WHERE Lab = 'CL6' AND Day = 'Mon' ORDER BY Start_Time ASC";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$empno = "$row[0]";
				$empname = "$row[1]";
				$dept = "$row[2]";
				$sub = "$row[3]";
				$sect = "$row[4]";
				$stime = "$row[5]";
				$etime = "$row[6]";
				echo "<tbody id='myTable'>
					<tr>
						<td>";echo $empno; echo"</td>
						<td>";echo $empname; echo"</td>
						<td>";echo $dept; echo"</td>
						<td>";echo $sub; echo"</td>
						<td>";echo $sect; echo"</td>
						<td><b>";echo $stime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td>";echo "<input type='submit' class='btn btn-default approvesched' value = '✔' align = 'center'>";
					echo"</td>
						<td>";echo "<input type='submit' class='btn btn-default disapprovedsched' value = '❌' align = 'center'>";
					echo"</td>
					</tr>
				</tbody>";
			}
		echo "</table>";
	}

	function loadMonCL7()
	{
	  global $connect;

	  echo" <table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
		<thead>
			<tr>
				<th>Employee&nbsp;No</th>
				<th>Faculty&nbsp;Name</th>
				<th>Department</th>
				<th>Subject</th>
				<th>Section</th>
				<th>Start&nbsp;Time</th>
				<th>End&nbsp;Time</th>
				<th>Action</th>
			</tr>
		</thead> ";
		$get = "SELECT * FROM tbl_lab WHERE Lab = 'CL7' AND Day = 'Mon' ORDER BY Start_Time ASC";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$empno = "$row[0]";
			$empname = "$row[1]";
			$dept = "$row[2]";
			$sub = "$row[3]";
			$sect = "$row[4]";
			$stime = "$row[5]";
			$etime = "$row[6]";
			echo "<tbody id='myTable'>
				<tr>
					<td>";echo $empno; echo"</td>
					<td>";echo $empname; echo"</td>
					<td>";echo $dept; echo"</td>
					<td>";echo $sub; echo"</td>
					<td>";echo $sect; echo"</td>
					<td><b>";echo $stime; echo"</b></td>
					<td><b>";echo $etime; echo"</b></td>
					<td>";echo "<input type='submit' class='btn btn-default editsched' value = '✎' align = 'center'>";
				echo"</td>
					<td>";echo "<input type='submit' class='btn btn-default delsched' value = '❌' align = 'center'>";
				echo"</td>
				</tr>
			</tbody>";
		}
		echo "</table>

		<br><br>
		<h5 style='margin-bottom: 17px;'>Pending Schedules</h5>
		<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;''>
			<thead>
				<tr>
					<th>Employee&nbsp;No</th>
					<th>Faculty&nbsp;Name</th>
					<th>Department</th>
					<th>Subject</th>
					<th>Section</th>
					<th>Start&nbsp;Time</th>
					<th>End&nbsp;Time</th>
					<th>Date&nbsp;Added</th>
					<th>Action</th>
					<th></th>
				</tr>
			</thead> ";

			$get = "SELECT * FROM tbl_lab_pending WHERE Lab = 'CL7' AND Day = 'Mon' ORDER BY Start_Time ASC";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$empno = "$row[0]";
				$empname = "$row[1]";
				$dept = "$row[2]";
				$sub = "$row[3]";
				$sect = "$row[4]";
				$stime = "$row[5]";
				$etime = "$row[6]";
				echo "<tbody id='myTable'>
					<tr>
						<td>";echo $empno; echo"</td>
						<td>";echo $empname; echo"</td>
						<td>";echo $dept; echo"</td>
						<td>";echo $sub; echo"</td>
						<td>";echo $sect; echo"</td>
						<td><b>";echo $stime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td>";echo "<input type='submit' class='btn btn-default approvesched' value = '✔' align = 'center'>";
					echo"</td>
						<td>";echo "<input type='submit' class='btn btn-default disapprovedsched' value = '❌' align = 'center'>";
					echo"</td>
					</tr>
				</tbody>";
			}
		echo "</table>";
	}

	function loadMonCSS()
	{
	  global $connect;

	  echo" <table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
		<thead>
			<tr>
				<th>Employee&nbsp;No</th>
				<th>Faculty&nbsp;Name</th>
				<th>Department</th>
				<th>Subject</th>
				<th>Section</th>
				<th>Start&nbsp;Time</th>
				<th>End&nbsp;Time</th>
				<th>Action</th>
			</tr>
		</thead> ";
		$get = "SELECT * FROM tbl_lab WHERE Lab = 'CSS' AND Day = 'Mon' ORDER BY Start_Time ASC";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$empno = "$row[0]";
			$empname = "$row[1]";
			$dept = "$row[2]";
			$sub = "$row[3]";
			$sect = "$row[4]";
			$stime = "$row[5]";
			$etime = "$row[6]";
			echo "<tbody id='myTable'>
				<tr>
					<td>";echo $empno; echo"</td>
					<td>";echo $empname; echo"</td>
					<td>";echo $dept; echo"</td>
					<td>";echo $sub; echo"</td>
					<td>";echo $sect; echo"</td>
					<td><b>";echo $stime; echo"</b></td>
					<td><b>";echo $etime; echo"</b></td>
					<td>";echo "<input type='submit' class='btn btn-default editsched' value = '✎' align = 'center'>";
				echo"</td>
					<td>";echo "<input type='submit' class='btn btn-default delsched' value = '❌' align = 'center'>";
				echo"</td>
				</tr>
			</tbody>";
		}
		echo "</table>

		<br><br>
		<h5 style='margin-bottom: 17px;'>Pending Schedules</h5>
		<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;''>
			<thead>
				<tr>
					<th>Employee&nbsp;No</th>
					<th>Faculty&nbsp;Name</th>
					<th>Department</th>
					<th>Subject</th>
					<th>Section</th>
					<th>Start&nbsp;Time</th>
					<th>End&nbsp;Time</th>
					<th>Date&nbsp;Added</th>
					<th>Action</th>
					<th></th>
				</tr>
			</thead> ";

			$get = "SELECT * FROM tbl_lab_pending WHERE Lab = 'CSS' AND Day = 'Mon' ORDER BY Start_Time ASC";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$empno = "$row[0]";
				$empname = "$row[1]";
				$dept = "$row[2]";
				$sub = "$row[3]";
				$sect = "$row[4]";
				$stime = "$row[5]";
				$etime = "$row[6]";
				echo "<tbody id='myTable'>
					<tr>
						<td>";echo $empno; echo"</td>
						<td>";echo $empname; echo"</td>
						<td>";echo $dept; echo"</td>
						<td>";echo $sub; echo"</td>
						<td>";echo $sect; echo"</td>
						<td><b>";echo $stime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td>";echo "<input type='submit' class='btn btn-default approvesched' value = '✔' align = 'center'>";
					echo"</td>
						<td>";echo "<input type='submit' class='btn btn-default disapprovedsched' value = '❌' align = 'center'>";
					echo"</td>
					</tr>
				</tbody>";
			}
		echo "</table>";
	}

	function loadMonHistory()
	{
	  global $connect;

	  echo" <table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
		<thead>
			<tr>
				<th>Emp&nbsp;No</th>
				<th>Emp&nbsp;Name</th>
				<th>Dept</th>
				<th>Lab</th>
				<th>Subject</th>
				<th>Section</th>
				<th>Start&nbsp;Time</th>
				<th>End&nbsp;Time</th>
				<th>Date</th>
			</tr>
		</thead> ";
		$get = "SELECT * FROM tbl_lab_makeup WHERE Day = 'Mon' ORDER BY Date ASC, Start_Time ASC";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$empno = "$row[0]";
			$empname = "$row[1]";
			$dept = "$row[2]";
			$sub = "$row[3]";
			$sect = "$row[4]";
			$stime = "$row[5]";
			$etime = "$row[6]";
			$lab = "$row[8]";
			$date = "$row[10]";
			echo "<tbody id='myTable'>
				<tr>
					<td>";echo $empno; echo"</td>
					<td>";echo $empname; echo"</td>
					<td>";echo $dept; echo"</td>
					<td>";echo $lab; echo"</td>
					<td>";echo $sub; echo"</td>
					<td>";echo $sect; echo"</td>
					<td>";echo $stime; echo"</td>
					<td>";echo $etime; echo"</td>
					<td>";echo $date; echo"</td>
				</tr>
			</tbody>";
		}
		echo "</table>

		<br><br>
		<h5 style='margin-bottom: 17px;'>Pending Schedules</h5>
		<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;''>
			<thead>
				<tr>
					<th>Employee&nbsp;No</th>
					<th>Faculty&nbsp;Name</th>
					<th>Department</th>
					<th>Subject</th>
					<th>Section</th>
					<th>Start&nbsp;Time</th>
					<th>End&nbsp;Time</th>
					<th>Date&nbsp;Added</th>
					<th>Action</th>
					<th></th>
				</tr>
			</thead> ";

			$get = "SELECT * FROM tbl_lab_pending WHERE Lab = 'CSS' AND Day = 'Mon' ORDER BY Start_Time ASC";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$empno = "$row[0]";
				$empname = "$row[1]";
				$dept = "$row[2]";
				$sub = "$row[3]";
				$sect = "$row[4]";
				$stime = "$row[5]";
				$etime = "$row[6]";
				echo "<tbody id='myTable'>
					<tr>
						<td>";echo $empno; echo"</td>
						<td>";echo $empname; echo"</td>
						<td>";echo $dept; echo"</td>
						<td>";echo $sub; echo"</td>
						<td>";echo $sect; echo"</td>
						<td><b>";echo $stime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td>";echo "<input type='submit' class='btn btn-default approvesched' value = '✔' align = 'center'>";
					echo"</td>
						<td>";echo "<input type='submit' class='btn btn-default disapprovedsched' value = '❌' align = 'center'>";
					echo"</td>
					</tr>
				</tbody>";
			}
		echo "</table>";
	}



	//TUEDAY
	function loadTueCL1()
	{
	  global $connect;

	  echo" <table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
		<thead>
			<tr>
				<th>Employee&nbsp;No</th>
				<th>Faculty&nbsp;Name</th>
				<th>Department</th>
				<th>Subject</th>
				<th>Section</th>
				<th>Start&nbsp;Time</th>
				<th>End&nbsp;Time</th>
				<th>Action</th>
			</tr>
		</thead> ";
		$get = "SELECT * FROM tbl_lab WHERE Lab = 'CL1' AND Day = 'Tue' ORDER BY Start_Time ASC";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$empno = "$row[0]";
			$empname = "$row[1]";
			$dept = "$row[2]";
			$sub = "$row[3]";
			$sect = "$row[4]";
			$stime = "$row[5]";
			$etime = "$row[6]";
			echo "<tbody id='myTable'>
				<tr>
					<td>";echo $empno; echo"</td>
					<td>";echo $empname; echo"</td>
					<td>";echo $dept; echo"</td>
					<td>";echo $sub; echo"</td>
					<td>";echo $sect; echo"</td>
					<td><b>";echo $stime; echo"</b></td>
					<td><b>";echo $etime; echo"</b></td>
					<td>";echo "<input type='submit' class='btn btn-default editsched' value = '✎' align = 'center'>";
				echo"</td>
					<td>";echo "<input type='submit' class='btn btn-default delsched' value = '❌' align = 'center'>";
				echo"</td>
				</tr>
			</tbody>";
		}
		echo "</table>

		<br><br>
		<h5 style='margin-bottom: 17px;'>Pending Schedules</h5>
		<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;''>
			<thead>
				<tr>
					<th>Employee&nbsp;No</th>
					<th>Faculty&nbsp;Name</th>
					<th>Department</th>
					<th>Subject</th>
					<th>Section</th>
					<th>Start&nbsp;Time</th>
					<th>End&nbsp;Time</th>
					<th>Date&nbsp;Added</th>
					<th>Action</th>
					<th></th>
				</tr>
			</thead> ";

			$get = "SELECT * FROM tbl_lab_pending WHERE Lab = 'CL1' AND Day = 'Tue' ORDER BY Start_Time ASC";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$empno = "$row[0]";
				$empname = "$row[1]";
				$dept = "$row[2]";
				$sub = "$row[3]";
				$sect = "$row[4]";
				$stime = "$row[5]";
				$etime = "$row[6]";
				echo "<tbody id='myTable'>
					<tr>
						<td>";echo $empno; echo"</td>
						<td>";echo $empname; echo"</td>
						<td>";echo $dept; echo"</td>
						<td>";echo $sub; echo"</td>
						<td>";echo $sect; echo"</td>
						<td><b>";echo $stime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td>";echo "<input type='submit' class='btn btn-default approvesched' value = '✔' align = 'center'>";
					echo"</td>
						<td>";echo "<input type='submit' class='btn btn-default disapprovedsched' value = '❌' align = 'center'>";
					echo"</td>
					</tr>
				</tbody>";
			}
		echo "</table>";
	}

	function loadTueCL2()
	{
	  global $connect;

	  echo" <table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
		<thead>
			<tr>
				<th>Employee&nbsp;No</th>
				<th>Faculty&nbsp;Name</th>
				<th>Department</th>
				<th>Subject</th>
				<th>Section</th>
				<th>Start&nbsp;Time</th>
				<th>End&nbsp;Time</th>
				<th>Action</th>
			</tr>
		</thead> ";
		$get = "SELECT * FROM tbl_lab WHERE Lab = 'CL2' AND Day = 'Tue' ORDER BY Start_Time ASC";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$empno = "$row[0]";
			$empname = "$row[1]";
			$dept = "$row[2]";
			$sub = "$row[3]";
			$sect = "$row[4]";
			$stime = "$row[5]";
			$etime = "$row[6]";
			echo "<tbody id='myTable'>
				<tr>
					<td>";echo $empno; echo"</td>
					<td>";echo $empname; echo"</td>
					<td>";echo $dept; echo"</td>
					<td>";echo $sub; echo"</td>
					<td>";echo $sect; echo"</td>
					<td><b>";echo $stime; echo"</b></td>
					<td><b>";echo $etime; echo"</b></td>
					<td>";echo "<input type='submit' class='btn btn-default editsched' value = '✎' align = 'center'>";
				echo"</td>
					<td>";echo "<input type='submit' class='btn btn-default delsched' value = '❌' align = 'center'>";
				echo"</td>
				</tr>
			</tbody>";
		}
		echo "</table>

		<br><br>
		<h5 style='margin-bottom: 17px;'>Pending Schedules</h5>
		<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;''>
			<thead>
				<tr>
					<th>Employee&nbsp;No</th>
					<th>Faculty&nbsp;Name</th>
					<th>Department</th>
					<th>Subject</th>
					<th>Section</th>
					<th>Start&nbsp;Time</th>
					<th>End&nbsp;Time</th>
					<th>Date&nbsp;Added</th>
					<th>Action</th>
					<th></th>
				</tr>
			</thead> ";

			$get = "SELECT * FROM tbl_lab_pending WHERE Lab = 'CL2' AND Day = 'Tue' ORDER BY Start_Time ASC";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$empno = "$row[0]";
				$empname = "$row[1]";
				$dept = "$row[2]";
				$sub = "$row[3]";
				$sect = "$row[4]";
				$stime = "$row[5]";
				$etime = "$row[6]";
				echo "<tbody id='myTable'>
					<tr>
						<td>";echo $empno; echo"</td>
						<td>";echo $empname; echo"</td>
						<td>";echo $dept; echo"</td>
						<td>";echo $sub; echo"</td>
						<td>";echo $sect; echo"</td>
						<td><b>";echo $stime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td>";echo "<input type='submit' class='btn btn-default approvesched' value = '✔' align = 'center'>";
					echo"</td>
						<td>";echo "<input type='submit' class='btn btn-default disapprovedsched' value = '❌' align = 'center'>";
					echo"</td>
					</tr>
				</tbody>";
			}
		echo "</table>";
	}

	function loadTueCL3()
	{
	  global $connect;

	  echo" <table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
		<thead>
			<tr>
				<th>Employee&nbsp;No</th>
				<th>Faculty&nbsp;Name</th>
				<th>Department</th>
				<th>Subject</th>
				<th>Section</th>
				<th>Start&nbsp;Time</th>
				<th>End&nbsp;Time</th>
				<th>Action</th>
			</tr>
		</thead> ";
		$get = "SELECT * FROM tbl_lab WHERE Lab = 'CL3' AND Day = 'Tue' ORDER BY Start_Time ASC";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$empno = "$row[0]";
			$empname = "$row[1]";
			$dept = "$row[2]";
			$sub = "$row[3]";
			$sect = "$row[4]";
			$stime = "$row[5]";
			$etime = "$row[6]";
			echo "<tbody id='myTable'>
				<tr>
					<td>";echo $empno; echo"</td>
					<td>";echo $empname; echo"</td>
					<td>";echo $dept; echo"</td>
					<td>";echo $sub; echo"</td>
					<td>";echo $sect; echo"</td>
					<td><b>";echo $stime; echo"</b></td>
					<td><b>";echo $etime; echo"</b></td>
					<td>";echo "<input type='submit' class='btn btn-default editsched' value = '✎' align = 'center'>";
				echo"</td>
					<td>";echo "<input type='submit' class='btn btn-default delsched' value = '❌' align = 'center'>";
				echo"</td>
				</tr>
			</tbody>";
		}
		echo "</table>

		<br><br>
		<h5 style='margin-bottom: 17px;'>Pending Schedules</h5>
		<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;''>
			<thead>
				<tr>
					<th>Employee&nbsp;No</th>
					<th>Faculty&nbsp;Name</th>
					<th>Department</th>
					<th>Subject</th>
					<th>Section</th>
					<th>Start&nbsp;Time</th>
					<th>End&nbsp;Time</th>
					<th>Date&nbsp;Added</th>
					<th>Action</th>
					<th></th>
				</tr>
			</thead> ";

			$get = "SELECT * FROM tbl_lab_pending WHERE Lab = 'CL3' AND Day = 'Tue' ORDER BY Start_Time ASC";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$empno = "$row[0]";
				$empname = "$row[1]";
				$dept = "$row[2]";
				$sub = "$row[3]";
				$sect = "$row[4]";
				$stime = "$row[5]";
				$etime = "$row[6]";
				echo "<tbody id='myTable'>
					<tr>
						<td>";echo $empno; echo"</td>
						<td>";echo $empname; echo"</td>
						<td>";echo $dept; echo"</td>
						<td>";echo $sub; echo"</td>
						<td>";echo $sect; echo"</td>
						<td><b>";echo $stime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td>";echo "<input type='submit' class='btn btn-default approvesched' value = '✔' align = 'center'>";
					echo"</td>
						<td>";echo "<input type='submit' class='btn btn-default disapprovedsched' value = '❌' align = 'center'>";
					echo"</td>
					</tr>
				</tbody>";
			}
		echo "</table>";
	}

	function loadTueCL4()
	{
	  global $connect;

	  echo" <table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
		<thead>
			<tr>
				<th>Employee&nbsp;No</th>
				<th>Faculty&nbsp;Name</th>
				<th>Department</th>
				<th>Subject</th>
				<th>Section</th>
				<th>Start&nbsp;Time</th>
				<th>End&nbsp;Time</th>
				<th>Action</th>
			</tr>
		</thead> ";
		$get = "SELECT * FROM tbl_lab WHERE Lab = 'CL4' AND Day = 'Tue' ORDER BY Start_Time ASC";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$empno = "$row[0]";
			$empname = "$row[1]";
			$dept = "$row[2]";
			$sub = "$row[3]";
			$sect = "$row[4]";
			$stime = "$row[5]";
			$etime = "$row[6]";
			echo "<tbody id='myTable'>
				<tr>
					<td>";echo $empno; echo"</td>
					<td>";echo $empname; echo"</td>
					<td>";echo $dept; echo"</td>
					<td>";echo $sub; echo"</td>
					<td>";echo $sect; echo"</td>
					<td><b>";echo $stime; echo"</b></td>
					<td><b>";echo $etime; echo"</b></td>
					<td>";echo "<input type='submit' class='btn btn-default editsched' value = '✎' align = 'center'>";
				echo"</td>
					<td>";echo "<input type='submit' class='btn btn-default delsched' value = '❌' align = 'center'>";
				echo"</td>
				</tr>
			</tbody>";
		}
		echo "</table>

		<br><br>
		<h5 style='margin-bottom: 17px;'>Pending Schedules</h5>
		<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;''>
			<thead>
				<tr>
					<th>Employee&nbsp;No</th>
					<th>Faculty&nbsp;Name</th>
					<th>Department</th>
					<th>Subject</th>
					<th>Section</th>
					<th>Start&nbsp;Time</th>
					<th>End&nbsp;Time</th>
					<th>Date&nbsp;Added</th>
					<th>Action</th>
					<th></th>
				</tr>
			</thead> ";

			$get = "SELECT * FROM tbl_lab_pending WHERE Lab = 'CL4' AND Day = 'Tue' ORDER BY Start_Time ASC";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$empno = "$row[0]";
				$empname = "$row[1]";
				$dept = "$row[2]";
				$sub = "$row[3]";
				$sect = "$row[4]";
				$stime = "$row[5]";
				$etime = "$row[6]";
				echo "<tbody id='myTable'>
					<tr>
						<td>";echo $empno; echo"</td>
						<td>";echo $empname; echo"</td>
						<td>";echo $dept; echo"</td>
						<td>";echo $sub; echo"</td>
						<td>";echo $sect; echo"</td>
						<td><b>";echo $stime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td>";echo "<input type='submit' class='btn btn-default approvesched' value = '✔' align = 'center'>";
					echo"</td>
						<td>";echo "<input type='submit' class='btn btn-default disapprovedsched' value = '❌' align = 'center'>";
					echo"</td>
					</tr>
				</tbody>";
			}
		echo "</table>";
	}

	function loadTueCL5()
	{
	  global $connect;

	  echo" <table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
		<thead>
			<tr>
				<th>Employee&nbsp;No</th>
				<th>Faculty&nbsp;Name</th>
				<th>Department</th>
				<th>Subject</th>
				<th>Section</th>
				<th>Start&nbsp;Time</th>
				<th>End&nbsp;Time</th>
				<th>Action</th>
			</tr>
		</thead> ";
		$get = "SELECT * FROM tbl_lab WHERE Lab = 'CL5' AND Day = 'Tue' ORDER BY Start_Time ASC";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$empno = "$row[0]";
			$empname = "$row[1]";
			$dept = "$row[2]";
			$sub = "$row[3]";
			$sect = "$row[4]";
			$stime = "$row[5]";
			$etime = "$row[6]";
			echo "<tbody id='myTable'>
				<tr>
					<td>";echo $empno; echo"</td>
					<td>";echo $empname; echo"</td>
					<td>";echo $dept; echo"</td>
					<td>";echo $sub; echo"</td>
					<td>";echo $sect; echo"</td>
					<td><b>";echo $stime; echo"</b></td>
					<td><b>";echo $etime; echo"</b></td>
					<td>";echo "<input type='submit' class='btn btn-default editsched' value = '✎' align = 'center'>";
				echo"</td>
					<td>";echo "<input type='submit' class='btn btn-default delsched' value = '❌' align = 'center'>";
				echo"</td>
				</tr>
			</tbody>";
		}
		echo "</table>

		<br><br>
		<h5 style='margin-bottom: 17px;'>Pending Schedules</h5>
		<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;''>
			<thead>
				<tr>
					<th>Employee&nbsp;No</th>
					<th>Faculty&nbsp;Name</th>
					<th>Department</th>
					<th>Subject</th>
					<th>Section</th>
					<th>Start&nbsp;Time</th>
					<th>End&nbsp;Time</th>
					<th>Date&nbsp;Added</th>
					<th>Action</th>
					<th></th>
				</tr>
			</thead> ";

			$get = "SELECT * FROM tbl_lab_pending WHERE Lab = 'CL5' AND Day = 'Tue' ORDER BY Start_Time ASC";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$empno = "$row[0]";
				$empname = "$row[1]";
				$dept = "$row[2]";
				$sub = "$row[3]";
				$sect = "$row[4]";
				$stime = "$row[5]";
				$etime = "$row[6]";
				echo "<tbody id='myTable'>
					<tr>
						<td>";echo $empno; echo"</td>
						<td>";echo $empname; echo"</td>
						<td>";echo $dept; echo"</td>
						<td>";echo $sub; echo"</td>
						<td>";echo $sect; echo"</td>
						<td><b>";echo $stime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td>";echo "<input type='submit' class='btn btn-default approvesched' value = '✔' align = 'center'>";
					echo"</td>
						<td>";echo "<input type='submit' class='btn btn-default disapprovedsched' value = '❌' align = 'center'>";
					echo"</td>
					</tr>
				</tbody>";
			}
		echo "</table>";
	}

	function loadTueCL6()
	{
	  global $connect;

	  echo" <table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
		<thead>
			<tr>
				<th>Employee&nbsp;No</th>
				<th>Faculty&nbsp;Name</th>
				<th>Department</th>
				<th>Subject</th>
				<th>Section</th>
				<th>Start&nbsp;Time</th>
				<th>End&nbsp;Time</th>
				<th>Action</th>
			</tr>
		</thead> ";
		$get = "SELECT * FROM tbl_lab WHERE Lab = 'CL6' AND Day = 'Tue' ORDER BY Start_Time ASC";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$empno = "$row[0]";
			$empname = "$row[1]";
			$dept = "$row[2]";
			$sub = "$row[3]";
			$sect = "$row[4]";
			$stime = "$row[5]";
			$etime = "$row[6]";
			echo "<tbody id='myTable'>
				<tr>
					<td>";echo $empno; echo"</td>
					<td>";echo $empname; echo"</td>
					<td>";echo $dept; echo"</td>
					<td>";echo $sub; echo"</td>
					<td>";echo $sect; echo"</td>
					<td><b>";echo $stime; echo"</b></td>
					<td><b>";echo $etime; echo"</b></td>
					<td>";echo "<input type='submit' class='btn btn-default editsched' value = '✎' align = 'center'>";
				echo"</td>
					<td>";echo "<input type='submit' class='btn btn-default delsched' value = '❌' align = 'center'>";
				echo"</td>
				</tr>
			</tbody>";
		}
		echo "</table>

		<br><br>
		<h5 style='margin-bottom: 17px;'>Pending Schedules</h5>
		<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;''>
			<thead>
				<tr>
					<th>Employee&nbsp;No</th>
					<th>Faculty&nbsp;Name</th>
					<th>Department</th>
					<th>Subject</th>
					<th>Section</th>
					<th>Start&nbsp;Time</th>
					<th>End&nbsp;Time</th>
					<th>Date&nbsp;Added</th>
					<th>Action</th>
					<th></th>
				</tr>
			</thead> ";

			$get = "SELECT * FROM tbl_lab_pending WHERE Lab = 'CL6' AND Day = 'Tue' ORDER BY Start_Time ASC";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$empno = "$row[0]";
				$empname = "$row[1]";
				$dept = "$row[2]";
				$sub = "$row[3]";
				$sect = "$row[4]";
				$stime = "$row[5]";
				$etime = "$row[6]";
				echo "<tbody id='myTable'>
					<tr>
						<td>";echo $empno; echo"</td>
						<td>";echo $empname; echo"</td>
						<td>";echo $dept; echo"</td>
						<td>";echo $sub; echo"</td>
						<td>";echo $sect; echo"</td>
						<td><b>";echo $stime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td>";echo "<input type='submit' class='btn btn-default approvesched' value = '✔' align = 'center'>";
					echo"</td>
						<td>";echo "<input type='submit' class='btn btn-default disapprovedsched' value = '❌' align = 'center'>";
					echo"</td>
					</tr>
				</tbody>";
			}
		echo "</table>";
	}

	function loadTueCL7()
	{
	  global $connect;

	  echo" <table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
		<thead>
			<tr>
				<th>Employee&nbsp;No</th>
				<th>Faculty&nbsp;Name</th>
				<th>Department</th>
				<th>Subject</th>
				<th>Section</th>
				<th>Start&nbsp;Time</th>
				<th>End&nbsp;Time</th>
				<th>Action</th>
			</tr>
		</thead> ";
		$get = "SELECT * FROM tbl_lab WHERE Lab = 'CL7' AND Day = 'Tue' ORDER BY Start_Time ASC";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$empno = "$row[0]";
			$empname = "$row[1]";
			$dept = "$row[2]";
			$sub = "$row[3]";
			$sect = "$row[4]";
			$stime = "$row[5]";
			$etime = "$row[6]";
			echo "<tbody id='myTable'>
				<tr>
					<td>";echo $empno; echo"</td>
					<td>";echo $empname; echo"</td>
					<td>";echo $dept; echo"</td>
					<td>";echo $sub; echo"</td>
					<td>";echo $sect; echo"</td>
					<td><b>";echo $stime; echo"</b></td>
					<td><b>";echo $etime; echo"</b></td>
					<td>";echo "<input type='submit' class='btn btn-default editsched' value = '✎' align = 'center'>";
				echo"</td>
					<td>";echo "<input type='submit' class='btn btn-default delsched' value = '❌' align = 'center'>";
				echo"</td>
				</tr>
			</tbody>";
		}
		echo "</table>

		<br><br>
		<h5 style='margin-bottom: 17px;'>Pending Schedules</h5>
		<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;''>
			<thead>
				<tr>
					<th>Employee&nbsp;No</th>
					<th>Faculty&nbsp;Name</th>
					<th>Department</th>
					<th>Subject</th>
					<th>Section</th>
					<th>Start&nbsp;Time</th>
					<th>End&nbsp;Time</th>
					<th>Date&nbsp;Added</th>
					<th>Action</th>
					<th></th>
				</tr>
			</thead> ";

			$get = "SELECT * FROM tbl_lab_pending WHERE Lab = 'CL7' AND Day = 'Tue' ORDER BY Start_Time ASC";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$empno = "$row[0]";
				$empname = "$row[1]";
				$dept = "$row[2]";
				$sub = "$row[3]";
				$sect = "$row[4]";
				$stime = "$row[5]";
				$etime = "$row[6]";
				echo "<tbody id='myTable'>
					<tr>
						<td>";echo $empno; echo"</td>
						<td>";echo $empname; echo"</td>
						<td>";echo $dept; echo"</td>
						<td>";echo $sub; echo"</td>
						<td>";echo $sect; echo"</td>
						<td><b>";echo $stime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td>";echo "<input type='submit' class='btn btn-default approvesched' value = '✔' align = 'center'>";
					echo"</td>
						<td>";echo "<input type='submit' class='btn btn-default disapprovedsched' value = '❌' align = 'center'>";
					echo"</td>
					</tr>
				</tbody>";
			}
		echo "</table>";
	}

	function loadTueCSS()
	{
	  global $connect;

	  echo" <table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;'>
		<thead>
			<tr>
				<th>Employee&nbsp;No</th>
				<th>Faculty&nbsp;Name</th>
				<th>Department</th>
				<th>Subject</th>
				<th>Section</th>
				<th>Start&nbsp;Time</th>
				<th>End&nbsp;Time</th>
				<th>Action</th>
			</tr>
		</thead> ";
		$get = "SELECT * FROM tbl_lab WHERE Lab = 'CSS' AND Day = 'Tue' ORDER BY Start_Time ASC";
		$get_run = mysqli_query($connect, $get);
		while($row = mysqli_fetch_row($get_run)){
			$empno = "$row[0]";
			$empname = "$row[1]";
			$dept = "$row[2]";
			$sub = "$row[3]";
			$sect = "$row[4]";
			$stime = "$row[5]";
			$etime = "$row[6]";
			echo "<tbody id='myTable'>
				<tr>
					<td>";echo $empno; echo"</td>
					<td>";echo $empname; echo"</td>
					<td>";echo $dept; echo"</td>
					<td>";echo $sub; echo"</td>
					<td>";echo $sect; echo"</td>
					<td><b>";echo $stime; echo"</b></td>
					<td><b>";echo $etime; echo"</b></td>
					<td>";echo "<input type='submit' class='btn btn-default editsched' value = '✎' align = 'center'>";
				echo"</td>
					<td>";echo "<input type='submit' class='btn btn-default delsched' value = '❌' align = 'center'>";
				echo"</td>
				</tr>
			</tbody>";
		}
		echo "</table>

		<br><br>
		<h5 style='margin-bottom: 17px;'>Pending Schedules</h5>
		<table id = 'myUL' class = 'table table-striped tables' style='background-color:white; margin-left: -10px; margin-top: -10px;''>
			<thead>
				<tr>
					<th>Employee&nbsp;No</th>
					<th>Faculty&nbsp;Name</th>
					<th>Department</th>
					<th>Subject</th>
					<th>Section</th>
					<th>Start&nbsp;Time</th>
					<th>End&nbsp;Time</th>
					<th>Date&nbsp;Added</th>
					<th>Action</th>
					<th></th>
				</tr>
			</thead> ";

			$get = "SELECT * FROM tbl_lab_pending WHERE Lab = 'CSS' AND Day = 'Tue' ORDER BY Start_Time ASC";
			$get_run = mysqli_query($connect, $get);
			while($row = mysqli_fetch_row($get_run)){
				$empno = "$row[0]";
				$empname = "$row[1]";
				$dept = "$row[2]";
				$sub = "$row[3]";
				$sect = "$row[4]";
				$stime = "$row[5]";
				$etime = "$row[6]";
				echo "<tbody id='myTable'>
					<tr>
						<td>";echo $empno; echo"</td>
						<td>";echo $empname; echo"</td>
						<td>";echo $dept; echo"</td>
						<td>";echo $sub; echo"</td>
						<td>";echo $sect; echo"</td>
						<td><b>";echo $stime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td><b>";echo $etime; echo"</b></td>
						<td>";echo "<input type='submit' class='btn btn-default approvesched' value = '✔' align = 'center'>";
					echo"</td>
						<td>";echo "<input type='submit' class='btn btn-default disapprovedsched' value = '❌' align = 'center'>";
					echo"</td>
					</tr>
				</tbody>";
			}
		echo "</table>";
	}
?>