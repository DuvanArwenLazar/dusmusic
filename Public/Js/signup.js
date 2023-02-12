let form = document.getElementById("register-form");
let email = document.getElementById("email_u");
let confirm_email = document.getElementById("email_confirm_u");
const emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

function email_validate(){
    if (emailRegex.test(email.value)) {
        document.getElementById("a-2").style.display = "none";
    } 

    if (!emailRegex.test(email.value)) {
        document.getElementById("a-2").style.display = "block";
    } 
}

function email_empty_validate(){
    if(email.value != ""){
        document.getElementById("a-1").style.display = "none";
    }

    if (email.value == ""){
        document.getElementById("a-1").style.display = "block";
    } 
}

// -------------------------------------------- event listener ---------------------------------------------------- //
