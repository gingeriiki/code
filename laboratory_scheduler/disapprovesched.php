<?php
    include("config.php");
	error_reporting(0);
 	session_start();

	$pendingno = $_GET['pendingno'];

	$sql = "DELETE FROM tbl_lab_pending WHERE Pending_No = '$pendingno'";
	mysqli_query($connect, $sql);
		
	echo "</script>";echo"<script>alert('Pending Schedule not approve!');
	window.location='sched_mon.php';</script>";
?>





	