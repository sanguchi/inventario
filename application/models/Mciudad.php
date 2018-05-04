<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mciudad extends CI_Model
{
  	function __construct()
  	{
  		parent::__construct();
  	}
	
	Public function getCiudades($s)
	{   
		$s = $this->db->get_where('ciudades',array('sitReg' => $s));
			return $s->result();
	}

}