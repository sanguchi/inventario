<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clogin extends CI_Controller
{
  	function __construct()
  	{
  		parent::__construct();
  		$this->load->model('mlogin');		
  	}
	
	Public function index()
	{   
		$data['mensaje'] = '';
		$this->load->view('vlogin', $data);
	}

	Public function ingresar()
	{   
		$usu = $this->input->post('txtUsuario'); //asignamos el usuario a una variable
		$pass = sha1($this->input->post('txtClave')); //encriptamos la clave y la asignamos a una variable

		$res = $this->mlogin->ingresar($usu,$pass);

		if ($res == 1){
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			//$this->load->view('persona/vactpersona');
			$this->load->view('vinicio');
			$this->load->view('layout/footer');
		}else{
			$data['mensaje'] = "Usuario o Contraseña errónea";
			$this->load->view('vlogin', $data);
		}

	}

	public function salir()
	{
         if($this->session->userdata('is_logged_in')) {

              $this->session->sess_destroy(); //destruyo la sesion   
              redirect(base_url()); //redirecciona a vlogin
          }else{

          	  redirect(base_url());  //redirecciona a vlogin
          }
    	
    }

}