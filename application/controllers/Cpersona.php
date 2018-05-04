<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cpersona extends CI_Controller
{
  	function __construct()
  	{
  		parent::__construct();
  		$this->load->model('mpersona');
  		$this->load->model('musuario');
  		$this->load->library('encrypt'); //carga la libreria necesaria para encriptar la clave de usuario
  	}
	
	Public function index()
	{   
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('persona/vpersona');
		$this->load->view('layout/footer');
	}

	Public function guardar()
	{   
		//persona
		$param['dni'] = $this->input->post('txtDNI');
		$param['nombre'] = $this->input->post('txtNombre');
		$param['apellido'] = $this->input->post('txtApellido');
		$param['email'] = $this->input->post('txtEmail');
		$param['fechanac'] = $this->input->post('datFecNac');
		//usuario
		$paramusu['nomusuario'] = $this->input->post('txtUsuario');
		$paramusu['clave'] = sha1($this->input->post('txtClave')); //así enviamos la clave encriptada

		$lastId = $this->mpersona->guardar($param); //guarda el último id de la tabla persona

		if ($lastId > 0) {
			$paramusu['idPersona'] = $lastId;	
			$this->musuario->guardarusuario($paramusu);
		}
	}

	Public function actualizar()
	{   
		$param['nombre'] = $this->input->post('txtNombre');
		$param['apellido'] = $this->input->post('txtApellido');
		$param['email'] = $this->input->post('txtEmail');

		$this->mpersona->actualizarDatos($param);

		$this->load->view('persona/vpersona');
		redirect('cpersona/index');
	}

	Public function eliminar()
	{
		$idP = $this->input->post('txtIdPersona');
		$this->musuario->eliminarUsuario($idP);
		$this->mpersona->eliminarPersona($idP);
	}


}