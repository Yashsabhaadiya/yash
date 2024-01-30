$(document).ready(function(){
    // $(".container1").click(function(){
    //     $(".container2").slideDown("slow");
    // });

    // $(".container1").click(function(){
    //     $(".container2").slideUp("slow");
    // });

    $(".container1").click(function(){
        $(".container2").slideToggle(5000);
    });

    $(".btn").click(function(){
        $(".container2").stop();
    })
});