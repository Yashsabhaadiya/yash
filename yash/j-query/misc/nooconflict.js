// $.noConflict();
// jQuery(document).ready(function(){
//     jQuery(".btn").click(function(){
//         jQuery("p").text("jQuery is working");
//     });
// });

// var jq = $.noConflict();
// jq(document).ready(function(){
//     jq(".btn").click(function(){
//         jq("p").text("jquey is still working");
//     });
// });

$.noConflict();
jQuery(document).ready(function($){
    $(".btn").click(function(){
        $("p").text("$ is working in jQuery");
    });
});

