<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mciudadprovincia extends CI_Model
{
  	function __construct()
  	{
  		parent::__construct();
  	}
	
	Public function getCiudades($s)
	{   
		
        $this->db->select('c.idciudad,c.idprovinciaciudad,c.ciudad,c.sitReg,p.idprovincia,p.provincia');
		$this->db->from('provincias p');
        $this->db->join('ciudades c','c.idprovinciaciudad = p.idprovincia');
        $this->db->order_by('c.ciudad','asc');
        $this->db->where('c.sitReg',$s);
        
        $s = $this->db->get();

         return $s->result();
	}

}