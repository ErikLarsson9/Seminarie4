

function singlecomment(user, comment) {
    var self = this;
    //self.user = user;
    //self.comment = comment;

}







function CommentViewModel(array){
//function CommentViewModel(data1){
    var self = this;
    //self.commentUser = ko.observable(commentUser);
    //self.commentText = ko.observable(commentText);
    //self.commentArray = [];
    //self.commentUser = ko.observable(data1);
    //self.commentText = ko.observable("lol");
    self.commentArray = ko.observable(array);



    // for (i = 0; i < array.length; i++) {
    //     text += "The number is " + i + "<br>";
    // }


}


    //ko.applyBindings(new CommentViewModel(data));
//var commentViewModel = new CommentViewModel("text1");

// var commentViewModel = new CommentViewModel(array);
// ko.applyBindings(commentViewModel);

//ko.applyBindings(commentViewModel, document.getElementById("commentsContainer"));