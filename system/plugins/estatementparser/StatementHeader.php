<?php

class StatementHeader {
    //put your code here
    public $_payment_date = "";
    public $_group = "";
    public $_group_nm = "";
    
    public function __construct() {
    }
    
    function get_payment_date() {
        return $this->_payment_date;
    }

    function get_group() {
        return $this->_group;
    }

    function get_group_nm() {
        return $this->_group_nm;
    }

    function set_payment_date($_payment_date) {
        $this->_payment_date = $_payment_date;
    }

    function set_group($_group) {
        $this->_group = $_group;
    }

    function set_group_nm($_group_nm) {
        $this->_group_nm = $_group_nm;
    }


    
}
