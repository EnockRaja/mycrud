$(document).ready(function(){
    $("#user_ic").click(function() {
        $("#add_ic").toggle();
        $("#my_ic").toggle();
        $("#form").hide();

    });
    $("#add_ic").click(function() {
        $("#form").show();
    });
    $("#my_ic").click(function() {
        $("#form").hide();
        $("#projector").show();
    });
});