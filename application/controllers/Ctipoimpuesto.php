<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ctipoimpuesto extends CI_Controller
{
  	function __construct()
  	{
  		parent::__construct();
  		$this->load->model('mtipoimpuesto');
  	}
	
	Public function getTipoimpuesto()
	{   
		$s = $this->input->post('habilitado'); //Si habilitado es 1, traer solo los campos habilitados.
		$resultado = $this->mtipoimpuesto->getTipoimpuesto($s); //envía el valor de $s al método getTipoimpuesto del modelo mtipoimpuesto

		echo json_encode($resultado);
	}

}