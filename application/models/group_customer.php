<?php

class Group_customer extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_group_customer() {
        $query = $this->db->get('group_customers');
        return $query->result();
    }

}
