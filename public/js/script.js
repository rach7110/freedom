$(document).ready(function() {
// SCROLL TO TOP BUTTON:

  $(window).scroll(function() {
      if ($(this).scrollTop()) {
          $('.scroll-top').fadeIn();
      } else {
          $('.scroll-top').fadeOut();
      }
  });

  $(".scroll-top").click(function() {
    $("html, body").animate({scrollTop: 0}, 1000);
  });




  /***************************************/
  // PROJECT-01:
  /***************************************/
    // COUNT THE CHECKBOXES AND MAKE EQUAL NUMBER OF COLUMNS
    make_columns();

    //SHOW STUDENTS WHEN THEIR FAVORITE COLOR IS CHECKED:
    show_students();

    $('#color-checkboxes input').change(function() {
        make_columns();
        show_students();
    });
    /***************************************/
    // PROJECT-02
    /***************************************/
    //if this cookie is set, don't show the cookies notification div'
    if(readCookie('inform_about_cookie_use')) {
        $('#cookies').hide();
    }
    console.log(readCookie('inform_about_cookie_use'));

    // ANIMATE COOKIE NOTIFICATION WHEN USER HOVERS OVER IT:
    var confirm_image = $('#confirm img');

    function mouseIn(bigWidth) {
        $(confirm_image).css('width', '22px');
        $('#confirm').css('cursor', 'pointer');
    }
    function mouseOut(smallWidth) {
        $(confirm_image).css('width', '18px');
    }

    $('#confirm').hover(mouseIn, mouseOut)

    //HIDE NOTIFICATION WHEN USER CLICKS 'OKAY' AND CREATE COOKIE
    $('#cookies #confirm').click(function () {
        $('#cookies').hide();
        createCookie('inform_about_cookie_use', true, 365);
    });

    //DELTE COOKIE WHEN USER CLICKS 'RESET'
    $('#reset-cookie').click(function() {
      event.preventDefault();
      eraseCookie('inform_about_cookie_use');
      location.reload(true);
    });

});

/***************************************/
// PROJECT-01:
/***************************************/
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

/***************************************/
// PROJECT-02
/***************************************/
//CREATE, READ, & DELETE COOKIES:
function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name,"",-1);
}
