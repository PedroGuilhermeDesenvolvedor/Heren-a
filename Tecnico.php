<?php 
	require_once 'Aluno';

	class Tecnico extends Aluno{
		private $registroProfissional;

		public function getRegistroProfissional() {
		    return $this->registroProfissional;
		}
		 
		public function setRegistroProfissional($registroProfissional) {
		    $this->registroProfissional = $registroProfissional;
		}

		public function praticar(){
			echo "Praticando exercicios!";
		}

	}

?>