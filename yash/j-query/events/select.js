// $(document).ready(function(){
//     $(":input").select(function(){
//         $("div").text("some text was selected").show().fadeOut(2000);
//     });
// });

// change event

$(document).ready(function(){
    $("select").change(function(){
        $(".loc").text("you seleccted : " + $(this).val());
    });
});