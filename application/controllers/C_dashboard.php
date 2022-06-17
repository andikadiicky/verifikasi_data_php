<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$session_data['menu'] = [
            'dashboard/dashboard'
        ];
		$this->load->view('page/v_dashboard', $session_data);
	}

}