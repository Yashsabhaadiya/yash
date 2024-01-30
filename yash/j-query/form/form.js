// $(document).ready(function(){  
//     $("button").click(function(){  
//         $("div").text($("form").serialize());  
//     });  
// });

$(document).ready(function(){
    $(".btn").click(function(){
        var value = $("form").serializeArray();
        $.each(value, function(i, field){
            $("#results").append(field.name + " " + field.value + " ");
        });
    });
});