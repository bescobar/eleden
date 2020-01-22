<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('cookie');
		$this->load->helper("url");
	}

    public function index() {
        $this->load->view('Login/header');
		$this->load->view('Login/login');
		$this->load->view('Login/footer');
    }

	public function validateAccountUser() {
	    $this->form_validation->set_rules('name_user', 'Usuario', 'required|min_length[3]');
	    $this->form_validation->set_rules('pass_user', 'Contraseña', 'required|min_length[3]');

	    $this->form_validation->set_message('required','El campo %s es obligatorio');

	     if($this->form_validation->run()!=false) {

	        $data['user']=$this->login_model->login(
	            $this->input->get_post('name_user'),
                $this->input->get_post('pass_user'));

	        if ($data['user']==0){
				$datos["mensaje"]="¡Ups... datos erróneos!";
				$this->load->view('Login/header');
				$this->load->view('Login/login', $datos);
				$this->load->view('Login/footer');
	        } else {
	            $sessiondata = array(
	                'id'        => $data['user'][0]['id_user'],
	                'user'       => $data['user'][0]['alias_user'],
                    'name'        => $data['user'][0]['name_user'],
	                'rol'    		=> $data['user'][0]['id_rol'],
	                'logged'        => 1
	            );
	            $this->session->set_userdata($sessiondata);

	            if($this->session->userdata){
	                redirect('home');
	            }
	        }
	     }else{
			$datos["mensaje"]="¡Datos vacíos!";
			$this->load->view('Login/header');
			$this->load->view('Login/login', $datos);
			$this->load->view('Login/footer');
	     }
	}

    public function closeSessionUser() {
        $this->session->sess_destroy();
        $sessiondata = array('logged' => 0);
        $this->session->unset_userdata($sessiondata);
        redirect(base_url().'index.php');
    }
}
