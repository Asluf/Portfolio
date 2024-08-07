<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&family=Dancing+Script:wght@600&family=Righteous&family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<meta charset="utf-8">
	<title>Create a CV</title>
	<style type="text/css">
		form {

			margin: auto;
			width: 850px;
			font-size: medium;
			justify-content: center;
			padding: 10px;
		}

		.ab {
			display: flex;
			padding-left: 100px;
			padding-Top: 50px;
		}

		.abc {
			padding-left: 30%;

		}



		::selection {
			/* background-color: #E13300; */
			color: #ADD8E6;
		}

		::-moz-selection {
			/* background-color: #E13300; */
			color: white;
		}

		body {
			background-color: #d6e3e3;
			margin: 40px;
			font: 13px/20px Arial, sans-serif;
			font-weight: Bold;
			color: black;
		}



		a {
			color: #003399;
			font-weight: normal;
			text-decoration: none;
		}

		a:hover {
			color: #1974D2;
		}

		.h1_title {
			color: black;
			border-bottom: 0px solid #D0D0D0;
			font-size: 60px;
			font-weight: Extra Bold (Ultra Bold);
			font-family: 'Roboto Slab', serif;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: 'Roboto Slab', serif;
			font-size: 18px;
			font-weight: Extra Bold (Ultra Bold);
			/* background-color: #99DBF5; */
			border: 0px solid #D0D0D0;
			color: #00008B;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 0px 0 0px;
			min-height: 96px;
			padding-Top: 50px;
			font-family: 'Cabin', sans-serif;

		}

		p {
			margin: 0 0 10px;
			padding: 0;
			font-size: medium;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 5px;
			border: 0px solid #D0D0D0;
			box-shadow: 0 0 0px #D0D0D0;
		}

		.h1_form {
			font-size: 20px;

		}

		#generate {
			width: 200px;
			margin-Top: 35px;
		}

		#user_form {
			/* background-color: #406665; */
			border-width: 0px;
		}

		.form-control {
			color: black;
		}
	</style>
	<link rel="stylesheet" href="<?php echo base_url(); ?>resources/bootstrap/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>resources/bootstrap/js/bootstrap.min.js"></script>
	<style>
		ul {
			display: flex;
		}

		ul li {
			list-style: none;
			display: inline-block;
			margin: 0 20px;
		}

		.navbar ul li a {
			text-decoration: none;
			color: white;
			text-transform: uppercase;
		}


		.head {
			font-family: Bebas-Neue;
		}
		nav{
            background: rgba(40,57,101,.9);
        }
	</style>
</head>

