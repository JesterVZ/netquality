$(document).ready(function () {
    $('.contacts_up').on("click", function(){
        $('.overlay').fadeIn(500, function(){

        });
    });
    $('.popup-close').on("click", function(){
        $('.overlay').fadeOut(500, function(){

        });;
    });
});