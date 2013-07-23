<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to ONGKO Storage</title>

	<link rel="stylesheet" href="<?php echo base_url();?>/resources/css/style.css" type="text/css">
</head>
<body>

<div id="container" style = "width: 500px" class = "center">
	<h1>Welcome to ONGKO Storage!</h1>

	<div id="body">
		<h2>Login</h2>
		
		<form method="post" action="<?php echo base_url().'index.php/login/validation'; ?>">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>
					<input type = "text" id = "txtUsername" name = "txtUsername" />
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input type = "password" id = "txtPassword" name = "txtPassword" />
				</td>
			</tr>
			<tr>
				<td colspan = "3">
					<input type = "submit" id = "btnSubmit" name = "btnSubmit" value = "Login" />
				</td>
			</tr>
		</table>
		</form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
