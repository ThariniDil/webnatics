<?php


class Customer_model extends MY_Model {
    
    const DB_TABLE = 'customer';
    const DB_TABLE_PK = 'id';

    public $id;
    public $name;
    public $company_name;
    public $address;
    public $business_registration_number;
    public $website;
}
