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
        $this->form_validation->set_rules('website', 'website ', 'required');
        $this->form_validation->set_rules('emails[]', "Emails", "trim|valid_email");
        $this->form_validation->set_rules('phones[]', "Phones", "trim|numeric");



        if ($this->form_validation->run()) {
            // echo 'run';
            $this->reg_submit();
        } else {
            // echo 'no run';
            $this->view_data['reg_errors'] = validation_errors();
            $this->load->view('customer_create', $this->view_data);
        }
    }

    function reg_submit() {
        $this->load->model('Customer_model');
        $this->load->model('Email_model');
        $this->load->model('Phone_model');

        $this->Customer_model->name = $this->input->post("name");
        $this->Customer_model->company_name = $this->input->post("company_name");
        $this->Customer_model->address = $this->input->post("address");
        $this->Customer_model->business_registration_number = '32';
        $this->Customer_model->website = $this->input->post("website");
        $this->Customer_model->insert();

        $emails = $this->input->post("emails");
        //var_dump($emails);
        if ($emails) {
            $this->Email_model->customer_id = $this->Customer_model->id;
            foreach ($emails as $email) {
                $this->Email_model->id = null;
                $this->Email_model->email = $email;
                $this->Email_model->insert();
            }
        }

        $phones = $this->input->post("phones");
        //var_dump($emails);
        if ($phones) {
            $this->Phone_model->customer_id = $this->Customer_model->id;
            foreach ($phones as $phone) {
                $this->Phone_model->id = null;
                $this->Phone_model->contact_number = $phone;
                $this->Phone_model->insert();
            }
        }

        $this->load->view('customer_created_success', $this->view_data);
    }

    function view() {
        $this->load->model('Customer_model');
        $this->view_data['table_data'] = $this->Customer_model->getRows();
        $this->load->view('customer_view', $this->view_data);
    }

    function search() {
        $table_data = new stdClass();
        $name = $this->input->get('name');
        if ($name) {
            $this->load->model('Customer_model');
            $array = array('name' => $name);
            $table_data = $this->Customer_model->search($array);
        }
        header('Content-Type: application/json');
        echo json_encode($table_data);
    }

    function edit($id) {
       // echo 'id '.$id;
        $this->load->model('Customer_model');
        $this->load->model('Email_model');
        $this->load->model('Phone_model');
        if ($id) {
            $this->Customer_model->id = $id;
            $user_data = $this->Customer_model->getRows(true);

            if (!empty($user_data)) {
                $this->view_data['user_data'] = $user_data[0];
                $this->view_data['email_data'] = $this->Email_model->getRowsWhere('customer_id',$id);
            }
            if (!empty($user_data)) {
                $this->view_data['phone_data'] = $this->Phone_model->getRowsWhere('customer_id',$id);
            }
        }

        $this->load->view('customer_edit', $this->view_data);
    }

    function edit_basic($id = null) {
        $this->load->model('Customer_model');

        $this->Customer_model->id = $this->input->post("id");
        $this->Customer_model->name = $this->input->post("name");
        $this->Customer_model->company_name = $this->input->post("company_name");
        $this->Customer_model->address = $this->input->post("address");
        $this->Customer_model->business_registration_number = '32';
        $this->Customer_model->website = $this->input->post("website");
        $this->Customer_model->update();
    }

}
