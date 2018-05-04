<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Musuario extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardarusuario($param)
	{
        $campos = array(
        	'nomusuario' => $param['nomusuario'],
        	'clave' => $param['clave'],
        	'idPersona' => $param['idPersona']
        	);

        $this->db->insert('usuario',$campos); 

	}

	Public function eliminarUsuario($idP)
    {
        $this->db->where('idPersona',$idP);
        $this->db->delete('usuario');
    }
}