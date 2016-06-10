<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Соединяемся, выбираем базу данных
$link = mysql_connect('localhost', 'root', '')
    or die('Не удалось соединиться: ' . mysql_error());
@mysql_select_db("okdb", $link) or die("Не могу выбрать базу данных "); 

//Get records from database
$result = mysql_query("SELECT * FROM partnercompanyemployes;");
 
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
print json_encode($jTableResult);