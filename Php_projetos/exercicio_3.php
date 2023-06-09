<?

	define('ALUNOS', '6');

	echo "Sao " . ALUNOS . " alunos";

	$meudados = array(
		'nome'  => 'Rennan Ribeiro',
		'email' => 'rennanribeiro1@gmail.com',
		'data'  => '02/09/1993' );
?>
	<br>
<?
	echo $meudados['nome'];

	print_r($meudados);

?>