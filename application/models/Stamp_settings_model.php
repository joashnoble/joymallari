<?php

class Stamp_settings_model extends CORE_Model{

    protected  $table="stamp_settings"; //table name
    protected  $pk_id="stamp_id"; //primary key id


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
}
?>