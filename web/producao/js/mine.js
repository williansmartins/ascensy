$(function(){
	$("#cadastre").click(function(){
		var email = $("#email").val();
    
        $.ajax({
            url: "send.php",
            type: "POST",
            data: {
                email: email
            },
            cache: false,
            success: function() {
                // Success message
                $('.contact-alert').html("<div class='alert alert-success'>");
                $('.contact-alert > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'><i class='fa fa-times'></i></button><strong>Mensagem enviada com sucesso.</strong></div>");
                //clear all fields
                $("#email").val("");
            },
            error: function() {
                // Fail message
                $('.contact-alert').html("<div class='alert alert-danger'>");
                $('.contact-alert > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'><i class='fa fa-times'></i></button><strong>Ixi, acho que ocorreu um erro no servidor. Por favor, tente mais tarde.</strong></div>");
                //clear all fields
            },
        })
	});
});