<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_detail_verifikasi_data extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$session_data['menu'] = [
            'dashboard/dashboard',
			'detail_verifikasi_data/detail_aplikasi',
			'detail_verifikasi_data/identitas_personal',
			'detail_verifikasi_data/doc_received',
			'detail_verifikasi_data/verif_data_awal',
			'detail_verifikasi_data/verif_telepon',
        ];
		$this->load->view('page/detail_verifikasi_data/v_verifikasi_data', $session_data);
	}

}