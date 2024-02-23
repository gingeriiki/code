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
						<h5>Computer Laboratory Available Units/ Specs/ Installed Applications</h5>
						<div class="tab">
							<button class="tablinks" onclick="openCity(event, 'CL1')">CL1</button>
							<button class="tablinks" onclick="openCity(event, 'CL2')">CL2</button>
							<button class="tablinks" onclick="openCity(event, 'CL3')">CL3</button>
							<button class="tablinks" onclick="openCity(event, 'CL4')">CL4</button>
							<!-- <button class="tablinks" onclick="openCity(event, 'CL5')">CL5</button>
							<button class="tablinks" onclick="openCity(event, 'CL6')">CL6</button>
							<button class="tablinks" onclick="openCity(event, 'CL7')">CL7</button> -->
							<button class="tablinks" onclick="openCity(event, 'CSS')">CSS</button>
						</div>

						<br>
						<div id="CL1" class="tabcontent">
							 <?php loadCL1(); ?>
						</div>

						<div id="CL2" class="tabcontent">
							 <?php loadCL2(); ?>
						</div>

						<div id="CL3" class="tabcontent">
							 <?php loadCL3(); ?>
						</div>

						<div id="CL4" class="tabcontent">
							 <?php loadCL4(); ?>
						</div>

						<!-- <div id="CL5" class="tabcontent">
							 <?php loadCL5(); ?>
						</div>

						<div id="CL6" class="tabcontent">
							 <?php loadCL6(); ?>
						</div>

						<div id="CL7" class="tabcontent">
							 <?php loadCL7(); ?>
						</div> -->

						<div id="CSS" class="tabcontent">
							 <?php loadCSS(); ?>
						</div>

						<br><br>
					</main>
				</div>
			</section>

		</div><!-- container //  -->
	</body>

	<?php include './includes/footer.php' ?>

</html>

	<?php include './includes/script.php' ?>