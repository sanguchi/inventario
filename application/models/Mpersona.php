<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Mpersona extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardar($param)
	{
           $campos = array(
        	'dni' => $param['dni'],
        	'nombre' => $param['nombre'],
        	'apellido' => $param['apellido'],
        	'email' => $param['email'],
        	'fechanac' => date('y-m-d',strtotime(str_replace('/','-',$param['fechanac']))) //formatea la fecha
        	//para que la guarde año, mes y día, y sin la hora.
        	);

           $this->db->insert('persona',$campos); 

          return $this->db->insert_id();//retorna en último id de la tabla persona
	}

        public function actualizardatos($param)
        {
           $campos = array(
                'nombre' => $param['nombre'],
                'apellido' => $param['apellido'],
                'email' => $param['email']
                );

           $this->db->update('persona',$campos);
           $this->db->where('idPersona',$this->session->userdata('s_idPersona'));

           return 1;
        }

        Public function eliminarPersona($idP)
        {
           $campos = array(
                'idPersona' => $idP
                );
           $this->db->delete('persona',$campos);
        }

}