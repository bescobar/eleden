<?php 
class login_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function login($usuario, $pass) {
        if($usuario != false && $pass != false) {
            $query = $this
                    ->db
                    ->where('alias_user', $usuario)
                    ->where('pass_user', $pass)
                    ->where('status_user', 1)
                    ->get('user_at');

            if($query->num_rows()>0){
                return $query->result_array();
            }
            return 0;
        }
    }
}