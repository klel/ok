<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'].'/ok/public_html/model/DLL/mySqlConnection.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ok/public_html/model/DLL/defaultMySqlConnectParams.php';

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
}
