<?php

class Patient_medical_record_model extends CORE_Model {
    protected  $table="patient_medical_certificate";
    protected  $pk_id="patient_medical_certificate_id";

    function __construct() {
        parent::__construct();
    }
}
?>