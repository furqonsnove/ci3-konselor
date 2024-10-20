<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ServicePsikotes extends CI_Controller
{

	public function index()
	{
		$this->load->view('service/psikotes/index');
	}

	public function detail()
	{
		$this->load->view('service/psikotes/detail');
	}
}
