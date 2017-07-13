<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class BaseModel {

    public function __construct() {
        $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
    }

    public function __destruct() {
        
    }

}