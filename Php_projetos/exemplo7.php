<meta charset="UTF-8">
<h1><?= $_GET['filhos']  ?> patinhos</h1>

<?php 

$numPatinhos = $_GET['filhos'];

for($i = $numPatinhos; $i >= 1; $i--)
{
	$retPat = $i - 1;
	

	if($i == 1)
	{
		echo "<p> ".$i." patinho foi passear<br />
		Além das montanhas<br />
		Para brincar<br />
		A mamãe gritou: Quá, quá, quá, quá<br />
		Mas nenhum patinho voltou de lá. </p>";
	}
	else
	{
		echo "<p> ".$i." patinhos foram passear<br />
		Além das montanhas<br />
		Para brincar<br />
		A mamãe gritou: Quá, quá, quá, quá<br />
		Mas só ".$retPat." patinhos voltaram de lá. </p>";
	}

}
	

 ?>