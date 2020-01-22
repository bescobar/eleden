<?php 
class workgroup_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function dataWorkGroup() {
    	$Dta = $this
    			->db
    			->where('status_workgroup', 1)
    			->get('workgroup');

    	if ($Dta->num_rows()>0) {
    		return $Dta->result_array();
    	}

    	return false;
    }

    public function saveGroup($name, $description) {
		$data = array(
		   'cod_workgroup' => str_replace(" ",".", strtolower($name)),
		   'name_workgroup' => $name,
		   'description_workgroup' => $description,
		   'status_workgroup' => true
		);

		$this->db->insert('workgroup', $data);
		echo json_encode(($this->db->affected_rows() > 0) ? 1 : 0);
    }
}