<body>

	<div id="container">
		<nav class="navbar navbar-expand-lg text-left row fixed-top" style="max-height: 60px;">
			<div class="h2 float-left text-light mx-3 col-md-9">CVFolio</div>
			<ul class="float-right col-md-3 mt-2">
				<li><a href="http://localhost/Portfolio/index.php/User/index" class=" btn btn-warning text-dark btn-outline-light btn-md">DASHBOARD</a></li>
				<li><a href="http://localhost/Portfolio/index.php/User/logout" class=" btn btn-warning text-dark btn-outline-light btn-md">LOGOUT</a></li>
			</ul>
		</nav>
		<h1 class="h1_title" style="margin-top: 100px;">
			<center>Welcome to our CV generation platform!</center>
		</h1>

		<div id="body" style="font-family:Cambria;">

			<h1 class="h1_Form">
				<center>CREAT A NEW CV</center>
			</h1>
			<form id="user_form" name="user_form" class="form-control">
				<div class="ab">
					<fieldset>
						<legend>Personal Info</legend>
						<label>NIC Number:</label>
						<input class="form-control" type="text" name="nic" id="nic" size="50">

						<label>First name:</label>
						<input class="form-control" type="text" name="fname" id="fname" size="50">

						<label>Last name:</label>
						<input class="form-control" type="text" name="lname" id="lname" size="50">

						<label>Profession:</label>
						<input class="form-control" type="text" name="prof" id="prof" size="50">

						<label>City:</label>
						<input class="form-control" type="text" name="city" id="city" size="50">

						<label>Country:</label>
						<input class="form-control" type="text" name="country" id="country" size="50">

						<label>Email:</label>
						<input class="form-control" type="text" name="mail" id="mail" size="50">

						<label>Mobile:</label>
						<input class="form-control" type="text" name="mobile" id="mobile" size="50">
						<label>About:</label>
						<textarea class="form-control" rows="2" cols="50" name="about" id="about">About me</textarea>

					</fieldset>
					<fieldset style="padding-left: 100px;">
						<legend>Skills (max 5)</legend>

						<label>Skill 1: </label>
						<input class="form-control" type="text" name="sk1" id="sk1" placeholder="Skill 1" size="40">

						<label>Skill 2: </label>
						<input class="form-control" type="text" name="sk2" id="sk2" placeholder="Skill 2">

						<label>Skill 3: </label>
						<input class="form-control" type="text" name="sk3" id="sk3" placeholder="Skill 3">

						<label>Skill 4: </label>
						<input class="form-control" type="text" name="sk4" id="sk4" placeholder="Skill 4">

						<label>Skill 5: </label>
						<input class="form-control" type="text" name="sk5" id="sk5" placeholder="Skill 5">

						<br /><br />
						<legend>Languages</legend>

						<label>Language 1: </label>
						<input class="form-control" type="text" name="la1" id="la1" placeholder="Language 1">

						<label>Language 2: </label>
						<input class="form-control" type="text" name="la2" id="la2" placeholder="Language 2">

						<label>Language 3: </label>
						<input class="form-control" type="text" name="la3" id="la3" placeholder="Language 3">
					</fieldset>


				</div>
				<div class="ab">

					<fieldset>
						<legend>Work Experience (max 2)</legend>


						<div>
							<label>Title: </label>
							<input class="form-control" type="text" name="wo1" id="wo1" placeholder="Ex: Web developer">
							<label>From: </label>
							<input class="form-control" type="date" name="from1" id="from1">
							<label>To: </label>
							<input class="form-control" type="date" name="to1" id="to1">
							<label>Description: </label>
							<textarea class="form-control" rows="2" cols="50" name="des1" id="des1">More details</textarea> <br />
						</div>
						<hr />
						<div>
							<label>Title: </label>
							<input class="form-control" type="text" name="wo2" id="wo2" placeholder="Ex: Web developer">
							<label>From: </label>
							<input class="form-control" type="date" name="from2" id="from2">
							<label>To: </label>
							<input class="form-control" type="date" name="to2" id="to2">
							<label>Description: </label>
							<textarea class="form-control" rows="2" cols="50" name="des2" id="des2">More details</textarea>
						</div>
					</fieldset>
					<fieldset style="margin-left: 50px;">
						<legend>Education Qualification (max 2)</legend>

						<div>
							<label>University, College, School: </label>
							<input class="form-control" type="text" name="uni1" id="uni1" placeholder="Ex: ITUM">
							<label>From: </label>
							<input class="form-control" type="date" name="f1" id="f1">
							<label>To: </label>
							<input class="form-control" type="date" name="t1" id="t1">
							<label>Description: </label>
							<textarea class="form-control" rows="2" cols="50" name="de1" id="de1">More details</textarea> <br />
						</div>
						<hr />
						<div>
							<label>University, College, School: </label>
							<input class="form-control" type="text" name="uni2" id="uni2" placeholder="Ex: ITUM">
							<label>From: </label>
							<input class="form-control" type="date" name="f2" id="f2">
							<label>To: </label>
							<input class="form-control" type="date" name="t2" id="t2">
							<label>Description: </label>
							<textarea class="form-control" rows="2" cols="50" name="de2" id="de2">More details</textarea>
						</div>
					</fieldset>
				</div>

				<fieldset style="padding:50px;">
					<center><input class="btn btn-danger" type="button" name="generate" id="generate" value="Generate" /></center>
				</fieldset>

			</form>





		</div>

	</div>
	<script src="<?php echo base_url(); ?>resources/js/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

<script>
	$(document).ready(function() {
		$("#generate").click(function() {
			base_url = "<?php echo base_url(); ?>";


			$.ajax({
				url: base_url + 'index.php/User/sendData',
				data: $("#user_form").serialize(),
				method: 'post',
				success: function(response) {
					if (response != "error") {
						// document.getElementById('genbtn').style.display = 'block';

						Swal.fire({
							title: 'Your information has been saved! ',
							showCancelButton: true,
							confirmButtonText: 'Preview & Download',

						}).then((result) => {
							/* Read more about isConfirmed, isDenied below */
							if (result.isConfirmed) {
								// window.location = base_url + "index.php/User/downloadPdf/" + response;
								window.location = base_url + "index.php/User/chooseTem";

							}
						});
					} else {
						alert("Something went wrong");
					}


				},
				error: function() {
					alert("Something Wrong");
				}
			});

		});


	});
</script>

</html>