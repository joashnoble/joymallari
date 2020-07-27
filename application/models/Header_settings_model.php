<?php

class Header_settings_model extends CORE_Model{

    protected  $table="header_settings"; //table name
    protected  $pk_id="header_id"; //primary key id


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
}
?>