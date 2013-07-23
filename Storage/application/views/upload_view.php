<!DOCTYPE html>
<html lang="en">
<head>
	<title>Upload File</title>
	<link rel="stylesheet" href="<?php echo base_url();?>/resources/css/style.css" type="text/css">
</head>
<body>
	<div id="container" style = "width: 500px" class = "center">
		<h1>Upload Files</h1>
		<div id="body">
			<div style="color:#FF0000">
				<?php echo $error;?>
			</div>
			<form method="post" action="<?php echo base_url().'index.php/upload/validation'; ?>" enctype="multipart/form-data" > 
				<table>
					<tr>
						<td>Filename</td>
						<td>:</td>
						<td><input type = "text" name="fileName" /></td>
					</tr>
					<tr>
						<td colspan="3">*leave it blank for original filename</td>
					</tr>
					<tr>
						<td colspan="3"><input type="file" class="button" name="userfile" /></td>
					</tr>
					<tr>
						<td colspan="3"><input type="submit" class="button" name="btnUpload" value="Upload" /></td>
					</tr>
					
				</table>
			</form>
		</div>
		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
	</div>
</body>
</html>
