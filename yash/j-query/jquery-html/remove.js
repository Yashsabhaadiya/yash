// $(document).ready(function(){
//     $(".remove").click(function(){
//         $("div").remove();
//     });
//     $(".empty").click(function(){
//         $("div").empty();
//     })
// });

// $(document).ready(function(){
//     $("button").click(function(){
//         $("div").detach();
//     });
// });

$(document).ready(function(){
    $("button").click(function(){
        alert($("div").scrollTop() + "px");
    });
});