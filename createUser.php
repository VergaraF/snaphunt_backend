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
        $userid = $_GET["userid"];
        $found_by_user_id = $_GET["foundby"];
        $pictureURL = $_GET["url"];
        $tags = $_GET["tags"];
        $lati = $_GET["lati"];
        $longi = $_GET["longi"];
        $locality = $_GET["locality"];

        $handler->insertTreasure($userid, $found_by_user_id, $pictureURL, $tags, $lati, $longi, $locality);
        break;

    case 3:
        echo "flag 3";
        break;
	default:
        echo "No flag was sent, therefore no action is taken.";
  } 





?>