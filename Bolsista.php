<?php 
	require_once 'Aluno.php';
	class Bolsista extends Aluno{
		private $bolsa;

		public function getBolsa() {
		    return $this->bolsa;
		}
		 
		public function setBolsa($bolsa) {
		    $this->bolsa = $bolsa;
		}
		public function renovarBolsa(){
			echo "Bolsa sendo renovada...";
		}
		public function pagarMensalidade(){
			echo "Mensalidade sendo paga, e processando desconto...";
		}
	}

?>