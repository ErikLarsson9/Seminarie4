<?php
namespace View;
use\Controller;
use\SecurityUtility;
require ('Classes/Controller/Controller.php');
Controller\Controller::classLoader();
$controller = new Controller\Controller();
//$previousPage = $controller->getPreviousPage();

if(false == (SecurityUtility\Validator::validateStringPrintable($_POST['user'])
    && SecurityUtility\Validator::validateStringPrintable($_POST['comment']) &&
        SecurityUtility\Validator::validateStringPrintable($_POST['recipe']))){
    $message = "Invalid Client data!";


    }
else{
    $user = $_POST['user'];
    $comment = $_POST['comment'];
    $recipe = $_POST['recipe'];
    $message = $controller->addComment($user, $comment, $recipe);

}
//require ('resources/Views/statusPage.php');
if($recipe == 'pancakes'){
    $commentsData =$controller->getComments($recipe);
    require ('resources/Views/pancakesRecipePage.php');



}
else if($recipe == 'meatballs'){
    $commentsData =$controller->getComments($recipe);
    require ('resources/Views/meatballsRecipePage.php');


}

