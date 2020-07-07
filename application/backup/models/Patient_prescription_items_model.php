<?php

class Patient_prescription_items_model extends CORE_Model {
    protected  $table="patient_prescription_items";
    protected  $pk_id="patient_prescription_items_id";
     protected $fk_id="patient_prescription_id";

    function __construct() {
        parent::__construct();
    }
}
?>