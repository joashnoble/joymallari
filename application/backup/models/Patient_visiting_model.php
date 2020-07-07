<?php

class Patient_visiting_model extends CORE_Model {
    protected  $table="patient_visiting_record";
    protected  $pk_id="patient_visiting_record_id";

    function __construct() {
        parent::__construct();
    }
}
?>