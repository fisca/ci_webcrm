<?php

class Employee extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_employee() {
        $query = $this->db->get('employees');
        return $query->result();
    }

}
