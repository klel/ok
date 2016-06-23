<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of partnerCompanyEmploye
 *
 * @author natken
 */
class partnerCompanyEmploye {
    private $name;
    private $fullName;
    private $telephone;
    
    function getName() {
        return $this->name;
    }

    function getFullName() {
        return $this->fullName;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setFullName($fullName) {
        $this->fullName = $fullName;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }


}
