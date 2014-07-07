<?php

class Site extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // ======== Driver ======== //
        $this->load->database();

        // ======== Helper ======== //
        $this->load->helper('url');
        $this->load->helper('html');
    }

    public function index() {
        $data['title'] = "CI Webcrm";
        $this->load->view("templates/header", $data);
        $this->load->view("site/index");
        $this->load->view("templates/footer");
    }

    // ==================== Group Customer ===================
    public function config_group_customer() {
        $this->load->model('Group_customer');
        $data['groupCustomers'] = $this->Group_customer->get_group_customer();
        $this->load->view("site/config_group_customer", $data);
    }

    // ===================== Visit Type ========================
    public function config_visit_type() {
        $this->load->model('Visit_type');
        $data['visitTypes'] = $this->Visit_type->get_visit_type();
        $this->load->view("site/config_visit_type", $data);
    }

    // ====================== Employee =========================
    public function config_employee() {
        $this->load->view('site/config_employee');
    }

}
