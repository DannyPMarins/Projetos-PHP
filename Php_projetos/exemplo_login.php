<html>
<head>
	<title>Login: :)</title>
</head>
<body>
	<form action="login_exec.php" method="POST">
		<input type="text" name="user" />
		<input type="password" name="pass" />
		<input type="submit" value="Login" />
	</form>
	<div id="resposta">
	<?php 
		if(isset($_GET['error']))
			echo $_GET['error'];	
	 ?>
	</div>
	html
</body>
</html>