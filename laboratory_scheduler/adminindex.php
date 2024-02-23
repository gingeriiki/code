<?php
 	include("config.php");

	// Configure timeout to 15 minutes
	$timeout = 60;

	// Set the maxlifetime of session
	ini_set( "session.gc_maxlifetime", $timeout );
	// echo ini_get("session.gc_maxlifetime = 60");

	session_start();
	$user = $_SESSION['a'];
	$type = $_SESSION['type'];
	$b = $_SESSION['b'];

 	if($b == '')
  	{
    	header("location: index.php");
  	}

	date_default_timezone_set("Asia/Manila");
	$datetoday = date("M d, Y");

	$check_del = "SELECT * FROM tbl_lab_makeup";
	$run_del = mysqli_query($connect, $check_del);
	while($row = mysqli_fetch_row($run_del))
	{
		$rowno = "$row[9]";
		$datedel = "$row[10]";
		if($datetoday > $datedel)
		{
			$del = "UPDATE tbl_lab_makeup SET Flag = 'false' WHERE Sched_No = '$rowno'";
			mysqli_query($connect, $del);
		}
	}

	$check_del2 = "SELECT * FROM tbl_lab_pending_up";
	$run_del2 = mysqli_query($connect, $check_del2);
	while($row = mysqli_fetch_row($run_del2))
	{
		$rowno = "$row[9]";
		$datedel = "$row[12]";
		if($datetoday > $datedel)
		{
			$del = "UPDATE tbl_lab_makeup SET Flag = 'false' WHERE Sched_No = '$rowno'";
			mysqli_query($connect, $del);
		}
	}
?>

<html>
	<?php include './includes/head.php' ?>

	<body class="bg-light">
		<img class="wave" style="opacity: 0.5;" src="images/background.jpg"> <br><br><br><br>
		
		<div class="container">
			<section class="section-content py-3">
				<div class="row">

					<?php include './includes/nav.php' ?>

					<main class="col-lg-9">
						<h3>Welcome to Computer Laboratory Scheduler.  </h3>
						<br>

						<h6>The following rules and regulations must be observed inside the Computer Laboratories:</h6>

						<h6>1.1. Only students with computer subjects are allowed inside the laboratories. No one will be permitted to enter the laboratory few minutes before their computer class.</h6>
						<h6>1.2. Silence must be observed while inside the computer rooms.</h6>
						<h6>1.3. The following are prohibited inside the computer rooms: </h6>
						<h6>&nbsp;&nbsp;&nbsp;&nbsp;1.3.1. Food and drinks</h6>
						<h6>&nbsp;&nbsp;&nbsp;&nbsp;1.3.2. Personal laptops, net books, tablet, mp3, cellular phones and other electronic gadgets</h6>
						<h6>&nbsp;&nbsp;&nbsp;&nbsp;1.3.3. Using of computer for games</h6>
						<h6>&nbsp;&nbsp;&nbsp;&nbsp;1.3.4. Playing with computer peripherals / accessories</h6>
						<h6>&nbsp;&nbsp;&nbsp;&nbsp;1.3.5. Copying (uploading/downloading) any program from the computer</h6>
						<h6>&nbsp;&nbsp;&nbsp;&nbsp;1.3.6. Opening and attempting to repair any computer</h6>
						<h6>&nbsp;&nbsp;&nbsp;&nbsp;1.3.7. Attaching/detaching devices to/from the computer</h6>

						<h6>1.4. Students should stay only in their designated computer unit. Moving on one computer unit to another without the permission of the actor-in-charge is strictly prohibited.	</h6>
						<h6>1.5. Equipment other than the computers found in the Computer Laboratories should not be used without the consent of the Laboratory Assistant.</h6>
						<h6>1.6. Students are not allowed to use or take any of the computer hardware and accessories out of the laboratories.</h6>
						<h6>1.7. Students are encouraged to concentrate on the task given by the instructor.</h6>
						<h6>1.8. Utmost care must be observed while using all the equipment in the laboratory. The computer mouse, keyboard, monitor, tables and chairs must be returned to its proper place after use. Before leaving the laboratory, student must properly shut down the computer.</h6>
						<h6>1.9. Unauthorized taking out of computer hardware and accessories is considered a major offense and will be subjected to disciplinary action.</h6>
					</main>
				</div>
			</section>
		</div><!-- container //  -->
	</body>

	<?php include './includes/footer.php' ?>

</html>