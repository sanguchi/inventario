<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cciudadprovincia extends CI_Controller
{
  	function __construct()
  	{
  		parent::__construct();
  		$this->load->model('mciudadprovincia');
  	}
	
	Public function getCiudades()
	{   
		$s = $this->input->post('sitReg'); //El valor de sitReg se pasa el modelo a traves de la variable $s
		$resultado = $this->mciudadprovincia->getCiudades($s);

		echo json_encode($resultado);
	}

}