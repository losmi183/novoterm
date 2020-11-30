$(document).ready(function() {
    
    // Turn on fixed navbar at scrollY 200
    $(window).on('scroll', function (e) {
        $('nav')[$(window).scrollTop() >= 130 ? 'addClass' : 'removeClass']('fixed-top');
    });



    // Show prikazi on hover
    // $('.product-image2').hover(function() {
    //     alert('a');
    // });

});