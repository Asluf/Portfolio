<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
		}

		.abc {
			padding-left: 30%;
			/* text-align: center;
			justify-content: center; */
		}



		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: #e1e3e8;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		.bgg {
			background-color: #fff;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
			text-decoration: none;
		}

		a:hover {
			color: #97310e;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 16px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
			min-height: 96px;
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
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
	</style>
</head>

<body>

	<div id="container" class="bgg">
		<h1>
			<center>Welcome to our CV generation platform!</center>
		</h1>

		<div id="body">
			<p>Creating a resume or CV can be a daunting task, but our platform makes it easy and hassle-free. Our user-friendly interface allows you to input your details and generate a professional-looking CV within minutes.</p>

			<code>Our platform offers a wide range of customizable templates, so you can choose the design that best suits your needs and showcases your skills and experience in the best possible way. You can also tailor your CV to specific job applications, ensuring you stand out from the crowd and increase your chances of getting hired.</code>
			<p>Our team is dedicated to ensuring our platform remains up-to-date with the latest industry trends and requirements, so you can rest assured that your CV will meet the expectations of potential employers.</p>
			<h1>
				<center>FORM</center>
			</h1>
			<form id="user_form" name="user_form">
				<div class="ab">
					<fieldset>
						<legend>Personal Info</legend>
						<label>NIC Number:</label><br />
						<input type="text" name="nic" id="nic" size="50">
						<br />
						<label>First name:</label><br />
						<input type="text" name="fname" id="fname" size="50">
						<br />
						<label>Last name:</label><br />
						<input type="text" name="lname" id="lname" size="50">
						<br />
						<label>Profession:</label><br />
						<input type="text" name="prof" id="prof" size="50">
						<br />
						<label>City:</label><br />
						<input type="text" name="city" id="city" size="50">
						<br />
						<label>Country:</label><br />
						<input type="text" name="country" id="country" size="50">
						<br />
						<label>Email:</label><br />
						<input type="text" name="mail" id="mail" size="50">
						<br />
						<label>Mobile:</label><br />
						<input type="text" name="mobile" id="mobile" size="50">

					</fieldset>
					<fieldset>
						<legend>Skills</legend>
						<label> Enter the skills you have (max 5): </label>
						<br />

						<input type="text" name="sk1" id="sk1" placeholder="Skill 1">
						<label>Percentage: </label>
						<input type="number" name="per1" id="per1" min="0" max="100"> <br /><br />

						<input type="text" name="sk2" id="sk2" placeholder="Skill 2">
						<label>Percentage: </label>
						<input type="number" name="per2" id="per2" min="0" max="100"> <br /><br />

						<input type="text" name="sk3" id="sk3" placeholder="Skill 3">
						<label>Percentage: </label>
						<input type="number" name="per3" id="per3" min="0" max="100"> <br /><br />

						<input type="text" name="sk4" id="sk4" placeholder="Skill 4">
						<label>Percentage: </label>
						<input type="number" name="per4" id="per4" min="0" max="100"> <br /><br />

						<input type="text" name="sk5" id="sk5" placeholder="Skill 5">
						<label>Percentage: </label>
						<input type="number" name="per5" id="per5" min="0" max="100"> <br />
					</fieldset>
				</div>
				<div class="ab">
					<fieldset>
						<legend>Languages</legend>
						<label> Enter the languages (max 3): </label>
						<br /><br />

						<input type="text" name="la1" id="la1" placeholder="Language 1">
						<label>Percentage: </label>
						<input type="number" name="pe1" id="pe1" min="0" max="100"> <br /><br />

						<input type="text" name="la2" id="la2" placeholder="Language 2">
						<label>Percentage: </label>
						<input type="number" name="pe2" id="per2" min="0" max="100"> <br /><br />

						<input type="text" name="la3" id="la3" placeholder="Language 3">
						<label>Percentage: </label>
						<input type="number" name="pe3" id="pe3" min="0" max="100"> <br /><br />

					</fieldset>


					<fieldset>
						<legend>Work Experience</legend>
						<label> Enter work experiences you have (max 2): </label>
						<br /><br />

						<div>
							<label>Title: </label>
							<input type="text" name="wo1" id="wo1" placeholder="Ex: Web developer"><br />
							<label>From: </label>
							<input type="date" name="from1" id="from1">
							<label>To: </label>
							<input type="date" name="to1" id="to1"><br />
							<textarea rows="2" cols="50" name="des1" id="des1">More details</textarea> <br /><br />
						</div>
						<div>
							<label>Title: </label>
							<input type="text" name="wo2" id="wo2" placeholder="Ex: Web developer"><br />
							<label>From: </label>
							<input type="date" name="from2" id="from2">
							<label>To: </label>
							<input type="date" name="to2" id="to2"><br />
							<textarea rows="2" cols="50" name="des2" id="des2">More details</textarea>
						</div>


					</fieldset>
				</div>

				<fieldset>
					<div class="abc">
						<legend>Education Qualification (max 2)</legend>

						<div>
							<label>University, College, School: </label>
							<input type="text" name="uni1" id="uni1" placeholder="Ex: ITUM"><br />
							<label>From: </label>
							<input type="date" name="f1" id="f1">
							<label>To: </label>
							<input type="date" name="t1" id="t1"><br />
							<textarea rows="2" cols="50" name="de1" id="de1">More details</textarea> <br /><br />
						</div>
						<div>
							<label>University, College, School: </label>
							<input type="text" name="uni2" id="uni2" placeholder="Ex: ITUM"><br />
							<label>From: </label>
							<input type="date" name="f2" id="f2">
							<label>To: </label>
							<input type="date" name="t2" id="t2"><br />
							<textarea rows="2" cols="50" name="de2" id="de2">More details</textarea> <br /><br />
						</div>
					</div>
				</fieldset>


				<fieldset>
					<center><input type="button" name="generate" id="generate" value="Generate" /></center>
				</fieldset>

			</form>
			<center><a id="genbtn" style="display:none;margin-bottom:20px;" href="<?php echo base_url('index.php/Welcome/downloadPdf/');
																					?>" target="_blank"><button>Download</button></a></center>


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
				url: base_url + 'index.php/Welcome/sendData',
				data: $("#user_form").serialize(),
				method: 'post',
				success: function(response) {
					if (response != "error") {
						document.getElementById('genbtn').style.display = 'block';
						console.log(<?php echo $_SESSION['nic']; ?>);
						
						Swal.fire({
							title: 'Do you want to save the changes?',
							showCancelButton: true,
							confirmButtonText: 'Preview & Download',

						}).then((result) => {
							/* Read more about isConfirmed, isDenied below */
							if (result.isConfirmed) {
								window.location = base_url + "index.php/Welcome/downloadPdf/"+<?php echo $_SESSION['nic']; ?>;
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