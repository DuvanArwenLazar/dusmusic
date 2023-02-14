$(document).ready(function(){
    $('#register_form').submit(function(e) {
        const data = {
            action: 'prepare_registration',
            email_u: $('#email_u').val(),
            email_confirm_u: $('#email_confirm_u').val(),
            password_u: $('#password_u').val(),
            username_u: $('#username_u').val(),
            date_day_u: $('#date_day_u').val(),
            date_month_u: $('#date_month_u').val(),
            date_year_u: $('#date_year_u').val(),
            sex_u: $('#sex_u').val()
        }

        let url = "../Controllers/UserController.php";
        $.post(url, data, function(response){
            console.log("Respuesta ->", response);
            if (response == "invalid_email") {
                //
            }
            
            if (response == "") {
                
            }
        });

        e.preventDefault();
    });
});