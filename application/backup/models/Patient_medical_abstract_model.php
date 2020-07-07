<?php

class Patient_medical_abstract_model extends CORE_Model {
    protected  $table="patient_medical_abstract";
    protected  $pk_id="patient_medical_abstract_id";

    function __construct() {
        parent::__construct();
    }
}
?>