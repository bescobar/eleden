<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class finance_controller extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('session');

		if($this->session->userdata('logged')==0) {
			redirect(base_url().'index.php/login','refresh');
		}
	}

    public function index() {
		$this->load->view('Layouts/header');
		$this->load->view('Pages/finance');
		$this->load->view('Layouts/footer');
		$this->load->view('JsView/js_finance');
    }
}