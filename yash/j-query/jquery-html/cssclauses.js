$(document).ready(function(){
    // $(".addbtn").click(function(){
    //     $("h1, p, span").addClass("imp size");
    //     // $("h1").addClass("size");
    // });

    // $(".removebtn").click(function(){
    //     $("h1, p, span").removeClass("imp size");
    // });

    // $(".togglebtn").click(function(){
    //     $("h1,p,span").toggleClass("imp size");
    // });

    // $(".colorbtn").click(function(){
    //     $("h1,p,span").css({"background-color": "red", "color": "white"});
    // })

    $("button").click(function(){
        alert($("div").hasClass("para"));
    })

});