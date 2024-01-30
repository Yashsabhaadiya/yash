$(document).ready(function() {
    // $("button").click(function(){
    //     alert("you have clicked onto the button");
    // });
    // $("#btn").mousedown(function(){
    //     alert("by!you have clicked this button");
    // });
    
    // $("input").focus(function() {
    //     $(this).css("background-color", "blue", );
    // });
    // $("input").focus(function() {
    //     $(this).css( "color","white");
    // });
    // $("input").blur(function() {
    //     $(this).css("background-color", "red");
    // });    

    // $("#para").hover(function(){
    //     alert("you have entered in p1");
    // },
    // function(){
    //     alert("by!, you entered once in p1");
    // }
    // )

    // $("p").on({
    //     mouseenter : function(){
    //         $(this).css("background-color", "lightgray");
    //     },
    //     mouseleave : function(){
    //         $(this).css("background-color", "yellow");
    //     },
    //     click : function(){
    //         $(this).css("background-color", "green");
    //     }
    // });

    // $("button.hide").click(function(){
    //     $("p").hide(1000);
    // });
    // $("button.show").click(function(){
    //     $("p").show(1000);
    // })

    $("button").click(function(){
        $("p").toggle("fast");
    });
});

