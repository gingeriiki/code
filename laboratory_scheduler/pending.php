<?php
 	include("config.php");
	session_start();
	$user = $_SESSION['a'];
	$type = $_SESSION['type'];
?>

<html>
	<head>
		<title>Comp Lab Scheduler</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="styles/tab_css.css" rel="stylesheet" type="text/css" media="all">
		<!-- <meta http-equiv="refresh" content="300" url="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
		<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
		<!-- <link rel = "icon" type = "image/png" href = "images/rclogo.png" /> -->

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

		<!-- ======= Icons used for dropdown (you can use your own) ======== -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
        	<script type="text/javascript" src="date_time.js"></script>
		<script src="script.js"></script>
		
		<style>

			body {
			  	background-color: lightblue;
			}

		td{
			padding:10px;
		}
		th{
			text-align:center;
		}
			.form-login{
						margin-top:-10px;
						background-color:white;
						padding-bottom:30px;
						padding-left:20px;
						padding-right:20px;
						padding-top:30px;
						border-radius:5px;
						border-color:#d2d2d2;
						box-shadow:0px 0px 20px grey;
						width:350px;
					}

			.wave{
				position: fixed;
				bottom: 0;
				left: 0;
				height: 100%;
				width:100%;
				z-index: -1;
			}

			input{
					width:100%;
					padding:10px;
					margin:10px 0;
					display:inline-block;
					border:1px solid #ccc;
					border-radius:7px;
					text-align:center;
					font-size:15px;
					}
			.logo{width:30%;height:80px;}
			@media screen and (max-width: 767px) {
				.logo{width:100%;height:10%;}
			}
			@media screen and (min-width: 768px) and (max-width: 1024px){
				.logo{width:80%;height:10%;}
			}


			.sidebar li .submenu{ 
				list-style: none; 
				margin: 0; 
				padding: 0; 
				padding-left: 1rem; 
				padding-right: 1rem;
			}

			.sidebar .nav-link {
			    font-weight: 500;
			    color: var(--bs-dark);
			}
			.sidebar .nav-link:hover {
			    color: var(--bs-primary);
			}
		</style>

		<script type="text/javascript">
			document.addEventListener("DOMContentLoaded", function(){

				document.querySelectorAll('.sidebar .nav-link').forEach(function(element){

					element.addEventListener('click', function (e) {

						let nextEl = element.nextElementSibling;
						let parentEl  = element.parentElement;	

						if(nextEl) {
							e.preventDefault();	
							let mycollapse = new bootstrap.Collapse(nextEl);

					  		if(nextEl.classList.contains('show')){
					  			mycollapse.hide();
					  		} else {
					  			mycollapse.show();
					  			// find other submenus with class=show
					  			var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
					  			// if it exists, then close all of them
								if(opened_submenu){
									new bootstrap.Collapse(opened_submenu);
								}

					  		}
				  		}

					});
				})

			}); 
			// DOMContentLoaded  end
		</script>
	</head>
	<header> <center>
		<div class="container">
	<!-- <h2>Demo page </h2>  -->
	<img src="images/lablogo2.png" style ="width: 340px; height: 100px; position: absolute; left: 20px;" class = "logo">
</div>
			
</center>
	</header>
	
	<body class="bg-light">
		<img class="wave" src="images/background.jpg"> <br><br><br><br>
		<div class="container" style="margin-left: 50px;">
			<section class="section-content py-3">
				<div class="row">
					<aside class="col-lg-3"> 
						<!-- ============= COMPONENT ============== -->
						<nav class="sidebar card py-2 mb-4">
						<ul class="nav flex-column" id="nav_accordion">
							<li class="nav-item has-submenu">
								<a class="nav-link" href="#"> Laboratories <i class="bi small bi-caret-down-fill"></i> </a>
								<ul class="submenu collapse">
									<li><a class="nav-link" href="lab_cl1.php">Computer Laboratory 1 </a></li>
									<li><a class="nav-link" href="lab_cl2.php">Computer Laboratory 2 </a></li>
								    <li><a class="nav-link" href="lab_cl3.php">Computer Laboratory 3 </a></li>
								    <li><a class="nav-link" href="lab_cl4.php">Computer Laboratory 4 </a></li>
								    <li><a class="nav-link" href="lab_cl5.php">Computer Laboratory 5 </a></li>
								    <li><a class="nav-link" href="lab_cl6.php">Computer Laboratory 6 </a></li>
								    <li><a class="nav-link" href="lab_cl7.php">Computer Laboratory 7 </a></li>
								    <li><a class="nav-link" href="lab_css.php">Computer System Servicing </a></li>
								</ul>
							</li>
							<?php 
								if($type == 'labcoordinator')
								{	
									?>
									<li class="nav-item has-submenu">
										<a class="nav-link" href="#"> Accounts <i class="bi small bi-caret-down-fill"></i> </a>
										<ul class="submenu collapse">
											<li><a class="nav-link" href="accounts.php">List of Accounts </a></li>
											<li><a class="nav-link" href="addaccount.php">Create Account </a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"> Pending Schedules </a>
									</li>
									<?php
								}
							?>
							<li class="nav-item">
								<a class="nav-link" href="addsched.php"> Add Schedule </a>
							</li>
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
					<main class="col-lg-9">

			<h5>Pending Schedules</h5>
			<div class="tab">
				<button class="tablinks" onclick="openCity(event, 'Mon')">Monday</button>
				<button class="tablinks" onclick="openCity(event, 'Tue')">Tuesday</button>
				<button class="tablinks" onclick="openCity(event, 'Wed')">Wednesday</button>
				<button class="tablinks" onclick="openCity(event, 'Thu')">Thursday</button>
				<button class="tablinks" onclick="openCity(event, 'Fri')">Friday</button>
				<button class="tablinks" onclick="openCity(event, 'Sat')">Saturday</button>
			</div>

			<br>
			<div id="Mon" class="tabcontent">
				<table id = "myUL" class = "table table-striped tables" style="background-color:white; margin-left: -10px; margin-top: -10px;">
					<thead>
						<tr>
							<th>Employee&nbsp;No</th>
							<th>Faculty&nbsp;Name</th>
							<th>Department</th>
							<th>Lab</th>
							<th>Subject</th>
							<th>Section</th>
							<th>Start&nbsp;Time</th>
							<th>End&nbsp;Time</th>
							<th>Date&nbsp;Added</th>
							<th>Action</th>
							<th></th>
						</tr>
					</thead>
					<?php 
						$get = "SELECT * FROM tbl_cl1 WHERE Day = 'Mon' ORDER BY Start_Time ASC";
						$get_run = mysqli_query($connect, $get);
						while($row = mysqli_fetch_row($get_run))
						{
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
					?>
				</table>
			</div>

			
			<br><br>

					</main>
				</div>
			</section>

			</div><!-- container //  -->























	</body>
	<footer style = "background-color:#337ab7;color:white;height:94px;margin-top:200px;"><br>
		<p align = "center">
		Rogationist College<br>
		Km.52 Aguinaldo Highway, Lalaan II, Silang, Cavite<br>
		Developed by RC MIS Team
		</p>
	</footer>
</html>

<script>
	function openCity(evt, cityName) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(cityName).style.display = "block";
		evt.currentTarget.className += " active";
	}
</script>