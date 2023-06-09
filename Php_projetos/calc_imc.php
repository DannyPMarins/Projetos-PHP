<meta charset="UTF-8" />
<?php 

/**
* Calculadora de IMC
*/
class Imc
{
	// Formula é peso dividido 
	// pela altura ao quadrado
	public function calcular()
	{
		$altura = $_GET['altura'];
		$peso = $_GET['peso'];

		$resultado = $peso / pow($altura, 2);
		return (int) $resultado;
	}

	public function printResult()
	{
		$imc = $this->calcular();

		if ($imc < 17) // Se o imc for menor que 17
		{
			$situacaoIMC = 'Sua situação é: Muito abaixo do peso';
		}
		elseif(($imc >= 17) && ($imc < 18.49)) // Se não, se for maior ou igual 17 e menor que 25, ou seja, imc esteja entre 17 e 18,49 sem incluir o 18,49
		{
			$situacaoIMC = 'Sua situação é: Abaixo do peso';
		}	
		elseif (($imc >= 18.49) && ($imc < 24.99)) // Se não, se tiver entre 18,49 e 24,99
		{
			$situacaoIMC = 'Sua situação é: Peso normal';
		}
		elseif (($imc >= 25) && ($imc < 29.99)) // Se não, se tiver entre 18,49 e 24,99
		{
			$situacaoIMC = 'Sua situação é: Acima do peso';
		}	
		elseif (($imc >= 30) && ($imc < 34.99)) // Se não, se tiver entre 29.9 e 34,99
		{
			$situacaoIMC = 'Sua situação é: Obesidade I';
		} 
		elseif (($imc >= 35) && ($imc < 39.99)) // Se não, se tiver entre 35 e 39,99
		{
			$situacaoIMC = 'Sua situação é: Obesidade II (severa)';
		}
		elseif ($imc >= 40) // Se não, se for maior ou igual a 40
		{
			$situacaoIMC = 'Sua situação é: Obesidade III (mórbida)';
 		}

 		echo $situacaoIMC;
	}

}

$imc = new Imc;
$imc->printResult();