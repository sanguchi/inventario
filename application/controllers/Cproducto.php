<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cproducto extends CI_Controller
{
  	function __construct()
  	{
  		parent::__construct();
  	    $this->load->model('mproducto');
  		$this->load->helper('form');
        $this->load->helper('url');
  	}
	
	Public function index()
	{   
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$data['mensaje'] = '';
		$this->load->view('producto/vproducto',$data);
		$this->load->view('layout/footer');
	}

	Public function guardar()
	{   
		//Aquí cargo la librería 'form_validation'
		$this->load->library('form_validation');

        //Aquí van las reglas de validación
        $this->form_validation->set_rules('txtCodigo', 'Código del producto', 'required|min_length[5]|max_length[6]');
        $this->form_validation->set_rules('txtDescripcion', 'Descripción', 'required|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('selRubro', 'Rubro', 'required');
        $this->form_validation->set_rules('txtPresentacion', 'Presentación', 'required|min_length[5]|max_length[30]');
        $this->form_validation->set_rules('txtUnidad', 'Unidad', 'required|min_length[1]|max_length[10]');
        $this->form_validation->set_rules('txtLote', 'Lote', 'min_length[1]|max_length[10]');
        $this->form_validation->set_rules('txtPartida', 'Partida', 'min_length[1]|max_length[10]');
        $this->form_validation->set_rules('txtMarca', 'Marca', 'min_length[1]|max_length[10]');
        $this->form_validation->set_rules('datVencimiento', 'Vencimiento', 'required');
        $this->form_validation->set_rules('txtPuntoPedido', 'Punto de Pedido', 'required|min_length[1]|max_length[11]', 'numeric');
        $this->form_validation->set_rules('txtModStock', 'Modifica Stock', 'min_length[1]|max_length[11]', 'numeric');       
		//Aquí van los mensajes personalizados de las validaciones
        $this->form_validation->set_message('required', 'El campo %s es Obligatorio');
        $this->form_validation->set_message('min_length', 'El campo %s debe tener un Mínimo de %d Caracteres');
        $this->form_validation->set_message('max_length', 'El campo %s debe tener un Maximo de %d Caracteres');
        $this->form_validation->set_message('numeric', 'El campo %s debe tener solo Números');
        
        if ($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$data['mensaje'] = '';
			$this->load->view('producto/vproducto',$data);
			$this->load->view('layout/footer');
        } else {
	 		//creo un array con todos los campos
			$param['codigoprod'] = $this->input->post('txtCodigo');
			$param['descripcionprod'] = $this->input->post('txtDescripcion');
			$param['idrubroprod'] = $this->input->post('selRubro');
			$param['presentacionprod'] = $this->input->post('txtPresentacion');
			$param['unidadprod'] = $this->input->post('txtUnidad');
			$param['loteprod'] = $this->input->post('txtLote');
			$param['partidaprod'] = $this->input->post('txtPartida');
	        $param['marcaprod'] = $this->input->post('txtMarca');
	        $param['vencimientoprod'] = $this->input->post('datVencimiento');
	        $param['puntopedidoprod'] = $this->input->post('txtPuntoPedido');
	        $param['modificastockprod'] = $this->input->post('txtModStock');
	    	$param['sitRegprod'] = 1; // sitRegprod toma valor 1 para mostrar el registro

			//var_dump($param);
			//die();	

			 if($_SESSION['enviado']==TRUE) { 
			 	//se envió el formulario por método POST
				if ($this->mproducto->guardarproducto($param)) {
	 				$this->form_validation->clear_field_data(); // limpiamos los campos del formulario
	 				$this->load->view('layout/header');
					$this->load->view('layout/menu');
					$data['mensaje'] = '<div class="success text-green">Datos cargados correctamente</div>';
				    $this->load->view('producto/vproducto',$data);
					$this->load->view('layout/footer');
				}else{
					$this->form_validation->clear_field_data(); // limpiamos los campos del formulario
					$this->load->view('layout/header');
					$this->load->view('layout/menu');
					$data['mensaje'] = '<div class="success text-red">Datos no se cargaron correctamente</div>';
					$this->load->view('producto/vproducto',$data);
					$this->load->view('layout/footer');
	        	}
	            $_SESSION['enviado']=FALSE;// se pone en FALSE porque si se envió el formulario
			    // var_dump($_SESSION['enviado']);
			    // die();
	          }else{
	            //var_dump($_SESSION['enviado']);
			    //die();
	            redirect(base_url().'cinicio');  //redirecciona a vista inicio
	          }
        }

	}

	Public function listar()
	{   
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$data['mensaje'] = '';
		$this->load->view('producto/vlistarproducto',$data);
		$this->load->view('layout/footer');
	}

	Public function getProductos(){
		$s = $this->input->post('sitRegprod'); //El valor de sitRegprod se pasa al modelo a traves de la variable $s
		$resultado = $this->mproducto->getProductos($s);
		//echo json_encode($this->mproveedor->getProveedores());
		echo json_encode($resultado); //pasamos el array $resultado a un formato JSON
	}

	Public function updProducto()
	{   
        $param['idproducto'] = $this->input->post('mhdnIdProducto');
		$param['codigoprod'] = $this->input->post('mtxtCodigo');
		$param['descripcionprod'] = $this->input->post('mtxtDescripcion');
		//$param['idrubroprod'] = $this->input->post('selRubro');
		$param['presentacionprod'] = $this->input->post('mtxtPresentacion');
		$param['unidadprod'] = $this->input->post('mtxtUnidad');
		$param['loteprod'] = $this->input->post('mtxtLote');
		$param['partidaprod'] = $this->input->post('mtxtPartida');
        $param['marcaprod'] = $this->input->post('mtxtMarca');
        //$param['vencimientoprod'] = $this->input->post('datVencimiento');
        $param['puntopedidoprod'] = $this->input->post('mtxtPuntoPedido');
        //$param['modificastockprod'] = $this->input->post('txtModStock');

		echo $this->mproducto->updProducto($param);  //el echo es muy importante para retornar un valor
	}

	Public function delProducto()
	{   
	    $param['idproducto'] = $this->input->post('mhdnIdProductoDel');
	    $param['sitRegprod'] = $this->input->post('sitRegprod');
   
		echo $this->mproducto->delProducto($param);  //el echo es muy importante para retornar un valor

	}	
}