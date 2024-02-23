<?php
	include("config.php");
	$user = $_SESSION['a'];
	$type = $_SESSION['type'];
	$userdept = $_SESSION['userdept'];

	if($_SESSION['b'] != 1)
	{
		echo"<script>window.location='index.php';</script>";
	}
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
		<div class="tab">
			<button class="tablinks" onclick="openCity(event, 'CL1')">CL1 
			<?php if($type == 'labcoordinator' || $type == 'admin')
				{
					if($countcl1th != 0)
					{
						echo "<span style='font-weight: bold; color: red;'>"; printf($countcl1th);
					}
				}?>
			</span></button>
			<button class="tablinks" onclick="openCity(event, 'CL2')">CL2
			<?php if($type == 'labcoordinator' || $type == 'admin')
				{
					if($countcl2th != 0)
					{
						echo "<span style='font-weight: bold; color: red;'>"; printf($countcl2th);
					}
				}?>
			</span></button>
			<button class="tablinks" onclick="openCity(event, 'CL3')">CL3
			<?php if($type == 'labcoordinator' || $type == 'admin')
				{
					if($countcl3th != 0)
					{
						echo "<span style='font-weight: bold; color: red;'>"; printf($countcl3th);
					}
				}?>
			</span></button>
			<button class="tablinks" onclick="openCity(event, 'CL4')">CL4
			<?php if($type == 'labcoordinator' || $type == 'admin')
				{
					if($countcl4th != 0)
					{
						echo "<span style='font-weight: bold; color: red;'>"; printf($countcl4th);
					}
				}?>
			</span></button>
			<button class="tablinks" onclick="openCity(event, 'CL5')">CL5
			<?php if($type == 'labcoordinator' || $type == 'admin')
				{
					if($countcl5th != 0)
					{
						echo "<span style='font-weight: bold; color: red;'>"; printf($countcl5th);
					}
				}?>
			</span></button>
			<button class="tablinks" onclick="openCity(event, 'CL6')">CL6
			<?php if($type == 'labcoordinator' || $type == 'admin')
				{
					if($countcl6th != 0)
					{
						echo "<span style='font-weight: bold; color: red;'>"; printf($countcl6th);
					}
				}?>
			</span></button>
			<button class="tablinks" onclick="openCity(event, 'CL7')">CL7
			<?php if($type == 'labcoordinator' || $type == 'admin')
				{
					if($countcl7th != 0)
					{
						echo "<span style='font-weight: bold; color: red;'>"; printf($countcl7th);
					}
				}?>
			</span></button>
			<button class="tablinks" onclick="openCity(event, 'CSS')">CSS
			<?php if($type == 'labcoordinator' || $type == 'admin')
				{
					if($countcssth != 0)
					{
						echo "<span style='font-weight: bold; color: red;'>"; printf($countcssth);
					}
				}?>
			</span></button>
			<button class="tablinks" onclick="openCity(event, 'HIS')">Unplanned </button>
		</div>
	</body>
</html>














						