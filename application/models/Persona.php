<?php
	class Persona extends CI_modell{

		public function __construct(){
			parent::__construct();
		}

		public getPersonas(){

		}
		public setPersona($cuil, $nombre, $apellido, $calle, $numero, $piso, $dpto, $ciudad, $imagen){
			$this->db->escape();
			$this->db->query("INSERT INTO `personas`( `cuil`, `nombre`, `apellido`, `calle`, `numero`, `piso`, `dpto`, `ciudad`, `imagen`) VALUES ($cuil, '$nombre', '$apellido', '$calle', $numero, $piso, '$dpto', $ciudad, $imagen)")
		}
		

	}


  ?>

