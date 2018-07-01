/*
 * Custom jquery functionality
*/

//Hide input field for new category
$('#newCategory').hide();

$("#selectCategory").change(function() {

    if($(this).val() == 'newCategory') {

        $('#newCategory').show();
        $('#newCategory').slideDown("slow");
    } else {
        
        $('#newCategory').slideUp("slow");
        $('#newCategory').hide();
    }
});

//Logout functionality
$("#logout").click(function() {

    var logout = true;

    $.ajax({
        url: "http://localhost/custom-cms/logout.php",
        type: "post",
        data: {logout : logout},
        success: function() {

            location.reload();
        }
    })
});

//Delete topic functionality
$("#deleteTopic").click(function() {

    var topicId = $("#topicId").val();
    var userId = $("#userId").val();
    var deleteTopic = true;

    $.ajax({
        url: "http://localhost/custom-cms/delete.php",
        type: "post",
        data: {deleteTopic : deleteTopic, topicId : topicId, userId : userId},
        success: function() {

            window.location.replace("http://localhost/custom-cms/");
        }
    })
});

//Update comment functionality
$("#editComment").click(function() {

    var commentId = $("#commentId").val();
    var commentText = $("#commentText").val();
    var editComment = true;

    $.ajax({
        url: "http://localhost/custom-cms/comment.php",
        type: "post",
        data: {editComment : editComment, commentId : commentId, commentText : commentText},
        success: function() {

            location.reload();
        }
    })
});

//Delete comment functionality
$("#deleteComment").click(function() {

    var commentId = $("#commentId").val();
    var deleteComment = true;

    $.ajax({
        url: "http://localhost/custom-cms/comment.php",
        type: "post",
        data: {deleteComment : deleteComment, commentId : commentId},
        success: function() {

            location.reload();
        }
    })
});

