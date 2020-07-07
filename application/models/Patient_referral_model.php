<?php

class Patient_referral_model extends CORE_Model {
    protected  $table="patient_referral";
    protected  $pk_id="patient_referral_id";

    function __construct() {
        parent::__construct();
    }
}
?>