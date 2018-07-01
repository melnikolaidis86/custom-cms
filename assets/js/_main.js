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

