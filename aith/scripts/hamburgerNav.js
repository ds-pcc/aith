$(document).ready(function() {
    
    
    $(".cross").hide();
    
    $(".menu").hide();
    
    $(".hamburger").show();
    

   $(".hamburger").on("click", function() {

    $(".menu").slideToggle();

    $(".hamburger").hide();

    $(".cross").show();

});


$(".cross").on("click", function() {

    $(".menu").slideToggle();

    $(".cross").hide();

    $(".hamburger").show();

});

});
