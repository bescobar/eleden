<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class workplan_controller extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('session');

		if($this->session->userdata('logged')==0) {
			redirect(base_url().'index.php/login','refresh');
		}
	}

    public function index() {
        $data['workplan'] = $this->workplan_model->dataWorkPlanActive();
		$this->load->view('Layouts/header');
		$this->load->view('Pages/workplan', $data);
		$this->load->view('Layouts/footer');
		$this->load->view('JsView/js_workplan');
    }

    public function returnDataWorkplan() {
    	$this->workplan_model->returnDataWorkplan( $this->input->get('start'), $this->input->get('end') );
    }
}