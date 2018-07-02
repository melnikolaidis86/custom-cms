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

//Live search functionality
$('#search-query').keyup(function() {

    var txt = $(this).val();

    //Prevent form from submitting when hitting enter
    $('#search-form').keydown(function(event) {
    if(event.keyCode == 13) {
        event.preventDefault();
        return false;
    }
    });

    if(txt.trim() == '') {
    $.ajax({
        method: 'post',
        url: 'http://localhost/custom-cms/templates/modules/search.php',
        dataType: 'HTML',
        success: function (data) {

            $('#search-result').html(data);
        }
    });
    } else {
    $.ajax({
        method: 'post',
        url: 'http://localhost/custom-cms/templates/modules/search.php',
        data: { search : txt },
        dataType: 'HTML',
        success: function (data) {

            $('#search-result').html(data);
        }
    });
    }
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

