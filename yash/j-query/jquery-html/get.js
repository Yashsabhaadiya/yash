$(document).ready(function () {
    //     $(".btntext").click(function(){
    //         alert($(".para").text());
    //     });
    //     $(".btnhtml").click(function(){
    //         alert($(".para").html());
    //     });
    //     $(".btnval").click(function(){
    //         alert($("#test").val());
    //     });
    //     $(".btnattr").click(function(){
    //         alert($("#w3s").attr("href"));
    //     })
    // });

    // $(document).ready(function(){
    //     $(".btntext").click(function(){
    //         $(".paragaraph").text("Hello World!");
    //     });
    //     $(".btnhtml").click(function(){
    //         $(".para").html("<b>Hello World!</b>");
    //     });
    //     $(".btnval").click(function(){
    //         $("#test").val("yash sabhadiya");
    //     });

    $(".btnparafirst").click(function () {
        $(".parafirst").text(function (i, origtxt) {
            return origtxt + " Hello World! (index " + i + ")";
        });
    });
    $(".btnparasecond").click(function () {
        $(".parasecond").text(function (i, origtxt) {
            return origtxt + "Hello World! (index " + i + ")";
        });
    });
});