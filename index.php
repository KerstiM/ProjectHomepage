<?php

ini_set("display_errors", 1);
require_once('functions.php');

$page="main";

if (isset($_GET['page']) && $_GET['page']!=""){
	$page=htmlspecialchars($_GET['page']);
}

include_once('head.php');

switch($page){
	case "main":
		kuva_main();
	break;
	case "events":
		kuva_events();
	break;
	case "workshop":
		kuva_workshop();
	break;
	case "contact":
		kuva_contact();
	break;
	case "cv":
		kuva_cv();
	break;
	case "booking":
		kuva_booking();
	break;
	case "dgkoolitus":
		kuva_dgkoolitus();
	break;
	case "dgskype":
		kuva_dgskype();
	break;
	case "graafika":
		kuva_graafika();
	break;

	default:
		include_once("views/main.php");
	break;
}

include_once("foot.php");

?>
