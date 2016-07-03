$(document).ready(function() {
    
    // COUNT THE CHECKBOXES AND MAKE EQUAL NUMBER OF COLUMNS 
    make_columns();
    
    // HIDE OR SHOW STUDENTS WHEN A COLOR IS CHECKED:
    show_students();  //shown by default

    $('#colors input').change(function() {
        make_columns();
        show_students();
    });

});

// COUNT NUMBER OF CHECKBOXES CHECKED AND MAKE EQUAL NUMBER OF COLUMNS IN BANNER IMAGE:
function make_columns() {
    $('#color-swatch').empty();

    var count_colors = $('#color-checkboxes input:checked').length;
    $('#color-checkboxes input:checked').each(function(){
        var color = $(this).val();
        var column = $('<div id="color-' + count_colors + '-column" class="color-block">');
        
        $('#color-swatch').append(column);
        $(column).css('background-color', color);

    });
}

// SHOW THE STUDENTS WHOSE FAVORITE COLOR IS CHECKED:
function show_students() {
    $('.student').hide();

    $('input:checked').each(function() {
        var color = $(this).val();
        console.log(color);
        $('.student.' + color ).show();
    });
} 
