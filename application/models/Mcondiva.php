<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcondiva extends CI_Model
{
  	function __construct()
  	{
  		parent::__construct();
  	}
	
	Public function getCondiva($s)
	{   
		$s = $this->db->order_by('condiva','ASC')->get_where('condicioniva',array('sitRegiva' => $s));
			return $s->result();
	}

}