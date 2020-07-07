<?php

class Patient_laboratory_model extends CORE_Model {
    protected  $table="patient_lab";
    protected  $pk_id="patient_lab_id";

    function __construct() {
        parent::__construct();
    }
}
?>