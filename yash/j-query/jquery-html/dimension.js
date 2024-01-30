// $(document).ready(function(){
//     $(".btn").click(function(){
//         var txt = " ";
//         txt += "Height is " + $(".container").height() + "</br>";
//         txt += "width is" + $(".container").width() + "</br>";
        
//         txt += "outerHeight is " + $(".container").outerHeight() + "</br>";
//         txt += "outerwidth is" + $(".container").outerWidth() + "</br>";
        
//         txt += "innerHeight is " + $(".container").innerHeight() + "</br>";
//         txt += "innerwidth is" + $(".container").innerWidth();

//         $(".container").html(txt).css("padding", "20px");
//     });
// });

// $(document).ready(function(){  
//     $("button").click(function(){  
//         var x = $("div").offset();  
//         alert("Top: " + x.top + " Left: " + x.left);  
//     });  
// });

$(document).ready(function(){  
    $("button").click(function(){  
        var x = $("p").position();  
        alert("Top: " + x.top + " Left: " + x.left);  
    });  
});