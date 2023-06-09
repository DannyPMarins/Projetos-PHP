<?php

# Define o caminho da pasta que recebe os uploads 
define('UPLOAD_PATH', 'upload/');

$nome_final = time() . $_FILES['file']['name'];

if (move_uploaded_file($_FILES['file']['tmp_name'], UPLOAD_PATH . $nome_final))
	echo "Upload efetuado com sucesso!";
else 
	echo "Não foi possível enviar o arquivo, tente novamente";

?>
