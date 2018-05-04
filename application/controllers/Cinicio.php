<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cinicio extends CI_Controller
{
  	function __construct()
  	{
  		parent::__construct();
		
  	}
	
	Public function index()
	{   
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('vinicio');
			$this->load->view('layout/footer');
	}
}