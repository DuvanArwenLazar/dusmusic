// ------------------------------------ Frontend validations and event listeners  ------------------------------------- //

const form = document.getElementById("register-form");
let email = document.getElementById("email_u");
let confirm_email = document.getElementById("email_confirm_u");
const emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

email.addEventListener("keyup", function(){ 
    if(email.value != ""){ document.getElementById("a-1").style.display = "none"; }
    if(email.value == ""){ document.getElementById("a-1").style.display = "block"; } 

    if(emailRegex.test(email.value)) { document.getElementById("a-2").style.display = "none"; } 
    if(!emailRegex.test(email.value)) { document.getElementById("a-2").style.display = "block"; } 
});

confirm_email.addEventListener("keyup", function(){
    if(confirm_email.value != ""){ document.getElementById("a-4").style.display = "none"; }
    if(confirm_email.value == ""){ document.getElementById("a-4").style.display = "block"; } 

    if(email.value == confirm_email.value){ document.getElementById("a-5").style.display = "none"; }
    if(email.value != confirm_email.value){ document.getElementById("a-5").style.display = "block"; }
})

// ---------------------------------------- Ajax & Jquery ------------------------------------------ //

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

            // empty_values
            if (response == "empty_values") {
                document.getElementById("empty").style.display = "block";
                let values = [
                    document.getElementById("email_u"),
                    document.getElementById("email_confirm_u"),
                    document.getElementById("password_u"),
                    document.getElementById("username_u"),
                    document.getElementById("date_day_u"),
                    document.getElementById("date_day_u"),
                    document.getElementById("date_year_u"),
                    document.getElementById("sex_u")
                ]

                values.forEach(e => {
                    if(e.value == ""){
                        e.classList.add("alert-empty");
                    }
                });
            }
            
            // invalid_email
            if (response == "invalid_email") {
                
            }
        });

        e.preventDefault();
        
    });
});