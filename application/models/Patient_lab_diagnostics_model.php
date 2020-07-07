<?php

class Patient_lab_diagnostics_model extends CORE_Model {
    protected  $table="patient_lab_report";
    protected  $pk_id="patient_lab_report_id";

    function __construct() {
        parent::__construct();
    }
}
?>