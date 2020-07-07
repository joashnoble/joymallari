<?php

class Todo_list_model extends CORE_Model {
    protected  $table="todo_list";
    protected  $pk_id="todo_list_id";

    function __construct() {
        parent::__construct();
    }
}
?>