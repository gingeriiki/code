<html>
	<head>
		<title>Comp Lab Scheduler</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="styles/tab_css.css" rel="stylesheet" type="text/css" media="all">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    	<script type="text/javascript" src="date_time.js"></script>
		<script src="script.js"></script>
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		
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
			</script>
	</head>
	
	<header> 
		<center>
			<div class="container">
				<!-- <h2>Demo page </h2>  -->
				<img src="images/lablogo2.png" style ="width: 340px; height: 100px; position: absolute; left: 20px;" class = "logo">
			</div>
		</center>
	</header>
</html>