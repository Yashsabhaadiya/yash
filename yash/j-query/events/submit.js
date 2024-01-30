$(document).ready(function(){
    $("form").submit(function(event) {  
        if ($("input:first").val() === "javatpoint") {  
          $("span").text("Submitted Successfully.").show();  
          return;  
        }  
        $("span").text("Not valid!").show().fadeOut(2000);  
        event.preventDefault();  
      }); 
});