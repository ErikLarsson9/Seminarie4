<?php
namespace View;
use\Controller;
use\SecurityUtility;
require ('Classes/Controller/Controller.php');
Controller\Controller::classLoader();
$controller = new Controller\Controller();


$recipe = $_GET['recipe'];
//$recipe = "meatballs";
$commentsData =$controller->getComments($recipe);
echo json_encode($commentsData);

//echo $commentsData;

