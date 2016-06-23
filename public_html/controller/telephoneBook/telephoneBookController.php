<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once $_SERVER['DOCUMENT_ROOT']."/ok/public_html/model/DLL/Repositories/telephoneBookRepository.php";
require_once $_SERVER['DOCUMENT_ROOT'] . '/ok/public_html/model/DLL/Entities/partnerCompanyEmploye.php';

class telephoneBookController {
    private $db;
    
    function __construct() {
        $this->db = new telephoneBookRepository();
    }

    

    public function getAll(){
        return $this->db->getAll();
    }
    
    public function create(){
        $partner = new partnerCompanyEmploye();
        if (!empty($_POST["Name"]) && !empty($_POST["FullName"]) && !empty($_POST["Telephone"]))
        {
            $partner->setName ($_POST["Name"] );
            $partner->setFullName ($_POST["FullName"] );
            $partner->setTelephone ($_POST["Telephone"] );
            return $this->db->create($partner);
        } else            die ("Error Creating");
    }
}
