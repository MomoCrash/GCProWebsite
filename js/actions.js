clicked = false

$("#login").click(function() {
    if (!clicked) {
        $("login-content").css('visibility', "visible");
        $(".login-pan").css("height", "180px").css("width", "400px").css('visibility', "visible");
        $(".login-input").css("height", "20px").css("width", "200px").css('visibility', "visible");
        clicked = true;
    } else {
        $("login-content").css('visibility', "hidden");
        $(".login-input").css("height", "0px").css("width", "0px").css('visibility', "hidden");
        $(".login-pan").css("height", "0px").css("width", "0px").css('visibility', "hidden");
        clicked = false;
    }
});