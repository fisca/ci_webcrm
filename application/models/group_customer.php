<?php

class Group_customer extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // ======================= Group Customer =========================================== //
    public function get_group_customers() {
        $query = $this->db->get('group_customers');
        return $query->result();
    }

    public function save_group_customers() {
        $name = $this->security->xss_clean($this->input->post('name'));    // $_POST['name']
        if (!empty($name)) {
            $id = $this->security->xss_clean($this->input->post('id'));  // $_POST['id']
            $data = array('name' => $name);
            if (empty($id)) {
                $this->db->insert('group_customers', $data);
            } else {
                $this->db->where('id', $id);
                $this->db->update('group_customers', $data);
            }
            echo 'success';
        }
    }
    
    public function edit_group_customers() {
        
    }

    // ======================= END Group Customer ========================================= //
}
