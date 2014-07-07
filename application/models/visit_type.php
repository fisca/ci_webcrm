<?php

class Visit_type extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_visit_type() {
        $query = $this->db->get('visit_types');
        return $query->result();
    }

}
