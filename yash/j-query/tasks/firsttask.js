$(document).ready(function () {
    var changedValue = parseInt($("#value").val());
    $(".increase").click(function () {
        changedValue++;
        $("#value").val(changedValue);
    });
    $(".decrease").click(function () {
        if ($("#value").val() > 0) {
            changedValue--;
            $("#value").val(changedValue);
        };
    });
});