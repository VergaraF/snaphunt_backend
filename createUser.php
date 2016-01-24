<?php
include ('dataBaseHandler.php');
$handler = new dataBaseHandler();
$handler->connectToDB();

$flag = $_GET["flag"];

/*Flags:
	1 : create user
	2 : create tresure
	3 : create tersure verification

*/

switch ($flag) {
    case 1:
        $password = $_GET["password"];
		$email    = $_GET["email"];
		$handler->insertUser($email, $password);
        break;
    case 2:
        echo "flag 2";
        break;
    case 3:
        echo "flag 3";
        break;
	default:
        echo "No flag was sent, therefore no action is taken.";
  } 





?>