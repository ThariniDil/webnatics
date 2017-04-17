<?php
class Activity_model extends MY_Model {
    
    const DB_TABLE = 'activities';
    const DB_TABLE_PK = 'id';

    public $id;
    public $customer_id;
    public $date;
    public $type;
    public $outcome;
    public $sales_person_name;
}
