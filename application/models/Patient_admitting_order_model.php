<?php

class Patient_admitting_order_model extends CORE_Model {
    protected  $table="patient_admitting_order";
    protected  $pk_id="patient_admitting_order_id";

    function __construct() {
        parent::__construct();
    }
}
?>