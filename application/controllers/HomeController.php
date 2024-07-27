<?php

defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'title' => 'Anugrah Sejahtera'
		);
		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/index');
		$this->load->view('frontend/templates/footer');
	}
}
