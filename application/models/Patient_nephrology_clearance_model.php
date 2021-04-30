<?php

class Patient_nephrology_clearance_model extends CORE_Model {
    protected  $table="patient_nephro_clearance";
    protected  $pk_id="nephro_clearance_id";

    function __construct() {
        parent::__construct();
    }

    function get_nephro_clearance($ref_patient_id=0,$nephro_clearance_id=null){

        $query = $this->db->query("SELECT 

        	pnc.*,
        	(CASE
	            WHEN DATE_FORMAT(nephro_clearance_date, '%Y') <= 1970
	            THEN ''
	            ELSE DATE_FORMAT(nephro_clearance_date, '%m/%d/%Y')
	        END) as nephro_clearance_date

        	FROM 
        	patient_nephro_clearance pnc 

        	WHERE
        		pnc.is_deleted = FALSE AND 
        		pnc.is_active = TRUE
                ".($ref_patient_id==0?" AND pnc.ref_patient_id=0":" AND pnc.ref_patient_id='".$ref_patient_id."'")."
        		".($nephro_clearance_id==null?"":" AND pnc.nephro_clearance_id='".$nephro_clearance_id."'")."
        	");
        return $query->result();

    }

}
?>