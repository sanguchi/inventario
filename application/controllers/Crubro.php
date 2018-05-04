<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crubro extends CI_Controller
{
  	function __construct()
  	{
  		parent::__construct();
  		$this->load->model('mrubro');
  	}
	
	Public function getRubro()
	{   
		$s = $this->input->post('sitReg'); //sitReg trae el valor 1 de crubro.js
		$resultado = $this->mrubro->getRubro($s); //envía el valor de $s al método getRubro del modelo mrubro

		echo json_encode($resultado);
	}

}