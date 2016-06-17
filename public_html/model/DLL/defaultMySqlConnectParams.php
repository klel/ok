<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class defaultMySqlConnectionParams {
 
    private $db_host = "localhost";
    private $db_name = "okdb";
    private $db_login = "root";
    private $db_pwd = "";
    
    public function getDb_host() {
        return $this->db_host;
    }

    public function getDb_name() {
        return $this->db_name;
    }

    public function getDb_login() {
        return $this->db_login;
    }

    public function getDb_pwd() {
        return $this->db_pwd;
    }

    function setDb_host($db_host) {
        $this->db_host = $db_host;
    }

    function setDb_name($db_name) {
        $this->db_name = $db_name;
    }

    function setDb_login($db_login) {
        $this->db_login = $db_login;
    }

    function setDb_pwd($db_pwd) {
        $this->db_pwd = $db_pwd;
    }


    
}