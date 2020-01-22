<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class workgroup_controller extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('session');

		if($this->session->userdata('logged')==0) {
			redirect(base_url().'index.php/login','refresh');
		}
	}

    public function index() {
        $data['workgroup'] = $this->workgroup_model->dataWorkGroup();
		$this->load->view('Layouts/header');
		$this->load->view('Pages/workgroup', $data);
		$this->load->view('Layouts/footer');
		$this->load->view('JsView/js_workgroup');
    }

    public function saveGroup() {
    	$this->workgroup_model->saveGroup( $this->input->post('name'), $this->input->post('desc') );
    }
}