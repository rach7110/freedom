$(document).ready(function() {
    
    // HIDE OR SHOW STUDENTS WHEN A COLOR IS CHECKED:
    show_students();  //shown by default
    $('#colors input').change(function() {
        show_students();
    });

});

    // SHOW THE STUDENTS WHOSE FAVORITE COLOR IS CHECKED:
    function show_students() {
        $('.student-colors').hide();

        $('input:checked').each(function() {
            var color = $(this).val();
            $('.student-colors.' + color ).show();
        });
    } 
