/*
 * Custom jquery functionality
*/

$('#newCategory').hide();

$("#selectCategory").change(function() {

    if($(this).val() == 'newCategory') {

        $('#newCategory').show();
        $('#newCategory').slideDown("slow");
    } else {
        
        $('#newCategory').slideUp("slow");
        $('#newCategory').hide();
    }
})
