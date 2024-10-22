<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ServicePsikotes extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$services = [
			[
				'title' => 'Tes MMPI-2',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/psikotes/mmp1.svg'),
				'badge' => ['discount' => '5% OFF', 'new' => 'NEW!'],
				'label' => 'Tes MMPI',
			],
			[
				'title' => 'Tes IQ Online',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/psikotes/tes-iq-online.svg'),
				'badge' => ['discount' => '5% OFF', 'new' => 'NEW!'],
				'label' => 'Tes Intellegensi',
			],
			[
				'title' => 'Penelusuran Karir',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/psikotes/tes-minat-bakat.svg'),
				'badge' => ['discount' => '5% OFF', 'new' => 'NEW!'],
				'label' => 'Tes Minat Bakat',
			],
			[
				'title' => 'Tes MMPI-2',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/psikotes/mmp1.svg'),
				'badge' => ['discount' => '5% OFF', 'new' => 'NEW!'],
				'label' => 'Tes MMPI',
			],
			[
				'title' => 'Tes IQ Online',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/psikotes/tes-iq-online.svg'),
				'badge' => ['discount' => '5% OFF', 'new' => 'NEW!'],
				'label' => 'Tes Intellegensi',
			],
			[
				'title' => 'Penelusuran Karir',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/psikotes/tes-minat-bakat.svg'),
				'badge' => ['discount' => '5% OFF', 'new' => 'NEW!'],
				'label' => 'Tes Minat Bakat',
			],
			[
				'title' => 'Tes MMPI-2',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/psikotes/mmp1.svg'),
				'badge' => ['discount' => '5% OFF', 'new' => 'NEW!'],
				'label' => 'Tes MMPI',
			],
			[
				'title' => 'Tes IQ Online',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/psikotes/tes-iq-online.svg'),
				'badge' => ['discount' => '5% OFF', 'new' => 'NEW!'],
				'label' => 'Tes Intellegensi',
			],
			[
				'title' => 'Penelusuran Karir',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/psikotes/tes-minat-bakat.svg'),
				'badge' => ['discount' => '5% OFF', 'new' => 'NEW!'],
				'label' => 'Tes Minat Bakat',
			],
			[
				'title' => 'Tes MMPI-2',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/psikotes/mmp1.svg'),
				'badge' => ['discount' => '5% OFF', 'new' => 'NEW!'],
				'label' => 'Tes MMPI',
			],
			[
				'title' => 'Tes IQ Online',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/psikotes/tes-iq-online.svg'),
				'badge' => ['discount' => '5% OFF', 'new' => 'NEW!'],
				'label' => 'Tes Intellegensi',
			],
			[
				'title' => 'Penelusuran Karir',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/psikotes/tes-minat-bakat.svg'),
				'badge' => ['discount' => '5% OFF', 'new' => 'NEW!'],
				'label' => 'Tes Minat Bakat',
			],
		];

		$data['services'] = $services;

		$this->load->view('service/psikotes/index', $data);
	}

	public function detail()
	{
		$this->load->view('service/psikotes/detail');
	}
}
