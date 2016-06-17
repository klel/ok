<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '/interfaces/iConnection.php';
require_once 'defaultMySqlConnectParams.php';

class mySqlConnection implements iConnection {
    private  $link;
    private  $connectionParams;
    
    //Todo: Check type of $connectionParams 
    function __construct($connectionParams) {
        $this->connectionParams = $connectionParams;
    }

    function getLink() {
        if (!isset($this->link)) return 'Error!';
        else return $this->link;
    }

    function getConnectionParams() {
        return $this->connectionParams;
    }

    function setLink($link) {
        $this->link = $link;
    }

    function setConnectionParams($connectionParams) {
        $this->connectionParams = $connectionParams;
    } 

    public function connect() {
                // Соединяемся, выбираем базу данных    
        $this->link = mysql_connect($this->connectionParams->getDb_host(), 
                                    $this->connectionParams->getDb_login(), 
                                    $this->connectionParams->getDb_pwd())
            or die('Не удалось соединиться: ' . mysql_error());
        @mysql_select_db($this->connectionParams->getDb_name(), $this->link) or die("Не могу выбрать базу данных "); 
    }

    public function disconnect() {
        if(isset($this->link)) mysql_close($this->link);
        else mysql_close();    
    }

}

