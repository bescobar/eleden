<?php 
class home_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function returnDataWorkplan($F1, $F2) {
        $dta=array(); $i=0;
        $query=$this
               ->db
               ->query("  SELECT * FROM activities WHERE fStart AND fEnd BETWEEN '".$F1."' AND '".$F2."' ");              

        if ($query->num_rows()>0) {
            foreach ($query->result_array() as $key) {
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

    public function savePlanTrabajo($cliente, $fecha, $user, $type) {
        if ($type==1) { 
            $this->db->insert('planTrabajo', array(
                'fStart' => date('Y-m-d', strtotime($fecha)),
                'fEnd' => date('Y-m-d', strtotime($fecha)),
                'numSemana' => date('W', strtotime($fecha)),
                'cliente' =>  $cliente,
                'user_' => $user)
            );
            echo json_encode(($this->db->affected_rows() > 0) ? 1 : 0);
        }elseif ($type==0) {
            $this
            ->db
            ->where("fStart", $fecha)
            ->where("fEnd", $fecha)
            ->where("cliente", $cliente)
            ->where("user_", $user)
            ->delete('planTrabajo');

            echo json_encode(($this->db->affected_rows() > 0) ? 1 : 0);
        }

    }

    public function updatePlanTrabajo($fecha, $user, $id) {
        $this->db->where('idPlanT', $id);
        $this->db->where('user_', $user);
        $data = array('fStart' => $fecha, 'fEnd' => $fecha, 'numSemana' => date('W', strtotime($fecha)));

        $this->db->update('planTrabajo', $data);

        echo json_encode(($this->db->affected_rows() > 0) ? 1 : 0);
    }

    public function cargaPlanAnterior($F1_, $F2_) {
        $dta=array(); $i=0;
        $diaInicio="Monday";
        $diaFin="Sunday";

        echo $F1_;

        //OBTENIENDO FECHA ACTUAL
        $F_ACTUAL = date("Y-m-d");
        $F_ACTUAL = strtotime($F_ACTUAL);

        $DI_ACTUAL = date('Y-m-d',strtotime('last '.$diaInicio, $F_ACTUAL));
        $DF_ACTUAL = date('Y-m-d',strtotime('next '.$diaFin, $F_ACTUAL));        

        if(date("l", $F_ACTUAL)==$diaInicio){
            $DI_ACTUAL=date("Y-m-d", $F_ACTUAL);
        }
        if(date("l", $F_ACTUAL)==$diaFin){
            $DF_ACTUAL=date("Y-m-d", $F_ACTUAL);
        }

        //OBTENIENDO FECHA INICIAL Y FINAL SELECCIONADA
        $F_SELEC = strtotime($F2_);

        $DI_SELECC = date('Y-m-d',strtotime('last '.$diaInicio, $F_SELEC));
        $DF_SELECC = date('Y-m-d',strtotime('next '.$diaFin, $F_SELEC));

        if(date("l", $F_SELEC)==$diaInicio){
            $DI_SELECC=date("Y-m-d", $F_SELEC);
        }
        if(date("l", $F_SELEC)==$diaFin){
            $DF_SELECC=date("Y-m-d", $F_SELEC);
        }

        $query = $this->db->query("SELECT * FROM plantrabajo pt 
                                    WHERE pt.fStart AND pt.fEnd BETWEEN '".$DI_SELECC."' AND '".$DF_SELECC."' ");

        //CALCULANDO DIFERENCIA DE DIAS PARA SUMAR A LA FECHA ACTUAL
        $D1 = new DateTime($DI_ACTUAL);
        $D2 = new DateTime($DI_SELECC);
        $DIFF = $D1->diff($D2);
        $DIFF = $DIFF->days;

        if ($query->num_rows()>0) {
            $this->db->query("DELETE FROM plantrabajo WHERE fStart AND fEnd BETWEEN '".$DI_ACTUAL."' AND '".$DF_ACTUAL."' ");

            foreach ($query->result_array() as $key) {
                $dta[$i]['fStart'] = date("Y-m-d",strtotime($key['fStart']."+ ".$DIFF." days"));
                $dta[$i]['fEnd'] = date("Y-m-d",strtotime($key['fEnd']."+ ".$DIFF." days"));
                $dta[$i]['cliente'] = $key['cliente'];
                $dta[$i]['user_'] = $key['user_'];
                $i++;
            }

            $this->db->insert_batch('planTrabajo', $dta);
        }

       redirect('plan-trabajo');
    }
}