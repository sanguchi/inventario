<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Mlogin extends CI_Model
{
	
	public function ingresar($usu,$pass)
	{
        $this->db->select('p.idPersona,u.idUsuario,p.nombre,p.apellido'); 
        $this->db->from('usuario u');
        $this->db->join('persona p','p.idPersona = u.idPersona');
        $this->db->where('u.nomUsuario',$usu);
        $this->db->where('u.clave',$pass);
        
        $resultado = $this->db->get();  //hacemos la consulta y la guarda en la la variable $resultado

       	if ($resultado->num_rows() == 1) {
			     $r = $resultado->row(); //se guarda el registro obtenido de la consulta en la variable $r
       		 //creo dos variables de sesion y las guardo en un array
           $s_usuario = array(
                's_idpersona' => $r->idPersona,  
                's_idusuario' => $r->idUsuario,    
				        's_usuario' => $r->nombre."  ".$r->apellido,    				
       			    'is_logged_in' => TRUE
            );
           
           $this->session->set_userdata($s_usuario);  //ponemos el array $s_usuario en la variable de sesion userdata que es propia de codeigniter
           return 1;                                  //en el archivo autoload poner la libreria 'session' en la linea $autoload['libraries']
       	}else{
			     return 0;
       	}
	}
  
}