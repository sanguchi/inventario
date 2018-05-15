<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mparametros extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardarparametros($param)
	{
          $campos = array(

        	'rsocialprov'  => $param['rsocialprov'],
          'nfantasiaprov' => $param['nfantasiaprov'],
          'direccionprov' => $param['direccionprov'],
          'idciudadprov' => $param['idciudadprov'],
          'cpostalprov' => $param['cpostalprov'],
          'emailprov' => $param['emailprov'],
          'telefonoprov' => $param['telefonoprov'],
          'idcondivaprov' => $param['idcondivaprov'],
          'cuitprov' => $param['cuitprov'],
          'contactoprov' => $param['contactoprov'],
          'idrubroprov' => $param['idrubroprov'],
          'sitRegprov' => $param['sitRegprov']
          
        	);

          if ($this->db->insert('proveedores',$campos)){
            return  true;
          }
          else{
            return  false;
          }
          
	}

  public function getProveedores($s){
    $this->db->select('p.idproveedor, p.rsocialprov, p.nfantasiaprov, p.direccionprov, p.cpostalprov, p.emailprov, p.telefonoprov, p.cuitprov, p.contactoprov, c.ciudad, pr.provincia, i.condiva, r.descrubro, p.sitRegprov');
    $this->db->from('proveedores p');
    $this->db->join('ciudades c','p.idciudadprov = c.idciudad');
    $this->db->join('provincias pr','c.idprovinciaciudad = pr.idprovincia');
    $this->db->join('condicioniva i','p.idcondivaprov = i.idcondicioniva');
    $this->db->join('rubros r','p.idrubroprov = r.idrubro');
    $this->db->where('p.sitRegprov',$s);
    
    $s = $this->db->get();

    return $s->result();
  }

  public function updProveedor($param)
  {
     $campos = array(

        'nfantasiaprov' => $param['nfantasiaprov'], 
        'rsocialprov' => $param['rsocialprov'],
        'direccionprov' => $param['direccionprov'],
        'cpostalprov' => $param['cpostalprov'],
        'emailprov' => $param['emailprov'],
        'telefonoprov' => $param['telefonoprov'],
        'cuitprov'=> $param['cuitprov'],
        'contactoprov' => $param['contactoprov']
      );

     $this->db->where('idproveedor',$param['idproveedor']);
     $this->db->update('proveedores',$campos);

     return 1;
  }

  public function delProveedor($param)
  {
     $campos = array(

        'sitRegprov' => $param['sitRegprov'] 

      );

     $this->db->where('idproveedor',$param['idproveedor']);
     $this->db->update('proveedores',$campos);

     return 1;
  }
}