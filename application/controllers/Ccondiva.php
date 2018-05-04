<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ccondiva extends CI_Controller
{
  	function __construct()
  	{
  		parent::__construct();
  		$this->load->model('mcondiva');
  	}
	
	Public function getCondicioniva()
	{   
		$s = $this->input->post('sitReg'); //sitReg trae el valor 1 de condiva.js
		$resultado = $this->mcondiva->getCondiva($s); //envía el valor de $s al método getCondiva del modelo mcondiva

		echo json_encode($resultado);
	}

}