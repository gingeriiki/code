<?php
	include("config.php");
	$user = $_SESSION['a'];
	$type = $_SESSION['type'];
	$userdept = $_SESSION['userdept'];

	if($type == 'labcoordinator')
	{
	 	$sql = "SELECT * FROM tbl_lab_pending WHERE Department = '$userdept' AND Flag = 'true'";
	    if ($result = mysqli_query($connect, $sql)) 
	    {
	    	$countdept = mysqli_num_rows( $result );
   	 	}

   	 	$sql = "SELECT * FROM tbl_lab_pending WHERE Department = '$userdept' AND Flag = 'true' AND Day = 'Mon'";
	    if ($result = mysqli_query($connect, $sql)) 
	    {
	    	$countdeptmon = mysqli_num_rows( $result );
   	 	}

   	 	$sql = "SELECT * FROM tbl_lab_pending WHERE Department = '$userdept' AND Flag = 'true' AND Day = 'Tue'";
	    if ($result = mysqli_query($connect, $sql)) 
	    {
	    	$countdepttue = mysqli_num_rows( $result );
   	 	}

   	 	$sql = "SELECT * FROM tbl_lab_pending WHERE Department = '$userdept' AND Flag = 'true' AND Day = 'Wed'";
	    if ($result = mysqli_query($connect, $sql)) 
	    {
	    	$countdeptwed = mysqli_num_rows( $result );
   	 	}

   	 	$sql = "SELECT * FROM tbl_lab_pending WHERE Department = '$userdept' AND Flag = 'true' AND Day = 'Thu'";
	    if ($result = mysqli_query($connect, $sql)) 
	    {
	    	$countdeptthu = mysqli_num_rows( $result );
   	 	}

   	 	$sql = "SELECT * FROM tbl_lab_pending WHERE Department = '$userdept' AND Flag = 'true' AND Day = 'Fri'";
	    if ($result = mysqli_query($connect, $sql)) 
	    {
	    	$countdeptfri = mysqli_num_rows( $result );
   	 	}

   	 	$sql = "SELECT * FROM tbl_lab_pending WHERE Department = '$userdept' AND Flag = 'true' AND Day = 'Sat'";
	    if ($result = mysqli_query($connect, $sql)) 
	    {
	    	$countdeptsat = mysqli_num_rows( $result );
   	 	}

   	 	$sql = "SELECT * FROM tbl_lab_pending_up WHERE Department = '$userdept' AND Flag = 'true'";
	    if ($result = mysqli_query($connect, $sql)) 
	    {
	    	$countdeptpending = mysqli_num_rows( $result );
   	 	}
	}
	else if($type == 'admin')
	{
	 	$sql = "SELECT * FROM tbl_lab_pending WHERE Flag = 'true'";
	    if ($result = mysqli_query($connect, $sql)) 
	    {
	    	$countdept = mysqli_num_rows( $result );
   	 	}

   	 	$sql = "SELECT * FROM tbl_lab_pending WHERE Flag = 'true' AND Day = 'Mon'";
	    if ($result = mysqli_query($connect, $sql)) 
	    {
	    	$countdeptmon = mysqli_num_rows( $result );
   	 	}

   	 	$sql = "SELECT * FROM tbl_lab_pending WHERE Flag = 'true' AND Day = 'Tue'";
	    if ($result = mysqli_query($connect, $sql)) 
	    {
	    	$countdepttue = mysqli_num_rows( $result );
   	 	}

   	 	$sql = "SELECT * FROM tbl_lab_pending WHERE Flag = 'true' AND Day = 'Wed'";
	    if ($result = mysqli_query($connect, $sql)) 
	    {
	    	$countdeptwed = mysqli_num_rows( $result );
   	 	}

   	 	$sql = "SELECT * FROM tbl_lab_pending WHERE Flag = 'true' AND Day = 'Thu'";
	    if ($result = mysqli_query($connect, $sql)) 
	    {
	    	$countdeptthu = mysqli_num_rows( $result );
   	 	}

   	 	$sql = "SELECT * FROM tbl_lab_pending WHERE Flag = 'true' AND Day = 'Fri'";
	    if ($result = mysqli_query($connect, $sql)) 
	    {
	    	$countdeptfri = mysqli_num_rows( $result );
   	 	}

   	 	$sql = "SELECT * FROM tbl_lab_pending WHERE Flag = 'true' AND Day = 'Sat'";
	    if ($result = mysqli_query($connect, $sql)) 
	    {
	    	$countdeptsat = mysqli_num_rows( $result );
   	 	}

   	 	$sql = "SELECT * FROM tbl_lab_pending_up WHERE Flag = 'true'";
	    if ($result = mysqli_query($connect, $sql)) 
	    {
	    	$countdeptpending = mysqli_num_rows( $result );
   	 	}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
	<body>
		<aside class="col-lg-3"> 
		<!-- ============= COMPONENT ============== -->
		<nav class="sidebar card py-2 mb-4">
		<ul class="nav flex-column" id="nav_accordion">
			<li class="nav-item">
					<a class="nav-link" href="adminindex.php"> Home </a>
				</li>
			<li class="nav-item has-submenu">
				<a class="nav-link" href="#"> Lab Schedules <i class="bi small bi-caret-down-fill"></i>
					<?php if($type == 'labcoordinator' || $type == 'admin')
						{
							if($countdept != 0)
							{
								echo "<span style='font-weight: bold; color: red;'>"; printf($countdept);
							}
						}?>
					</span> </a>
				<ul class="submenu collapse">
					<li><a class="nav-link" href="sched_mon.php">Monday 
					<?php if($type == 'labcoordinator' || $type == 'admin')
						{
							if($countdeptmon != 0)
							{
								echo "<span style='font-weight: bold; color: red;'>"; printf($countdeptmon);
							}
						}?>
					</span> </a></li>
					<li><a class="nav-link" href="sched_tue.php">Tuesday 
					<?php if($type == 'labcoordinator' || $type == 'admin')
						{
							if($countdepttue != 0)
							{
								echo "<span style='font-weight: bold; color: red;'>"; printf($countdepttue);
							}
						}?>
					</span></a></li>
				    <li><a class="nav-link" href="sched_wed.php">Wednesday 
					<?php if($type == 'labcoordinator' || $type == 'admin')
						{
							if($countdeptwed != 0)
							{
								echo "<span style='font-weight: bold; color: red;'>"; printf($countdeptwed);
							}
						}?>
					</span></a></li>
				    <li><a class="nav-link" href="sched_thu.php">Thursday 
					<?php if($type == 'labcoordinator' || $type == 'admin')
						{
							if($countdeptthu != 0)
							{
								echo "<span style='font-weight: bold; color: red;'>"; printf($countdeptthu);
							}
						}?>
					</span></a></li>
				    <li><a class="nav-link" href="sched_fri.php">Friday 
					<?php if($type == 'labcoordinator' || $type == 'admin')
						{
							if($countdeptfri != 0)
							{
								echo "<span style='font-weight: bold; color: red;'>"; printf($countdeptfri);
							}
						}?>
					</span></a></li>
				    <li><a class="nav-link" href="sched_sat.php">Saturday 
					<?php if($type == 'labcoordinator' || $type == 'admin')
						{
							if($countdeptsat != 0)
							{
								echo "<span style='font-weight: bold; color: red;'>"; printf($countdeptsat);
							}
						}?>
					</span></a></li>
				</ul>
			</li>
				<li class="nav-item">
					<a class="nav-link" href="unplanned.php"> Unplanned Schedules 
						<?php if($type == 'labcoordinator' || $type == 'admin')
						{
							if($countdeptpending != 0)
							{
								echo "<span style='font-weight: bold; color: red;'>"; printf($countdeptpending);
							}
						}?>
					</span> </a>
				</li>
				<li class="nav-item has-submenu">
					<a class="nav-link" href="#"> Schedule <i class="bi small bi-caret-down-fill"></i> </a>
					<ul class="submenu collapse">
						<li><a class="nav-link" href="addsched_yoursched.php">Your Schedule </a></li>
						<li><a class="nav-link" href="addsched.php">Add Schedule </a></li>
						<li><a class="nav-link" href="addsched_unofficial.php">Add Unplanned Schedule </a></li>
					</ul>
				</li>
				<?php 
					if($type == 'admin')
					{	
						?>
						<li class="nav-item has-submenu">
							<a class="nav-link" href="#"> Accounts <i class="bi small bi-caret-down-fill"></i> </a>
							<ul class="submenu collapse">
								<li><a class="nav-link" href="accounts.php">List of Accounts </a></li>
								<li><a class="nav-link" href="addaccount.php">Create Account </a></li>
							</ul>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="#"> Pending Schedules </a>
						</li> -->
						<?php
					}
				?>
				<li class="nav-item">
					<a class="nav-link" href="pcspecs.php"> PC Specs </a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" href="history.php"> Audit Trail </a>
				</li> -->
				<li class="nav-item">
					<a class="nav-link" href="changepassword.php"> Change Password </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php"> Log out </a>
				</li>
			</ul>
			</nav>
			<!-- ============= COMPONENT END// ============== -->	
		</aside>
	</body>
</html>