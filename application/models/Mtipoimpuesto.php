<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MTipoimpuesto extends CI_Model
{
  	function __construct()
  	{
  		parent::__construct();
  	}
	
	Public function getTipoimpuesto($s)
	{   
		$s = $this->db->order_by('ntipoimpuesto','ASC')->get_where('tipoimpuesto',array('habilitado' => $s));
			return $s->result();
	}

}