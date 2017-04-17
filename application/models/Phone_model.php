<?php
class Phone_model extends MY_Model {
    
    const DB_TABLE = 'phone';
    const DB_TABLE_PK = 'id';

    public $id;
    public $contact_number;
    public $customer_id;
}
