<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to ONGKO Storage</title>

	<link rel="stylesheet" href="<?php echo base_url();?>/resources/css/style.css" type="text/css">
	    <script language="javascript">
		function redirect() {
			window.location = "<?php echo base_url(); ?>"
		}
	</script>

</head>
<body onLoad="setTimeout(redirect, 2500);">

<div id="container" style = "width: 500px" class = "center">
	<h1>Upload Success!</h1>

	<div id="body">
		<p>You will be redirected to welcome page.</p>

		<p>Please wait for maximum 5 seconds...</p>

		<p><a href="<?php echo base_url(); ?>">Or you can click here directly</a></p>
		
		<div style="border: 1px solid #000">
			<table>
				<tr>
					<td>File Name</td>
					<td>:</td>
					<td><?php echo $data['file_name']; ?></td>
				</tr>
				<tr>
					<td>File Type</td>
					<td>:</td>
					<td><?php echo $data['file_type']; ?></td>
				</tr>
				<tr>
					<td>File Path</td>
					<td>:</td>
					<td><?php echo $data['file_path']; ?></td>
				</tr>
				<tr>
					<td>File Size</td>
					<td>:</td>
					<td><?php echo $data['file_size']; ?> KB</td>
				</tr>
			</table>
		</div>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
