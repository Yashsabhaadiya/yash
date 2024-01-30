// $(document).ready(function () {

//         $(".btn1").click(function () {
//             $(".para1").toggle();
//             $(".para2, .para3, .para4").hide();
//         });
//         $(".btn2").click(function () {
//             $(".para2").toggle();
//             $(".para1, .para3, .para4").hide();
//             console.log("hhhj")
//         });

//         $(".btn3").click(function () {
//             $(".para3").toggle();
//             $(".para2, .para1, .para4").hide();
//         });

//         $(".btn4").click(function () {
//             $(".para4").toggle();
//             $(".para2, .para3, .para1").hide();
//         });

// });

$(document).ready(function(){
    $(".btn").click(function(){
        $(this).siblings(".para").toggle();
        $(this).parent().siblings().find(".para").hide();
    });
});