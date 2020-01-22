<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_controller extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('session');

		if($this->session->userdata('logged')==0) {
			redirect(base_url().'index.php/login','refresh');
		}
	}

    public function index() {
		$this->load->view('Layouts/header');
		$this->load->view('Pages/home');
		$this->load->view('Layouts/footer');
		$this->load->view('JsView/js_home');
    }

    public function returnDataWorkplan() {
    	$this->home_model->returnDataWorkplan( $this->input->get('start'), $this->input->get('end') );
    }

    public function returnDataMedico() {
    	$this->home_model->returnDataMedico($this->input->post('R'));
    }

    public function returnDetalleVisita() {
    	$this->home_model->returnDetalleVisita($this->input->post('idReporte'), $this->input->post('idMedico'));
    }

    public function returnDetalleMedico() {
    	$this->home_model->returnDetalleMedico($this->input->post('idMedico'));
    }
}