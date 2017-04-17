<?php

class Customer extends CI_Controller {
    private $view_data;

    function index() {
        $this->register();
    }

    function register() {

        $data = array();
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="help-danger help">', '</p>');


        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('company_name', 'company name', 'required');
        $this->form_validation->set_rules('address', 'address ', 'required');



        if ($this->form_validation->run()) {
            echo 'run';
            $this->reg_submit();
        } else {
            echo 'no run';
            $this->view_data['reg_errors'] = validation_errors();
        }


        $this->load->view('customer_create');
    }

}
