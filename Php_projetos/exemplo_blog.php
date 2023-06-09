<html>
<head>
	<title>Meu blog</title>
	<meta charset="utf-8"/>
</head>
<body>
<h1>Bem-Vindo ao meu Blog :)</h1>
<hr />

<div style="width:700px; margin:0 auto;">
	<?php 
		require 'conf.php';

		$id = $_GET['id'];

		$query = "SELECT * FROM  `posts` WHERE id=$id;";
		$result = mysql_query($query, $con);

		$post = mysql_fetch_array($result);
	 ?>
	 <h2><?= $post['titulo'] ?></h2>
	 <p>
	 	<?= $post['post_content'] ?>
	 </p>
	 <div style="border:1px solid #ccc">
	 	<ul>
<?php 
		$id = $_GET['id'];

		$query = "SELECT * FROM `comentarios` WHERE posts_id = $id;";

		$result = mysql_query($query, $con);
		while ($row = mysql_fetch_array($result))
		{
	 ?>

	 		<li>
	 			<p><?php echo $row['content']; ?></p>
	 		</li>

	 <?
	 	}
	?>
	 	</ul>
<?php 	
if(isset($_POST['comment']))
{
	$conteudo = $_POST['comment'];

	$query = "INSERT INTO `aula7`.`comentarios` (`id`, `posts_id`, `content`) VALUES (NULL, '$id', '$conteudo');";

	mysql_query($query, $con);
}

 ?>
	 	<form method="POST">

	 		<p>Digite seu comentário</p>
	 		<textarea name="comment" rows="6" cols="50"></textarea>
	 		<br />
	 		<input type="submit" value="Enviar comentário">
	 	</form>
	 </div>
</div>

</body>
</html>