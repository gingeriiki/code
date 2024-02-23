<?php
 	include("config.php");
	error_reporting(0);
 	session_start();

	$empno = $_GET['empno'];

	$sql = "DELETE FROM account WHERE Employee_No = '$empno'";
	if (mysqli_query($connect, $sql)) 
	{
		// date_default_timezone_set("Asia/Manila");
		// $host =  gethostbyaddr($_SERVER['REMOTE_ADDR']);
		// $datetoday = date("M d, Y");
		// $time = date("H:i:s");
		// $userr = $_SESSION['a'];

		// $sql12="INSERT INTO history_holiday_dwpay VALUES('','','$reason','$date','Deleting of Holiday','$host','$userr','$datetoday','$time','$pperiod')";
		// mysqli_query($connect, $sql12);

		echo "</script>";echo"<script>alert('Account deleted successfully.');
		window.location='accounts.php';</script>";
	}
	else 
	{
	    echo "Error deleting record: " . mysqli_error($connect);
		echo"<script>window.location='accounts.php';</script>";
	}

	mysqli_close($connect);
?>





	