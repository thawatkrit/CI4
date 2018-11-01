<?php
?>
<!doctype html>
<html>
	<head>
		<title>Welcome to Web Service</title>
		<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	</head>
	<body>
		<?php echo form_open('login/process'); ?>
		<input type="text" name="username">
		<input type="password" name="password">
		<button type="submit">login</button>
		<?php form_close();?>
		
	</body>
</html>
