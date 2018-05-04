<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mproducto extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardarproducto($param)
	{
      $campos = array(

      'codigoprod' => $param['codigoprod'],
      'descripcionprod' => $param['descripcionprod'],
      'idrubroprod' => $param['idrubroprod'],
      'presentacionprod' => $param['presentacionprod'],
      'unidadprod' => $param['unidadprod'],
      'loteprod' => $param['loteprod'],
      'partidaprod' => $param['partidaprod'],
      'marcaprod' => $param['marcaprod'],
      'vencimientoprod' => date('y-m-d',strtotime(str_replace('/','-',$param['vencimientoprod']))), //formatea la fecha para que la guarde año, mes y día, y sin la hora.
      'puntopedidoprod' => $param['puntopedidoprod'],
      'modificastockprod' => $param['modificastockprod'],
      'sitRegprod' => $param['sitRegprod']

    	);

      //var_dump($campos);
      //die();
      if ($this->db->insert('productos',$campos)){
        return  true;
      }
      else{
        return  false;
      }
	}

  public function getProductos($s){
    $this->db->select('p.idproducto, p.codigoprod, p.descripcionprod, r.descrubro, p.presentacionprod,  
              p.unidadprod, p.loteprod, p.partidaprod, p.marcaprod, p.vencimientoprod, p.puntopedidoprod,p.stockactualprod, p.sitRegprod');
    $this->db->from('productos p');
    $this->db->join('rubros r','p.idrubroprod = r.idrubro');
    $this->db->where('p.sitRegprod',$s);
    
    $s = $this->db->get();

    return $s->result();
  }

  public function updProducto($param)
  {
     $campos = array(

        'codigoprod' => $param['codigoprod'],
        'descripcionprod' => $param['descripcionprod'],
        //$param['idrubroprod'] = $this->input->post('selRubro');
        'presentacionprod' => $param['presentacionprod'],
        'unidadprod' => $param['unidadprod'],
        'loteprod' => $param['loteprod'],
        'partidaprod' => $param['partidaprod'],
        'marcaprod' => $param['marcaprod'],
        //$param['vencimientoprod'] = $this->input->post('datVencimiento');
        'puntopedidoprod' => $param['puntopedidoprod']
      );

     $this->db->where('idproducto',$param['idproducto']);
     $this->db->update('productos',$campos);

     return 1;
  }

  public function delProducto($param)
  {
     $campos = array(

        'sitRegprod' => $param['sitRegprod'] 

      );

     $this->db->where('idproducto',$param['idproducto']);
     $this->db->update('productos',$campos);

     return 1;
  }
}