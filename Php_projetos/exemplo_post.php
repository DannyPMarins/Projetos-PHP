<?php 	
require 'conf.php';

if(isset($_POST['titulo']))
{

	$titulo   = $_POST['titulo'];
	$conteudo = $_POST['post'];

	$query = "INSERT INTO `aula7`.`posts` (`titulo`,`post_content`, `id`) VALUES ('$titulo', '$conteudo', NULL);";

	$ok = mysql_query($query, $con);
}

?>
<html>
<head>
	<title>Novo Post</title>
	<meta charset="UTF-8">	
</head>
<body>
	<form method="POST">
		<label>
			<p>Digite um titulo:</p>
			<input name="titulo" type="text" />	
		</label>
		<label>	
			<p>Seu post</p>
			<textarea name="post"></textarea>
		</label>	
		<br />
		<input type="submit" value="Vai meu filho :)">
	</form>
</body>
</html>