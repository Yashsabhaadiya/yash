$(document).ready(function(){
    $("button").click(function(){
        $("p").hide("fast", function(){
            alert("this paragraph is already hidden");
        });
    });
});