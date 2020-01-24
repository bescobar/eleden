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
        $cod_generate = $this->clearString($name);
		$data = array(
		   'cod_workgroup' => str_replace(" ",".", strtolower($cod_generate)),
		   'name_workgroup' => $name,
		   'description_workgroup' => $description,
		   'status_workgroup' => true
		);

		$this->db->insert('workgroup', $data);
		echo json_encode(($this->db->affected_rows() > 0) ? 1 : 0);
    }

    public function detailsWorkGroup($codeWorkGroup) {
        $Dta = $this
                ->db
                ->where("cod_workgroup", $codeWorkGroup)
                ->get("workgroup");

        if ($Dta->num_rows()>0) {
            return $Dta->result_array();
        }

        return false;
    }

    public function clearString( $string ) {
        $string = htmlentities($string);
        $string = preg_replace('/\&(.)[^;]*;/', '\\1', $string);
        return $string;
    }
}