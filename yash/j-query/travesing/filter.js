// $(document).ready(function(){
//     $("div").first().css("background-color", "yellow");
// });

// $(document).ready(function(){
//     $("div").last().css("background-color", "yellow");
// });

// $(document).ready(function(){
//     $("div").eq(1).css("background-color", "red");
// });

// $(document).ready(function(){
//     $("p").filter(".interpara").css({"background-color": "blue", "color": "white"});
// });

$(document).ready(function(){
    $("p").not(".interpara").css({"background-color": "blue", "color": "white"});
});