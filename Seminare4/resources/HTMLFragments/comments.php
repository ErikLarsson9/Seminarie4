<script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.2/knockout-debug.js">
</script>

<h3 class = "reference">  Comments </h3>
<div id ="commentsContainer" class="commentsContainer" data-bind="foreach: { data: commentArray, as: 'comment'}" >
<!--<div id ="commentsContainer" class="commentsContainer" data-bind="foreach: { data: cArray, as: 'comment'}" >-->
    <div class="singleComment">
        <aside class="comments">

            <p id ="usernameContainer" data-bind="text: comment.username"> kl </p>
           </aside>
        <div class="comments">

            <p data-bind="text: comment.text" >kl </p>
            <!-- ko if: $parent.cookie() === comment.username -->
            <button type="button" data-bind="click: $parent.deleteComment">Delete Comment</button>
            <!-- /ko -->
<!--            <script>-->
<!--                //if(cookieHandler("user") == document.getElementById(usernameContainer)){-->
<!--                    var button = document.createElement("BUTTON");        // Create a <button> element-->
<!--                    var buttonTextNode = document.createTextNode("Delete Comment");       // Create a text node-->
<!--                    button.appendChild(buttonTextNode);-->
<!--                    button.onclick = "";-->
<!--                    var myElement = document.getElementById("commentsContainer");-->
<!--                    myElement.appendChild(button);-->
<!--                //}-->
<!---->
<!--            </script>-->

<!--            <button type="button" onclick="">Delete Comment</button>-->
<!--            <script> if alert(cookieHandler("user")); </script>-->


<!--            <p data-bind="text: $parent.cookie" >      fhfhfh      </p>-->
        </div>
    </div>
</div>

<!-- ko if: cookie() != null  -->
    <div data-bind="text: commentAs" >kl </div>
<form data-bind="submit: addComment">
    <input data-bind="value: newComment"  />
    <button type="submit" >Post Comment</button>
</form>
<!-- /ko -->





<script src="http://localhost/~Likecoke/Seminare4/resources/JavaScript/viewModel.js">
</script>
<script src="http://localhost/~Likecoke/Seminare4/resources/JavaScript/knockout.mapping-latest.js">
</script>
<script>

    var recipe = "<?php echo $recipe; ?>";
    createViewModel(recipe);

</script>
<script src="http://localhost/~Likecoke/Seminare4/resources/JavaScript/jquery-3.2.1.js">
</script>
<script>
//    jQuery.getJSON( "http://localhost/~Likecoke/Seminare4/commentJSON.php", { recipe: "<?php //echo $recipe; ?>//" }, function(data){
//        var commentViewModel =  ko.mapping.fromJS(data);
//        ko.applyBindings(commentViewModel);
//
//    });

</script>









