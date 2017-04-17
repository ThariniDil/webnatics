<?php

class Contacts extends CI_Controller {

    private $view_data;

    function index() {
        
    }

    function edit($id) {
        
    }

    function view($id) {
        $this->load->view('activity_edit', $this->view_data);
    }

}