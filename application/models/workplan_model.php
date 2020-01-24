<?php 
class workplan_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function dataWorkPlanActive() {
    	$data = array();
    	$i=0;
    	$query = $this
    			->db
    			->where("status_plan", 1)
    			->get("workplan");

    	if ($query->num_rows()>0) {
    		foreach ($query->result_array() as $key) {
    			$data['id_plan'] 				= $key['id_plan'];
    			$data['cod_plan'] 				= $key['cod_plan'];
    			$data['name_plan'] 				= $key['name_plan'];
    			$data['description_plan'] 		= $key['description_plan'];
    			$data['date_value'] 			= "Vigente desde ".date("d/m/Y", strtotime($key['date_init']))." hasta ".date("d/m/Y", strtotime($key['date_end']));
    		}

    		return $data;
    	}

    	return false;
    }

    public function returnDataWorkplan($F1, $F2) {
        $dta=array(); $i=0;
        $query=$this
               ->db
               ->query("  SELECT * FROM activities WHERE fStart AND fEnd BETWEEN '".$F1."' AND '".$F2."' ");              

        if ($query->num_rows()>0) {
            foreach ($query->result_array() as $key) {
            	$dta[$i]['id_workgroup']   	= $key['id_workgroup'];
            	$dta[$i]['id_plan']   		= $key['id_plan'];
                $dta[$i]['title']           = $key['name_activities'];
                $dta[$i]['start']           = $key['fStart'];
                $dta[$i]['startFormat']     = date('d/m/Y', strtotime($key['fStart']));
                $dta[$i]['end']             = $key['fEnd'];
                $dta[$i]['endFormat']       = date('d/m/Y', strtotime($key['fEnd']));
                $dta[$i]['Respon']          = "Ministerio Juvenil";
                $dta[$i]['place']           = "Fuera del templo";
                $dta[$i]['coste']           = "C$12,000.00";
                $dta[$i]['hora']            = "3:00 p. m.";
                $i++;
            }

            echo json_encode($dta);
        }
    }
}