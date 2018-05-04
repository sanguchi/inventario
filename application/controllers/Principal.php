<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller{

	Public function index()
	{   $data['title'] = 'Inicio';
	    $data['main_content'] = 'inicio';
		$this->load->view('main_template',$data);
	}

	Public function acercade()
	{   $data['title'] = 'Acerca de';
	    $data['main_content'] = 'acercade';
		$this->load->view('main_template',$data);
	}

	Public function servicios()
	{   $data['title'] = 'Servicios';
	    $data['main_content'] = 'servicios';
		$this->load->view('main_template',$data);
	}
	
	Public function contacto()
	{   $data['title'] = 'Contacto';
	    $data['main_content'] = 'contacto';
		$this->load->view('main_template',$data);
	}
}