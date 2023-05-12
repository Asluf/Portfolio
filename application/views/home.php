<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Create a CV</title>

	<style type="text/css">
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
				<fieldset>
					<label>Full name:</label>
					<input type="text" name="name" id="name">
					<br /><br />
					<label>First name:</label>
					<input type="text" name="fname" id="fname">
					<br /><br />
					<label>Last name:</label>
					<input type="text" name="lname" id="lname">
					<br /><br />
					<label>Age:</label>
					<input type="text" name="age" id="age">

				</fieldset>
				<fieldset>
					<title>Qual</title>
					<label>Education qualification:</label>
					<input type="text" name="edu" id="edu">
				</fieldset>
				<fieldset>
					<input type="button" name="generate" id="generate" value="Generate" />
				</fieldset>
			</form>
			<!-- <a href="<?php //echo base_url('index.php/Welcome/downloadPdf'); ?>" target="_blank">Download</a> -->


		</div>

	</div>
	<script src="<?php echo base_url(); ?>resources/js/jquery.min.js"></script>
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
					console.log(response);
					window.location = base_url + "index.php/Welcome/downloadPdf";
					
				},
				error: function() {
					alert("Something Wrong");
				}
			});

		});


	});
</script>

</html>