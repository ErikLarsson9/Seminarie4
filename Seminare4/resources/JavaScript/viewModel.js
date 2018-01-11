function deleteCommentFromServer(user, recipe, timeCreated) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(JSON.parse(this.responseText));
        }


    };
    xmlhttp.open("GET", "http://localhost/~Likecoke/Seminare4/deleteCommentJSON.php?user=" + user +"&recipe=" + recipe +  "&timecreated=" + timeCreated, true);
    xmlhttp.send();

};

function addCommentsToServer(user, recipe, comment, timeCreated) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(JSON.parse(this.responseText));
        }


    };
    xmlhttp.open("GET", "http://localhost/~Likecoke/Seminare4/commentJSON.php?user=" + user +"&recipe=" + recipe +  "&comment=" + comment + "&timecreated=" + timeCreated, true);
    xmlhttp.send();


};


function cookieHandler(cookieName){
    try{
        if(cookieName == ""){
            throw "empty search term";
        }
        var cookiesArray = document.cookie.split(';');
        for( var i = 0; i< cookiesArray.length; i++){
            cookiesArray[i] = cookiesArray[i].trim();
            //alert(cookiesArray[i]);
            //Search for in the beginning of string
            var searchCookie = cookiesArray[i].search("^" + cookieName);
            //alert(cookieName);
            //alert(searchCookie);
            if(searchCookie == 0){
                //alert(cookiesArray[i]);
                //+1 to get rid of equals sign
                //alert(cookiesArray[i].substring(cookieName.length+1));
                return cookiesArray[i].substring(cookieName.length+1);
            }

        }
        return null;
    }
    catch(error){
        alert(error);

    }


};

function getComments(recipe, callback, callbackObject) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //alert(JSON.parse(this.responseText)[1].username);
            var cArray = JSON.parse(this.responseText);
            //alert(cArray[1].username);
            callback.call(callbackObject, cArray);

            //return this.responseText;

            //return cArray;
        }


    };

    xmlhttp.open("GET", "http://localhost/~Likecoke/Seminare4/commentsJSON.php?recipe=" + recipe, true);
    xmlhttp.send();
    //alert(JSON.parse(this.responseText)[1].username);

}


function ViewModel(recipe){
    var self = this;
    self.recipe = recipe;
    self.commentArray = ko.observableArray();
    self.cookie = ko.observable(cookieHandler('user'));
    self.newComment = ko.observable();
    //alert(self.commentArray()[1].username);
    // self.fillArray = function(){
    //     var commentArray = JSON.parse(this.responseText);
    //     var comment
    // }
    self.commentAs = ko.computed(function () {
        return 'Comment as: ' + self.cookie();

    });


    self.deleteComment = function (comment) {
        //alert(comment.username);
        // alert(comment.id);
        //alert(comment.text);
        self.commentArray.remove(comment);
        deleteCommentFromServer(comment.username, self.recipe, comment.timecreated);
    };
    self.addComment = function () {
        //self.newComment();
        //var id = self.commentArray().length;

        //var id = self.commentArray()[self.commentArray().length-1].id;

        //alert(id);
        //alert(self.commentArray()[self.commentArray])

        //self.commentArray.push({"id": id ,"username": self.cookie(),"text": self.newComment() });
        var timeCreated = Date.now();
        self.commentArray.push({"timecreated": timeCreated, "username": self.cookie(),"text": self.newComment() });
        addCommentsToServer(self.cookie(), self.recipe, self.newComment(), timeCreated);
        self.newComment("");

    };

    self.loadCommentsAndApplyBindings = function () {
        getComments(self.recipe, function (array){
            //alert('fail');
            //alert(array[1].username);
            //alert(this.recipe);
            this.commentArray =  ko.observableArray(array);
            //alert(this.commentArray()[1].username);
            ko.applyBindings(this);

        }, self);
        //var commentsString = getComments(self.recipe);
        //alert(commentsString);
        //var cArray = JSON.parse(getComments(self.recipe));
        //var cArray = getComments(self.recipe);
        //alert(cArray[1].username);
        //alert(self.commentArray);
        //self.commentArray = ko.observableArray(cArray);
        //alert(self.commentArray()[1].username);


    };

}



function createViewModel(recipe) {

            var viewModel = new ViewModel(recipe);
            viewModel.loadCommentsAndApplyBindings();
            //alert(Date.now());
            //ko.applyBindings(viewModel);
            //alert('done');
}

