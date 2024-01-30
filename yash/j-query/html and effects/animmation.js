$(document).ready(function () {
    // $(".btn").click(function () {
        // $(".container").animate({
        //     left: '250px',
        //     opacity: '0.5',
        //     height: '150px',
        //     width: '150px'
        // });

    // $(".btn").click(function () {
    //     $(".container").animate({
    //         left: '250px',
    //         height: '+=150px',
    //         width: '+=150px'
    //     });
    // });

    // $(".btn").click(function () {
    //     $(".container").animate({
    //         height: 'toggle' //there are three properties(show,hidenad none)
    //     });
    // });

    // $(".btn").click(function(){
    //     var div = $("div");
    //     div.animate({height: '200px', opacity: '0.4'}, "slow");
    //     div.animate({width: '200px', opacity: '0.8'}, "slow");
    //     div.animate({height: '100px', opacity: '0.4'}, "slow");
    //     div.animate({width: '100px', opacity: '0.8'}, "slow");
    // });

    $(".btn").click(function() {
        var div = $("div");
        div.animate({left : '200px', width: '300px', height: '150px'}, "fast");
        div.animate({fontSize : '100px'}, "slow");
    });
});