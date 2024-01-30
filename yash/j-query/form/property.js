// $(document).ready(function(){
//     $(".btn").click(function(){
//         var property = $("div");
//         property.prop("color","#e7869e");
//         property.append("the color property is : " + property.prop("color") + " </br>");
//         property.removeProp("color");
//         property.append("the color property is : " + property.prop("color"));
//     });
// });

// bind function

// $(document).ready(function(){
//     $( "p" ).bind( "mouseenter mouseleave", function( event ) {  
//         $( this ).toggleClass( "container" );  
//       });  
// });

// $(document).ready(function () {
//   $("p").bind("click", function (event) {
//     var str = "(" + event.pageX + ", " + event.pageY + ")"
//     $("div").text("this is a single click : " + str);
//   });
// });

// unbind function

$(document).ready(function(){
  $("p").bind("mouseover", function(){
    $(this).css("background-color", "red");
  });
  $("button").click(function(){
    $("p").unbind("mouseover");
  });
});
