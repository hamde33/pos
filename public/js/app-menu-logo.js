window.addEventListener('DOMContentLoaded', function () {
    (function ($) {
        //for small devices if menu is already collapsed
        if ($('body').hasClass('menu-collapsed')) { //if menu is collapsed
            // console.log($('body').attr('class'))
            $('.brand-logo').css('width', '2.5rem') //resize logo
        }
        $('.menu-toggle').mouseleave(function () {  //to-check after click is happened
            //Do stuff here
            if ($('body').hasClass('menu-collapsed')) { //if menu is collapsed
                // console.log($('body').attr('class'))
                $('.brand-logo').css('width', '2.5rem') //resize logo
            }else{
                $('.brand-logo').css('width', '7rem')   //else return default size
            }
        });
    })(jQuery);
});
