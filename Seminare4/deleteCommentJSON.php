<?php
namespace View;
use\Controller;
use\SecurityUtility;
require ('Classes/Controller/Controller.php');
Controller\Controller::classLoader();
$controller = new Controller\Controller();
$user = $_GET['user'];
$timeCreated = $_GET['timecreated'];
//echo json_encode($timeCreated);
$recipe = $_GET['recipe'];
$message = $controller->deleteComment($user, $timeCreated, $recipe);
echo json_encode($message);
