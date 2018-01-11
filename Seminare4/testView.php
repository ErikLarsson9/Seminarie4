<?php
namespace View;
use\Controller;
require ('Classes/Controller/Controller.php');
Controller\Controller::classLoader();
$controller = new Controller\Controller();
$controller->setPreviousPage();
$recipe = 'meatballs';
$commentsData =$controller->getComments($recipe);


//foreach ($commentsData as $value){
//    echo $value->username;
//}
echo json_encode($commentsData);
//echo json_encode($commentsData,JSON_FORCE_OBJECT);

$message = "This is a message!";

?>




<!DOCTYPE html>
<html>
<head>

    <link rel = "stylesheet" type = "text/css" href = "http://localhost/~Likecoke/Seminare4/resources/css/reset.css"/>
    <link rel = "stylesheet" type = "text/css" href = "http://localhost/~Likecoke/Seminare4/resources/css/main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "http://localhost/~Likecoke/Seminare4/resources/css/recipesAndIndex.css"/>
    <meta charset="UTF-8">



</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.2/knockout-min.js">
</script>
<p data-bind="text: commentUser"> kl </p>
<p data-bind="text: commentText" >kl </p>
<script src="http://localhost/~Likecoke/Seminare4/resources/JavaScript/popup.js">
</script>

<script src="http://localhost/~Likecoke/Seminare4/resources/JavaScript/viewModel.js"/>
<script>
    popup("<?php echo $message;  ?>");
</script>
<?php
//$commentsData =$controller->getComments($recipe);
//echo "json_encode($commentsData)";

?>
</body>
</html>