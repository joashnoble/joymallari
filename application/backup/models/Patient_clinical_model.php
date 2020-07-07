<?php

class Patient_clinical_model extends CORE_Model {
    protected  $table="patient_clinical";
    protected  $pk_id="patient_clinical_id";

    function __construct() {
        parent::__construct();
    }
}
?>