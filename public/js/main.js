jQuery(document).ready(function($) {

    /*======= Skillset *=======*/
    $('.level-bar-inner').css('width', '0');

    $(window).on('load', function() {

        // animate skills progress bar on page load
        $('.level-bar-inner').each(function() {

            var itemWidth = $(this).data('level');

            $(this).animate({
                width: itemWidth
            }, 800);

        });

    });



});
