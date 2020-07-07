<?php

class Patient_Info_model extends CORE_Model {
    protected  $table="patient";
    protected  $pk_id="patient_info_id";

    function __construct() {
        parent::__construct();
    }
}
?>