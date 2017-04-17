<?php

class Activities extends CI_Controller {

    private $view_data;

    function index() {
        $this->create();
    }

    function edit($id) {
        $this->view_data['activity_data'] = $this->load_activity($id);
        $this->load->view('activity_create', $this->view_data);
    }

    function view($id) {
        $this->load->view('activity_edit', $this->view_data);
    }

    function load($uid) {
        $this->load->model('Activity_model');
        $this->Activity_model->customer_id = $uid;
        $this->view_data['activity_data'] = $this->Activity_model->getRows();
        $this->load->view('activity_view', $this->view_data);
    }

    function load_activity($aid) {
        $this->load->model('Activity_model');
        $this->Activity_model->id = $aid;
        return $this->Activity_model->getRows()[0];
    }

    private function create() {


        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="help-danger help">', '</p>');


        $this->form_validation->set_rules('types', 'Type', 'required');
        $this->form_validation->set_rules('outcome', 'Outcome', 'required');
        $this->form_validation->set_rules('id', 'customer id ', 'required|numeric');


        if ($this->form_validation->run()) {
            // echo 'run';
            $this->reg_submit();
        } else {
            // echo 'no run';
            $this->view_data['reg_errors'] = validation_errors();
            $this->load->view('activity_create', $this->view_data);
        }
    }

    private function reg_submit() {
        $this->load->model('Activity_model');


        $this->Activity_model->customer_id = $this->input->post("id");
        $this->Activity_model->outcome = $this->input->post("outcome");
        $this->Activity_model->type = $this->input->post("types");
        $this->Activity_model->sales_person_name = "sample user";
        $this->Activity_model->insert();

        $this->load->view('customer_created_success', $this->view_data);
    }

}
