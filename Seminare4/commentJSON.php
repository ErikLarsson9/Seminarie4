<?php
namespace View;
use\Controller;
use\SecurityUtility;
require ('Classes/Controller/Controller.php');
Controller\Controller::classLoader();
$controller = new Controller\Controller();

$user = $_GET['user'];
$comment = $_GET['comment'];
$recipe = $_GET['recipe'];
$timeCreated = $_GET['timecreated'];
$message = $controller->addComment($user, $comment, $recipe, $timeCreated);
echo json_encode($message);