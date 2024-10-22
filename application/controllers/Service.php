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
		$services = [
			[
				'title' => 'PSIKOTES',
				'description' => 'Tes MMPI, Tes Inteligensi, Tes Minat Bakat, Tes Kejiwaan Online, Identifikasi Kepribadian dan Tes Kepemimpinan',
				'img_src' => base_url('public/assets/images/services/psikotes.svg'),
				'link' => base_url('service/psikotes'),
			],
			[
				'title' => 'KESEHATAN MENTAL',
				'description' => 'Konseling Anak, Konseling Remaja, Konseling Keluarga, Life Support, Emosi, Kecemasan, Stress, Hubungan Sosial dan Seksualitas',
				'img_src' => base_url('public/assets/images/services/kesehatan_mental.svg'),
				'link' => base_url('service/mental'),
			],
			[
				'title' => 'BIMBINGAN KARIR',
				'description' => 'Pendidikan, Pekerjaan dan Pengembangan Diri',
				'img_src' => base_url('public/assets/images/services/bimbingan_karir.svg'),
				'link' => base_url('service/karir'),
			],
		];

		$data['services'] = $services;
		
		$this->load->view('service/index', $data);
	}
}
