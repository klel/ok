<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once $_SERVER['DOCUMENT_ROOT']."/ok/public_html/model/DLL/Repositories/telephoneBookRepository.php";

class telephoneBookController {
    private $db;
    
    function __construct() {
        $this->db = new telephoneBookRepository();
    }

    

    public function getAll(){
        return $this->db->getAll();
    }
}
