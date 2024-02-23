<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
	<body>
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

			$(document).ready(function(){
			  $("#myInput").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#myTable tr").filter(function() {
				  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			  });
			});
			
			var dropdown = document.getElementsByClassName("dropdown-btn");
			var i;

			for (i = 0; i < dropdown.length; i++) {
			  dropdown[i].addEventListener("click", function() {
			  this.classList.toggle("active");
			  var dropdownContent = this.nextElementSibling;
			  if (dropdownContent.style.display === "block") {
			  dropdownContent.style.display = "none";
			  } else {
			  dropdownContent.style.display = "block";
			  }
			  });
			}

			$(document).ready(function()
			{
				$('.editsched').on('click',function()
				{
					$('#editsched').modal('show');

					$tr = $(this).closest('tr');
					var data = $tr.children("td").map(function()
					{
						return $(this).text();
					}).get();
						
					console.log(data);
						
					$('#empno').val(data[0]);
					$('#empname').val(data[1]);
					$('#dept').val(data[2]);
					$('#subj').val(data[3]);
					$('#sect').val(data[4]);
					$('#stime').val(data[5]);
					$('#etime').val(data[6]);
					$('#day').val(data[7]);
					$('#lab').val(data[8]);
					$('#schedno').val(data[9]);
				});
			});

			$(document).ready(function()
			{
				$('.deletesched').on('click',function()
				{
					$('#deletesched').modal('show');

					$tr = $(this).closest('tr');
					var data = $tr.children("td").map(function()
					{
						return $(this).text();
					}).get();
						
					console.log(data);
						
					$('#empno2').val(data[0]);
					$('#empname2').val(data[1]);
					$('#dept2').val(data[2]);
					$('#subj2').val(data[3]);
					$('#sect2').val(data[4]);
					$('#stime2').val(data[5]);
					$('#etime2').val(data[6]);
					$('#day2').val(data[7]);
					$('#lab2').val(data[8]);
					$('#schedno2').val(data[9]);
				});
			});

			$(document).ready(function()
			{
				$('.a_sched').on('click',function()
				{
					$('#a_sched').modal('show');

					$tr = $(this).closest('tr');
					var data = $tr.children("td").map(function()
					{
						return $(this).text();
					}).get();
						
					console.log(data);
						
					$('#empno3').val(data[0]);
					$('#empname3').val(data[1]);
					$('#dept3').val(data[2]);
					$('#subj3').val(data[3]);
					$('#sect3').val(data[4]);
					$('#stime3').val(data[5]);
					$('#etime3').val(data[6]);
					$('#date3').val(data[7]);
					$('#pendingno3').val(data[8]);
				});
			});

			$(document).ready(function()
			{
				$('.d_sched').on('click',function()
				{
					$('#d_sched').modal('show');

					$tr = $(this).closest('tr');
					var data = $tr.children("td").map(function()
					{
						return $(this).text();
					}).get();
						
					console.log(data);
						
					$('#empno4').val(data[0]);
					$('#empname4').val(data[1]);
					$('#dept4').val(data[2]);
					$('#subj4').val(data[3]);
					$('#sect4').val(data[4]);
					$('#stime4').val(data[5]);
					$('#etime4').val(data[6]);
					$('#date4').val(data[7]);
					$('#pendingno4').val(data[8]);
				});
			});


			$(document).ready(function()
			{
				$('.editaccount').on('click',function()
				{
					$('#editaccount').modal('show');

					$tr = $(this).closest('tr');
					var data = $tr.children("td").map(function()
					{
						return $(this).text();
					}).get();
						
					console.log(data);
						
					$('#empno').val(data[0]);
					$('#empname').val(data[1]);
					$('#dept').val(data[2]);
					$('#ocode3').val(data[3]);
					$('#no3').val(data[4]);
				});
			});

			function clicked(e)
			{
			    if(!confirm('Are you sure you want to delete this Account?')) {
			        e.preventDefault();
			    }
			}
		</script>
	</body>
</html>