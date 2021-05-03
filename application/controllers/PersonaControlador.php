<?php
#defined('BASEPATH') OR exit('No direct script access allowed');

class PersonaControlador extends CI_Controller {
	public function _construct(){
		parent::_construct();
		$this->load->database();
		$this->load->model('models/Persona');
		$this->load->helper('url');
	}

	public function index()
	{
		$result = $this->db->get('ciudades');
		$data = array('ciudades' => $result);
		$this->load->view('formulario', $data);
	}
	public function guardar(){
		
		$cuil = $_POST['cuil'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$numero = $_POST['numero'];
		$ciudad = $_POST['ciudad'];
		$imagen = addslashes(file_get_contents($_FILES(['imagen']['tmp_name'])));
		$this->Persona->setPersona($cuil,$nombre,$apellido,$calle,$numero,$ciudad,$imagen);
	}
}

