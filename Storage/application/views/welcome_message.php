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
		<p>Welcome to <strong>ONGKO Storage</strong></p>

		<p>If you would like to see the content, please append a directory's name at the end of the url:</p>
		<code><a href="<?php echo base_url(); ?>test/"><?php echo base_url(); ?>test/</a></code>

		<p>To download the files that you've known the name, you can access it directly.</p>
		<code><a href="<?php echo base_url(); ?>test/test.txt"><?php echo base_url(); ?>test/test.txt</a></code>

		<p>If you are exploring this site for the very first time, please contact the owner of this site.</p>
		
		<p>If you don't know the directory's name, contact the site owner.</p>
		
		<p><a href="<?php echo base_url(); ?>index.php/upload">Click here if you want to upload a file</a></p>
		
		<p><a href="<?php echo base_url(); ?>index.php/login">Click here to Login</a></p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
