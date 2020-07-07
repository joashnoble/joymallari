<?php

class patient_billing_items_model extends CORE_Model {
    protected  $table="patient_billing_items";
    protected  $pk_id="patient_billing_items_id";
    protected $fk_id="patient_billing_id";

    function __construct() {
        parent::__construct();
    }
}
?>