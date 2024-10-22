<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ServiceMental extends CI_Controller
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
				'title' => 'Ketergantungan Game',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/mental/konseling-anak.svg'),
				'label' => 'Tes MMPI',
			],
			[
				'title' => 'Gangguang Kecemasan',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/mental/konseling-anak-2.svg'),
				'label' => 'Tes Intellegensi',
			],
			[
				'title' => 'Masalah Fobia',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/mental/konseling-remaja.svg'),
				'label' => 'Tes Minat Bakat',
			],
			[
				'title' => 'Gangguang Depresi',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/mental/konseling-keluarga.svg'),
				'label' => 'Tes MMPI',
			],
			[
				'title' => 'Ketergantungan Game',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/mental/konseling-anak.svg'),
				'label' => 'Tes MMPI',
			],
			[
				'title' => 'Gangguang Kecemasan',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/mental/konseling-anak-2.svg'),
				'label' => 'Tes Intellegensi',
			],
			[
				'title' => 'Masalah Fobia',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/mental/konseling-remaja.svg'),
				'label' => 'Tes Minat Bakat',
			],
			[
				'title' => 'Gangguang Depresi',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/mental/konseling-keluarga.svg'),
				'label' => 'Tes MMPI',
			],
			[
				'title' => 'Ketergantungan Game',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/mental/konseling-anak.svg'),
				'label' => 'Tes MMPI',
			],
			[
				'title' => 'Gangguang Kecemasan',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/mental/konseling-anak-2.svg'),
				'label' => 'Tes Intellegensi',
			],
			[
				'title' => 'Masalah Fobia',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/mental/konseling-remaja.svg'),
				'label' => 'Tes Minat Bakat',
			],
			[
				'title' => 'Gangguang Depresi',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/mental/konseling-keluarga.svg'),
				'label' => 'Tes MMPI',
			],
			[
				'title' => 'Ketergantungan Game',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/mental/konseling-anak.svg'),
				'label' => 'Tes MMPI',
			],
			[
				'title' => 'Gangguang Kecemasan',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/mental/konseling-anak-2.svg'),
				'label' => 'Tes Intellegensi',
			],
			[
				'title' => 'Masalah Fobia',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/mental/konseling-remaja.svg'),
				'label' => 'Tes Minat Bakat',
			],
			[
				'title' => 'Gangguang Depresi',
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
				'img_src' => base_url('public/assets/images/mental/konseling-keluarga.svg'),
				'label' => 'Tes MMPI',
			],
		];

		$accordionItems = [
			[
				"id" => "headingOne",
				"target" => "collapseOne",
				"title" => "Konseling Anak",
				"content" => "",
				"expanded" => false
			],
			[
				"id" => "headingTwo",
				"target" => "collapseTwo",
				"title" => "Konseling Remaja",
				"content" => "",
				"expanded" => false
			],
			[
				"id" => "headingThree",
				"target" => "collapseThree",
				"title" => "Konseling Keluarga",
				"content" => "",
				"expanded" => false
			],
			[
				"id" => "headingFour",
				"target" => "collapseFour",
				"title" => "Life Support",
				"content" => [
					["label" => "Dorongan Bunuh Diri", "id" => "support1", "value" => "support1"],
					["label" => "Gangguan Tidur", "id" => "support2", "value" => "support2"]
				],
				"expanded" => true
			],
			[
				"id" => "headingFive",
				"target" => "collapseFive",
				"title" => "Emosi",
				"content" => "",
				"expanded" => false
			],
			[
				"id" => "headingSix",
				"target" => "collapseSix",
				"title" => "Kecemasan",
				"content" => "",
				"expanded" => false
			],
			[
				"id" => "headingSeven",
				"target" => "collapseSeven",
				"title" => "Stress",
				"content" => "",
				"expanded" => false
			],
			[
				"id" => "headingEight",
				"target" => "collapseEight",
				"title" => "Hubungan Sosial",
				"content" => "",
				"expanded" => false
			],
			[
				"id" => "headingNine",
				"target" => "collapseNine",
				"title" => "Seksualitas",
				"content" => "",
				"expanded" => false
			]
		];

		$data['services'] = $services;
		$data['accordionItems'] = $accordionItems;

		$this->load->view('service/mental/index', $data);
	}

	public function detail()
	{
		$this->load->view('service/mental/detail');
	}
}
