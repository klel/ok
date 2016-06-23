<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'].'/ok/public_html/model/DLL/mySqlConnection.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ok/public_html/model/DLL/defaultMySqlConnectParams.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ok/public_html/model/DLL/Entities/partnerCompanyEmploye.php';


        $params = new defaultMySqlConnectionParams();
        $connection = new mySqlConnection($params);
        
        $partner = new partnerCompanyEmploye();
        print("created partner");
        print ($_POST["Name"]);
        var_dump(json_decode($_POST['Name']));
        if (!empty($_POST["Name"]) && !empty($_POST["FullName"]) && !empty($_POST["Telephone"]))
        {
            print($partner->setName ($_POST["Name"] ));
            $partner->setFullName ($_POST["FullName"] );
            $partner->setTelephone ($_POST["Telephone"] );
        }
        
        $connection->connect();
        //print_r($connection);
        $result = mysql_query("INSERT INTO partnercompanyemployes(Name, FullName, Telephone) VALUES(UUID(),'" . $partner->getName() . "', '" . $partner->getFullName() ."',".$partner->getTelephone().");");
        print_r('after query');
        //Get last inserted record (to return to jTable)
        $result = mysql_query("SELECT * FROM partnercompanyemployes WHERE Id = LAST_INSERT_ID();");
        $connection->disconnect();
        $row = mysql_fetch_array($result);

        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Record'] = $row;
        print(json_encode($jTableResult));