<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mrubro extends CI_Model
{
  	function __construct()
  	{
  		parent::__construct();
  	}
	
	Public function getRubro($s)
	{   
		$s = $this->db->order_by('descrubro', 'ASC')->get_where('rubros',array('sitRegrubro' => $s));
			return $s->result();
	}

}