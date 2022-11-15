$(document).ready(function() {


    $("#form").on("submit", function(e) {
        e.preventDefault();
        let data = new FormData(this);
        // data.append('formdata',$("#form")[0]);
        console.log(data);
        $.ajax({
            url: "function.php",
            type: "POST",
            data: data,
            cache:false,
            contentType:false,
            processData:false,
            success: function(data) {
              console.log(data);
            }
        });

    });
});