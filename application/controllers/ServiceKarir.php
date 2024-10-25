<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ServiceKarir extends CI_Controller
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
				'title' => 'Menentukan Program Studi',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/karir/1.svg'),
				'label' => 'Tes MMPI',
			],
			[
				'title' => 'Peminatan',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/karir/2.svg'),
				'label' => 'Tes Intellegensi',
			],
			[
				'title' => 'Konsultasi',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/karir/3.svg'),
				'label' => 'Tes Minat Bakat',
			],
			[
				'title' => 'Konflik di Tempat Kerja',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/karir/4.svg'),
				'label' => 'Tes MMPI',
			],
			[
				'title' => 'Susah Mencari Pekerjaan ',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/karir/5.svg'),
				'label' => 'Tes MMPI',
			],
			[
				'title' => 'Lingkungan Kerja yang kurang Sehat',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/karir/2.svg'),
				'label' => 'Tes Intellegensi',
			],
			[
				'title' => 'Ambil Keputusan Terbaik',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/karir/6.svg'),
				'label' => 'Tes Minat Bakat',
			],
			[
				'title' => 'Sulit Menerima Masa Lalu',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/karir/3.svg'),
				'label' => 'Tes MMPI',
			],
			[
				'title' => 'Ketergantungan Game',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/karir/7.svg'),
				'label' => 'Tes MMPI',
			],
			[
				'title' => 'Gangguang Kecemasan',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/karir/5.svg'),
				'label' => 'Tes Intellegensi',
			],
			[
				'title' => 'Masalah Fobia',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/karir/1.svg'),
				'label' => 'Tes Minat Bakat',
			],
			[
				'title' => 'Gangguang Depresi',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/karir/3.svg'),
				'label' => 'Tes MMPI',
			],
			[
				'title' => 'Ketergantungan Game',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/karir/7.svg'),
				'label' => 'Tes MMPI',
			],
			[
				'title' => 'Gangguang Kecemasan',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/karir/7.svg'),
				'label' => 'Tes Intellegensi',
			],
			[
				'title' => 'Masalah Fobia',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/karir/1.svg'),
				'label' => 'Tes Minat Bakat',
			],
			[
				'title' => 'Gangguang Depresi',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/karir/3.svg'),
				'label' => 'Tes MMPI',
			],
		];

		$accordionItems = [
			[
				"id" => "headingOne",
				"target" => "collapseOne",
				"title" => "Pendidikan",
				"content" => "",
				"expanded" => false
			],
			[
				"id" => "headingTwo",
				"target" => "collapseTwo",
				"title" => "Pekerjaan",
				"content" => "",
				"expanded" => false
			],
			[
				"id" => "headingThree",
				"target" => "collapseThree",
				"title" => "Pengembangan Diri",
				"content" =>
				[
					["label" => "Ambil Keputusan Terbaik", "id" => "support1", "value" => "support1"],
					["label" => "Sulit Menerima Masa Lalu", "id" => "support2", "value" => "support2"],
					["label" => "Kesulitan Bersosialisasi", "id" => "support3", "value" => "support3"],
					["label" => "Mengubah Kebiasaan", "id" => "support4", "value" => "support4"],
					["label" => "Manajemen Waktu", "id" => "support5", "value" => "support5"]
				],
				"expanded" => true
			],
		];

		$data['services'] = $services;
		$data['accordionItems'] = $accordionItems;

		$this->load->view('service/karir/index', $data);
	}

	public function detail()
	{
		$this->load->view('service/karir/detail');
	}
}
