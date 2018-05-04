<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cproveedor extends CI_Controller
{
  	function __construct()
  	{
  		parent::__construct();
  		$this->load->model('mproveedor');
  		$this->load->helper('form');
        $this->load->helper('url');
  	}
	
	Public function index()
	{   
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$data['mensaje'] = '';
		$this->load->view('proveedor/vproveedor',$data);
		$this->load->view('layout/footer');
	}

	Public function guardar()
	{   
		//Aquí cargo la librería 'form_validation'
		$this->load->library('form_validation');

        //Aquí van las reglas de validación
        $this->form_validation->set_rules('txtNfantasia', 'Nombre de Fantasía', 'required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('txtRsocial', 'Razón Social', 'required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('txtDireccion', 'Dirección', 'required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('selCiudad', 'Ciudad - Provincia', 'required');
        $this->form_validation->set_rules('txtCpostal', 'Código Postal', 'required|min_length[4]|max_length[10]');
        $this->form_validation->set_rules('txtEmail', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('txtTelefono', 'Teléfono', 'required|min_length[4]|max_length[20]|numeric');
        $this->form_validation->set_rules('selCondiva', 'Condición IVA', 'required');
        $this->form_validation->set_rules('txtCuit', 'CUIT', 'min_length[11]|max_length[11]|numeric');
        $this->form_validation->set_rules('txtContacto', 'Contacto', 'required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('selRubro', 'Rubro', 'required');

		//Aquí van los mensajes personalizados de las validaciones
        $this->form_validation->set_message('required', 'El campo %s es Obligatorio');
        $this->form_validation->set_message('min_length', 'El campo %s debe tener un Mínimo de %d Caracteres');
        $this->form_validation->set_message('max_length', 'El campo %s debe tener un Maximo de %d Caracteres');
        $this->form_validation->set_message('numeric', 'El campo %s debe tener solo Números');
        $this->form_validation->set_message('valid_email', 'El campo %s debe tener una dirección de email válida');

        if ($this->form_validation->run() == FALSE) {
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$data['mensaje'] = '';
			$this->load->view('proveedor/vproveedor',$data);
			$this->load->view('layout/footer');
        } else {
	 		//proveedor creo un array con todos los campos
			$param['rsocialprov'] = $this->input->post('txtRsocial');
			$param['nfantasiaprov'] = $this->input->post('txtNfantasia');
			$param['direccionprov'] = $this->input->post('txtDireccion');
			$param['idciudadprov'] = $this->input->post('selCiudad');
			$param['cpostalprov'] = $this->input->post('txtCpostal');
			$param['emailprov'] = $this->input->post('txtEmail');
			$param['telefonoprov'] = $this->input->post('txtTelefono');
	        $param['idcondivaprov'] = $this->input->post('selCondiva');
	        $param['cuitprov'] = $this->input->post('txtCuit');
	        $param['contactoprov'] = $this->input->post('txtContacto');
	        $param['idrubroprov'] = $this->input->post('selRubro');
	        $param['sitRegprov'] = 1; // sitRegprov toma valor 1 para mostrar el registro

	        // var_dump($_SESSION['enviado']);
			// die();		

			 if($_SESSION['enviado']==TRUE) { 
			 	//se envió el formulario por método POST
	           	if ($this->mproveedor->guardarproveedor($param)){
					$this->form_validation->clear_field_data(); // limpiamos los campos del formulario
					$this->load->view('layout/header');
					$this->load->view('layout/menu');
					$data['mensaje'] = '<div class="success text-green">Datos cargados correctamente</div>';
					$this->load->view('proveedor/vproveedor',$data);
					$this->load->view('layout/footer');
				}else{
					$this->form_validation->clear_field_data(); // limpiamos los campos del formulario
					$this->load->view('layout/header');
					$this->load->view('layout/menu');
					$data['mensaje'] = '<div class="success text-red">Datos no se cargaron correctamente</div>';
					$this->load->view('proveedor/vproveedor',$data);
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
		$this->load->view('proveedor/vlistarproveedor',$data);
		$this->load->view('layout/footer');
	}

	Public function getProveedores(){
		$s = $this->input->post('sitRegprov'); //El valor de sitRegprov se pasa al modelo a traves de la variable $s
		$resultado = $this->mproveedor->getProveedores($s);
		//echo json_encode($this->mproveedor->getProveedores());
		echo json_encode($resultado); //pasamos el array $resultado a un formato JSON
	}

	Public function updProveedor()
	{   
	    $param['idproveedor'] = $this->input->post('mhdnIdProveedor');
        $param['nfantasiaprov'] = $this->input->post('mtxtNfantasia');  
	    $param['rsocialprov'] = $this->input->post('mtxtRsocial');
        $param['direccionprov'] = $this->input->post('mtxtDireccion');
        $param['cpostalprov'] = $this->input->post('mtxtCpostal');
        $param['emailprov'] = $this->input->post('mtxtEmail');
        $param['telefonoprov'] = $this->input->post('mtxtTelefono');
        $param['cuitprov'] = $this->input->post('mtxtCuit');
        $param['contactoprov'] = $this->input->post('mtxtContacto');
		
		echo $this->mproveedor->updProveedor($param);  //el echo es muy importante para retornar un valor

	}

	Public function delProveedor()
	{   
	    $param['idproveedor'] = $this->input->post('mhdnIdProveedorDel');
	    $param['sitRegprov'] = $this->input->post('sitRegprov');
   
		echo $this->mproveedor->delProveedor($param);  //el echo es muy importante para retornar un valor

	}
}