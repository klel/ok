<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'].'/ok/public_html/model/DLL/mySqlConnection.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ok/public_html/model/DLL/defaultMySqlConnectParams.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ok/public_html/model/DLL/Entities/partnerCompanyEmploye.php';

class telephoneBookRepository {
    private $connection;
    
    public function __construct() {
        $params = new defaultMySqlConnectionParams();
        $this->connection = new mySqlConnection($params);
    }
    
    
    public function getAll (){
        $this->connection->connect();
        $result = @mysql_query("SELECT * FROM partnercompanyemployes;");
         $this->connection->disconnect();
        //Add all records to an array
        $rows = array();
        while($row = mysql_fetch_array($result))
        {
            $rows[] = $row;
        }

        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Records'] = $rows;
        
        return json_encode($jTableResult);
       
    }
    
    public function create ($partnerCompaneEmpl) {
        $this->connection->connect();
        $result = mysql_query("INSERT INTO partnercompanyemployes(Name, FullName, Telephone) VALUES(UUID(),'" . $partnerCompaneEmpl->getName() . "', '" . $partnerCompaneEmpl->getFullName() ."',".$partnerCompaneEmpl->getTelephone().");");
        //Get last inserted record (to return to jTable)
        $result = mysql_query("SELECT * FROM partnercompanyemployes WHERE Id = LAST_INSERT_ID();");
        $this->connection->disconnect();
        $row = mysql_fetch_array($result);

        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Record'] = $row;
        return json_encode($jTableResult);
    }
}
