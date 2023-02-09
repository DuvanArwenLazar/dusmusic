function email_validate(){
    email = document.getElementById("email_u");
    confirm_email = document.getElementById("email_confirm_u");

    if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(email)){
        // 
    }

    if(email.value != confirm_email.value){
        // 
    }
}
