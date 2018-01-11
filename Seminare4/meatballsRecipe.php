<?php
namespace View;
use\Controller;
require ('Classes/Controller/Controller.php');
Controller\Controller::classLoader();
$controller = new Controller\Controller();
$controller->setPreviousPage();
$recipe = 'meatballs';
//$commentsData =$controller->getComments($recipe);
//echo json_encode($commentsData);


require ('resources/Views/meatballsRecipePage.php');

