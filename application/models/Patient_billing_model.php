<?php

class Patient_billing_model extends CORE_Model {
    protected  $table="patient_billing";
    protected  $pk_id="patient_billing_id";

    function __construct() {
        parent::__construct();
    }
}
?>