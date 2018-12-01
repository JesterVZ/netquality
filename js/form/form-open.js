$(document).ready(function () {
    $('.contacts_up').on("click", function(){
        $('.overlay').show();
    });
    $('.popup-close').on("click", function(){
        $('.overlay').hide();
    });
});