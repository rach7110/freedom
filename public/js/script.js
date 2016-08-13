$(document).ready(function() {

    // COUNT THE CHECKBOXES AND MAKE EQUAL NUMBER OF COLUMNS
    make_columns();

    //SHOW STUDENTS WHEN THEIR FAVORITE COLOR IS CHECKED:
    show_students();

    $('#color-checkboxes input').change(function() {
        make_columns();
        show_students();
    });

});

// VARY COLUMN WIDTHS AND COLORS IN BANNER IMAGE:
function make_columns() {
    $('#color-swatch').empty();  //remove existing columns first

    // COUNT NUMBER OF CHECKBOXES SELECTED FOR COLUMN WIDTH
    var count_colors = $('#color-checkboxes input:checked').length;

    $('#color-checkboxes input:checked').each(function(){
        // NEW COLUMN
        var column = $('<div id="color-' + count_colors + '-column" class="color-block">');
        $('#color-swatch').append(column);
        // CHECKBOX COLOR
        var color = $(this).val();
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
