<?php

class MY_Model extends CI_Model {

    const DB_TABLE = 'abstract';
    const DB_TABLE_PK = 'abstract';

    /**
     * Create record.
     */
    public function insert($val = NULL) {
        echo "insert";
        if ($val) {
            $this->{$this::DB_TABLE_PK} = $val;
        }
        $this->db->insert($this::DB_TABLE, $this);
        $this->{$this::DB_TABLE_PK} = $this->db->insert_id();
    }

    /**
     * Update record.
     */
    public function update() {
        echo "update <br>";
        $this -> db -> where($this::DB_TABLE_PK, $this -> {$this::DB_TABLE_PK},TRUE);
	$this -> db -> update($this::DB_TABLE, $this);
        echo $this->db->last_query();
    }

    /**
     * Populate from an array or standard class.
     * @param mixed $row
     */
    public function populate($row) {
        foreach ($row as $key => $value) {
            $this->$key = $value;
        }
    }

    /**
     * Load from the database.
     * @param int $id
     */
    public function load($id) {
        $query = $this->db->get_where($this::DB_TABLE, array(
            $this::DB_TABLE_PK => $id,
        ));
        $this->populate($query->row());
    }

    /**
     * Delete the current record.
     */
    public function delete() {
        $this->db->delete($this::DB_TABLE, array(
            $this::DB_TABLE_PK => $this->{$this::DB_TABLE_PK},
        ));
        unset($this->{$this::DB_TABLE_PK});
    }

    /**
     * Save the record.
     */
//    public function save() {
//
//        echo "save : " . $this::DB_TABLE_PK;
//        echo $this->{$this::DB_TABLE_PK};
//        if (isset($this->{$this::DB_TABLE_PK})) {
//            $this->update();
//        } else {
//            $this->insert();
//        }
//    }

    /**
     * Get an array of Models with an optional limit, offset.
     * 
     * @param int $limit Optional.
     * @param int $offset Optional; if set, requires $limit.
     * @return array Models populated by database, keyed by PK.
     */
    public function get($limit = 0, $offset = 0) {
        if ($limit) {
            $query = $this->db->get($this::DB_TABLE, $limit, $offset);
        } else {
            $query = $this->db->get($this::DB_TABLE);
        }
        $ret_val = array();
        $class = get_class($this);
        foreach ($query->result() as $row) {
            $model = new $class;
            $model->populate($row);
            $ret_val[$row->{$this::DB_TABLE_PK}] = $model;
        }
        return $ret_val;
    }

}
