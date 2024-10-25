<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data['user'] = [
			'name'        => 'Siti Rohmania',
			'email'       => 'psikologimania@gmail.com',
			'phone'       => '09834383748',
			'gender'      => 'Perempuan',
			'birthplace'  => 'Makassar 1999',
			'occupation'  => 'Manager/Asisten Manager',
			'education'   => 'S2',
			'program'     => 'Psikologi',
			'status'      => 'Single',
			'address'     => 'Utan Kayu Selatan, No. 29',
		];
		$this->load->view("user/profile", $data);
	}

	public function detail()
	{
		$data['dokter'] = [
			'nama' => 'Dr. Andi Pratama, M.Psi.',
			'spesialis' => 'Psikolog Klinis',
			'pengalaman' => '16 Tahun',
			'rating' => '90%',
			'harga_asli' => 'Rp250.000',
			'harga_diskon' => 'Rp115.000',
			'bidang_keahlian' => ['Identitas Seksual', 'Keluarga & Hubungan', 'Stres', 'Gangguan Mood', 'Gangguan Kecemasan', 'Depresi'],
			'alumnus' => ['Universitas Medan Area, 2015', 'Universitas Guandama, 2020'],
			'praktik' => 'Gading Cempaka, Kota Bengkulu',
			'nomor_str' => '09438771-13984717',
			'fitur' => ['Voice Call (45 mnt)', 'Video Call (45 mnt)']
		];

		$this->load->view('user/detail', $data);
	}
}
