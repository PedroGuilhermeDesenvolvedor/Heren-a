<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
		<?php 
			require_once 'Bolsista.php';
			require_once 'Professor.php';

			$bolsista  = new Bolsista();
			$professor = new Professor();

			$bolsista->setNome("Joãozinho");
			$professor->receberAumento();


			print_r($bolsista);
			print_r($professor);


		 ?>	


	</pre>
</body>
</html>