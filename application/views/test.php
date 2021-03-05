


$(document).ready(function (){    
    $("#adduserform").validate({
        rules: {
            name: "required"
        },
        messages: {
            name: "Please specify your name"
        }
    });
    
    $('#btn').click(function() {
        $("#form1").valid();
    });
});