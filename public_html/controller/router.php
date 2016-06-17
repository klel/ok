<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'telephoneBook/telephoneBookController.php';
$controller;
//$method;

switch($_GET['controller'])
{ 
	case "telephoneBookController" :
		$controller = new telephoneBookController();
            
                switch ($_GET['method'])
                {
                        case "getAll" : 
                            print($controller->getAll());
                            break;
                        default : 
                            print 'ERROR method';
                        break;
                }
		break;

	default : 
            print 'ERROR contler';
	break;
}

