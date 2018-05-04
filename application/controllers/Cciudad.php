<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cciudad extends CI_Controller
{
  	function __construct()
  	{
  		parent::__construct();
  		$this->load->model('mciudad');
  	}
	
	Public function getCiudades()
	{   
		$s = $this->input->post('sitReg');
		$resultado = $this->mciudad->getCiudades($s);

		echo json_encode($resultado);
	}

}