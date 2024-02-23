<?php
    include("config.php");
	error_reporting(0);
 	session_start();

	$pendingno = $_GET['pendingno'];

	$sql_select = "SELECT * FROM holiday WHERE holiday_no = '$holiday_no'";
	$sql_select2 = mysqli_query($connect, $sql_select);
	While($row = mysqli_fetch_row($sql_select2))
	{
		$date = "$row[1]";
		$reason = "$row[3]";
		$pperiod = "$row[4]";
	
		$sql = "DELETE FROM holiday WHERE holiday_no = '$holiday_no'";
		if (mysqli_query($connect, $sql)) 
		{
			date_default_timezone_set("Asia/Manila");
			$host =  gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$datetoday = date("M d, Y");
			$time = date("H:i:s");
			$userr = $_SESSION['a'];

			$sql12="INSERT INTO history_holiday_dwpay VALUES('','','$reason','$date','Deleting of Holiday','$host','$userr','$datetoday','$time','$pperiod')";
			mysqli_query($connect, $sql12);

			echo "</script>";echo"<script>alert('Record deleted successfully.');
			window.location='holiday.php';</script>";
		}
		else 
		{
		    echo "Error deleting record: " . mysqli_error($connect);
			echo"<script>window.location='holiday.php';</script>";
		}
	}

	mysqli_close($connect);
?>





	