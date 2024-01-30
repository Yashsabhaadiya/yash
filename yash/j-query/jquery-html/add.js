// $(document).ready(function(){

    // $(".append").click(function(){
    //     $(".plast").append(" this is some text ");
    // });
    // $(".prepend").click(function(){
    //     $(".pfirst").prepend(" this is some text ");
    // });
// });

// function appendtext(){
//     var txt1 = "<p>text</p>";
//     var txt2 = $("<p></p>").text("text");
//     var txt3 = document.createElement("p");
//     txt3.innerHTML = "text";
//     $("body").append(txt1, txt2, txt3);
// }

// $(document).ready(function(){
//     $(".before").click(function(){
//         $("img").before("<b>before</b>")
//     });
//     $(".after").click(function(){
//         $("img").after("<i>after</i>")
//     });

// });

// function after() {
//     var txt1 = "<p>after</p>";
//     var txt2 = $("<p></p>").text("after");
//     var txt3 = document.createElement("b");
//     txt3.innerHTML = "after";
//     $("p").after(txt1, txt2, txt3);
// }

// $(document).ready(function(){
//     $("button").click(function(){
//         $("<span><b>this is another para</b></span>").insertAfter("p");
//     });
// });

// $(document).ready(function(){
//     $("button").click(function(){
//         $("<span><b>this is another para</b></span>").appendTo("p");
//     });
// });

$(document).ready(function(){
    $("button").click(function(){
        $("p").clone().appendTo("body");
    })
})