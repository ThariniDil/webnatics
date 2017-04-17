<?php
class Email_model extends MY_Model {
    
    const DB_TABLE = 'email';
    const DB_TABLE_PK = 'id';

    public $id;
    public $email;
    public $customer_id;
}
