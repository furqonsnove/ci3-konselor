<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); 
	}

	public function index()
	{
		$this->load->view('service/index');
	}
}