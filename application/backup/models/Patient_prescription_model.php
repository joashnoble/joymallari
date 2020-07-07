<?php

class Patient_prescription_model extends CORE_Model {
    protected  $table="patient_prescription";
    protected  $pk_id="patient_prescription_id";

    function __construct() {
        parent::__construct();
    }
}
?>