// $(document).ready(function(){
//     $("#myInput").on("keyup", function(){
//         var text = $(this).val().toLowerCase();
//         $("#myTable tr").filter(function(){
//             $(this).toggle($(this).text().toLowerCase().indexOf(text) > -1);
//         });
//     });
// });

// $(document).ready(function(){
//     $("#myInput").on("keyup", function(){
//         var data = $(this).val().toLowerCase();
//         $("#myList li").filter(function(){
//             $(this).toggle($(this).text().toLowerCase().indexOf(data) > -1);
//         });
//     });
// });

$(document).ready(function(){
    $("#myInput").on("keyup", function(){
        var data = $(this).val().toLowerCase();
        $("#myDIV *").filter(function(){
            $(this).toggle($(this).text().toLowerCase().indexOf(data) > -1);
        });
    });
});